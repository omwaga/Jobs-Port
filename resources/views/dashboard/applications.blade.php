
@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">

     <div class="row">
         
         <div class="col-md-8">
                         @foreach($applications as $application)
                         <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
    <h5 style="color:#0B0B3B;"><a href="#">{{$application->job->jobtitle}}</a></h5>
    
    </div>
                  <p>Posted By: <a href="#" class="text-primary">{{$application->cprofile->cname}}</a></p>
                        <div class="row">
                 <p class="text-secondary">{{$application->job->jobtype}} | Salary: {{$application->job->salary}}</p>
                 <!--<div class="col-md-12">-->
                 <!--<a class="btn btn-danger pull-right" href="#">Details</a>-->
                 <!--</div>-->
                 </div>
       </div> 
  </div>
                         @endforeach

  
             </div>
                      <div class="col-md-4">   
                   @include('dashboard.rightnav')
         </div>
        
     </div>

</div>
@endsection
