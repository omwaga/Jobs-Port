class Errors {
    /**
     * Create a new Errors instance.
     */
     constructor() {
      this.errors = {};
    }


    /**
     * Determine if an errors exists for the given field.
     *
     * @param {string} field
     */
     has(field) {
      return this.errors.hasOwnProperty(field);
    }


    /**
     * Determine if we have any errors.
     */
     any() {
      return Object.keys(this.errors).length > 0;
    }


    /**
     * Retrieve the error message for a field.
     *
     * @param {string} field
     */
     get(field) {
      if (this.errors[field]) {
        return this.errors[field][0];
      }
    }


    /**
     * Record the new errors.
     *
     * @param {object} errors
     */
     record(errors) {
      this.errors = errors;
    }


    /**
     * Clear one or all error fields.
     *
     * @param {string|null} field
     */
     clear(field) {
      if (field) {
        delete this.errors[field];

        return;
      }

      this.errors = {};
    }
  }


  class Form {
    /**
     * Create a new Form instance.
     *
     * @param {object} data
     */
     constructor(data) {
      this.originalData = data;

      for (let field in data) {
        this[field] = data[field];
      }

      this.errors = new Errors();
    }


    /**
     * Fetch all relevant data for the form.
     */
     data() {
      let data = {};

      for (let property in this.originalData) {
        data[property] = this[property];
      }

      return data;
    }


    /**
     * Reset the form fields.
     */
     reset() {
      for (let field in this.originalData) {
        this[field] = '';
      }

      this.errors.clear();
    }


    /**
     * Send a POST request to the given URL.
     * .
     * @param {string} url
     */
     post(url) {
      return this.submit('post', url);
    }


    /**
     * Send a PUT request to the given URL.
     * .
     * @param {string} url
     */
     put(url) {
      return this.submit('put', url);
    }


    /**
     * Send a PATCH request to the given URL.
     * .
     * @param {string} url
     */
     patch(url) {
      return this.submit('patch', url);
    }


    /**
     * Send a DELETE request to the given URL.
     * .
     * @param {string} url
     */
     delete(url) {
      return this.submit('delete', url);
    }


    /**
     * Submit the form.
     *
     * @param {string} requestType
     * @param {string} url
     */
     submit(requestType, url) {
      return new Promise((resolve, reject) => {
        axios[requestType](url, this.data())
        .then(response => {
          this.onSuccess(response.data);

          resolve(response.data);
        })
        .catch(error => {
          this.onFail(error.response.data.errors);

          reject(error.response.data);
        });
      });
    }


    /**
     * Handle a successful form submission.
     *
     * @param {object} data
     */
     onSuccess(data) {
        alert(data.message); // temporary

        this.reset();
      }


    /**
     * Handle a failed form submission.
     *
     * @param {object} errors
     */
     onFail(errors) {
      this.errors.record(errors);
    }
  }

  new Vue({
    el:'#root',

    data: {

      job_title:'',
      first_name:'',
      last_name:'',
      email:'',
      phone:'',
      career_summary:'',

      experiences:[],
      educations:[],
      skills:[],

      form: new Form({
        education_institution:'',
        education_qualification:'',
        education_date:'',
        education_city:'',
        education_description:''
      }),

      experienceform: new Form({
        experience_title:'',
        experience_date:'',
        employer:'',
        company_city:'',
        experience_description:'',
      }) ,

      skillform: new Form({
        skill_name:'',
        expertise_level:''
      }) 
    },

    mounted(){
      axios.get('/resume-builder/experiences').then(response => this.experiences = response.data);
      axios.get('/resume-builder/educations').then(response => this.educations = response.data);
      axios.get('/resume-builder/skill').then(response => this.skills = response.data);
    },

     /**
     * Send a POST request for the educations.
     */
    methods: {
      onSubmit() {
        this.form.post('/resume-builder/education')
        .then(response => alert('Wahoo!'));
      },

     /**
     * Send a POST request for the experiences.
     */
     experienceSubmit() {
      this.experienceform.post('/resume-builder/experience')
      .then(response => alert('Wahoo!'));
    },

     /**
     * Send a POST request for the skills.
     */
     skillSubmit() {
      this.skillform.post('/resume-builder/skills')
      .then(response => alert('Wahoo!'));
    },

    addName()
      {
        this.experiences.push({ 
          "id": 5, 
          "user_id": 440, 
          "employer": this.experienceform.employer, 
          "position": this.experienceform.experience_title, 
          "current_employer": null, 
          "roles": "<p>a Lipa, </p>", 
          "start_date": "2020-03-11", 
          "end_date": "2020-03-10", 
          "created_at": "2020-03-25 05:58:12", 
          "updated_at": "2020-03-25 05:58:12" 
        });
        
      },

    addEducation()
      {
        this.educations.push({ 
          "id": 5, 
          "user_id": 440, 
          "qualification": this.form.education_qualification, 
          "institution": this.form.education_institution, 
          "level": "level here", 
          "score": "some score", 
          "start_date": "2020-03-11", 
          "grad_date": "2020-03-10", 
          "created_at": "2020-03-25 05:58:12", 
          "updated_at": "2020-03-25 05:58:12" 
        });
        
      },

    addSkill()
      {
        this.skills.push({ 
          "id": 5, 
          "user_id": 440, 
          "skillname": this.skillform.skill_name,  
          "level": this.skillform.expertise_level,
          "created_at": "2020-03-25 05:58:12", 
          "updated_at": "2020-03-25 05:58:12" 
        });
        
      }
  }
})