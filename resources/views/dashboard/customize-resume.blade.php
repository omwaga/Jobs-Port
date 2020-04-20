@section('title') Customize Resume @endsection
@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">
    <div class="row">
        <div class="col-md-4">
          <h4 align="center" style="color:#0B0B3B;"> Personal Details </h4>
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Job Title</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Job Title" required="">
              </div>
              <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="First Name" required="">
              </div>
              <div class="form-group">
                  <label for="name">Email Address</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Email Address" required="">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Photo</label>
              <input type="file" name="full_name" id="name" required="">
          </div>
          <div class="form-group">
              <label for="name">Last Name</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Last Name" required="">
          </div>
          <div class="form-group">
              <label for="name">Phone Number</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Phone Number" required="">
          </div>
      </div>
  </div>
  <div class="accordion" id="accordionExample">
      <!-- <div class="card"> -->
        <!-- <div class="card-header" id="headingTwo"> -->
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <b><i class="fa fa-edit"></i> Additional Details</b>
          </button>
      </h5>
      <!-- </div> -->
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="name">Country</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Country" required="">
          </div>
          <div class="form-group">
              <label for="name">Address</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Address" required="">
          </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
          <label for="name">City</label>
          <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="City" required="">
      </div>
      <div class="form-group">
          <label for="name">Postal Code</label>
          <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Postal Code" required="">
      </div>
  </div>
</div>
</div>
<!-- </div> -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Professional Summary</label>
            <textarea name="description" class="ckeditor form-control form-control-sm"></textarea>
        </div>
    </div>
</div>
          <h4 align="center" style="color:#0B0B3B;"> Education </h4>
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">School/Institution</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Job Title" required="">
              </div>
              <div class="form-group">
                  <label for="name">Start & End Date</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="First Name" required="">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Degree</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Degree" required="">
          </div>
          <div class="form-group">
              <label for="name">City</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Last Name" required="">
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
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Job Title" required="">
              </div>
              <div class="form-group">
                  <label for="name">Start & End Date</label>
                  <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="First Name" required="">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Employer</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Degree" required="">
          </div>
          <div class="form-group">
              <label for="name">City</label>
              <input type="text" name="full_name" class="form-control form-control-sm" id="name" placeholder="Last Name" required="">
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
                <h1 class="quickFade delayTwo" id="full_name">Joe Doe</h1>
                <h2 class="quickFade delayThree" id="position">Job Title</h2>
            </div>

            <div id="contactDetails" class="quickFade delayFour">
                <ul>
                    <li>e: <a href="mailto:joe@bloggs.com" target="_blank" id="email">{{auth()->user()->email}}</a></li>
                    <li>w: <a href="http://www.bloggs.com">www.bloggs.com</a></li>
                    <li id="phone">m: {{$personalinfo->phone ?? 'Empty'}}</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div id="mainArea" class="quickFade delayFive">
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>Personal Profile</h1>
                    </div>

                    <div class="sectionContent">
                        <p id="career" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">{{$personalstatements->statement ?? ''}}</p>
                    </div>
                </article>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Work Experience</h1>
                </div>
                <div class="sectionContent">
                    @if($experience->count() > 0)
                    <span class="badge">1</span> 
                    <a id="username"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add experience: </a>
                </td>
                @php $number = 0 @endphp
                @foreach($experience as $experienced)
                @php $number = $number + 1 @endphp
                <article>
                    <h2 id="position{{$number}}" data-type="textarea" data-pk="1" data-placeholder="Your details here..." data-title="Job Position" class="editable editable-pre-wrapped editable-click">Job Title at Company</h2>
                    <p class="subDetails">April 2011 - Present</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                @endforeach
                @else
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">April 2011 - Present</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                @endif
            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    @if($skills->count() > 0)
                    @php $skill_number = 0 @endphp
                    @foreach($skills as $skill)
                    @php $skill_number = $skill_number +1 @endphp 
                    <li id="skill{{$skill_number}}">A Key Skill</li>
                    @endforeach
                    @else
                    <li>A Key Skill</li>
                    @endif
                </ul>
            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>

            <div class="sectionContent">
                @if($education->count() > 0)
                @php $education_number = 0;
                $course = 0 @endphp
                @foreach($education as $educated)
                @php $education_number = $education_number + 1; 
                $course = $course + 1@endphp
                <article>
                    <h2 id="course{{$course}}">{{$educated->institution}}</h2>
                    <p class="subDetails" id="education{{$education_number}}">{{$educated->qualification}}</p>
                    <p id="start{{$education_number}}">{{$educated->start_date}} - {{$educated->grad_date}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article><!--//item-->
                @endforeach
                @else
                <article>
                    <h2>College/University</h2>
                    <p class="subDetails">Qualification</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article>
                @endif
            </div>
            <div class="clear"></div>
        </section>

    </div>
</div>
</div>
</div>
</div>
@endsection