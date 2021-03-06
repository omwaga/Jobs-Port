@extends('layouts.app')
@section('content')
<!--<br>-->
<section class="section section-top section-full">
  <div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 140, 0), rgba(0, 86, 135, 1)), url({{asset('Images/banner-5.jpg')}})">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style=" padding-top: 7rem;">
          @include('errors')
          @include('success')
          <h2 class=" text-white text-center">WE CONNECT YOU WITH RESOURCES FOR JOB SEARCHING <BR> & FOR MOVING UP THE CAREER LADDER</h2>

          <p class="text-white text-center">Browse for latest jobs all over East Africa and land your dream job</p>
        </div>
      </div>
    </div><br>
    <div class="container">
      <form method="get" action="{{route('homesearch')}}">
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
            <option>All Job Categories</option>
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

<section class="boot-elemant-bg ">
  <div class="container position-relative py-md-3 py-0">
    <div class="row">
      <div class="col-lg-4 offset-lg-1 text-center">
        <h4 class="display-6 font-weight-bold">BE DISCOVERED BY EMPLOYERS</h4>
        <p>The Networked Pros is a leading job search and employee recruitment platform in East Africa. Are you looking for your next job? Register today for free job alerts. </p>
        <a href="{{route('Register')}}" class="btn btn-outline-primary btn-lg px-4"> REGISTER NOW </a>
      </div>
      <div class="col-lg-4 offset-lg-1 text-center">
        <h4 class="display-6 font-weight-bold">FREE JOB POSTING</h4>
        <p>Are you an employer looking to hire the best? It’s FREE. Post your vacancy & reach over 500,000 professionals.</p>
        <a href="{{route('employers')}}" class="btn btn-outline-primary btn-lg px-4"> GET STARTED </a>
      </div>
    </div>
  </div>
</section>

@include('front.featured-jobs');

<div class="container" id="title_message">
  <div class="vertical-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Latest jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">Jobs by Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Jobs by Industry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings">Government Jobs</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings">NGO and Humanitarian Jobs</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="settings">UN Jobs</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">Consultancies</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="pag1" role="tabpanel">
        <div class="sv-tab-panel" align="left">
          <h4>LATEST JOBS</h4>
          <div class="row">
            @forelse($jobs as $job)
            <div class="col-md-6"> 
              <ul>
                @php $jobtitle = str_slug($job->job_title, '-'); @endphp
                <li style="list-style: none;" class="pb-2"><a href="/job/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
                  {!! str_limit($job->job_title, $limit = 40, $end = '...job') !!}
                </a></li>
              </ul>
            </div>
            @empty
            <p>No jobs posted</p>
            @endforelse
          </div>
        </div>
      </div>
      <div class="tab-pane" id="pag2" role="tabpanel">
        <div class="sv-tab-panel" align="left">
          <h4>JOBS BY LOCATION</h4>
          <div class="row">
            @forelse($towns as $town)
            <div class="col-md-4"> 
              <ul>
                <li style="list-style: none;" class="pb-2"><a href="/job-location/{{$town->name}}" style="color:#0B0B3B;">
                 {!! $town->name !!} <span class="badge badge-primary badge-pill">{{$town->jobposts->count()}}</span>
               </a></li>
             </ul>
           </div>
           @empty
           <p>No jobs posted</p>
           @endforelse
         </div>
       </div>
     </div>
     <div class="tab-pane" id="pag3" role="tabpanel">
      <div class="sv-tab-panel" align="left">
        <h4>JOBS BY INDUSTRY</h4>
        <div class="row">
          @forelse($industry as $industrie)
          <div class="col-md-4"> 
            <ul>
              <li style="list-style: none;" class="pb-2"><a href="/job-industry/{{$industrie->name}}" style="color:#0B0B3B;">
               {!! $industrie->name !!} <span class="badge badge-primary badge-pill">{{$industrie->jobposts->count()}}</span>
             </a></li>
           </ul>
         </div>
         @empty
         <p>No jobs posted</p>
         @endforelse
       </div>
     </div>
   </div>
   <div class="tab-pane" id="pag4" role="tabpanel">
    <div class="sv-tab-panel" align="left">
     <h4>GOVERNMENT JOBS</h4>
     <div class="row">
      @forelse($government_jobs as $job)
      <div class="col-md-6"> 
        <ul>
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <li style="list-style: none;" class="pb-2"><a href="/job/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
            {!! str_limit($job->job_title, $limit = 40, $end = '...job') !!}
          </a></li>
        </ul>
      </div>
      @empty
      <p>No jobs posted</p>
      @endforelse
    </div>
  </div>
