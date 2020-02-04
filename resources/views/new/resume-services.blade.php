
@extends('layouts.app')
@section('content')
<br>
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid no-repeat" style="background-color:#2B3856; background-image:url('{{asset('Images/cv2.jpg')}}');">

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Preheading -->
                        <p class="text-white text-uppercase text-center text-xs">
                          <span><strong>Get a job-winning professional resume from our experts</strong></span>
                        </p>

                        <!-- Heading -->
                        <!--<h6 class="text-dark text-center mb-4 display-4 font-weight-bold">-->
                        <!--    Get a job-winning professional resume from our experts-->
                        <!--</h6>-->

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                            Grab Employers' attention in an innovative & smart way with a professionally written Resume
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="{{route('resumesamples')}}" class="btn text-white" style="background-color:#070A53;">
                                Browse Resume Samples
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

<section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h4 style="color:#0B0B3B;"><strong>The Right Resume, For the Right Job</strong></h4>
        <span>Grab Employers' attention in an innovative & smart way with a professionally written Resume</span>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col-12 col-sm-3">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/512px-Gift_Flat_Icon_Vector.svg.png')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For Freshers</strong></h5>
        <p>Experience(0-1 Year)</p>
      </div>

      <div class="col-12 col-sm-3 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/clouds.svg')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For New Professionals</strong></h5>
        <p>Experience(1-4 Years)</p>
        <ul>
            <p>Set yourself apart from the crowd
             with a resume that defines your:</p>
         <li> Education</li>
         <li> Professional skills & strengths</li>
         <li> Key Achievements</li>
         <li> Areas of exposure</li>
        </ul>
      </div>

      <div class="col-12 col-sm-3 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/layer.svg')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For Mid-Career</strong></h5>
        <p>Experience(4-8 Years)<br> 
           Target your resume for specific
           jobs. Demonstrate your:</p>
        <ul>
            <li>Managerial Skills</li>
            <li>Management skills</li>
            <li>Achievements & accolades</li>
            <li>Professional skills</li>
        </ul>
      </div>
      
      <div class="col-12 col-sm-3 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/expert.png')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For Senior Management</strong></h5>
        <p>Experience(Over 8 Years) <br> Get your resume tailored to your
        unique job needs. Highlight your:</p>
        <ul>
            <li>Leadership qualities</li>
            <li>Extensive work history</li>
            <li>Professional Competence</li>
            <li>Accomplishments & Accolades</li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
