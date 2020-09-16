@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
  <h4 class="text-center text-dark">Express Recruitment</h4><br>
  <p class="text-center">Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process.</p>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @forelse($express_categories as $category) 
          @php $cat = str_slug($category->name, '-'); @endphp
          <div class="col-md-4">  
            <a href="{{route('expresscandidates', $cat)}}" class="text-white">      
              <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  style="background: linear-gradient(rgba(0, 0, 60, 1), rgba(0, 0, 230, 0)), url({{asset('Images/express_categories/graphic.jpg')}})">
                <h5>{{$category->name}}</h5>
                <p class="text-white"> 
                  {{$category->users->count() ?? 0}} Candidates</p>
              </div>
          </a>
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
    @include('new.express-sidebar')
</div>
</div>
</div>
</div>
@endsection
