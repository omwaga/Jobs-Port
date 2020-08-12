@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
    <h4 class="text-center text-dark">Express Recruitment</h4><br>
    <div class="row">
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-sitemap text-danger" aria-hidden="true"></i>
                </div>
                <h5> Jobseekers</h5>
                <p>Sit back, relax and let the networked professionals do the job searching for you! Create your career profile today and be discover by leading employers who visit our service every day to recruit trusted professionals </p>   
                <a href="{{route('login')}}" class="btn btn-danger">Get Started</a>              
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  align="center">
                <div class="h1">
                    <i class="fa fa-graduation-cap text-success" aria-hidden="true"></i>
                </div>
                <h5> Employers</h5>
                <p>Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process.</p>     
                <a href="{{route('expressemployer')}}" class="btn btn-danger">Get Started</a>           
            </div>
        </div>
    </div>
</div>
@endsection
