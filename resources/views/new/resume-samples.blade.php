
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

                        <!-- Button -->
                          <div class="btn-group">
                            <a href="{{route('uploadcv')}}" class="btn text-white " style="background-color:#070A53;">
                                Resumes
                            </a>
                            <a href="{{route('uploadcv')}}" class="btn btn-secondary text-white ">
                                CVs
                            </a>
                            <a href="{{route('uploadcv')}}" class="btn btn-secondary text-white ">
                                Cover Letters
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
                  <button class="btn btn-info btn-sm text-white" href="#" data-image-id="" data-toggle="modal" data-title="The car i dream about" data-caption="If you sponsor me, I can drive this car" data-target="#image-gallery"><i class="fas fa-eye"></i>
            </button>
                    <div class="box21">
                        <img src="{{ asset('storage/'.$sample->resume)}}" alt="">
                        <div class="box-content">
                            <h4 class="title">{{$sample->name}}</h4>
                            <p class="description">{{$sample->description}}</p>
                            <a class="read-more" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @include('new.view-resumetemplatemodal')
        </div>
</section>
<!-- <div class="container">
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
</div> -->

@endsection
