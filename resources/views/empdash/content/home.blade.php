@extends('empdash.layouts')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(9, 96, 165, 0.6), rgba(6, 32, 147, 0.6)), url({{asset('home/img/ann.jpg')}}); background-size: contain;">
  <h2 class=" text-white" style="margin-top: 50px;font-family: 'Source Sans Pro', sans-serif;color:#FF5733; color:#fff;">Get the best job vacancies and careers in Kenya.</h2>
  <p class="lead"><h2 class="text-white" style="font-family: 'Source Sans Pro', sans-serif;color:#fff;">Browse for latest jobs and land your dream job</h2>
  </p>
  <hr class="my-4">
 <div class="container-fluid card card" style="background-color:#051273;opacity: 0.5;">
 	<div class="row justify-content-center" style="margin-top: 20px;margin-bottom: 10px;">
 		
 		<div class="col-md-6">
 			<input type="text" name="search" class="form-control" placeholder="E.G Software developer">
 		</div>
 		<div class="col-md-2">
 			<button type="submit" class="btn btn-default btn-block text-white" style="background-color:#EA730A;">Search</button>
 		</div>
 	</div>	

 </div>
</div>
<div class="container" style=>
	<div class="row">
		<div class="col-md-8" style="background-color:#EA730A;">
			<h3 class="text-white text-center"n style="font-family: 'Source Sans Pro', sans-serif;">Be discovered by Employers</h3>
			<p class="text-center text-white"> <a class="btn btn-default bg-primary text-white align-center"href="{{route('loginalready')}}" style="border-radius:0px;"><i class="fa fa-user-plus text-white" aria-hidden="true"></i> Create an Account</a></p>
		</div>
		<div class="col-md-4 bg-primary text-white">
			<h3 style="font-family: 'Source Sans Pro', sans-serif;">Already have an account</h3>
			<p class="text-center"><a class="btn btn-default text-white align-center"href="{{route('loginalready')}}" style="background-color:#C70039;border-radius:0px;color:#fff;"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></p>
		</div>
	</div>
</div>
<hr style="border:solid 0.5px #000000">
<p><h5><b>Search and find jobs in Kenya</h5></h4></p>
<div class="container">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-primary" data-toggle="tab" href="#home"><i class="fa fa-list-alt fa-x text-primary" aria-hidden="true"></i> Fiter Jobs by Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker fa-x text-primary" aria-hidden="true"></i> Fiter Jobs by Location</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu2"><i class="fa fa-clock-o fa-x text-primary" aria-hidden="true"></i> View Latest Jobs</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    	<div class="row">
    		@foreach($industry as $inda)
    		<div class="col-md-4">
   <ul class="list-group list-group-flush">
  <li class="list-group-item " style="border-top: 0.8px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-angle-double-right text-primary"></i> <a class="" href="/Industries/{{$inda->id}}">{{$inda->name}}</a></li>
</ul>
    		</div>
    		@endforeach
    	</div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <p>
          <div class="row">
                    @if(count($towns) > 0)
          @foreach($towns as $town)
          <div class="col-md-3">
              <ul class="list-group list-group-flush">
  <li class="list-group-item text-primary"><a href="/Location/{{$town->id}}" class="nav-link text-primary"><i class="fas fa-map-marker-alt"></i> {{$town->name}}</a> </li>
</ul>
          </div>
          @endforeach
          @endif    
          </div>
</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
      	@foreach($jobs as $job)
      	<div class="col-md-6">
    <ul class="list-group list-group-flush">
  <li class="list-group-item" style="border-top: 0.5px solid #EDEDFA;border-left: none;border-right: none;"><a href="/jobview/{{$job->id}}" class="nav-link text-primary"><i class="fas fa-angle-double-right"></i> {{$job->jobtitle}}<br>
  {{$job->jobtype}}</a> </li>
</ul>
      	</div>
      	@endforeach
      </div>

    </div>
  </div>
