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
                <p>Be discover by leading employers who visit our service every day to recruit trusted professionals </p>   
                <a href="{{route('login')}}" class="btn btn-danger">Jobseeker Login/Register</a>              
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
                <a href="{{route('foremployer')}}" class="btn btn-danger">Employer Login/Register</a>           
            </div>
        </div>
    </div>
</div>
@endsection
