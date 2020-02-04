@extends('layouts.app')
@section('title', 'Trainings and Seminars')
@section('content')
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
<br>
<br>
<div class="container">
    <div class="row">
       
        <div class="col-md-8">

         <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="border:0px;">
             <div class="col-md-12">
            <div class="row">
    <h5 style="color:#0B0B3B;">{{$training->title}}</h5>
    </div>
            <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6">
            <p>Posted By: <b class="text-primary">{{$training->institution->name}}</b></p>
                 </div>
                 <div class="col-md-6">
                 
                 <p class="pull-right text-secondary pull-right">Location: <i class="fas fa-map-marker text-dark"></i> {{$location}}</p>
                 </div>
                 </div>
</div>
            
            <div class="col-md-12">
                     <div class="row">
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">Start Date: <i class="fas fa-calendar text-dark"></i> {{$training->sdate}}</p>
                 </div>
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">Duration: <i class="fas fa-coins text-dark"></i> {{$training->duration}}</p>
                 </div>
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">Cost in Ksh: <i class="fas fa-coins text-dark"></i> {{$training->cost}}</p>
                 </div>
                 </div>
</div>
<div class="col-md-12">
    <div class="row">
        
                 <div class="col-md-6">

                 </div>
                 <div class="col-md-6">
                     <a class="h5 float-right btn btn-danger btn-block text-white"style="border-radius:0px;" href="/training/register/{{$training->id}}">Apply Now</a>
                 </div>
    </div>
</div>
</div>
</div>
                        <hr>
                        <h5 style="color:#181557;text-decoration:none;">Training description</h5>
                        <p>{!!$training->full_description!!}</p></br>
                        
                        <div class="card card-body bg-light" style="border:0px;">
                             <p class="h5"> Course Provider Information</p>
                             
<label>
  Course Provider Name:{{$training->institution->name}}
</label>

         
 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"  aria-expanded="true" aria-controls="collapseOne">
          View full provider details
        </button>
      </h5>
    </div>
    
    
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">View the Course Provider Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">Full Name:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border-radius:0px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"style="border-radius:0px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">Phone Number:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border-radius:0px;">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">Company:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border-radius:0px;">

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                                <button type="submit" data-toggle="collapse" data-target="#collapseOne" class="btn btn-primary btn-block"style="border-radius:0px;">
                                    <i class="fa fa-eye"></i>View Details
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
    </div>
  </div>
</div>
   

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
         <ul class="list-group">
  <li class="list-group-item">Email Address: Institution email</li>
  <li class="list-group-item">Phone Number: institution phone no</li>
  <li class="list-group-item">Website:</li>
  <li class="list-group-item">Facebook:</li>
  <li class="list-group-item">Office Address: address</li>
</ul>
       </div>
    </div>
  </div>
  </div>
                            </div>
        </div>
         <div class="col-md-4">
            <h3 class="text-center" >Popular Trainings</h3>
           <ul class="list-group list-group-flush">
               @foreach($trainingpopularity as $popular)
  <li class="list-group-item"><i class="fas fa-angle-right"></i> <a href="/trainingcourses/{{$popular->id}}" style="color:#181557;text-decoration:none;">{{$popular->title}}</a></li>
  @endforeach
</ul>
        </div>
    </div>
</div>
@endsection