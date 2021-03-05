@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper">
  <div class="container">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" align="center">
            <h5 style="color:#070A53;"><strong>Selected Industries</strong></h5>  
            <ul style="list-style: none;">
              @foreach($user_industries as $user_industry)
              <li>{{$user_industry->industry->name}}</li>
              @endforeach
            </ul>
            @include('errors')
            @include('success')
            @if($user_industries->count() > 0)
            <button class="btn text-white pull-right" style="background-color:#070A53;" data-toggle="modal" data-target="#newindustry">Add Industry</button>
            @include('jobseeker-dashboard.add-industrymodal')
            @else
            <form method="post" action="{{route('rjobs')}}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <label>Select Industry</label>
                  <select data-live-search="true" name="industry" class="form-control" data-live-search-style="startsWith" class="selectpicker">
                    <option>Select Industry</option>
                    @foreach($industries as $industry)
                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                    @endforeach
                  </select>

                </div>
                <div class="col-md-6">
                 <br>
                 <button type="submit" class="btn text-white"  style="background-color:#070A53;">Save</button>

               </div>
             </div>
           </form>
           @endif
         </div> 

         @forelse($jobs as $job)
         <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <h3 style="color:#0B0B3B;"><a href="/jobseeker/job/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a> 
            @auth
            <i class="fa fa-heart text-danger float-right" align="right" onclick="event.preventDefault();
            document.getElementById('save-job-{{$job->id}}').submit();">
            <form id="save-job-{{$job->id}}" action="{{ route('user-save', $job->id) }}" method="POST" style="display: none;">
              @csrf
              <input type="hidden" name="id" value="{{$job->id}}">
            </form>
          </i>
        @endauth</h3>
        <ul style="list-style: none;">
          <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
          <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type}}</li>
          <li><strong style="font-weight: bold;">Location:</strong> {{$job->town->name ?? ''}} - {{ $job->country->name ?? ''}}</li>
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
      {{$jobs->links()}}
    </div>
    <div class="col-md-4">
      @include('jobseeker-dashboard.rightnav')
    </div>
  </div>
</div>
</div>
@endsection