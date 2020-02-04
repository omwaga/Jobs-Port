
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
                            Know where your Resume stands
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="" class="btn text-white " style="background-color:#070A53;">
                                Check your CV score for free
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
    <h4>See the Resume Samples from your Domain</h4>
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                <img src="{{asset('Images/experts/layer.svg')}}" width="68px" alt="">
                </div>
                <div class="our-services-text">
                  <h4>IT and Software Development</h4>
                  <ul>
                      <li><a href="{{route('singleresume')}}">Software Engineer Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Graphic Designer Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Network Engineer Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Project Manager Resume</a></li>
                      <li><a href="{{route('singleresume')}}">System Administrator Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Business Analyst Resume</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                <img src="{{asset('Images/experts/layer.svg')}}" width="68px" alt="">
                </div>
                <div class="our-services-text">
                  <h4>sales and Marketing</h4>
                  <ul>
                      <li><a href="{{route('singleresume')}}">MBA Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Content Writer Resume</a></li>
                      <li><a href="{{route('singleresume')}}">SEO Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Marketing Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Digital Marketing Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Business Development Resume</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                <img src="{{asset('Images/experts/layer.svg')}}" width="68px" alt="">
                </div>
                <div class="our-services-text">
                  <h4>Banking and Finance</h4>
                  <ul>
                      <li><a href="{{route('singleresume')}}">Banking and Finance Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Accountant Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Network Engineer Resume</a></li>
                      <li><a href="{{route('singleresume')}}">Project Manager Resume</a></li>
                      <li><a href="{{route('singleresume')}}">System Administrator Resume</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
</section>

@endsection
