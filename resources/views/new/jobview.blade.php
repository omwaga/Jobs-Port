@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <p><b class="h3">{{$job->jobtitle}}
             @auth
             @if( $job->expirydate > Carbon\Carbon::now() && $job->apply=='Yes')
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('apply',[$job->id])}}">Apply with us</a>
            @elseif($job->expirydate < Carbon\Carbon::now() && $job->apply=='Yes')
            <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
            @else
            ...
            @endif
             @else
  @if( $job->expirydate > Carbon\Carbon::now() && $job->apply=='Yes')
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('joblogin',[$job->id])}}">Apply with us</a>
            @elseif($job->expirydate < Carbon\Carbon::now() && $job->apply=='Yes')
            <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
            @else
            ...
            @endif
            
            @endauth
           
            </b>
                </p>
            <p>Company name: <a href="/CompanyJobs/"><b class="text-primary">{{$job->cprofile->cname}}</b></a></p>
            <p>Category: <b class="text-primary">{{$job->category->jobcategories}}</b></p>
            <p>Location: <b class="text-primary">{{$job->town->name}}</b></p>
            <p>Salary: <b class="text-primary">{{$job->salary}}</b></p>

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
  
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('joblogin',[$job->id])}}">Apply with us</a>
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
  <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/jobview/{{$feature->id}}" style="color:#181557;text-decoration:none;">{{$feature->jobtitle}}</a></li>
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