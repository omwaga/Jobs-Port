@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
  <h4 class="text-center text-dark">Express Recruitment</h4><br>
  <p class="text-center">Connecting Jobseekers with potential Employers</p>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @forelse($express_categories as $category) 
          @php $cat = str_slug($category->name, '-'); @endphp
          <div class="col-md-4">      
            <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
              <a href="{{route('expresscandidates', $cat)}}">  
                <img src="{{asset('storage/expresscategories/'.$category->cover_image)}}" width=100% height="120">
                <h5>{{$category->name}}</h5>
                <p> 
                  {{$category->users->count() ?? 0}} Candidates</p>
                </a>
              </div>
            </div>
            @empty
            @endforelse
            {{$express_categories->links()}}
          </div> 

          <div >
            <h5 class="text-center">Testimonials</h5>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner bg-secondary">
                <div class="carousel-item active">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">Very helpful when it comes to selection of jobs suiting your personalitye</p>
                    <h4 class="text-white">Collins Collins</h4><br>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">Very helpful when it comes to selection of jobs suiting your personalitye</p>
                    <h4 class="text-white">Collins Collins</h4><br>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container text-center">​
                    <br>
                    <picture>
                      <img src="{{asset('/Images/profile.png')}}" class="img-fluid img-thumbnail rounded-circle" alt="..." width="100px">
                    </picture>
                    <p class="text-white">Very helpful when it comes to selection of jobs suiting your personalitye</p>
                    <h4 class="text-white">Collins Collins</h4><br>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>       
        </div>
        <div class="col-md-3"> 
          @include('front.express-sidebar')
        </div>
      </div>
    </div>
  </div>
  @endsection
