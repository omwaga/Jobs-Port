
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
  <link href="{{ asset('css/button.css') }}" rel="stylesheet">

  
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
    $('#duties').ckeditor();
    $('#edesc').ckeditor();
    $('#summary').ckeditor();
    $('#article-ckeditor').ckeditor();
    $('#editass').ckeditor();
    $('.textarea').ckeditor(); // if class is prefered.
  </script>
</head>

<body>
  <div class="image-container set-full-height" style="background-color: #005691">
    <!--   Creative Tim Branding   -->
    <div class="row">
      <div class="col-sm-6">
        <a href="{{route('jobseekeraccount')}}">
          <div class="logo-container">
            <div class="logo">
              <img src="{{asset('Images/logo/log.png')}}">
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-6" align="right">
        <a class="text-white" href="#"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout<i style="font-size:2.5em;" class="fa fa-sign-out text-danger"></i>
      </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form> 
    </div>
  </div>

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
              <p><i class="text-info fa fa-bell"></i>Tip: A complete profile puts you ahead of other applicants.</p>
              @include('errors')
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
             <li><a href="#references" data-toggle="tab">Referees</a></li>
           </ul>

         </div>

         <div class="tab-content">

          @include('dashboard.wizard.personal-details')
          @include('dashboard.wizard.personal-statement')
          @include('dashboard.wizard.experiences')
          @include('dashboard.wizard.education')
          @include('dashboard.wizard.awards')
          @include('dashboard.wizard.skills')
          @include('dashboard.wizard.references')

        </div>
        <div class="wizard-footer height-wizard">
          <div class="pull-right">
            <input type='button' class='btn btn-next btn-fill btn-danger btn-wd btn-sm' name='next' value='Next' />
            <input type='button' onclick="window.location='{{route('jobseekeraccount')}}'" class='btn btn-finish btn-fill btn-danger btn-wd btn-sm' name='finish' value='Finish' />

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
