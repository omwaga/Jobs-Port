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
			<a class="btn btn-dark text-white"href="/Login-Page" style="background-color: #FF5733;border-radius:0px;"><i class="fas fa-sign-in-alt"></i> Sign in</a> <a class="btn btn-dark text-white"href="{{route('Register')}}" style="background-color: #FF5733;border-radius:0px;"><i class="fas fa-user-plus"></i> Create an Account</a>
			<a class="btn btn-dark text-white" style="background-color: #FF5733;border-radius:0px;"href="{{route('advanced')}}"><i class="fas fa-search"></i> Advanced search</a>
		</div>
	</div>
</div>
<div class="container">
    <h3><strong>Total jobs found</strong></h3><hr>
    <div class="row">
        <div class="col-md-8" style="border-right: solid 5px #E0DFF0;">
                  @if(count($searchdata) > 0)
                 @foreach($searchdata as $search)
<div class="card card-body bg-light" style="border:0px;">
    <p><a class="nav-link" href="/jobview/{{$search->id}}">Position: <strong>{{$search->jobtitle}}</strong></a><a class="nav-link" href="/jobview/{{$search->id}}">Type: <strong>{{$search->jobtype}}</strong></a>
    </p>
    <p>
        {!! str_limit(strip_tags($search->summary), 200) !!}
        @if (strlen(strip_tags($search->summary)) > 200)
        <br>
        ... <a href="/jobview/{{$search->id}}" class="nav-link text-primary float-right">View more details</a>
        @else
        <br>
        <a href="/jobview/{{$search->id}}" class="nav-link text-primary float-right">View more details</a>
        @endif
    </p>
</div>
                @endforeach 
                 @else
                 <div class="card card-body bg-light" style="border:0px;">
                    <p>Your search results returned 0 results. Modify your search criteria</p>
                 </div>
                @endif
        </div>
        <div class="col-md-4">
            <h4>View Other Jobs</h4><hr>
        </div>
    </div>

</div>
@endsection