@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(6, 10, 10, 0.6), rgba(6, 10, 10,0.6)), url({{asset('home/img/ann.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%; margin-top: 20px;">
    <h1 class="text-center" style="font-weight: 300; color: #fff; margin-top:50px;">The networked Pros Training Center</h1>
    <div class="row" style="padding-top: 10%; padding-bottom: 0%;">

<div class="col-lg-12">
        <div style="background-color: transparent;">
        <form action="TrainingSeminars/search" class="serach-form-area" method="get">
        @csrf
 	<div class="row justify-content-center" style="margin-top: 20px;margin-bottom: 10px;">
 		<div class="col-md-3">
 <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Training/Seminar Category</option>
    @foreach ($trainings as $trainingcategory)
    <option name="category" value="$trainingcategory->id">{{$trainingcategory->jobcategories}}</option>
    @endforeach
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">Options</label>
  </div>
</div>
 		</div>
 		<div class="col-md-3">
 <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Choose Location</option>
    @foreach($locations as $town)
    <option name="town" value="$town->id">{{$town->name}}</option>
    @endforeach
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">Options</label>
  </div>
</div>
 		</div>
 		<div class="col-md-2">
 			<button type="submit" class="btn btn-default btn-block text-white" style="background-color:#EA730A;">Search</button>
 		</div>
 	
 	</div>	
	</form>
        </div>
</div>
    </div>
      
         </div>
         
         <div class="container-fluid">
            <h3 class="text-center text-primary">Search your Trainings and Seminars by Category</h3>
           <div class="row">
               @foreach ($trainings as $training)
                       <div class="col-md-3">
                           <a href="/TrainingSeminars/{{$training->id}}" class="nav-link" style="font-size:1.3em">
                       <div class="card card-body"  style="border: 1px solid #0B0B3B;">
                          <i class="fa fa-bandcamp fa-x text-success"> {{$training->jobcategories}}</i>
    
                        </div>
                        </a>
                        <br>
                    </div>
                    @endforeach
              <div class="pull-right">      
             {{$trainings->links()}}
             </div>
           </div>
         </div>
         <br>
           <div class="container">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-danger" data-toggle="tab" href="#home"><i class="fa fa-clock-o fa-x text-primary" aria-hidden="true"></i> View Latest Trainings and Seminars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-danger" data-toggle="tab" href="#menu1"><i class="fa fa-list-alt fa-x text-primary" aria-hidden="true"></i> </i> Most Popular Trainings and Seminars</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link text-danger" data-toggle="tab" href="#menu2"><i class="fa fa-map-marker fa-x text-primary" aria-hidden="true"></i> Trainings and Seminars by Location</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
      
    <div id="home" class="container tab-pane active"><br>
    	<div class="row">
      	    @foreach($latesttraining as $latest)
      	<div class="col-md-4">
    <ul class="list-group list-group-flush">
  <li class="list-group-item"style="border-top: 1px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-angle-right"></i><a href="/TrainingSeminars/training/{{$latest->id}}" style="color:#0B0B3B;"> {{$latest->title}}<br></a> </li>
</ul>
      	</div>
     @endforeach
    	</div>
    	
{{$latesttraining->links()}}
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
     <div class="row">
         @foreach($trainingpopularity as $popular)
    		<div class="col-md-4">
   <ul class="list-group list-group-flush">
  <li class="list-group-item " style="border-top: 1px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-angle-double-right text-primary"></i> <a class="" href="/TrainingSeminars/training/{{$popular->id}}" style="color:#0B0B3B;">{{$popular->title}}</a></li>
</ul>
    		</div>
    		@endforeach
     </div>
     {{$trainingpopularity->links()}}
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
          @foreach($locations as $trainingtown)
          <div class="col-md-3">
              <ul class="list-group list-group-flush">
  <li class="list-group-item " style="border-top: 1px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-map-marker text-primary"></i>
  <a href="/TrainingSeminarsLocation/{{$trainingtown->id}}" style="color:#0B0B3B;">{{$trainingtown->name}}</a>
  </li>
  </ul>
          </div>
          @endforeach
      </div>

    </div>
  </div>
</div>
         <br>
         <div class="container-fluid">
             <h1 class="text-center text-primary">How we can help you</h1>
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
         <br>
         <div class="jumbotron jumbotron-fluid" style="background-color:#0A1665">
<div class="container">
<p class="text-center">
    <a class="btn btn-lg text-white"style="background-color:#EC3712;"><i class="fa fa-upload" aria-hidden="true"></i> Post a Training</a>   <a class="btn btn-lg text-white"style="background-color:#EC3712;"><i class="fas fa-user-plus"></i> Request a Training</a>
    <a class="btn btn-lg text-white" style="background-color:#EC3712;"><i class="fa fa-eye" aria-hidden="true"></i> View Training</a>
</p>

</div>
         </div>
         <div class="container-fluid">
             <p><h3  class="text-center">Finding it hard?</h3></p>
             <p class="text-center"><a href="#"><i class="fa fa-phone fa-4x" aria-hidden="true"></i></a></p>
             <p ><h3 class="text-center">Give us a Call</h3></p>
         </div>
         
@endsection