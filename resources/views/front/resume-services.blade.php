
@extends('layouts.app')
@section('content')
<br>
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/cv2.jpg')}}');">

        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Preheading -->
                        <!-- <p class="text-white text-uppercase text-center text-xs" style=" padding-top: 5rem;">
                          <span><strong>Get a job-winning professional resume from our experts</strong></span>
                        </p> -->
                        <!-- Subheading -->
                        <p class="lead text-white text-center">
                            Grab Employers' attention in an innovative & smart way with a professionally written Resume
                            <br><a href="{{route('resumesamples')}}" class="btn text-white" style="background-color:#070A53;">
                                Get Started for free
                            </a>
                        </p>
</div>
</div>
</div>
</div>
</div>
        <!-- / .container -->
    </section>
    <section class="fdb-block">
  <div class="container mt-10 mb-10">
        <h4 style="color:#0B0B3B;" class="text-center"><strong>The Right Resume, For the Right Job</strong></h4>
            <div class="row mt-30">
              @foreach($samples as $sample)
                <div class="col-md-3 col-sm-6" align="center">
                <button class="btn btn-info btn-sm text-white" href="#" data-image-id="" data-toggle="modal" data-title="" data-caption="" data-target="#resume-{{$sample->id}}"><i class="fas fa-eye"></i>
            </button>
                    <div class="box21">
                        <img src="{{ asset('storage/'.$sample->resume)}}" alt="">
                        <div class="box-content">
                            <h4 class="title">{{$sample->name}}</h4>
                            <p class="description">{!!$sample->description!!}</p>
                            @guest
                            <a class="read-more" href="#" data-toggle="modal" data-title="" data-caption="" data-target="#login-overlay">Get Started</a>
                            @else
                            <a class="read-more" href="{{route('customizeresume')}}">Get Started</a>
                            @endguest
                        </div>
                    </div>
                </div>
        @include('new.view-resumetemplatemodal')
                @endforeach
            </div>
        </div>
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
        <ul class="list-group">
            <p>Set yourself apart from the crowd
             with a resume that defines your:</p>
         <li class="list-group-item"> Education</li>
         <li class="list-group-item"> Professional skills & strengths</li>
         <li class="list-group-item"> Key Achievements</li>
         <li class="list-group-item"> Areas of exposure</li>
        </ul>
      </div>

      <div class="col-12 col-sm-3 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/layer.svg')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For Mid-Career</strong></h5>
        <p>Experience(4-8 Years)<br> 
           Target your resume for specific
           jobs. Demonstrate your:</p>
        <ul class="list-group">
            <li class="list-group-item">Managerial Skills</li>
            <li class="list-group-item">Management skills</li>
            <li class="list-group-item">Achievements & accolades</li>
            <li class="list-group-item">Professional skills</li>
        </ul>
      </div>
      
      <div class="col-12 col-sm-3 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/expert.png')}}" style="width:80px; height:80px;">
        <h5 style="color:#0B0B3B;"><strong>For Senior Management</strong></h5>
        <p>Experience(Over 8 Years) <br> Get your resume tailored to your
        unique job needs. Highlight your:</p>
        <ul class="list-group">
            <li class="list-group-item">Leadership qualities</li>
            <li class="list-group-item">Extensive work history</li>
            <li class="list-group-item">Professional Competence</li>
            <li class="list-group-item">Accomplishments & Accolades</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@include('new.register-useroptions')
@endsection
