@extends('layouts.dashboard')
@section('content')
<div class="dashboard-wrapper">
  <div class="container">
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid no-repeat" style="background-color:#2B3856; background-image:url('{{asset('Images/cv2.jpg')}}');">

            <!-- Overlay -->
            <!-- Content -->
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-7 ">
                        <div class="banner-content"  align="center">
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
                                Know where your Resume stands
                            </p>
                            <div class="btn-group">
                                <a href="#" class="btn btn-secondary text-white " style="background-color:#070A53;">
                                    Resumes<br>
                                    <small>For Students/Intermediate</small>
                                </a>
                                <a href="#" class="btn btn-secondary text-white ">
                                    CVs<br>
                                    <small>For Professionals</small>
                                </a>
                                <a href="#" class="btn btn-secondary text-white ">
                                    Cover Letters<br>
                                    <small>All Levels of experience</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>

        <section class="fdb-block">
          <div class="container mt-10 mb-10">
            <h4 style="color:#0B0B3B;" class="text-center"><strong>The Right Resume, For the Right Job</strong></h4>
            <div class="row mt-30">
              @foreach($samples as $sample)
              <div class="col-md-3 col-sm-6" align="center">
                  <a class="btn btn-info btn-sm text-white" href="{{route('customizeresume')}}"><i class="fas fa-eye"></i>
                  </a>
                  <div class="box21">
                    <div class="box-content">
                        <h4 class="title">{{$sample->name}}</h4>
                        <p class="text-white">{!!$sample->description!!}</p>
                        @guest
                        <a class="read-more" href="{{route('customizeresume')}}" data-toggle="modal" data-title="" data-caption="" data-target="#login-overlay">Get Started</a>
                        @else
                        <a class="read-more" href="#">Get Started</a>
                        @endguest
                    </div>
                </div>
            </div>
            @include('jobseeker-dashboard.view-resumetemplatemodal')
            @endforeach
        </div>
    </div>
</section>
@include('front.register-useroptions')
@endsection