@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">
  <div class="row">
    <div class="col-md-8 card card-body border-light shadow-lg bg-white rounded" >
      <p><b class="h3">{{$job->job_title}}</b></p>

      <div class="row">
        <div class="col-md-9">
          <ul style="list-style: none;">
            <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
            <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type ?? ''}}</li>
            <li><b style="font-weight: bold;">Salary:</b> {{$job->salary ?? ''}}</li>
            <li><b style="font-weight: bold;">Deadline:</b> {{$job->deadline ?? ''}}</li>
            <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{$days_to_deadline ?? ''}} days</span></li>
          </ul>
          </div>
          <div class="col-md-3">            
          @if($job->employer_logo !=="no-logo")
          <img class="rounded-circle img-fluid" src="{{asset('storage/job_logos/'.$job->employer_logo)}}" alt="{{$job->job_title}}" width="100" height="100">
          @else
          <img class="rounded-circle img-fluid" src="{{asset('storage/logos/'.$job->employer->logo)}}" alt="{{$job->job_title}}" width="100" height="100">
          @endif
          </div>
          </div>

          <div class="pull-right">
          @auth
          @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <a class="h5 pull-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('apply',[$job->id, $jobtitle])}}">Apply</a>
          @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
          <a class="h5 pull-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
          @endif
          @else
          @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <a class="h5 pull-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('joblogin',[$job->id, $jobtitle])}}">Apply with us</a>
          @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
          <a class="h5 pull-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
          @endif
          @endauth
          </div>
      <hr>

        <h4 style="color:#0B0B3B; font-weight: bold;">Job Description</h4>
        <p>{!!$job->summary!!}</p>

        <h4 style="color:#0B0B3B; font-weight: bold;">Job Requirements</h4>
        <p>{!!html_entity_decode($job->description)!!}</p>

        <h4 style="color:#0B0B3B; font-weight: bold;">How to Apply</h4>
        @if($job->apply === "No")
        <p>{!!$job->application_details!!}</p>
        @else
        <ol>
          <li>Register with the networked pros if not registered or login to your account if you had registered.</li>
          <li>Create your career profile: Personal Details, Work Experience, Education History</li>
          <li>Browse the available jobs that match your skill-set and apply</li>
          <li>You can also update your career profile before applying for a vacancy</li>
        </ol>

        <div class="pull-right">
        @auth
          @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <a class="h5 pull-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('apply',[$job->id, $jobtitle])}}">Apply</a>
          @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
          <a class="h5 pull-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
          @endif
          @else
        @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
        @php $jobtitle = str_slug($job->job_title, '-'); @endphp
        <a class="h5 float-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('joblogin',[$job->id, $jobtitle])}}">Apply with us</a>
        @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
        <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
        @endif
        @endauth
        </div>
        @endif
    </div>

    <div class="col-lg-4">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search e.g software developer" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary bg-info text-white" type="submit">Search</button>
        </div>
      </div>
      <h4 class="text-center" >Latest Jobs</h4>
      @foreach($featured as $feature)
      <ul class="list-group list-group-flush">
        @php $jobtitle = str_slug($feature->job_title, '-'); @endphp
        <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/jobview/{{$feature->id}}/{{$jobtitle}}" style="color:#181557;text-decoration:none;">{{$feature->job_title}}</a></li>
      </ul>
      @endforeach

   @include('new.rightnav') 

      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- verticaladd -->
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-client="ca-pub-9415122333094581"
      data-ad-slot="5481420996"
      data-ad-format="auto"
      data-full-width-responsive="true"></ins>
      <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>
 </div>
</div>
@endsection