@extends("layouts.app")
@section("content")
<!--main content start-->
<div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/banner-5.jpg')}}');">
  <div class="container">
    <h2 class=" text-danger text-center" style="text-transform: uppercase;">Discover Best job Vacancies <br> from Top Employers</h2>
    @if(!$personalinfo ||!$personalstatements || $education = null || $experience = null || $awards = null || $references = null || $skills = null)
    {
      <div class="alert alert-warning">
        Your Profile is incomplete
      </div>
    }
    @else{}
    @endif

    <form action="/search-jobs" method="get" novalidate="novalidate">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <select class="form-control search-slt" name="duty" id="exampleFormControlSelect1">
                <option selected>All Job Functions</option>
                @foreach($industries as $industry)
                <option value="{{$industry->id}}">{{$industry->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <select class="form-control search-slt" name="location" id="exampleFormControlSelect1">
                <option selected>All Locations</option>
                @foreach($towns as $town)
                <option value="{{$town->id}}">{{$town->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <input class="form-control search-slt" name="keyword" type="text" placeholder="Search by Keyword">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <button type="submit" class="btn btn-danger wrn-btn">Search</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 rounded  bg-success">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5 text-white">Total Applications</a>
            <p class="text-white">{{$applications->count()}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5">Saved Jobs</a>
            <p>{{$applications->count()}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 bg-danger rounded">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5 text-white">% of Profile Complete</a><br>
            <a href="{{route('profile-wizard')}}"><small class="text-white">Complete Your Profile</small></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">      
      @include('success')
      @forelse($jobs as $job)
      <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
        @php $jobtitle = str_slug($job->job_title, '-'); @endphp
        <h5 style="color:#0B0B3B;"><a href="/jobview/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a> 
          <a href=""><i class="fa fa-heart text-danger pull-right" align="right" onclick="event.preventDefault();
          document.getElementById('save-job-{{$job->id}}').submit();">
          <form id="save-job-{{$job->id}}" action="{{ route('user-save', $job->id) }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="id" value="{{$job->id}}">
          </form>
        </i></a></h5>
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
      @empty
      <p>No jobs found.</p>
      @endforelse

      <div align="center">
        <a href="#" class="text-center"><button class="btn text-white" style="background-color:#0B0B3B;">Browse All Jobs</button></a>
      </div>
    </div>
  </div>
</div>
@endsection