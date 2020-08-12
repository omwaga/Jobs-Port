@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 86, 135, 1)), url({{asset('Images/employee.jpg')}})" style=" padding-top: 5rem;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-offset-4" style=" padding-top: 7rem;">
          @include('errors')
          @include('success')
          <h3 class=" text-white text-left"> CREATE YOUR PROFILE TODAY!</h3>

          <p class="text-white text-left">Be discover by leading employers who visit our service every day to recruit trusted professionals</p>
          <a href="{{route('Register')}}" class="btn btn-danger">Get Started</a>
          <a href="{{route('login')}}" class="btn text-white" style="background-color: #005691">Already Registered? Login</a>
      </div>
  </div>
</div>
</div>
<div class="container">
    <h4 class="text-center text-dark">Find the right job on thenetworkedpros.com. You are only few steps away from millions of jobs</h4><br>
    <div class="row">
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-database text-danger" aria-hidden="true"></i>
                </div>
            <p>Discover hundreds of jobs and create alerts to notify you when jobs matching your qualifications are advertised </p>                
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-graduation-cap text-success" aria-hidden="true"></i>
                </div>
            <p> Create compelling CVs and cover letters for your next job applications using our Resume Builder. Over 10 templates available, all for free! </p>                
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-briefcase text-alert" aria-hidden="true"></i>
                </div>
            <p>  Are you a fresh graduate who has not worked before? Enroll for our NP Work Readiness Training worth USD 1,000 in the market for free! </p>                
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-sitemap text-danger" aria-hidden="true"></i>
                </div>
            <p> Get hired (Pros4hire) for regular gigs by leading institutions as well as individuals looking for trusted professionals for assignments </p>                
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-book text-info" aria-hidden="true"></i>
                </div>
            <p> Sit back, relax and let the networked professionals do the job searching for you! Create your career profile today and be discover by leading employers who visit our service every day to recruit trusted professionals  </p>                
            </div>
        </div>
    </div>
</div>
@endsection