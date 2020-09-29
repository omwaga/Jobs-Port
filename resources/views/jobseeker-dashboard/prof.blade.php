@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper">
  <div class="container"><br>
    <p>Suggested actions for you</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card-body border-light shadow-lg p-3 mb-3 bg-danger rounded">
          <div class="row">
            <div class="col-md-3 h1 text-center">
              <i class="fa fa-users text-white"></i>
            </div>
            <div class="col-md-9">
              <a href="" class="h5 text-white">Job Vacancies</a><br>
              <p class="text-white">Discover hundreds of jobs and create alerts to notify you when jobs matching your qualifications are advertised</p>
              <a href="#"><button class="btn text-white btn-sm" style="background-color: #005691">Browse Available Jobs</button></a>
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
              <a href="" class="h5">Express Recruitment</a>
              <p>Sit back, relax and let the networkedpros do the job searching for you! Create your career profile and be discover by leading employers.ls</p>
              <a href="{{route('profile-wizard')}}"><button class="btn btn-danger btn-sm">Get Started</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-body border-light shadow-lg p-3 mb-3 rounded" style="background-color:#005691;">
          <div class="row">
            <div class="col-md-3 h1 text-center">
              <i class="fa fa-users text-white"></i>
            </div>
            <div class="col-md-9">
              <a href="" class="h5 text-white">Career Interests</a>
              <a href="#"><button class="btn btn-danger btn-sm">Get Started</button></a>
            </div>
          </div>
        </div>
      </div>


      <div class="container"><br>
        <!-- <h2 class=" text-danger text-center" style="text-transform: uppercase;">Discover Best job Vacancies <br> from Top Employers</h2> -->
        <div class="p-3">
          <form action="/search-jobs" method="get" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select class="form-control" name="duty">
                      <option selected>All Job Functions</option>
                      @foreach($industries as $industry)
                      <option value="{{$industry->id}}">{{$industry->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select class="form-control" name="location">
                      <option selected>All Locations</option>
                      @foreach($towns as $town)
                      <option value="{{$town->id}}">{{$town->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <input class="form-control" name="keyword" type="text" placeholder="Search by Keyword">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <button type="submit" class="btn btn-danger">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-12">      
        @include('success')
        <h4>Latest Jobs</h4>
        @forelse($jobs as $job)
        <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <h5 style="color:#0B0B3B;"><a href="/jobseeker/job/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a> 
            <a href=""><i class="fa fa-heart text-danger float-right" align="right" onclick="event.preventDefault();
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
                {!! str_limit($job->summary, $limit = 300, $end = '...') !!}<a class="btn btn-danger float-right btn-sm" href="/jobseeker/job/{{$job->id}}/{{$jobtitle}}">View Job Details</a>
              </p>
            </div>
          </div>
        </div> 
        @empty
        <p>No jobs found.</p>
        @endforelse

        <div align="center">
          <a href="{{route('dashboard.jobs')}}" class="text-center"><button class="btn text-white" style="background-color:#005691;">Browse All Jobs</button></a>
        </div>
      </div>
    </div>
  </div>
  @endsection