@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper mt-5">
<div class="container">
 <div class="row">
   <div class="col-md-8">
    @foreach($applications as $job)
    <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
          <h4 style="color:#0B0B3B;"><a href="#">{{$job->job->job_title}}</a></h4>
          <ul style="list-style: none;">
            <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
            <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->job->employment_type}}</li>
          </ul>
    </div> 
    @endforeach
    {{$applications->links()}}
  </div>

  <div class="col-md-4">
   @include('jobseeker-dashboard.rightnav')    
 </div>
</div>
</div>
@endsection
