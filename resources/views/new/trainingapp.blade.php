@extends('layouts.learning')
@section('content')
<div class="container">
    <marquee behavior="scroll" direction="left">Your Account is pending approval.Please wait for a few seconds as we validate your details entered.</marquee>
    <div class="card-header bg-danger text-white"style=""> <h2>Manage your Trainings and Seminars</h2></div>
    <div class="card card-body"style="font-family: 'PT Sans Narrow', sans-serif;">
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-family: 'Marck Script', cursive; font-size:60px;"> Your details are being reviewed before we give you access to your dashboard.</h1>
            </div>
            <div class="col-md-6">
                <img src="{{asset('Images/cv/approval.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection