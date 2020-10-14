@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper">
  <div class="container"><br>
   <div class="row">
     <div class="col-md-8">
      @include('success')
      @forelse($jobs as $job)
      <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
        <h3 style="color:#0B0B3B;"><a href="#">{{$job->job->job_title ?? ''}}</a>
          @auth
          <a href=""><i class="fa fa-heartbeat text-danger pull-right" align="right" onclick="event.preventDefault();
          document.getElementById('save-job-{{$job->id}}').submit();">
          <form id="save-job-{{$job->id}}" action="{{ route('user-delete', $job->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{$job->id}}">
          </form>
        </i></a>
        @endauth
      </h3>
      <ul style="list-style: none;">
        <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->job->employment_type ?? ''}}</li>
        <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($job->deadline) ?? ''}} days</span></li>
      </ul>

      <div class="col-md-12">          
        @php $jobtitle = str_slug($job->job->job_title ?? '', '-'); @endphp
        <p class="text-dark">
          {!! str_limit($job->job->summary ?? '', $limit = 300, $end = '...') !!}<a class="btn btn-danger pull-right btn-sm" href="/jobseeker/job/{{$job->job->id ?? ''}}/{{$jobtitle}}">View Job Details</a>
        </p>
      </div>
    </div> 
    @empty
    <p>No jobs found</p>
    @endforelse
  </div>

  <div class="col-md-4">
   @include('jobseeker-dashboard.rightnav')    
 </div>
</div>
</div>
@endsection