</div>

<div class="tab-pane" id="pag5" role="tabpanel">
  <div class="sv-tab-panel" align="left">
    <h4>NGO AND HUMANITARIAN SECTOR JOBS</h4>
    <div class="row">
      @forelse($ngo_jobs as $job)
      <div class="col-md-6"> 
        <ul>
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <li style="list-style: none;" class="pb-2"><a href="/job/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
            {!! str_limit($job->job_title, $limit = 40, $end = '...job') !!}
          </a></li>
        </ul>
      </div>
      @empty
      <p>No jobs posted</p>
      @endforelse
    </div>
  </div>
</div>

<div class="tab-pane" id="pag6" role="tabpanel">
  <div class="sv-tab-panel" align="left">
    <h4>UN JOBS</h4>
    <div class="row">
      @forelse($un_jobs as $job)
      <div class="col-md-6"> 
        <ul>
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <li style="list-style: none;" class="pb-2"><a href="/job/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
            {!! str_limit($job->job_title, $limit = 40, $end = '...job') !!}
          </a></li>
        </ul>
      </div>
      @empty
      <p>No jobs posted</p>
      @endforelse
    </div>
  </div>
</div>

<div class="tab-pane" id="pag7" role="tabpanel">
  <div class="sv-tab-panel" align="left">
    <h4>CONSULTANCIES</h4>
    <div class="row">
      @forelse($consultancies as $job)
      <div class="col-md-6"> 
        <ul>
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <li style="list-style: none;" class="pb-2"><a href="/job/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
            {!! str_limit($job->job_title, $limit = 40, $end = '...job') !!}
          </a></li>
        </ul>
      </div>
      @empty
      <p>No consultancies posted</p>
      @endforelse
    </div>
  </div>
</div>

</div>
</div>
</div><br>

<div class="container position-relative py-md-5 py-0 bg-theme">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h3 class="text-white display-5 font-weight-bold">RESUME BUILDER</h3>
      <p class="f-16 mb-4 text-white">Build professional resumes and cover letters using the networkedpros resume builder</p>
      <a href="{{route('resumesamples')}}" class="btn text-white btn-outline-danger btn-lg px-4"> GET STARTED </a>
    </div>
  </div><br>
</div>

<div class="container bg-danger card mb-5 text-white mt-5"><br>
    <div class="col-md-6 pt-2 pb-5  offset-md-3">
      <form method="POST" action="{{route('alerts.store')}}">
        @csrf
        <h4 align="center" class="text-white"> CREATE FREE JOB ALERTS </h4>
        <p class="text-white">Get an Email on jobs matching your criteria. No Registration Required.</p>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="name">Full Name:</label>
              <input type="text" name="full_name" class="form-control" id="name" placeholder="Enter Full Name" required="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="name">Phone Number:</label>
              <input type="text" name="phone_number" class="form-control" id="name" placeholder="Enter Phone Number" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address:</label>
          <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
          <small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Create Alerts</button>
      </form>
    </div>
</div>

