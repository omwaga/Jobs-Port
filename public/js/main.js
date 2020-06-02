Vue.component('experience',{
  props:['duration', 'position', 'company', 'description'],

  template:'<article><h2>{{position}} at {{company}}</h2><p class="subDetails">{{duration}}</p><p>{{description}}</p></article>'
});

Vue.component('skills',{
  props:['skill'],

  template:'<li>{{skill}}</li>'
});

Vue.component('education',{
  props:['description', 'institution', 'qualification'],

  template:'<article><h2>{{institution}}</h2><p class="subDetails">{{qualification}}</p><p>{{description}}</p></article>'
});

new Vue({
  el:'#root',
  data:{
    job_title:'',
    first_name:'',
    last_name:'',
    email:'',
    phone:'',
    career_summary:''
  }
})