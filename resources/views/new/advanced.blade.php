@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
	<h3>Advanced Job search</h3>
	<hr style="border:solid 1px #000;">
	<div class="row">
		<div class="col-md-6 bg-light">
			<p>Search for all jobs in Kenya. Target your area of specialization by simplying inputing your relevant data in the input fields below.</p>
			<form action="{{route('searchdata')}}" class="serach-form-area" method="get">
				@csrf
			 <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Industry type</label>
    <div class="col-sm-10">
          <select class="form-control" id="exampleFormControlSelect1" style="border-radius: 0px;" name="industry">
        <option>Select Industry</option>
       @foreach($industry as $show)
      <option value="{{$show->id}}">{{$show->name}}</option>
         @endforeach
    </select>
    </div>
  </div>
			  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
          <select class="form-control" id="exampleFormControlSelect1" style="border-radius: 0px;" name="category">
      <option>Select Category</option>
      @foreach($category as $show)
      <option value="{{$show->id}}">{{$show->jobcategories}}</option>
       @endforeach
    </select>
    </div>
  </div>
  	  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Location</label>
    <div class="col-sm-10">
          <select class="form-control" id="exampleFormControlSelect1" style="border-radius: 0px;" name="location">
      <option>Select Location</option>
       @foreach($town as $show)
      <option value="{{$show->id}}">{{$show->name}}</option>
       @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Employment type</label>
    <div class="col-sm-10">
          <select class="form-control" id="exampleFormControlSelect1" style="border-radius: 0px;" name="employtype">
              <option>Select Type</option>
      <option>Full-Time</option>
      <option>Part-Time</option>
      <option>Internship</option>
      <option>Contractor</option>
    </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary text-white float-right" style="border-radius:0px;">Search</button>
  </form>
		</div>
		<div class="col-md-6" style="border-left:solid 1px #000;">
			<h4 class="text-center">View latest Jobs</h4>
			
			 @foreach($job as $show)
			<ul class="list-group list-group-flush">
				 <li class="list-group-item"><i class="fas fa-angle-double-right"></i> <a href="/jobview/{{$show->id}}" class="text-primary">{{$show->jobtitle}}</a>
				 	<br>
				 	Jobtype: {{$show->jobtype}}</li>
			</ul>
			@endforeach
		</div>
	</div>
</div>
@endsection