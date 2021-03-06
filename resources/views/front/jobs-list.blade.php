@forelse($jobs as $job)
<div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
  @php $jobtitle = str_slug($job->job_title, '-'); @endphp

  <h4>
    <a href="/job/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}} Job at {{$job->employer_name ?? $job->employer->company_name}}</a>
    <a href="">
      <i class="fa fa-heart text-danger pull-right" onclick="event.preventDefault();
      document.getElementById('save-job-{{$job->id}}').submit();">
      <form id="save-job-{{$job->id}}" action="{{ route('user-save', $job->id) }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="id" value="{{$job->id}}">
      </form>
    </i>
  </a>
</h4>

<ul style="list-style: none;">
  <li class="text-danger">{{$job->employer_name ?? $job->employer->company_name}}</li>
  <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type}}</li>
  <li><strong style="font-weight: bold;">Location:</strong> {{$job->town->name ?? ''}} - {{ $job->country->name ?? ''}}</li>
  <!-- <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($job->deadline) ?? ''}} days</span></li> -->
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
      {!! Str::limit(strip_tags($job->summary), 300) !!}<a class="btn btn-danger pull-right btn-sm" href="/job/{{$job->id}}/{{$jobtitle}}">View Job Details</a>
    </p>
  </div>
</div>

</div>
@empty
<p>No jobs found</p>
@endforelse