<div class="main" align="center">
 <h4 class="mb-5">TOP COMPANIES HIRING AT THE NETWORKEDPROS NOW</h4>
 <div class="container">

  <div class="row blog">
    <div class="col-md-12">
      <div id="blogCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row">
              @foreach($employers as $employer)
              @php $name = str_slug($employer->company_name, '-'); @endphp
              <div class="col-md-3">
                <a href="{{route('employerProfile', $name)}}">
                  <img src="{{asset('storage/logos/'.$employer->logo)}}" class="rounded" alt="Image" style="max-width:60%;">
                </a>
                <a href="{{route('employerProfile', $name)}}"><h6>{{$employer->company_name}}</h6></a>
              </div>
              @endforeach
            </div>
            <!--.row-->
          </div>
          <!--.item-->
          <div class="carousel-item">
            <div class="row">
              @foreach($employers1 as $employer)
              @php $name = str_slug($employer->company_name, '-'); @endphp
              <div class="col-md-3">
                <a href="{{route('employerProfile', $name)}}">
                  <img src="{{asset('storage/logos/'.$employer->logo)}}" class="rounded" alt="Image" style="max-width:60%;">
                </a>
                <a href="{{route('employerProfile', $name)}}"><h6>{{$employer->company_name}}</h6></a>
              </div>
              @endforeach
            </div>
            <!--.row-->
          </div>
          <!--.item-->
        </div>
        <!--.carousel-inner-->
      </div>
      <!--.Carousel-->

    </div>
  </div>
</div>
</div><br>

<div class="container" align="center">
  <h2>For the Employers</h2>
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="our-services-wrapper mb-60">
        <div class="services-inner">
          <div class="our-services-text">
            <h4>Hiring is Simpler, Smarter<br> &
              Faster with The NetworkedPros<br></h4>
              <p>Sign-up and get access to 1,000s<br> of vetted jobseekers profiles. <br><br>You can also call our outreach team on<br> +254 706468123
               <br>
               <a class="btn btn-danger text-white" href="{{route('hirre')}}">Get Started</a></p>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" align="center">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-text">
              <h4>LET US HELP YOU HIRE BETTER</h4>
              <div class="row">
                <div class="col-md-6">
                 <p><i class="fa fa-clock text-success" aria-hidden="true"></i> 2 Minutes to Post</p>
                 <p><i class="fa fa-users text-success" aria-hidden="true"></i> Attract Audience</p>
                 <p><i class="fa fa-volume-control-phone text-success" aria-hidden="true"></i> Contact Directly</p>
               </div>
               <div class="col-md-6">
                 <p><i class="fa fa-flag text-success" aria-hidden="true"></i> Unlimited Applies</p>
                 <p><i class="fa fa-bullseye text-success" aria-hidden="true"></i> 30 days Job Visibility</p>
                 <p><i class="fa fa-pied-piper text-success" aria-hidden="true"></i> Manage your Applicants</p>
               </div>
               <div class="col-sm-12"><br>
                <div class="box-btn">
                  <a class="btn btn-danger text-white" href="{{route('foremployer')}}">Post a Job</a>
                </div>
                <p>Don’t have time? Send us your job advert to <a href="mailto:careers@thenetworkedpros.com?Subject=POST%20JOB" target="_top"> careers@thenetworkedpros.com</a> we will do the rest</p>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
<div class="col-md-8 offset-md-2">
            <h5>WHAT OTHERS HAD TO SAY</h5>
            <h3>Happy<strong> Jobseekers </strong></h3>
<p>The NetworkedPros gives you a unique way to discover employees with the best talents. </p>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner bg-theme">
                <div class="carousel-item active">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">"The NetworkedPros is very helpful when it comes to selection of jobs suiting your personality. This aspect landed me my current job"</p>
                    <h4 class="text-white">Robert Mike, Marketer </h4><br>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">"The NetworkedPros is very helpful when it comes to selection of jobs suiting your personality. This aspect landed me my current job"</p>
                    <h4 class="text-white">Robert  , Marketer </h4><br>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">"The NetworkedPros is very helpful when it comes to selection of jobs suiting your personality. This aspect landed me my current job"</p>
                    <h4 class="text-white">Robert Mike, </h4><br>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
</div> 
</div>

                          @include('front.create-alertsmodal')
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