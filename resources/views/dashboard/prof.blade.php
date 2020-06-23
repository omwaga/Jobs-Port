@extends("layouts.app")
@section("content")
<!--main content start-->
<div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/banner-5.jpg')}}');">
  <div class="container">
    <h2 class=" text-danger text-center" style="text-transform: uppercase;">Discover Best job Vacancies <br> from Top Employers</h2>

    <form action="/search-jobs" method="get" novalidate="novalidate">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <select class="form-control search-slt" name="duty" id="exampleFormControlSelect1">
                <option selected>All Job Functions</option>
                @foreach($industries as $industry)
                <option value="{{$industry->id}}">{{$industry->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <select class="form-control search-slt" name="location" id="exampleFormControlSelect1">
                <option selected>All Locations</option>
                @foreach($towns as $town)
                <option value="{{$town->id}}">{{$town->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
              <input class="form-control search-slt" name="keyword" type="text" placeholder="Search by Keyword">
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
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5">Total Applications</a>
            <p>{{$applications->count()}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5">Saved Jobs</a>
            <p>{{$applications->count()}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
        <div class="row">
          <div class="col-md-3 h1 text-center">
            <i class="fa fa-users text-secondary"></i>
          </div>
          <div class="col-md-9">
            <a href="" class="h5">% of Profile Complete</a><br>
            <a href="{{route('profile-wizard')}}"><small class="text-danger">Complete Your Profile</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection