
@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">
<!--<nav aria-label="breadcrumb">-->
<!--  <ol class="breadcrumb">-->
<!--    <li class="breadcrumb-item"><a class="text-primary nav-link" href="#">{{$category->jobs->count()}} {{$category->jobcategories}} Jobs found</li>-->
<!--  </ol>-->
<!--</nav>-->

     <div class="row">
         <div class="col-md-8">
                 @foreach($category->jobs as $category_job)
                 <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
             <div class="col-md-12">
      <div class="row">
    <h5 style="color:#0B0B3B;">{{$category_job->jobtitle}}</h5>
    
    </div>
                  <p>Posted By: <a href="#" class="text-primary">..</a></p>
                        <div class="row">
                 <p class="text-secondary">{{$category_job->jobtype}} | Salary: {{$category_job->salary}}</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                   {!!$category_job->summary!!} <a class="btn btn-danger pull-right" href="/jobview/{{$category_job->id}}">Apply</a>
                </p>
                </div>
     </div>
     </div>
  </div>
  @endforeach
                 </div>
                      <div class="col-md-4">
             
             <h4 class="text-center" style="font-family: 'Source Sans Pro', sans-serif;">Advanced filter</h4>
             <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b><i class="fa fa-bars"></i>Job Categories</b>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              @foreach($categories as $category)
              @if($category->jobs->count() > 0)
              <li class="d-flex justify-content-between align-items-center">
                  <a href="" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     {{$category->jobcategories}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{$category->jobs->count()}}
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
          <b><i class="fa fa-globe"></i>Job Locations</b>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <ul>
              @foreach($locations as $location)
             @if($location->jobposts->count() > 0)
              <li class="d-flex justify-content-between align-items-center">
                  <a href="" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     {{$location->name}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{$location->jobposts->count()}}
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
          <b><i class="fa fa-check"></i>Job Functions</b>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
             @foreach($industries as $industry)
             @if($industry->jobposts->count() > 0)
             <li class="d-flex justify-content-between align-items-center">
                  <a href="#" class="nav-link" style="color:#0B0B3B;">
                      <i class="fas fa-angle-right"></i>
                     {{$industry->name}}
                  </a>
                  <span class="badge badge-primary badge-pill">
                      {{$industry->jobposts->count()}}
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
        <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          <b><i class="fa fa-list"></i> Order by</b>
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
@endsection
