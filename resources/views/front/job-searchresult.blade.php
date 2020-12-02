
@extends('layouts.app')
@section('content')
<div class="container"  style=" padding-top: 5rem;">

 <div class="row">
   <div class="col-md-8">
     <form class="card card-sm" action="/search-result" method="get">
      <div class="card-body row no-gutters align-items-center">
        <!--end of col-->
        <div class="col">
          <input class="form-control" name="jobtitle" type="text" placeholder="Search by Job Title">
        </div>
        <!--end of col-->
        <div class="col-auto">
          <button class="btn btn-success" type="submit">Search</button>
        </div>
        <!--end of col-->
      </div>
    </form>
    @foreach($jobs as $job)
    <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
        <div class="row">
          <h5 style="color:#0B0B3B;"><a href="/jobview/{{$job->id}}">{{$job->jobtitle}}</a></h5>
          
        </div>
        <p>Posted By: <a href="" class="text-primary">company</a></p>
        <div class="row">
         <p class="text-secondary">{{$job->jobtype}} | Salary: {{$job->salary}}</p>
       </div>
       <div class="row">
        <div class="col-md-3">
          <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
        </div>
        <div class="col-md-9">
          <p class="text-dark">
            {!! Str::limit(strip_tags($job->summary), 300) !!}<a class="btn btn-danger pull-right" href="/jobview/{{$job->id}}">Apply</a>
          </p>
        </div>
      </div>
    </div> 
  </div>
  @endforeach
  
  {{$jobs->links()}}
</div>
<div class="col-md-4">
 @include('new.rightnav')    
</div>
</div>

</div>
@endsection
