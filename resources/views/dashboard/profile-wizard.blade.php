
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Jobseeker Profile Builder</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
</head>

<body>
  <div class="image-container set-full-height" style="background-color: #005691">
    <!--   Creative Tim Branding   -->
    <a href="#">
     <div class="logo-container">
      <div class="logo">
        <img src="{{asset('Images/logo/log.png')}}">
      </div>
    </div>
  </a>

  <!--   Big container   -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <!--      Wizard container        -->
        <div class="wizard-container">

          <div class="card wizard-card" data-color="red" id="wizardProfile">
            <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

            <div class="wizard-header">
             <h3>
              <b>BUILD</b> YOUR PROFILE <br>
              <small>This information will let the Employers know more about you.</small>
            </h3>
          </div>

          <div class="wizard-navigation">
           <ul>
             <li><a href="#personalinfo" data-toggle="tab">Basic Information</a></li>
             <li><a href="#account" data-toggle="tab">Career Objective</a></li>
             <li><a href="#address" data-toggle="tab">Experience</a></li>
             <li><a href="#education" data-toggle="tab">Education</a></li>
             <li><a href="#awards" data-toggle="tab">Awards/Certifications</a></li>
             <li><a href="#skills" data-toggle="tab">Skills</a></li>
             <li><a href="#references" data-toggle="tab">References</a></li>
           </ul>

         </div>

         <div class="tab-content">
          @include('dashboard.wizard.personal-details')
          @include('dashboard.wizard.personal-statement')



          <div class="tab-pane" id="address">
            <div class="row">
              @forelse($experience as $experienced)
              <div class="col-md-6 profile-text">
                <label><strong>Employer:</strong> {{$experienced->employer}}</label><br>
                <label><strong>Position:</strong> {{$experienced->position}}</label><br>
              </div>
              <div class="col-md-6 profile-text">
                <label><strong>Stat Date:</strong> {{$experienced->start_date}}</label><br>
                <label><strong>End Date:</strong> {{$experienced->current_employer ?? $experienced->end_date}}</label>

                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
                  data-toggle="modal" data-target="#experience-{{$experienced->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                </div>
                <div class="col-md-12">
                  <h6><b>Duties and Responsibilities</b></h6>
                  <p>{!!$experienced->roles!!}</p>
                </div><br>
                @empty
                <form method="POST" action="#">
                  <div class="col-md-3">
                    <label>Employer:</label>
                    <input type="text" class="form-control" name="employer" placeholder="Organization" required autofocus style="border-radius:0px;">
                  </div>
                  <div class="col-md-3">
                    <label>Position:</label>
                    <input type="text" class="form-control" name="position" placeholder="Job Position" required autofocus style="border-radius:0px;">
                  </div>
                  <div class="col-md-3">
                    <label>Employment Start Date:</label>
                    <div class="input-group date">
                      <input type="date" name="start_date" class="form-control">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Employment End Date:</label>
                    <div class="input-group date">
                      <input type="date" name="end_date" class="form-control">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="hidden" name="current_employer" value="" id="defaultCheck1">
                      <input class="form-check-input" type="checkbox" name="current_employer" value="current employer" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Current Employer
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label>Achievements and Responsibilities:</label>
                    <textarea name="roles" class="form-control ckeditor" id="duties" required autofocus rows="3"style="border-radius:0px;"></textarea>    
                  </div>

                  <div class="col-md-12">
                    <button type="submit" class="btn btn-danger pull-right">Save</button>   
                  </div>
                </form>
                @endforelse
              </div>
            </div>

            <!-- education section -->
            <div class="tab-pane" id="education">
              <div class="row">
                @forelse($education as $educated)
                <div class="col-md-6">
                  <label><strong>Institution Name:</strong> {{$educated->institution}}</label><br>
                  <label><strong>Name of Course Studied:</strong> {{$educated->qualification}}</label><br>
                  <label><strong>Education Level:</strong> {{$educated->level}}</label><br>
                  <label><strong>Attained Score:</strong>{{$educated->score}}</label>
                </div>
                <div class="col-md-6">
                  <label><strong>Start Date:</strong> {{$educated->start_date}}</label><br>
                  <label><strong>Graduation Date:</strong> {{$educated->grad_date}}</label><br>

                  <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
                    data-toggle="modal" data-target="#editeducation-{{$educated->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                  </div>
                  @empty
                  <form method="POST" action="">
                    @csrf
                    <div class="col-md-4">
                      <label>Institution Name:</label>
                      <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
                    </div>
                    <div class="col-md-4">
                     <label>Name of Course Studied:</label>
                     <input type="text" class="form-control" name="qualification" placeholder="Bsc. Computer Science" required autofocus style="border-radius:0px;">
                   </div>

                   <div class="col-md-4">
                    <label>Education Level:</label>
                    <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
                     <option>Select Education Level</option>
                     <option>Certificate</option>
                     <option>Diploma</option>
                     <option>Degree</option>
                     <option>Masters</option>
                   </select>
                 </div>

                 <div class="col-md-4">
                   <label>Start Date:</label>
                   <div class="input-group date">
                    <input type="date" name="start_date" class="form-control">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="margin-left:10px;">
                 <label>Graduation Date:</label>
                 <div class="input-group date">
                  <input type="date" name="grad_date" class="form-control">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
              </div>

              <div class="col-md-4" style="margin-left:40px;">
                <label>Attained Score:<br>
                  <small>For example: First Class Honors</small></label>
                  <input type="text" class="form-control" name="score" autofocus style="border-radius:0px;">
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn btn-danger pull-right">Save</button>   
                </div>
              </form>
              @endforelse
            </div>
          </div>
          <!-- end education section -->


          <div class="tab-pane" id="awards">
            <div class="row">
              @forelse($awards as $award)
              <div class="col-md-6 profile-text">
                <label><strong>Award Name:</strong> {{$award->name}}</label><br>
                <label><strong>Institution:</strong> {{$award->institution}}</label><br>
              </div>
              <div class="col-md-6 profile-text">
                <label><strong>Award Date:</strong> {{$award->award_date}}</label><br>
                <label><strong>Description:</strong> {!!$award->description!!}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal"
                  data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                  
                  @include('dashboard.newaward')
                  @include('dashboard.editaward')

                </div>
                @empty
                <form method="" action="">
                  <div class="col-md-4">
                    <label>Award Name:</label>
                    <input type="text" class="form-control" name="name" required autofocus style="border-radius:0px;">
                  </div>
                  <div class="col-md-4">
                   <label>Institution:</label>
                   <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
                 </div>

                 <div class="col-md-4">
                   <label>Award/Qualification Date:</label>
                   <div class="input-group date">
                    <input type="date" name="award_date" class="form-control">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <label>Description:</label>
                  <textarea name="description" class="form-control ckeditor" id="award" required autofocus rows="3"style="border-radius:0px;"></textarea> 
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn btn-danger pull-right">Save</button>   
                </div>
              </form>
              @endforelse
            </div>
          </div>


          <div class="tab-pane" id="skills">
            <div class="row">
              @forelse($skills as $skill)
              <div class="col-md-12 profile-text">
                <label><strong>Skill Name:</strong> {{$skill->skillname}}</label><br>
                <label><strong>Expertise Level:</strong> {{$skill->level}}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                  data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                  
                  @include('dashboard.newskill')
                  @include('dashboard.editskill')

                </div>
                @empty
                <form method="post" action="">
                  @csrf
                  <div class="col-md-6">
                    <label>Skill Name:</label>
                    <input name="skillname" type="text" class="form-control" required autofocus > 
                  </div>
                  <div class="col-md-6">
                    <label>Expertise Level:</label>
                    <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
                     <option>Select Skill Level</option>
                     <option>Beginner</option>
                     <option>Intermediate</option>
                     <option>Expert</option>
                   </select>
                 </div>
                 <div class="col-md-12">
                  <button type="submit" class="btn btn-danger pull-right">Save</button>   
                </div>
              </form>
              @endforelse
            </div>
          </div>


          <div class="tab-pane" id="references">
            <div class="row">
              @forelse($references as $reference)
              <div class="col-md-6 profile-text">
                <label><strong>Name:</strong> {{$reference->name}}</label><br>
                <label><strong>Email:</strong> {{$reference->email}}</label><br>
                <label><strong>Phone Number:</strong> {{$reference->phone}}</label><br>
              </div>
              <div class="col-md-6 profile-text">
                <label><strong>Organization:</strong> {{$reference->organization}}</label><br>
                <label><strong>Position:</strong> {{$reference->position}}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                  data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                  
                  @include('dashboard.newreference')
                  @include('dashboard.editreference')

                </div>
                @empty
                <form method="" action="">
                  <div class="col-lg-4">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" required autofocus placeholder="Full Name" style="border-radius:0px;">
                  </div>
                  <div class="col-lg-4">
                   <label>Title:</label>
                   <input type="text" name="position" class="form-control" required autofocus placeholder="Title" style="border-radius:0px;">
                 </div>
                 <div class="col-lg-4">
                  <label>Phone Number:</label>
                  <input type="tel" class="form-control" name="phone" required autofocus placeholder="Phone Number"style="border-radius:0px;">
                </div>

                <div class="col-lg-4">
                  <label>Email address:</label>
                  <input type="email" name="email" class="form-control" required autofocus placeholder="Email Address"style="border-radius:0px;">
                </div>
                <div class="col-lg-4">
                  <label>Organization:</label>
                  <input type="text" name="organization" class="form-control" required autofocus placeholder=" Organization" style="border-radius:0px;">
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn btn-danger pull-right">Save</button>   
                </div>
              </form>
              @endforelse
            </div>
          </div>

        </div>
        <div class="wizard-footer height-wizard">
          <div class="pull-right">
            <input type='button' class='btn btn-next btn-fill btn-danger btn-wd btn-sm' name='next' value='Next' />
            <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd btn-sm' name='finish' value='Finish' />

          </div>

          <div class="pull-left">
            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div> <!-- wizard container -->
  </div>
</div><!-- end row -->
</div> <!--  big container -->

<div class="footer">
  <div class="container">

  </div>
</div>

</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>

</html>
