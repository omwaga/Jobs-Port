@extends('layouts.app')
@section('content')
<section class="contact pt-100 pb-100" id="contact">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 mx-auto text-center">
             <div class="section-title mb-100">
                <h4  style="font-family: 'Barlow Condensed', sans-serif; color:orange">How The Networked Pros can help you.</h4>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-4">
         </div>
         <div class="col-lg-4 border-danger">
<p>
    <hr style=" border:1px solid orange;">
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white h4" href="/Jobs"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Find a Job</a>
          <hr style=" border:1px solid orange;">
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white h4" href="/Register"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Design eye catching professional CVs</a>
            <hr style=" border:1px solid orange;">
          </li>
        <li class="nav-item">
            <a class="nav-link active text-white h4" href="/training"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> 
              Discover training opportunities and grow your career</a>
              <!--<hr style=" border:1px solid orange;">-->
        </li>
      </ul>
</p>
         </div>
         <div class="col-lg-4">
                <p>
                    <hr style=" border:1px solid orange;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active text-white h4" href="/Register"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                             Connect with a mentor</a>
                             <hr style=" border:1px solid orange;">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white h4" href="/Register"> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                              Network with peers in your profession</a>
                              <hr style=" border:1px solid orange;">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white h4" href="/Register"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Get Career Advice</a>
                            <hr style=" border:1px solid orange;">
                          </li>
                      </ul>
                </p>
         </div>
           <!--<p class="float-right" style="color:orange;">We turn your dreams into reality</p>-->
       </div>
    </div>
 </section>
       
<br>
  <div class="container">
    <h3 class="text-center">Top Jobs</h3>
  </div>
  <div class="container-fluid">
        <div class="row">
            @foreach ($jobs as $item)
            <div class="col-md-4">
                    <div class="card card-body">
                    <p><b><a class="" style="color: #FF5733;font-family: 'Crimson Text', serif; font-size: 21px;" href="/jobview/{{$item->id}}"> {{$item->jobtitle}}</a></b></p>
                               <p> <b><a href="/dashboard/show/{{$item->id}}" style="font-family: 'Roboto', sans-serif;font-size: 18px;">{{$item->companyname}}</a></b></p>
                               <p class="" style="color: #2C3E50;font-family: 'Roboto', sans-serif;font-size: 16px;">{{$item->jobtype}} | |Payment: {{$item->salary}} |{{$item->location}}</p>
                           
                        
                    </div>
                    <br>
                </div>
                
            @endforeach

        </div>
        <p style=" justify-content:center;">{{$jobs->links()}}</p>
        <br>
    </div>
    <br>
<div class="container" style="background-color: #fff;">
      <br>
      <p><h3 class="text-center">Discover new Jobs</h3></p>
      <p class="text-center">We have more than 10000 jobs waiting for you</p>
      <p class="text-center"><a class="btn btn-default btn-lg text-center text-white" href="/Jobs" style="border-radius: 0%; background-color:#D84C1F;">Discover million  jobs</a></p>
      <br>
    </div>
        <br>
        
    <div class="container">
     <div class="col-sm-12">
                <h3 class="text-center">Top Employers</h3>
            </div>
            <hr>
            
<div class="container">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row text-center">
                      @foreach ($companies as $item)
                    <div class="col-sm-2 text-center"><img class="img-thumbnail" src="/storage/uploads/{{$item->logo}}" alt="1 slide"></div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
        </div>
    <br>
            <div class="container">
    <h3 class="text-center">Top Trainings</h3>
  </div>
  <div class="container-fluid">
        <div class="row">

@foreach ($training as $train)
<div class="col-lg-4">
    <div class="card card-body">
    <p>Title: {{$train->title}} | {{$train->location}} </p>
    <p>Begin: {{$train->sdate}}| End: {{$train->edate}}  </p>
    <hr>
    <p>{{ str_limit(strip_tags($train->description), 200) }}
        @if (strlen(strip_tags($train->description)) > 200)
        <br>
        ... <a href="#" class="btn btn-default btn-sm">Book Training</a>
        @else
        <br>
        <a href="#" class="btn btn-default btn-sm float-right bg-dark text-white" style="border-radius: 0%;">Book Training</a>
        @endif
   </p>
    </div>
</div>
@endforeach
</div>
{{$training->links()}}
</div>
 <br>
    <div class="container">
      <h2 class="text-center">Top Training Companies</h2>
    
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-body">
          <div class="row">
              @foreach($companies as $company)
              
                             <div class="col-lg-2">
                  <img class=" img-fluid d-block" src="/storage/uploads/{{$company->logo}}">
              </div> 

              @endforeach
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection