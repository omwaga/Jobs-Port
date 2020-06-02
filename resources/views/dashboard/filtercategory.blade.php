
@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">

 <div class="row">
   <div class="col-md-8">
     @if($jobposts->count() > 0)
     @foreach($jobposts as $show)
     <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
        <div class="row">
          <h5 style="color:#0B0B3B;">{{$show->jobtitle}} 
            @auth
            <i class="fa fa-heart text-danger pull-right" align="right" onclick="event.preventDefault();
            document.getElementById('save-job-{{$job->id}}').submit();">
            <form id="save-job-{{$job->id}}" action="{{ route('user-save', $job->id) }}" method="POST" style="display: none;">
              @csrf
              <input type="hidden" name="id" value="{{$job->id}}">
            </form>
          </i>
        @endauth</h5>
        
      </div>
      <p>Posted By: <a href="#" class="text-primary">company name</a></p>
      <div class="row">
       <p class="text-secondary">{{ $show->jobtype }} | Salary: {{$show->salary}}</p>
     </div>
     <div class="row">
      <div class="col-md-3">
        <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
      </div>
      <div class="col-md-9">
        <p class="text-dark">
          {!! str_limit(strip_tags($show->summary), 200) !!} <a class="btn btn-danger pull-right" href="/jobview/{{$show->id}}">Apply</a>
        </p>
      </div>
    </div>
  </div> 
</div>
@endforeach
@endif
</div>
<div class="col-md-4">
  @include('dashboard.rightnav')     
</div>
</div>

</div>
@endsection
