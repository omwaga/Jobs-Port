
<div class="container">
  <h4 class="text-center">Featured Jobs</h4>
  <div class="row">
    @forelse($featured_jobs as $job)
    <div class="col-md-4">    
      <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
        @php $jobtitle = str_slug($job->job_title, '-'); @endphp
        <h3 style="color:#0B0B3B;"><a href="/jobseeker/job/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a> 
          <a href=""><i class="fa fa-heart text-danger pull-right" align="right" onclick="event.preventDefault();
          document.getElementById('save-job-{{$job->id}}').submit();">
          <form id="save-job-{{$job->id}}" action="{{ route('user-save', $job->id) }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="id" value="{{$job->id}}">
          </form>
        </i></a></h3>

        <div class="row">
          <div class="col-md-3">
            @if($job->employer_logo !=="no-logo")
            <img class="rounded-circle img-fluid" src="{{asset('storage/job_logos/'.$job->employer_logo)}}" alt="{{$job->job_title}}" width="140" height="140">
            @else
            <img class="rounded-circle img-fluid" src="{{asset('storage/logos/'.$job->employer->logo)}}" alt="{{$job->job_title}}" width="140" height="140">
            @endif
          </div>
          <div class="col-md-9">
            <ul style="list-style: none;">
              <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
              <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type}}</li>
              <li><strong style="font-weight: bold;">Location:</strong> {{$job->town->name ?? ''}} - {{ $job->country->name ?? ''}}</li>
            </ul>
            <p class="text-dark">
              <a class="btn pull-right text-white btn-sm" href="/jobseeker/job/{{$job->id}}/{{$jobtitle}}"  style="background-color: #005691">Apply</a>
            </p>
          </div>
        </div>
      </div> 
    </div>
    @endforeach
  </div>
</div>