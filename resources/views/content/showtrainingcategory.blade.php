
@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">

<div class="col-md-12">
    <div class="row">
        <div class="col-md-8"> 
        <label>Current Search: {{$trainingcategory->name}}</label>
<!-- Buttons to choose list or grid view -->
<button class="btn btn-light pull-right" onclick="listView()"><i class="fa fa-bars"></i> List View</button>
<button class="btn btn-light pull-right" onclick="gridView()"><i class="fa fa-th-large"></i> Grid View</button>

      </div>
      <div class="col-md-4">
              <form method="GET" action="/searchtraining">
          <div class="input-group mb-3">
  <input type="search" name="search" class="form-control" placeholder="Search this category" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-info bg-info text-white" type="submit">Search</button>
  </div>
</div>
</form>
      </div>
      </div>
</div>

<div class="row">
<div class="col-md-8">
<div class="row">
    @if($trainingcategory->trainings->count() > 0)
    @foreach($trainingcategory->trainings as $training)
  <div class="column card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
    <h5 style="color:#0B0B3B;">{{$training->title}}</h5>
    
    </div>
                  <p>Posted By: <a href="/traininginstitution/{{$training->institution->id}}" class="text-primary">{{$training->institution->name }}</a></p>
                        <div class="row">
                 <p class="text-secondary">{{ $training->town->name }} |  {{$training->duration}} | {{$training->training_type}} | Ksh {{$training->cost}}</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                    {{$training->short_description}} <a class="btn btn-danger pull-right" href="/trainingcourses/{{$training->id}}">See the course</a>
                </p>
                </div>
     </div>
       </div> 
  </div>
   @endforeach
   @else
  <p>Nothing to show in this category</p>
  @endif
</div>
</div>
<div class="col-md-4">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b><i class="fa fa-bars"></i>  Training Category</b>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              @foreach($categories as $category)
              @if($category->trainings->count()>0)
              <li class="d-flex justify-content-between align-items-center">
                  <a href="/trainingcategory/{{$category->id}}" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                      {{$category->name}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{ $category->trainings->count() }}
                  </span>
              </li>
              @endif
              @endforeach
          </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <b><i class="fa fa-globe"></i>  Location</b>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              @foreach($locations as $location)
              @if($location->trainings->count()>0)
              <li class="d-flex justify-content-between align-items-center">
                  <a href="/traininglocation/{{$location->id}}" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                      {{$location->name}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{ $location->trainings->count() }}
                  </span>
              </li>
              @endif
              @endforeach
          </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <b><i class="fa fa-check"></i>  Training type</b>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
             @foreach($training_type as $type)
             <li>
            <form method="GET", action="/trainingtype/{{$type->training_type}}">
                
                          <input name="training_type" type="hidden" value="{!!$type->training_type!!}">
              <button type="submit" class="nav-link btn btn-group" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                      {{$type->training_type}}
               </button>
               </form>
             </li>
             @endforeach
         </ul>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          <b><i class="fa fa-list"></i>  Order by</b>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              <li>
                 <form method="GET", action="{{route('sortcategory')}}">
                      <input name="category" type="hidden" value="{{$trainingcategory->id}}">
                <input name="sortedby" type="hidden" value="default">
              <button type="submit" class="nav-link btn btn-group" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     Default
               </button>
               </form>
               </li>
              <li>
                  <form method="GET", action="{{route('sortcategory')}}">
                      <input name="category" type="hidden" value="{{$trainingcategory->id}}">
                <input name="sortedby" type="hidden" value="latest">
              <button type="submit" class="nav-link btn btn-group" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     Latest
               </button>
               </form>
              </li>
              <li>Most Popular</li>
          </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
     </div>

</div>
@endsection
