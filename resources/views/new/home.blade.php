@extends('layouts.app')
@section('content')
<!--<br>-->
<section class="section section-top section-full">
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})">
  <div class="container">
  <div class="row">
      <div class="col-md-8" style=" padding-top: 5rem;">
      <h2 class=" text-white text-center">DON'T SEARCH FOR JOBS. <br> FIND THE RIGHT FIT INSTEAD.</h2>
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
      <div class="col-md-12">
        <div class="row">
         <div class="col-md-8" style="background-color:#0B0B3B;">
             <div class="mb-1 text-white-50 small">For Jobseekers</div>
               <h5 class="text-white">BUILD PROFESSIONAL RESUMES AND COVER LETTERS
                  <a class="btn btn-danger text-white" href="{{route('resumesamples')}}">GET STARTED</a>
               </h5>
         </div>
         <div class="col-md-4 btn-danger">
             <div class="mb-1 text-white-50 small">For Jobseekers</div>
               <h4 class="text-white">FIND THE RIGHT FIT <a  style="background-color:#0B0B3B;" class="btn text-white" href="{{route('customizeresume')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i> LOGIN</a></h4>
         </div>
         </div>
      </div><br>
      <div class="col-md-12" align="center">
               <h4 class="mb-0">TOP COMPANIES HIRING AT THE NETWORKEDPROS NOW</h4>
    <!--start code-->
  <div class="row ">
      <div class="col-12 py-4">
          <div class="row">
                <!--Breaking box-->
                <div class="col-md-3 col-lg-2 pr-md-0">
                    <div class="p-2 bg-primary text-white text-center breaking-caret"><span class="font-weight-bold">View all Companies</span></div>
                </div>
                <!--end breaking box-->
                <!--Breaking content-->
                <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                    <div class="breaking-box">
                        <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                            <!--breaking news-->
                            <div class="carousel-inner">
                                <!--post-->
                                <div class="carousel-item">
                                  <div class="row">
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                  </div>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <div class="row">
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                  </div>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <div class="row">
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                  </div>
                                </div>
                                <!--post-->
                                <div class="carousel-item">
                                    <div class="row">
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                     <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                     <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                  </div>
                                </div>
                                <!--post-->
                                <div class="carousel-item active">
                                    <div class="row">
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                     <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                    <div class="col-md-6">
                                  <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <a class="text-primary" href="#">Company Name</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--end breaking news-->
                            
                            <!--navigation slider-->
                            <div class="navigation-box p-2 d-none d-sm-block">
                                <!--nav left-->
                                <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <!--nav right-->
                                <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--end navigation slider-->
                        </div>
                    </div>
                </div>
                <!--end breaking content-->
            </div>
        </div>
  </div>
  <!--end code-->
               <h5 class="card-text">LET US HELP YOU HIRE BETTER</h5>
               <div class="row">
                <div class="col-md-4">
                  <p>Let Us help You Hire better Or Call Sales +251-116-67-33-24 Already have an account?</p>
                </div>
                  <div class="col-md-4">
                     <p><i class="fa fa-clock text-white" aria-hidden="true"></i> 2 Minutes to Post</p>
                     <p><i class="fa fa-users text-white" aria-hidden="true"></i> Attract Audience</p>
                     <p><i class="fa fa-volume-control-phone text-white" aria-hidden="true"></i> Contact Directly</p>
                  </div>
                  <div class="col-md-4">
                     <p><i class="fa fa-flag text-white" aria-hidden="true"></i> Unlimited Applies</p>
                     <p><i class="fa fa-bullseye text-white" aria-hidden="true"></i> 30 days Job Visibility</p>
                      <p><i class="fa fa-pied-piper text-white" aria-hidden="true"></i> Manage your Applicants</p>
                  
            <div class="box-btn">
                <a class="btn btn-danger text-white" href="{{route('hirre')}}">Post a Job</a>
            </div>
            </div>
         </div>
   </div>
</div>
<br>

<div class="container">
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
          <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="settings">International Jobs</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="pag1" role="tabpanel">
          <div class="sv-tab-panel" align="center">
            <h4>LATEST JOBS</h4>
            <div class="row">
            @foreach($jobs as $job)
              <div class="col-md-4"> 
            <ul>
        @php $jobtitle = str_slug($job->jobtitle, '-'); @endphp
              <li style="list-style: none;" class="pb-2"><a href="/jobview/{{$job->id}}/{{$jobtitle}}" style="color:#0B0B3B;">
               {!! $job->jobtitle !!}
               </a></li>
            </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab-pane" id="pag2" role="tabpanel">
          <div class="sv-tab-panel" align="center">
            <h4>JOBS BY LOCATION</h4>
            <div class="row">
            @foreach($towns as $town)
              <div class="col-md-4"> 
            <ul>
              <li style="list-style: none;" class="pb-2"><a href="/job-location/{{$town->name}}" style="color:#0B0B3B;">
               {!! $town->name !!}
               </a></li>
            </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab-pane" id="pag3" role="tabpanel">
          <div class="sv-tab-panel" align="center">
            <h4>JOBS BY INDUSTRY</h4>
            <div class="row">
            @foreach($industry as $industrie)
              <div class="col-md-4"> 
            <ul>
        <!-- @php $industry = str_slug($industrie->name, '-'); @endphp -->
              <li style="list-style: none;" class="pb-2"><a href="/job-industry/{{$industrie->name}}" style="color:#0B0B3B;">
               {!! $industrie->name !!}
               </a></li>
            </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="tab-pane" id="pag4" role="tabpanel">
          <div class="sv-tab-panel" align="center">
           <h4>GOVERNMENT JOBS</h4>
            <p>CONTEUDO 4</p>
          </div>
        </div>

        <div class="tab-pane" id="pag5" role="tabpanel">
          <div class="sv-tab-panel" align="center">
            <h4>NGO AND HUMANITARIAN SECTOR JOBS</h4>
            <p>CONTEUDO 5</p>
          </div>
        </div>

        <div class="tab-pane" id="pag6" role="tabpanel">
          <div class="sv-tab-panel" align="center">
            <h4>UN JOBS</h4>
            <p>CONTEUDO 6</p>
          </div>
        </div>

        <div class="tab-pane" id="pag7" role="tabpanel">
          <div class="sv-tab-panel">
            <h3>INTERNATIONAL JOBS</h3>
            <p>CONTEUDO 7</p>
          </div>
        </div>

      </div>
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