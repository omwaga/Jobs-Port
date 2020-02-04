@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
	<h4>Search for latest jobs</h4>
	<div class="row">
		<div class="col-md-6">
		    <form action="{{route('normalsearch')}}" class="serach-form-area" method="get">
        @csrf
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search e.g software developer" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary bg-info text-white" type="submit">Search</button>
  </div>
</div>
</form>
		</div>
		<div class="col-md-6">
			<a class="btn btn-dark text-white"href="/login" style="background-color: #FF5733;border-radius:0px;"><i class="fas fa-sign-in-alt"></i> Sign in</a> <a class="btn btn-dark text-white"href="{{route('Register')}}" style="background-color: #FF5733;border-radius:0px;"><i class="fas fa-user-plus"></i> Create an Account</a>
			<a class="btn btn-dark text-white" style="background-color: #FF5733;border-radius:0px;"href="{{route('advanced')}}"><i class="fas fa-search"></i> Advanced search</a>
		</div>
	</div>
</div>
<div class="container">
    <p>Total Jobs Posted by the company: <button class="btn btn-primary">{{$jobsc}}</button></p>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
		    @if(count($jobsbyc)>0)
			@foreach($jobsbyc as $jobs)
			<div class="card card-body bg-light">
					<p class="text-primary">Position: <strong><a>{{$jobs->jobtitle}}</a></strong><b class="float-right">{{$jobs->jobtype}}</b></p>
					<p>
						{!! str_limit(strip_tags($jobs->summary), 200) !!}
        @if (strlen(strip_tags($jobs->summary)) > 200)
        <br>
        ... <a href="" class="nav-link text-primary float-right">View more details</a>
        @else
        <br>
        <a href="" class="nav-link text-primary float-right">View more details</a>
        @endif
					</p>
			</div>
		<br>
			@endforeach
			@else
			<p>There are no jobs posted by this company</p>
			@endif
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
@endsection