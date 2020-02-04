@extends('layouts.app1')
@section('content')
<div class="container">
	<div class="row">
  <div class="col-8">
<p style="padding-top: 5%;"><h1 class="text-primary">Hi {{auth::user()->name}}</h1>
</p>
<p><h3 class="">Welcome to <strong>The Networked Pros !</strong></h3></p>
<p class="text-success">Lets start by creating your User profile that will help us<br>
Understand what you want. Profiling will enable us to <br>
display all related courses, jobs and trainings and any other 
<br> information that will be useful to you.</p>
<p>Answer all requred questions</p>
<hr>
   {!!Form::open(['action'=>'CountriesController@search','method'=>'POST','class'=>'needs-validation'])!!}
        {{csrf_field()}}
	<div class="form-group">
		<label>*Where are you based?</label>
		<small>You can choose country or city</small>
		 <input type="search" class="form-control" name="search" required autofocus placeholder="Nairobi, Kenya" value="{{ old('search') }}"><br>
		 <p>
		 	  <button class="btn btn-primary text-white" type="submit"><i class="fa fa-save"></i> save and Continue <i class="fas fa-arrow-right"></i></button> 
		 </p>
	</div>
	
       @if (session('status'))
                                     <div class="alert alert-success">
                                     {{ session('status') }}
                                              </div>
                                              @endif
       {!!Form::close()!!}
  </div>
  <div class="col-4">
 <div class="col-sm">
      <a class="btn btn-primary text-white" href="/create-profile">Skip for now</a>
    </div>
  </div>
</div>

</div>
@endsection
