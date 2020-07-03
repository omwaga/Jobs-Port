@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 86, 135, 1)), url({{asset('Images/INTERVIEW.jpg')}})" style=" padding-top: 5rem;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-offset-4" style=" padding-top: 7rem;">
          @include('errors')
          @include('success')
          <h3 class=" text-white text-left"> FIND BETTER CANDIDATES, FASTER</h3>

          <p class="text-white text-left">Reach out to millions of jobseekers and hire quickly with our fast and easy job posting services.</p>
          <a href="{{route('hirre')}}" class="btn btn-danger">Get Started</a>
          <a href="{{route('foremployer')}}" class="btn text-white" style="background-color: #005691">Already Registered? Login</a>
      </div>
  </div>
</div>
</div>
<div class="container">
    <h4 class="text-center text-dark">Search Best Talent with The NetworkedPros</h4><br>
    <div class="row">
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-users text-danger" aria-hidden="true"></i>
                </div>
                <h5>Receive applications for your job Vacancies</h5>
                <p>(Whether posted in the portal or elsewhere) and select candidates from within the portal using the recruitment engine. </p>                
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-briefcase text-alert" aria-hidden="true"></i>
                </div>
                <h5>Talent Pools</h5>
                <p>  Create a talent pool of candidates you’ll need in the future to support your business growth. </p>                
            </div>
        </div>
        <div class="col-md-4">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-book text-info" aria-hidden="true"></i>
                </div>
                <h5>Job Posting Services</h5>
                <p>Post jobs on the portal and reach widely to the EA region </p>                
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-sitemap text-danger" aria-hidden="true"></i>
                </div>
                <h5> Express Recruitment </h5>
                <p>Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process. </p>                
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-graduation-cap text-success" aria-hidden="true"></i>
                </div>
                <h5> Ready For Hire Professionals </h5>
                <p>The Pros4hire facility enables you to quickly and on demand hire trusted professionals who are guaranteed to deliver for temporally or periodic assignments (gigs) </p>                
            </div>
        </div>

        <div class="col-md-12">
            <div class=" card-body border-light shadow-lg p-5 mb-3 bg-danger rounded"  align="center">
                <h3 class="text-white">LET OUR TEAM HELP YOU</h3>
                <p class="text-white">Let our team of recruitment experts
                    assist you every step of the way.<br>
                Call +254 792516010 </p>                
            </div>
        </div>
    </div>
</div>
@endsection
