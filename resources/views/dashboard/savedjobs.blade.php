@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
 <div class="row">
   <div class="col-md-8">
    @forelse($jobs as $job)
    <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
      <h5 style="color:#0B0B3B;"><a href="#">{{$job->job->job_title}}</a>
        @auth
        <i class="fa fa-heartbeat text-danger pull-right" align="right" onclick="event.preventDefault();
        document.getElementById('save-job-{{$job->id}}').submit();">
        <form id="save-job-{{$job->id}}" action="#" method="" style="display: none;">
          @csrf
          <input type="hidden" name="id" value="{{$job->id}}">
        </form>
      </i>
      @endauth
    </h5>
    <ul style="list-style: none;">
      <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->job->employment_type}}</li>
      <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($job->deadline) ?? ''}} days</span></li>
    </ul>

    <div class="col-md-12">          
      @php $jobtitle = str_slug($job->job->job_title, '-'); @endphp
      <p class="text-dark">
        {!! str_limit($job->job->summary, $limit = 300, $end = '...') !!}<a class="btn btn-danger pull-right btn-sm" href="/jobview/{{$job->job->id}}/{{$jobtitle}}">View Job Details</a>
      </p>
    </div>
  </div> 
  @empty
  <p>No jobs found</p>
  @endforelse
</div>

<div class="col-md-4">
 @include('new.rightnav')    
</div>
</div>
</div>
@endsection
