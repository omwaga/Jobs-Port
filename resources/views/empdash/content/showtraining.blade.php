@extends('empdash.layouts')
@section('content')
<br>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary nav-link" href="#">Training and Seminars</a></li>
    <li class="breadcrumb-item active nav-link text-primary" aria-current="page">View Training</li>
  </ol>
</nav>
<div class="col-md-10">
<div class="row">
      <div class="card card-body bg-light" style="border:0px;">
            <p class="h3">Training Title: <b class="h3">{{$training->title}}
            </b> <h4 class="float-right" ></h4></p>
            
            <div class="col-md-12">
               <div class="row">
                 <div class="col-md-3">
                 
                 <p class="pull-right text-secondary pull-right"><label>Training Location: </label><i class="fa fa-map-marker text-dark"></i> location</p>
                 </div>
                 <div class="col-md-3">
                 <p class="pull-right text-secondary"><label>Starting Date: </label><i class="fa fa-calendar text-dark"></i> {{$training->sdate}}</p>
                 </div>
                 <div class="col-md-3">
                 <p class="pull-right text-secondary"><label>Ending Date: </label><i class="fa fa-calender text-dark"></i> {{$training->edate}}</p>
                 </div>
                 <div class="col-md-3">
                 <p class="pull-right text-secondary"><label>Cost in Ksh: </label><i class="fa fa-coin text-dark"></i> {{$training->cost}}</p>
                 </div>
                 </div>
</div>

    <label>Short Description:</label>
    <p>
        {{$training->short_description}}
    </p>
    <label>Full Description:</label>
    <p>
        {!!$training->full_description!!}
    </p>
    <div class="row">
        <div class="col-md-6 pull-right">
            <a class="btn btn-success" href="/trainings/{{$training->id}}/edit">Update</a>
            
            <!--Delete the Training/Sminar-->
             <form method="POST" action="/trainings/{{ $training->id}}">
            	@method('DELETE')
            	@csrf
             <button type="submit" class="btn btn-danger pull-right">Delete Project</button> 
             </form>
            
        </div>
    </div>
</div>  
</div>
</div>
</div>
@endsection
