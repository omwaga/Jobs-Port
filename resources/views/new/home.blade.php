@extends('layouts.app')
@section('content')
<!--<br>-->
<section class="section section-top section-full">
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})">
  <div class="container">
  <div class="row">
      <div class="col-md-8" style=" padding-top: 5rem;">
      <h2 class=" text-white text-center">Get the best job vacancies <br> & careers from NGO's, Government, & Private Institutions.</h2>
      <h4 class="text-white text-center">Browse for latest jobs and land your dream job.</h4>
  </div>
  <div class="col-md-4" align="center">
    @include('errors')
    @include('success')
      <div class="">
        <h5 class="text-white">Free Job Alerts</h5>
        <p class="text-center text-white">Get an Email on jobs matching your criteria </p>
        <p class="text-white">No Registration Required</p>
        <button class="btn text-white" data-toggle="modal" data-title="" data-caption="" data-target="#alert" style="background-color:#070A53;">Create Job Alert</button>
        </div>
    </div>
  </div>
  </div><br>
  <div class="container">
                <form method="get" action="{{route('homesearch')}}">
              @csrf
        <div class="col-lg-12">
         <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
               <select name="industry" class="form-control search-slt">
                  <option>All Job Industries</option>
                  @foreach($industry as $inda)
                    <option value="{{$inda->id}}">{{$inda->name}}</option>
                  @endforeach
              </select>

          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                  <select name="job_category" class="form-control search-slt">
                  <option>All Job Functions</option>
                  @foreach($categories as $jobt)
                   <option value="{{$jobt->id}}">{{$jobt->jobcategories}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                          <select name="country" class="form-control search-slt">
                       <option value="">Select Country</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
              </select> 
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                          <select name="state" class="form-control search-slt">
                       <option>State/Region</option>
              </select> 
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
             <button type="submit" class="btn btn-danger wrn-btn">Search</button>
          </div>
          </div>
          </div>
                    </form>
  </div>
</div>
</section>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="card text-white flex-md-row mb-4 shadow-sm h-md-250" style="background-color:#0B0B3B;">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">Resume Buider</strong>
               <h5 class="mb-0">
                  <a class="text-white" href="{{route('customizeresume')}}">Create a Professional Resume and Cover Letter</a>
               </h5><br>
               <div class="mb-1 text-white-50 small">For Jobseekers</div>
               <p class="card-text mb-auto">Use professional field-tested resume templates that follow the exact ‘resume rules’ employers look for. Easy to use & done within minutes - try now for free! <br>
               <p>Find the right job fit with the networkedpros.Submit job applications, and track  the applications.</p>
               <a class="btn btn-danger text-white" href="{{route('customizeresume')}}">Get Started</a></p>

            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="card text-white bg-primary flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <h5 class="mb-0">
                  <a class="text-white" href="{{route('hirre')}}">Search Best Talent with The NetworkedPro's Resume Database Access</a>
               </h5>
               <div class="mb-1 text-white-50 small">For Employers</div>
               <p class="card-text mb-auto">Reach out to millions of jobseekers and hire quickly with our fast and easy job posting services.</p>
               <div class="row">
                  <div class="col-md-6">
                     <p><i class="fa fa-clock text-white" aria-hidden="true"></i> 2 Minutes to Post</p>
                     <p><i class="fa fa-users text-white" aria-hidden="true"></i> Attract Audience</p>
                     <p><i class="fa fa-volume-control-phone text-white" aria-hidden="true"></i> Contact Directly</p>
                  </div>
                  <div class="col-md-6">
                     <p><i class="fa fa-flag text-white" aria-hidden="true"></i> Unlimited Applies</p>
                     <p><i class="fa fa-bullseye text-white" aria-hidden="true"></i> 30 days Job Visibility</p>
                      <p><i class="fa fa-pied-piper text-white" aria-hidden="true"></i> Manage your Applicants</p>
                  
            <div class="box-btn">
                <a class="btn btn-danger text-white" href="{{route('hirre')}}">Register</a>
            </div>
                  </div>
              </div>
            </div><!-- 
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;"> -->
         </div>
      </div>
   </div>
</div>
<br>
<div class="container">
        <div class="col-md-12" align="center">
    <h4 style="margin-top:2%; text-center"><b>Latest Jobs</b></h4>
    
      <div class="row">
    		  	@foreach($jobs as $job)
    		  	<div class="col-md-4">
    		  	<div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded">
        @php $jobtitle = str_slug($job->jobtitle, '-'); @endphp
    		  	    <p><a href="/jobview/{{$job->id}}/{{$jobtitle}}" class="font-weight-bold" style="color:#0B0B3B;">
    		  	   {!! $job->jobtitle !!}
    		  	   </a></p>
    		  	    <p>{{$job->jobtype}} | Expiry Date: {{$job->expirydate}} | Salary Ksh {{$job->salary}}</p>
    		  	   <!-- @if( $job->expirydate > Carbon\Carbon::now() )
    		  	   <p class="text-danger">Job expires after <span class="badge badge-primary">{{Carbon\Carbon::parse($job->expirydate)->diffInDays(Carbon\Carbon::now())}} </span> days </p>
    		  	   @else
    		  	   <p class="text-danger">Job has expired</p>
    		  	   @endif -->
    		  	</div>
    		  	<br>
    		  	</div>
      	@endforeach
      	<div class="col-md-12" align="center">
      	  {{ $jobs->links() }}
      	</div><br>
    	</div>
        </div>
    	    <div class="col-md-12" align="center">
    	    <a href="{{route('alljobs')}}" class="btn text-white" style="background-color:#070A53;">Browse the {{$alljobs->count()}} Jobs</a>
    	    </div>
</div>

        @include('new.create-alertsmodal')
      <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>
@endsection