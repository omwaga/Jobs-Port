
@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
        <div class="alert alert-success" role="alert">
       {{$result->count()}} training(s) from the seach result.
      </div><hr>
      </div>
      <div class="col-md-4">
              <form method="GET" action="/searchtraining">
          <div class="input-group mb-3">
  <input type="search" name="search" class="form-control" placeholder="Whatcha Looking For?" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-info bg-info text-white" type="submit">Search</button>
  </div>
</div>
</form>
      </div>
      </div>
</div>
     <div class="row">
         @if($result->count())
         <div class="col-md-8">
                <div class="card card-body bg-light" style="border:0px;">
                    @php $columnnumber = 0; @endphp
                    @foreach($result as $training)
                    @php $columnnumber = $columnnumber + 1;@endphp
                 <a style="color:#0B0B3B;" href="/trainingcourses/training/{{$training->id}}"><strong>{{$columnnumber}}. {{$training->title}}</strong></a>
        @endforeach
                </div>   
             </div>
             
        
             @else
             <div class="col-md-8">
                <div class="card card-body bg-light" style="border:0px;">
                 <h5><strong>Other trainings and seminars that you would like</strong></h5>
                            </div>    
             </div>
             @endif
<div class="col-md-4">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Training Category
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
          Location
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
          Training type
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
             @foreach($training_type as $type)
             <li>{{$type->training_type}}</li>
             @endforeach
         </ul>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          Order by
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              <li>Default</li>
              <li>Latest</li>
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
