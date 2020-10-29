@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
    <h4 class="text-center text-dark">Login/Register</h4><br>
    <div class="row">
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-graduation-cap text-danger" aria-hidden="true"></i>
                </div>
                <a href="{{route('jobseekers')}}"><h5> Jobseekers</h5></a>
                <p>Be discovered by leading employers who visit our service every day to recruit trusted professionals </p>   
                <a href="{{route('jobseekers')}}" class="btn btn-danger">Jobseeker Login/Register</a>              
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-sitemap text-success" aria-hidden="true"></i>
                </div>
                <a href="{{route('employers')}}"> <h5> Employers</h5></a>
                <p>
                Reach out to millions of jobseekers and hire quickly with our fast and easy job posting services.</p>     
                <a href="{{route('employers')}}" class="btn btn-danger">Employer Login/Register</a>           
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
  <div class="card">
     <div class="col-md-12" align="center">
      <h4 class="mt-5">LET US HELP YOU HIRE BETTER</h4>
      <div class="row">
        <div class="col-md-6">
           <p><i class="fa fa-clock text-success" aria-hidden="true"></i> 2 Minutes to Post</p>
           <p><i class="fa fa-users text-success" aria-hidden="true"></i> Attract Audience</p>
           <p><i class="fa fa-volume-control-phone text-success" aria-hidden="true"></i> Contact Directly</p>
       </div>
       <div class="col-md-6">
           <p><i class="fa fa-flag text-success" aria-hidden="true"></i> Unlimited Applies</p>
           <p><i class="fa fa-bullseye text-success" aria-hidden="true"></i> 30 days Job Visibility</p>
           <p><i class="fa fa-pied-piper text-success" aria-hidden="true"></i> Manage your Applicants</p>
       </div>
       <div class="col-sm-12"><br>
        <div class="box-btn">
          <a class="btn btn-danger text-white" href="{{route('foremployer')}}">Post a Job</a>
      </div>
      <h4>Don’t have time? Send us your job advert to <a href="mailto:careers@thenetworkedpros.com?Subject=POST%20JOB" target="_top" class="text-info"> careers@thenetworkedpros.com</a> or call +254 706468123 we will do the rest</h4>
  </div>    
</div>
</div>
</div>
</div>
@endsection
