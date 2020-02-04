@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card card-header"><h5 style="font-family: 'Roboto', sans-serif;">Subscribe to a CV and cover letter templates and Land your dream job</h5></div>
	      <hr>
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true">Student/Intermediate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#professional" role="tab" aria-controls="pills-profile" aria-expanded="true">Professional</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#cvtemplates" role="tab" aria-controls="pills-profile" aria-expanded="true">Cover Letters</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv6.png')}}'); background-size:contain;">
			<a class="btn btn-secondary text-white" id="cv" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
		<h4 class="b text-center text-primary">Basic</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv7.jpg')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
		<h4 class="b text-center text-primary">Detailed</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv8.png')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
		<h4 class="b text-center text-primary">Enfold</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv9.png')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white"href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
		<h4 class="b text-center text-primary">Diamond</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
  		</div>
  		<br>
  		<div class="row">
  			<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv10.png')}}'); background-size:contain;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
		<h4 class="b text-center text-primary">Simple</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv11.jpg')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
			<h4 class="b text-center text-primary">Crisp</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv12.jpg')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
			<h4 class="b text-center text-primary">Cubic</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url('{{asset('Images/cv/cv13.jpg')}}'); background-size:cover;">
			<a class="btn btn-secondary text-white" href="#" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>
			<h4 class="b text-center text-primary">Vibes</h4>
		<p><strong>A very Organized CV template suited for students seeking for internship or first time job opportunities accross all industries.</strong></p>
		</div>
  		</div>
  	</div>
  </div>
  <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container">
	<div class="row">
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv2.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv3.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv4.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv5.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv13.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv14.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv15.png')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
		<div class="col-md-3">
		<div class="card card-body bg-light" style="border:solid 2px #1C216E; height:60vh; background-image: url({{asset('Images/cv/cv15.jpg')}}); background-size: cover;">
			<a class="btn btn-secondary text-white" style="margin-top: 55%;border-radius:0px;">Create My resume</a>
		</div>

		</div>
	</div>
</div>
  </div>
  <div class="tab-pane fade" id="cvtemplates" role="tabpanel" aria-labelledby="pills-dropdown1-tab">...</div>
</div>
</div>
@endsection