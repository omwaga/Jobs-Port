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
    <form method="POST" action="/resume-builder/education" @submit.prevent=onSubmit @keydown="form.errors.clear($event.target.name)">
      @csrf


        <!-- display the errors for the education fields -->
            <span class="help text-danger" v-if="form.errors.has('education_institution')" v-text="form.errors.get('education_institution')"></span>
            <span class="help text-danger" v-if="form.errors.has('education_qualification')" v-text="form.errors.get('education_qualification')"></span>
            <span class="help text-danger" v-if="form.errors.has('education_date')" v-text="form.errors.get('education_date')"></span>
            <span class="help text-danger" v-if="form.errors.has('education_city')" v-text="form.errors.get('education_city')"></span>
            <span class="help text-danger" v-if="form.errors.has('education_description')" v-text="form.errors.get('education_description')"></span>
        <!-- end display the errors for the education fields -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">School/Institution</label>
            <input type="text" name="education_institution" class="form-control form-control-sm" placeholder="Job Title" v-model="form.education_institution">
          </div>
          <div class="form-group">
            <label for="name">Start & End Date</label>
            <input type="text" name="education_date" v-model="form.education_date" class="form-control form-control-sm" placeholder="First Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Degree</label>
            <input type="text" name="education_qualification" v-model="form.education_qualification" class="form-control form-control-sm" placeholder="Degree">
          </div>
          <div class="form-group">
            <label for="name">City</label>
            <input type="text" name="education_city" v-model="form.education_city" class="form-control form-control-sm" placeholder="Last Name">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Description</label>
            <textarea name="education_description" v-model="form.education_description" class="form-control form-control-sm"></textarea>
          </div>
        </div>
      </div>
      <button class="pull-right btn btn-sm text-white" type="submit" :disabled="form.errors.any()"  style="background-color:#0B0B3B;">Save</button>
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

        <div class=""  v-for="experience in experiences">
          <div class="row">
            <div class="col-md-12">
             <label v-text="experience.position"></label> at <label v-text="experience.employer"></label><i class="text-danger fa fa-trash pull-right"></i>
           </div>
           <div class="col-md-12">
             <label v-text="experience.start_date"></label> - 
             <label v-text="experience.end_date"></label>
           </div>
         </div><hr>
       </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Job Title</label>
            <input type="text" name="experience_title" class="form-control form-control-sm" placeholder="Job Title" v-model="experienceform.experience_title">
          </div>
          <div class="form-group">
            <label for="name">Start & End Date</label>
            <input type="text" name="experience_date" class="form-control form-control-sm" placeholder="First Name" v-model="experienceform.experience_date">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Employer</label>
            <input type="text" name="employer" class="form-control form-control-sm" placeholder="Degree" v-model="experienceform.employer">
          </div>
          <div class="form-group">
            <label for="name">City</label>
            <input type="text" name="company_city" class="form-control form-control-sm" placeholder="Last Name" v-model="experienceform.company_city">
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
            @foreach($education as $educated)
            <education description="The education description goes here" qualification="{{$educated->qualification}}" institution="{{$educated->institution}}"></education>
            @endforeach
          </div>
          <div class="clear"></div>
        </section>


        <section>
          <div class="sectionTitle">
            <h1>Work Experience</h1>
          </div>
          <div class="sectionContent">
            @foreach($experience as $experienced)
            <experience position="{{$experienced->position}}" company="{{$experienced->position}}" duration="duration" description="description"></experience>
            @endforeach
          </div>
          <div class="clear"></div>
        </section>

        <section>
          <div class="sectionTitle">
            <h1>Key Skills</h1>
          </div>

          <div class="sectionContent">
            <ul class="keySkills">
              @foreach($skills as $skill)
              <skills skill="{{$skill}}"></skills>
              @endforeach
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