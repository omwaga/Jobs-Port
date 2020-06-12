@section('title') Customize Resume @endsection
@extends('layouts.resume-app')
@section('content')
<div class="container-fluid" style="padding-top: 6rem;">
  <div class="row" id="root">
    <div class="col-md-4">
      <h4 align="center" style="color:#0B0B3B;"> Personal Details </h4>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Job Title</label>
            <input type="text" class="form-control form-control-sm" name="" id="input" v-model="job_title">
          </div>
          <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="first_name" class="form-control form-control-sm" v-model="first_name" placeholder="First Name" required="">
          </div>
          <div class="form-group">
            <label for="name">Email Address</label>
            <input type="text" v-model="email" name="email" class="form-control form-control-sm" placeholder="Email Address" required="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Photo</label>
            <input type="file" name="photo" required="">
          </div>
          <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" name="last_name" class="form-control form-control-sm" placeholder="Last Name" required="" v-model="last_name">
          </div>
          <div class="form-group">
            <label for="name">Phone Number</label>
            <input type="text" name="phone_number" class="form-control form-control-sm" placeholder="Phone Number" required="" v-model="phone">
          </div>
        </div>
      </div>

      <!-- additional details section -->
      <div class="accordion" id="accordionExample">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <b><i class="fa fa-edit"></i> Additional Details</b>
          </button>
        </h5>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Country</label>
              <input type="text" name="country" class="form-control form-control-sm" placeholder="Country" required="">
            </div>
            <div class="form-group">
              <label for="name">Address</label>
              <input type="text" name="address" class="form-control form-control-sm" placeholder="Address" required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">City</label>
              <input type="text" name="city" class="form-control form-control-sm"placeholder="City" required="">
            </div>
            <div class="form-group">
              <label for="name">Postal Code</label>
              <input type="text" name="postal_code" class="form-control form-control-sm" placeholder="Postal Code" required="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end additional details section -->

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Professional Summary</label>
          <textarea name="description"  class="form-control form-control-sm" v-model="career_summary"></textarea>
        </div>
      </div>
    </div>

    <!-- Education form -->
    <h4 align="center" style="color:#0B0B3B;"> Education </h4>
    @include('resume-builder/update-education')
    <form method="POST" action="/resume-builder/education" @submit.prevent=onSubmit @keydown="form.errors.clear($event.target.name)">
      @csrf 
    @include('resume-builder/errors/education-errors')
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">School/Institution</label>
            <input type="text" name="education_institution" class="form-control form-control-sm" placeholder="Institution" v-model="form.education_institution">
          </div>
          <div class="form-group">
            <label for="name">Start Date</label>
            <input type="date" name="start_date" v-model="form.start_date" class="form-control form-control-sm">
          </div>
          <div class="form-group">
            <label for="name">Graduation Date</label>
            <input type="date" name="grad_date" v-model="form.grad_date" class="form-control form-control-sm">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Qualification/Degree</label>
            <input type="text" name="education_qualification" v-model="form.education_qualification" class="form-control form-control-sm" placeholder="Degree">
          </div>
          <div class="form-group">
            <label for="name">Level</label>
            <input type="text" name="level" v-model="form.level" class="form-control form-control-sm" placeholder="Education Level">
          </div>
          <div class="form-group">
            <label for="name">Score</label>
            <input type="text" name="score" v-model="form.score" class="form-control form-control-sm" placeholder="Score">
          </div>
        </div>
      </div>
      <button class="pull-right btn btn-sm text-white" type="submit" :disabled="form.errors.any()"  style="background-color:#0B0B3B;"  @click="addEducation">Save</button>
    </form><br>


    <h4 align="center" style="color:#0B0B3B;"> Experience </h4>
    <form  method="POST" action="/resume-builder/experience" @submit.prevent="experienceSubmit" @keydown="experienceform.errors.clear($event.target.name)">
      @csrf

      <!-- display the errors for the experience fields -->
      <span class="help text-danger" v-if="experienceform.errors.has('experience_title')" v-text="experienceform.errors.get('experience_title')"></span>
      <span class="help text-danger" v-if="experienceform.errors.has('experience_date')" v-text="experienceform.errors.get('experience_date')"></span>
      <span class="help text-danger" v-if="experienceform.errors.has('employer')" v-text="experienceform.errors.get('employer')"></span>
      <span class="help text-danger" v-if="experienceform.errors.has('company_city')" v-text="experienceform.errors.get('company_city')"></span>
      <span class="help text-danger" v-if="experienceform.errors.has('experience_description')" v-text="experienceform.errors.get('experience_description')"></span>
      <!-- end display the errors for the experience fields -->


      <!-- vue component for the experience details -->
      <div class="accordion" id="accordionExample">
        <div class="card" v-for="(experience, index) in experiences">
          <h5 class="mb-0">
            <button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" :href="'#experience-'+index" aria-expanded="false" aria-controls="collapseThree">
              <h6>@{{experience.position}} at @{{experience.employer}}</h6><i class="fa fa-edit pull-right"></i>
            </button>
          </h5>
          <div :id="'experience-'+index" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">

              <div class="row">
                <div class="col-md-12">
                 <label v-text="experience.position"></label> at <label v-text="experience.employer"></label><a href=""><i class="text-danger fa fa-trash pull-right"></i></a>
               </div>
               <div class="col-md-12">
                 <label v-text="experience.start_date"></label> - 
                 <label v-text="experience.end_date"></label>
               </div>
             </div><hr>
           </div>
         </div>
       </div>
     </div>

     <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="name">Job Title</label>
          <input type="text" name="experience_title" class="form-control form-control-sm" placeholder="Job Title" v-model="experienceform.experience_title">
        </div>
        <div class="form-group">
          <label for="name">Start & End Date</label>
          <input type="text" name="experience_date" class="form-control form-control-sm" placeholder="Dates" v-model="experienceform.experience_date">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="name">Employer</label>
          <input type="text" name="employer" class="form-control form-control-sm" placeholder="Employer" v-model="experienceform.employer">
        </div>
        <div class="form-group">
          <label for="name">City</label>
          <input type="text" name="company_city" class="form-control form-control-sm" placeholder="City" v-model="experienceform.company_city">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Description</label>
          <textarea name="experience_description" v-model="experienceform.experience_description" class="form-control form-control-sm"></textarea>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-sm text-white pull-right" :disabled="experienceform.errors.any()" style="background-color:#0B0B3B;" @click="addName">
      Save
    </button>
  </form>

  <h4 align="center" style="color:#0B0B3B;"> Skills </h4>

  <!-- vue component for the skills details -->
  <div class="accordion" id="accordionExample">
    <div class="card" v-for="(skill, index) in skills">
      <h5 class="mb-0">
        <button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" :href="'#skill-'+index" aria-expanded="false" aria-controls="collapseThree">
          <h6>@{{skill.skillname}}</h6><i class="fa fa-edit pull-right"></i>
        </button>
      </h5>
      <div :id="'skill-'+index" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">

          <div class="row">
            <div class="col-md-12">
             <label v-text="skill.skillname"></label><a href=""><i class="text-danger fa fa-trash pull-right"></i></a>
           </div>
           <div class="col-md-12">
             <label v-text="skill.level"></label>
           </div>
         </div><hr>
       </div>
     </div>
   </div>
 </div>

 <form  method="POST" action="/resume-builder/skills" @submit.prevent="skillSubmit" @keydown="skillform.errors.clear($event.target.name)">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="name">Skill Name</label>
        <input type="text" name="skill_name" class="form-control form-control-sm" placeholder="Skill Name" v-model="skillform.skill_name">

        <span class="help text-danger" v-if="skillform.errors.has('skill_name')" v-text="skillform.errors.get('skill_name')"></span>
      </div>
      <div class="form-group">
        <label for="name">Expertise Level</label>
        <input type="text" name="expertise_level" class="form-control form-control-sm" placeholder="Expertise" v-model="skillform.expertise_level">

        <span class="help text-danger" v-if="skillform.errors.has('expertise_level')" v-text="skillform.errors.get('expertise_level')"></span>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-sm text-white pull-right" :disabled="skillform.errors.any()" style="background-color:#0B0B3B;" @click="addSkill">
    Save
  </button>
