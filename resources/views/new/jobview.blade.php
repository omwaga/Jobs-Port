@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">
    <div class="row">
        <div class="col-md-8">
            <p><b class="h3">{{$job->jobtitle}}</b></p>
              <div class="row">
                <div class="col-md-6">
                  <p>Employer: <a href="/CompanyJobs/" class="text-primary">{{$job->employer->company_name}}</a></p>
                  <p>Salary: <b class="text-primary">{{$job->salary}}</b></p>
                </div>
                <div class="col-md-6">
                  @auth
                    @if( $job->expirydate > Carbon\Carbon::now() && $job->apply=='Yes')
                     <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('apply',[$job->id])}}">Apply with us</a>
                    @elseif($job->expirydate < Carbon\Carbon::now() && $job->apply=='Yes')
                     <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
                    @endif
                  @else
                    @if( $job->expirydate > Carbon\Carbon::now() && $job->apply=='Yes')
                     @php $jobtitle = str_slug($job->jobtitle, '-'); @endphp
                       <a class="h5 float-right btn text-white"  style="background-color:#0B0B3B;" href="{{url('joblogin',[$job->id, $jobtitle])}}">Apply with us</a>
                    @elseif($job->expirydate < Carbon\Carbon::now() && $job->apply=='Yes')
                        <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
                    @endif
                  @endauth
                </div>
              </div>
              <hr>
                        <div class="container">
                        <h4 class="text-primary">Job summary</h4>
                        <p>{!!$job->summary!!}</p>
                        <h4 class="text-primary">Job description</h4>
                        <p>{!!html_entity_decode($job->description)!!}</p>
                        <h4 class="text-primary">Steps to Apply</h4>
                        @if(!$job->apply)
                        <p>{!!$job->applicationdet!!}</p>
                        @else
                        <ol>
                            <li>Register with the networked pros if not registered or login to your account if you had registered.</li>
                            <li>Create your career profile: Personal Details, Work Experience, Education History</li>
                            <li>Browse the available jobs that match your skill-set and apply</li>
                            <li>You can also update your career profile before applying for a vacancy</li>
                        </ol>
                        @endif
                        @auth
 
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="/jobapplications/create">Apply</a>
@else
  
        @php $jobtitle = str_slug($job->jobtitle, '-'); @endphp
            <a class="h5 float-right btn text-white" href="{{url('joblogin',[$job->id, $jobtitle])}}" style="background-color:#0B0B3B;">Apply with us</a>
@endauth
</div>
        </div>
        
        <div class="col-lg-4">
            <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search e.g software developer" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary bg-info text-white" type="submit">Search</button>
  </div>
</div>
            <h3 class="text-center" >Featured Jobs</h3>
            @foreach($featured as $feature)
           <ul class="list-group list-group-flush">
        @php $jobtitle = str_slug($feature->jobtitle, '-'); @endphp
  <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/jobview/{{$feature->id}}/{{$jobtitle}}" style="color:#181557;text-decoration:none;">{{$feature->jobtitle}}</a></li>
</ul>
            @endforeach
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