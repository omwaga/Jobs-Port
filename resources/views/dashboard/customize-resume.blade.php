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
        <h4 align="center" style="color:#0B0B3B;"> Education </h4>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">School/Institution</label>
              <input type="text" name="institution" class="form-control form-control-sm" placeholder="Job Title" required="">
            </div>
            <div class="form-group">
              <label for="name">Start & End Date</label>
              <input type="text" name="start_date" class="form-control form-control-sm" placeholder="First Name" required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Degree</label>
              <input type="text" name="degree" class="form-control form-control-sm" placeholder="Degree" required="">
            </div>
            <div class="form-group">
              <label for="name">City</label>
              <input type="text" name="city" class="form-control form-control-sm" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="ckeditor form-control form-control-sm"></textarea>
            </div>
          </div>
        </div>
        <h4 align="center" style="color:#0B0B3B;"> Experience </h4>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Job Title</label>
              <input type="text" name="job_title" class="form-control form-control-sm" placeholder="Job Title" required="">
            </div>
            <div class="form-group">
              <label for="name">Start & End Date</label>
              <input type="text" name="start_date" class="form-control form-control-sm" placeholder="First Name" required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Employer</label>
              <input type="text" name="employer" class="form-control form-control-sm" placeholder="Degree" required="">
            </div>
            <div class="form-group">
              <label for="name">City</label>
              <input type="text" name="company_city" class="form-control form-control-sm" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="ckeditor form-control form-control-sm"></textarea>
            </div>
          </div>
        </div>
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
              <profile profile="career_summary"></profile>
              <div class="clear"></div>
            </section>


            <section>
              <div class="sectionTitle">
                <h1>Work Experience</h1>
              </div>
              <div class="sectionContent">
              <experience position="position" company="company" duration="duration" description="description"></experience>
            </div>
            <div class="clear"></div>
          </section>

          <section>
            <div class="sectionTitle">
              <h1>Education</h1>
            </div>

            <div class="sectionContent">
              <education description="Education description" qualification="Qualification" institution="institution name"></education>
            </div>
            <div class="clear"></div>
          </section>

          <section>
            <div class="sectionTitle">
              <h1>Key Skills</h1>
            </div>

            <div class="sectionContent">
              <skills skill="{{$skills}}"></skills>
            </div>
            <div class="clear"></div>
          </section>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection