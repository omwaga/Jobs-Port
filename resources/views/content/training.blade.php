@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">
        <div class="container" style="">
            <br>
              <div class="dropdown">
   <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fa fa-home" aria-hidden="true"></i> | Training Providers
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Universities</a>
    <a class="dropdown-item" href="#">Training Colleges</a>
    <a class="dropdown-item" href="#">Technical Institutions</a>
  </div>
</div>
            <br><br><br>
        <p><h2 class=" text-white text-center" style="text-transform: uppercase;">Discover best deals on training courses <br> from Top institutions</h2></p>
       
        <form action="/filter" method="get" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="type" id="exampleFormControlSelect1">
                                <option selected>Type of Course</option>
                                      @foreach ($training_type as $type)
                          <option value="{{$type->training_type}}">{{$type->training_type}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="subject" id="exampleFormControlSelect1">
                                <option selected>Course Subject</option>
                                      @foreach ($categories as $subject)
                          <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select name="town" class="form-control search-slt" id="exampleFormControlSelect1">
                                <option selected>Training Location</option>
                                      @foreach ($locations as $town)
                          <option value="{{$town->id}}">{{$town->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
    <h6> <i class="fa fa-bars text-danger"></i>  Training Categories</h6>
  </a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
     <h6> <i class="fa fa-globe text-danger"></i> Trainings By Location</h6>
  </a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
      <h6><i class="fa fa-bolt text-danger"></i> Top Trainings</h6>
  </a>
</div>
</div>
<div class="col-md-9">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div class="row">
          @foreach($categories as $trainingcategory)
      
      <div class="col-md-4">
          
          <a style="color:#0B0B3B;" href="/trainingcategory/{{$trainingcategory->id}}"><i class="fas fa-angle-double-right text-primary"></i>
          {{$trainingcategory->name}} <span class="badge badge-dark">{{$trainingcategory->trainings->count()}}</span><br></a>
      
          </div>
      	@endforeach 
      </div>  
  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <div class="row">
     	    		@foreach($locations as $location)
    		<div class="col-md-4">
    		    <a style="color:#0B0B3B;" href="/traininglocation/{{$location->id}}"><i class="fas fa-angle-double-right text-primary"></i>
          {{$location->name}} <span class="badge badge-dark">{{$location->trainings->count()}}</span><br></a>
    		</div>
    		@endforeach
     </div>
  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
       <div class="row">
          @foreach($latesttraining as $training)
          <div class="col-md-4">
    		    <a style="color:#0B0B3B;" href="/trainingcourses/{{$training->id}}"><i class="fas fa-angle-double-right text-primary"></i>
          {{$training->title}}<br></a>
          </div>
          @endforeach
      </div>
  </div>
</div>
</div>
</div>

<div class="container-fluid column card border-light mb-3 d-flex justify-content-center"><br>
  <h3 class="text-center"><b><i class="fa fa-tag text-danger" aria-hidden="true"></i> Trending Courses</b></h3><br>
  
              <div class="row">
              @foreach($besttraining as $training)
          <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
          <a class="text-success" href="/trainingcourses/{{$training->id}}"><h5 style="color:#0B0B3B;">{{$training->title}}</h5></a>
    
                  <p>Posted By: <a href="/traininginstitution/{{$training->institution->id}}" class="text-primary">{{$training->institution->name }}</a></p>
                  
                  <ul class="list-group list-group-flush">
                 <li class="list-group-item">
  {{ $training->town->name }} |  {{$training->duration}} | {{$training->training_type}} | Ksh {{$training->cost}}
  </li>
</ul>
     </div>
     @endforeach 

    </div>
</div>

<div class="container-fluid column card card-body border-light d-flex justify-content-center">
  <h3 class="text-center"><b><i class="fa fa-fire text-danger" aria-hidden="true"></i> Hot Deals</b></h3><br>
  
              <div class="row">
              @foreach($besttraining as $training)
          <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
          <a class="text-success" href="/trainingcourses/{{$training->id}}"><h5 style="color:#0B0B3B;">{{$training->title}}</h5></a>
                  <p>Posted By: <a href="/traininginstitution/{{$training->institution->id}}" class="text-primary">{{$training->institution->name }}</a></p>
    <ul class="list-group list-group-flush">
                 <li class="list-group-item">
  {{ $training->town->name }} |  {{$training->duration}} | {{$training->training_type}} | Ksh {{$training->cost}}
  </li>
</ul>
     </div>
     @endforeach 

    </div>
</div>

</div>

 <br>
         <div class="container-fluid">
             <h2 class="text-center text-primary">How we can help you</h2>
             <div class="row">
                    <div class="col-lg-4">
                       <div class="card card-body"> 
                        <h4 class="text-center">Connect you to top trainers</h4><hr>
 <p class="">We connect top companies to top trainers who have been interviewed and they
     posses vast experience in their area of specialization.
 </p>
                    </div>
                       </div>
                    <div class="col-lg-4">
                            <div class="card card-body"> 
                                    <h4 class="text-center">Skills meets Opportunity</h4><hr>
             <p class="">We connect experienced trainers to top notch companies
                 that are need of trainers. Show case yoir training skills with us.
             </p>
                                </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="card card-body"> 
                                    <h4 class="text-center">Advertise trainings</h4><hr>
             <p class="">Apart from connecting trainers to companies, we 
                 also advertise your trainings with us.Let us help you grow and 
                 reach your potential.
             </p>
                                </div>
                    </div>
                </div>
         </div>
         
@endsection