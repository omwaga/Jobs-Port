@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">
  <div class="row">
    <div class="col-md-8 card card-body border-light shadow-lg bg-white rounded" >
      <h1><b class="h3">{{$job->job_title}} Job at {{$job->employer_name ?? $job->employer->company_name}}</b></h1>

      <div class="row">
        <div class="col-md-9">
          <ul style="list-style: none;">
            <li class="text-danger">{{$job->employer_name ?? $job->employer->company_name}}</li>
            <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type ?? ''}}</li>
            <li><b style="font-weight: bold;">Salary:</b> {{$job->salary ?? ''}}</li>
            <li><b style="font-weight: bold;">Deadline:</b> {{$job->deadline ?? ''}}</li>
            <li><strong style="font-weight: bold;">Location:</strong> {{$job->town->name ?? ''}} - {{ $job->country->name ?? ''}}</li>
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
        @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
        @php $jobtitle = str_slug($job->job_title, '-'); @endphp
        <a class="h5 pull-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('/jobseeker/joblogin',[$job->id, $jobtitle])}}">Apply with us</a>
        @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
        <a class="h5 pull-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
        @endif
      </div>
      <hr>
      
      <div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-format="fluid"
      data-ad-layout-key="-e5+6n-34-bt+x0"
      data-ad-client="ca-pub-9415122333094581"
      data-ad-slot="8953952401"></ins>
      <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>

      <h4 style="color:#0B0B3B; font-weight: bold;">Job Description</h4>
      <p>{!!$job->summary!!}</p>
      
      <div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-format="fluid"
      data-ad-layout-key="-e5+6n-34-bt+x0"
      data-ad-client="ca-pub-9415122333094581"
      data-ad-slot="8953952401"></ins>
      <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>

      <h4 style="color:#0B0B3B; font-weight: bold;">Job Requirements</h4>
      <p>{!!html_entity_decode($job->description)!!}</p>
      
      <div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-format="fluid"
      data-ad-layout-key="-e5+6n-34-bt+x0"
      data-ad-client="ca-pub-9415122333094581"
      data-ad-slot="8953952401"></ins>
      <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>

      <h4 style="color:#0B0B3B; font-weight: bold;">How to Apply</h4>
      <p>{!!$job->application_details ?? '' !!}</p>

      <div class="pull-right">
        @if( $job->deadline > Carbon\Carbon::now() && $job->apply=='Yes')
        @php $jobtitle = str_slug($job->job_title, '-'); @endphp
        <a class="h5 float-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('/jobseeker/joblogin',[$job->id, $jobtitle])}}">Apply with us</a>
        @elseif($job->deadline < Carbon\Carbon::now() && $job->apply=='Yes')
        <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
        @endif
      </div>
      <div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="fluid"
        data-ad-layout-key="-e5+6n-34-bt+x0"
        data-ad-client="ca-pub-9415122333094581"
        data-ad-slot="8953952401"></ins>
        <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
       </script>
     </div>
   </div>

   <div class="col-lg-4">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search e.g software developer" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary bg-info text-white" type="submit">Search</button>
      </div>
    </div>
    <h4 class="text-center" >Related Jobs</h4>
    @forelse($related_jobs as $related_job)
    <ul class="list-group list-group-flush">
      @php $jobtitle = str_slug($related_job->job_title, '-'); @endphp
      <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/job/{{$related_job->id}}/{{$jobtitle}}" style="color:#181557;text-decoration:none;">{{$related_job->job_title}}</a></li>
    </ul>
    @empty
    <p>No related jobs yet!</p>
    @endforelse
    
  <div>
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
    <h4 class="text-center" >Latest Jobs</h4>
    @foreach($featured as $feature)
    <ul class="list-group list-group-flush">
      @php $jobtitle = str_slug($feature->job_title, '-'); @endphp
      <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/job/{{$feature->id}}/{{$jobtitle}}" style="color:#181557;text-decoration:none;">{{$feature->job_title}}</a></li>
    </ul>
    @endforeach

    @include('front.rightnav') 

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