</form>
</div>
<div class="col-md-8">
  <div id="cv" class="instaFade">
    <div class="mainDetails">
      <div id="headshot" class="quickFade">
        <img src="resume/images/profile.png" alt="Profile Pic" />
      </div>

      <div id="name">
        <h4 class="quickFade delayTwo" id="full_name">@{{first_name}} @{{last_name}}</h4>
        <h2 class="quickFade delayThree" id="position">@{{job_title}}</h2>
      </div>

      <div id="contactDetails" class="quickFade delayFour">
        <ul>
          <li>e: <a href="" target="_blank" id="email">@{{email}}</a></li>
          <li>w: <a>@{{job_title}}</a></li>
          <li id="phone">m: @{{phone}}</li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayFive">
      <section>
        <article><div class=""><p >@{{career_summary}}</p></div></article>
        <div class="clear"></div>
      </section>



      <section>
        <div class="sectionTitle">
          <h1>Education</h1>
        </div>

        <div class="sectionContent">
          <article v-for="education in educations">
            <h4 v-text="education.institution"></h4> 
            <p class="subDetails" v-text="education.qualification"></p>
            <p>description here</p></article>
          </div>
          <div class="clear"></div>
        </section>


        <section>
          <div class="sectionTitle">
            <h1>Work Experience</h1>
          </div>
          <div class="sectionContent">
            <article v-for="experience in experiences">
              <h4> @{{experience.position}} at @{{experience.employer}}</h4>
              <p class="subDetails"></p>
              <p>description here</p>
            </article>
          </div>
          <div class="clear"></div>
        </section>

        <section>
          <div class="sectionTitle">
            <h1>Key Skills</h1>
          </div>

          <div class="sectionContent">
            <ul class="keySkills" v-for="skill in skills">
             <li v-text="skill.skillname"></li> <span v-text="skill.level"></span>
           </ul>
         </div>
         <div class="clear"></div>
       </section>

     </div>
   </div>
 </div>
</div>
</div>

@endsection