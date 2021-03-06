
@extends('layouts.app')
@section('content')
<br>
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
                            <a href="{{route('resumesamples')}}" class="btn btn-secondary text-white ">
                                Resumes<br>
                                <small>For Students/Intermediate</small>
                            </a>
                            <a href="{{route('cv')}}" class="btn btn-secondary text-white ">
                                CVs<br>
                                <small>For Professionals</small>
                            </a>
                            <a href="{{route('coverletter')}}" class="btn btn-secondary text-white " style="background-color:#070A53;">
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
                <div class="col-md-3 col-sm-6" align="center">
                  <button class="btn btn-info btn-sm text-white" href="#" data-image-id="" data-toggle="modal" data-title="The car i dream about" data-caption="If you sponsor me, I can drive this car" data-target="#"><i class="fas fa-eye"></i>
            </button>
                    <div class="box21">
                        <img src="" alt="">
                        <div class="box-content">
                            <h4 class="title">Cover Letter</h4>
                            <p class="description">Description</p>
                            @guest
                            <a class="read-more" href="#" data-toggle="modal" data-title="" data-caption="" data-target="#login-overlay">Get Started</a>
                            @else
                            <a class="read-more" href="{{route('customizeresume')}}">Get Started</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@include('new.register-useroptions')
@endsection