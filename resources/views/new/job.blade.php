@extends('layouts.app')
@section('title')
Latest Job Vacancies and Training Courses in East Africa(Kenya, Uganda, Rwanda, Tanzania and Burundi)
@stop
@section('description')
Latest Job vacancies and Training courses in Kenya, Uganda, Tanzania, Rwanda and Burundi.
@section('keywords')
latest jobs in kenya,latest jobs in kenya 2019, latest jobs in kenya today,job vacancies in kenya,job vacancies in kenya today,latest job vacancies in kenya
job vacancies in kenya 2019,
@stop
@section('content')
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="banner-content">
                        <!-- Preheading -->
                        <p class="text-white text-uppercase text-center text-xs">
                          <span>The NetworkedPros</span>
                        </p>

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Land the right jobs<br>& vacancies in kenya
                        </h1>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                            Search for latest Jobs in Kenya.
                        </p>
    <div class="container" style="margin-bottom:1%;">
                <form method="get" action="{{route('homesearch')}}">
              @csrf
      <div class="row">
          <div class="col-lg-3">
               <select name="industry" class="form-control" style="border-radius:0px;">
                  <option>Job functions</option>
                  @foreach($industry as $inda)
                    <option value="{{$inda->id}}">{{$inda->name}}</option>
                  @endforeach
              </select>

          </div>
          <div class="col-lg-3">
                            <select name="function" class="form-control" style="border-radius:0px;">
                  <option>Select category</option>
                  @foreach($categories as $jobt)
                   <option value="{{$jobt->id}}">{{$jobt->jobcategories}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-lg-3">
                          <select name="location" class="form-control" style="border-radius:0px;">
                       <option>select location</option>
                      @foreach($towns as $town)
                  <option value="{{$town->id}}">{{$town->name}}</option>
                      @endforeach
              </select> 
          </div>
          <div class="col-lg-3">
             <button type="submit" class="btn btn-danger text-white btn-block" style="border-radius:0px;"><i class="fas fa-search"></i> search</button>
          </div>
                    </form>
      </div>
  </div>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    
<br>
<div class="container">
  <ul class="nav nav-tabs tabs-left bg-light" role="tablist" style="display:block;float:left;">
    <li class="nav-item " style="border-bottom: 8px solid #fff;">
      <a class="nav-link active text-primary" data-toggle="tab" href="#menu1" style="color:#0B0B3B;"><i class="fa fa-list-alt fa-x text-danger" aria-hidden="true"></i> </i> Jobs by Category</a>
    </li>
    <br>
    <li class="nav-item"  style="border-bottom: 8px solid #fff;">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu2" style="color:#0B0B3B;"><i class="fa fa-map-marker fa-x text-danger" aria-hidden="true"></i> Jobs by location</a>
    </li>
    <br>
    <li class="nav-item" style="border-bottom: 8px solid #fff;">
      <a class="nav-link text-primary" data-toggle="tab" href="#home" style="color:#0B0B3B;"><i class="fa fa-clock-o fa-x text-danger" aria-hidden="true"></i> View Latest Jobs</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane fade"><br>
    	<div class="row">
    		  	@foreach($jobs as $job)
      	<div class="col-md-6">
      	    <a href="/jobview/{{$job->id}}" class="list-group-item nav-link" style="color:#0B0B3B;border-top:solid 0.5px #000;border-left:0px;border-right:0px;border-bottom:0px;"><i class="fas fa-caret-right"></i> {{$job->jobtitle}} |
  Job type: {{$job->jobtype}}</a> 
      	</div>
      	@endforeach
    	</div>
    </div>
    <div id="menu1" class="container tab-pane active"><br>
     <div class="row">
         
     	    		@foreach($categories as $category)
     	    		@if($category->jobs->count() > 0)
    		<div class="col-md-4">
    		    <a class="list-group-item" href="/Industries/{{$category->jobcategories}}" style="color:#0B0B3B;border-top:dotted 0.5px #000;border-left:0px;border-right:0px;"><i class="fas fa-caret-right"></i> {{$category->jobcategories}} <span class="badge badge-primary float-right">{{$category->jobs->count()}}</span></a>
    		</div>
    		@endif
    		@endforeach
    		
     </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
              @if(count($towns) > 0)
          @foreach($towns as $town)
          <div class="col-md-3">
              <a href="/Location/{{$town->name}}" class="list-group-item nav-link" style="color:#0B0B3B;border-top:dotted 0.5px #000;border-left:0px;border-right:0px;"><i class="fas fa-caret-right"></i> {{$town->name}}<span class="badge badge-primary float-right">{{$town->jobposts->count()}}</span></a>
          </div>
          @endforeach
          @endif 
      </div>

    </div>
  </div>
  <div class="container" style="height:60px;">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- displayadd -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9415122333094581"
     data-ad-slot="6054451855"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
  <div class="container-fluid column card card-body border-light d-flex justify-content-center">
  <h3 class="text-center"><b>Top Jobs</b></h3><br>
  <div class="row">
    		  	@foreach($jobs as $job)
    		  	<div class="col-md-4">
    		  	<div class="card card-body bg-light">
    		  	    <p><a href="/jobview/{{$job->id}}" class="text-danger font-weight-bold">
    		  	   {!! $job->jobtitle !!}
    		  	   </a></p>
    		  	    <p>{{$job->jobtype}} | Expiry Date: {{$job->expirydate}} | Salary Ksh {{$job->salary}}</p>
    		  	   @if( $job->expirydate > Carbon\Carbon::now() )
    		  	   <p class="text-danger">Job expires after <span class="badge badge-primary">{{Carbon\Carbon::parse($job->expirydate)->diffInDays(Carbon\Carbon::now())}} </span> days </p>
    		  	   @else
    		  	   <p class="text-danger">Job has expired</p>
    		  	   @endif
    		  	</div>
    		  	<br>
    		  	</div>
<!--      	<div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">-->
<!--      	    <div class col-md-12>-->
<!--      	        <a href="/jobview/{{$job->id}}" class="text-danger"><h5 > {{$job->jobtitle}}</h5></a>-->
<!--    <ul class="list-group list-group-flush">-->
<!--  <li class="list-group-item">-->
<!--  {{$job->jobtype}} | Expiry Date: {{$job->expirydate}} | Salary Ksh {{$job->salary}}-->
<!--  </li>-->
<!--</ul>-->
<!--</div>-->
<!--      	</div>-->
      	@endforeach
    	</div>

    </div>
</div>
</div>
@endsection