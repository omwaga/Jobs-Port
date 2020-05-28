@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">

 <div class="row">
   <div class="col-md-8">
     @foreach($jobs as $job)
     <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
      @php $jobtitle = str_slug($job->job_title, '-'); @endphp
      <h5 style="color:#0B0B3B;"><a href="/jobview/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a></h5>
      <ul style="list-style: none;">
        <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
        <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type}}</li>
        <li><strong style="font-weight: bold;">Location:</strong> {{$job->town->name ?? ''}} - {{ $job->country->name ?? ''}}</li>
        <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($job->deadline) ?? ''}} days</span></li>
      </ul>

      <div class="row">
        <div class="col-md-3">
          @if($job->employer_logo !=="no-logo")
          <img class="rounded-circle img-fluid" src="{{asset('storage/job_logos/'.$job->employer_logo)}}" alt="{{$job->job_title}}" width="140" height="140">
          @else
          <img class="rounded-circle img-fluid" src="{{asset('storage/logos/'.$job->employer->logo)}}" alt="{{$job->job_title}}" width="140" height="140">
          @endif
        </div>
        <div class="col-md-9">
          <p class="text-dark">
            {!! str_limit($job->summary, $limit = 300, $end = '...') !!}<a class="btn btn-danger pull-right btn-sm" href="/jobview/{{$job->id}}/{{$jobtitle}}">View Job Details</a>
          </p>
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