</div>
<br>
<div class="container">
	<h2 class="text-center" style="font-family: 'Source Sans Pro', sans-serif;">Get discovered in 3 simple steps</h2>
	<div class="row">
		
		<div class="col-md-4">
			<div class="card-header bg-info text-white text-center">Applying from the website</div>
			<div class="card card-body">
				<ul class="list-group list-group-flush">
  <li class="list-group-item"><i class="fa fa-check-circle" aria-hidden="true"></i> Browse for Jobs from all over our page</li>
  <li class="list-group-item"> <i class="fa fa-check-circle" aria-hidden="true"></i> Get email notification with us</li>
  <a class="btn btn-info text-white" href="#" style="background-color:#124896"><i class="fa fa-search" aria-hidden="true"></i> Discover latest Jobs</a>
</ul>
		</div>
	</div>
		<div class="col-md-4">
			<div class="card-header bg-info text-white text-center">Applying with us</div>
			<div class="card card-body">
				<ul class="list-group list-group-flush">
  <li class="list-group-item"><i class="fa fa-check-circle" aria-hidden="true"></i>Create an Account with us</li>
  <li class="list-group-item"> <i class="fa fa-check-circle" aria-hidden="true"></i> Browse latest jobs while in your dashboard</li>
  <a class="btn btn-info text-white" href="#" style="background-color:#124896"><i class="fa fa-user-plus" aria-hidden="true"></i> Create an account with us</a>
</ul>
		</div>
		</div>
		<div class="col-md-4">
			<div class="card-header bg-info text-white text-center">Settip up alerts</div>
			<div class="card card-body">
				<ul class="list-group list-group-flush">
  <li class="list-group-item"><i class="fa fa-check-circle" aria-hidden="true"></i>Set up job alerts</li>
  <li class="list-group-item"> <i class="fa fa-check-circle" aria-hidden="true"></i> Subscribe to our latest jobs and newsletters</li>
  <a class="btn btn-info text-white" href="#" style="background-color:#124896"><i class="fa fa-envelope" aria-hidden="true"></i> Subscribe</a>
</ul>
		</div>
		</div>
	

</div>
</div>
<br>
	<h2 class="text-center">Top Trainings</h2>
	<div class="container">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-primary" data-toggle="tab" href="#train"><i class="fa fa-list-alt fa-x text-primary" aria-hidden="true"></i>View Latest Trainings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#trainloca"><i class="fa fa-map-marker fa-x text-primary" aria-hidden="true"></i>Trainings by Locations</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="train" class="container tab-pane active"><br>
    	<div class="row">
    		@foreach($training as $train)
    		<div class="col-md-12">
   <ul class="list-group list-group-flush bg-light">
  <li class="list-group-item " style="border-top: 0.8px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-angle-double-right text-primary"></i> <a class="#" href="#">{{$train->title}}  <b class="float-right"><i class="fas fa-map-marker text-primary"></i> {{$train->location}}</b> </a>
  <p><i class="far fa-clock text-primary"></i> {{$train->sdate}} - {{$train->edate}} <i class="fas fa-coins text-primary"></i>  {{$train->cost}}</p>
  <p>{!! str_limit(strip_tags($train->description), 200) !!}
        @if (strlen(strip_tags($train->description)) > 200)
        <br>
        ... <a href="#" class="btn btn-default btn-sm">Book Training</a>
        @else
        <br>
        <a href="#" class="btn btn-default btn-sm float-right bg-dark text-white" style="border-radius: 0%;">Book Training</a>
        @endif</p></li>
</ul>
    		</div>
    		@endforeach
    	</div>
    </div>
    <div id="trainloca" class="container tab-pane fade"><br>
      <h3>Fiter Jobs by Location</h3>
      <p>
          <div class="row">
                    @if(count($towns) > 0)
          @foreach($towns as $town)
          <div class="col-md-3">
              <ul class="list-group list-group-flush">
  <li class="list-group-item text-primary"><a href="#" class="nav-link text-primary"><i class="fas fa-map-marker-alt"></i> {{$town->name}}</a> </li>
</ul>
          </div>
          @endforeach
          @endif    
          </div>
</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
      	@foreach($jobs as $job)
      	<div class="col-md-6">
    <ul class="list-group list-group-flush">
  <li class="list-group-item" style="border-top: 0.5px solid #EDEDFA;border-left: none;border-right: none;"><a href="/jobview/{{$job->id}}" class="nav-link text-primary"><i class="fas fa-angle-double-right"></i> {{$job->jobtitle}}<br>
  {{$job->jobtype}}</a> </li>
</ul>
      	</div>
      	@endforeach
      </div>

    </div>
  </div>
</div>
@endsection