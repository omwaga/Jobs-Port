@extends('layouts.app')
@section('title')
The Networked Pros | Job Vacancies and best career site in Kenya
@stop
@section('description')
Top job vacancies in ICT, Accounting,Sales and Marketing In kenya.
@stop
@section('keywords')
The Networked Pros,Thenetworkedpros, thenetworkedpros.com, thenetworked pros kenya,Job vacancies in Kenya,ICT jobs in Kenya, Accounting Jobs in kenya
@stop
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(9, 96, 165, 0.3), rgba(6, 32, 147, 0.3)),url({{asset('home/img/learn.jpg')}});background-size:cover;">
  <div class="container">
    <p class=" text-danger" style="font-family: 'Qwigley', cursive; font-size:110px; font-weight:700px;"><b>Are you a Learning Institution?</b></p>
    <p class="lead text-white">Publish your courses for free and get discovered by more than<br>
    10,000 learners who visit our site daily. As a learning Institution, you will connected to<br>
    learners and vetted facilitators for your published courses by using our portal.<br>
    <a class="btn btn-danger text-white" href="{{route('traingprofile')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create an account</a>
    <a class="btn btn-danger text-white" href="{{route('train.login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a></p>
  </div>
</div>
<div class="container">
    <h3 class="text-center" style="font-family: 'Qwigley', cursive; font-size:50px;"><strong>Why thenetworkedpros</strong></h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p><i class="fas fa-check-circle"></i> Connect to over 10,000 learners who visit our site daily.</p>
            <p><i class="fas fa-check-circle"></i> Connect to over 5,000 vetted facilitators from our portal.</p>
            <p><i class="fas fa-check-circle"></i> Post unlimited trainings  and seminars using the portal.</p>
        </div>
        <div class="col-md-6">
            <img src="http://www.drtinfo.org/chapters/fcvz/wp-content/uploads/2016/12/workshop2.jpg" class="img-fluid img-block" style="height:200px;">
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-center" style="font-family: 'Qwigley', cursive; font-size:50px;"><strong>Publish a course in 3 simple steps</strong></h3>
</div>
@endsection