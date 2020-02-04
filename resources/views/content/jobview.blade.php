@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
             {!!Form::open(['action'=>['PagesController@show',$jobs->id],'method'=>'POST','class'=>'needs-validation'])!!}
                      {{csrf_field()}} 


            <p><b class="h3">{{$jobs->jobtitle}}
             @auth
             @if( $jobs->expirydate > Carbon\Carbon::now() && $jobs->apply=='Yes')
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('apply',[$jobs->id])}}">Apply with us</a>
            @elseif($jobs->expirydate < Carbon\Carbon::now() && $jobs->apply=='Yes')
            <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
            @else
            ...
            @endif
             @else
  @if( $jobs->expirydate > Carbon\Carbon::now() && $jobs->apply=='Yes')
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('joblogin',[$jobs->id])}}">Apply with us</a>
            @elseif($jobs->expirydate < Carbon\Carbon::now() && $jobs->apply=='Yes')
            <a class="h5 float-right btn btn-danger text-white btn-sm"style="border-radius:0px;" href="#">Deadline has elapsed</a>
            @else
            ...
            @endif
            
            @endauth
           
            </b>
                </p>
            @foreach($company as $comp)
            <p>Company name: <a href="/CompanyJobs/{{$comp->id}}"><b class="text-primary">{{$comp->companyname}}</b></a></p>
            @endforeach
             @foreach($jobcat as $jobc)
            <p>Category: <b class="text-primary">{{$jobc->jobcategories}}</b></p>
            @endforeach
              @foreach($towns as $town)
            <p>Location: <b class="text-primary">{{$town->name}}</b></p>
            @endforeach
            <p>Salary: <b class="text-primary">{{$jobs->salary}}</b></p>

                        <hr>
                        <h4 class="text-primary">Job summary</h4>
                        <p>{!!$jobs->summary!!}</p>
                        <h4 class="text-primary">Job description</h4>
                        <p>{!!$jobs->description!!}</p>
                        <h4 class="text-primary">Application details</h4>
                        <p>{!!$jobs->applicationdet!!}</p>
                        @auth
 
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="/jobapplications/create">Apply</a>
@else
  
            <a class="h5 float-right btn btn-info text-white"style="border-radius:0px;" href="{{url('joblogin',[$jobs->id])}}">Apply with us</a>
@endauth
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