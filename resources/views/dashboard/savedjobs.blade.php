
@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">

     <div class="row">
         <div class="col-md-8">
                 <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
    <h5 style="color:#0B0B3B;">Job Title</h5>
    
    </div>
                  <p>Posted By: <a href="#" class="text-primary">company name</a></p>
                        <div class="row">
                 <p class="text-secondary">job type | Salary: salary</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                    Description <a class="btn btn-danger pull-right" href="#">Apply</a>
                </p>
                </div>
     </div>
       </div> 
  </div>
             </div>
                      <div class="col-md-4">
                          @include('dashboard.rightnav')        
         </div>
     </div>

</div>
@endsection
