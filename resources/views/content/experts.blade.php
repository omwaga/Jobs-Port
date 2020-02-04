
@extends('layouts.app')
@section('content')
<br>
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Preheading -->
                        <p class="text-white text-uppercase text-center text-xs">
                          <span>The NetworkedPros</span>
                        </p>

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            We enable you to expand <br>& reach the world
                        </h1>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                            We enable you to reach out internationally by......
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="{{route('registerexpert')}}" class="btn btn-primary ">
                                Create a Profile
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

<section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h1>Membership benefits</h1>
        <span>NetworkedPros experts membership is open to all facilitators, anywhere in the world.</span>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col-12 col-sm-4">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/512px-Gift_Flat_Icon_Vector.svg.png')}}" style="width:80px; height:80px;">
        <h3><strong>Visibility</strong></h3>
        <p>Nearly 7,000 Institutions,  and Learning centres around the world have used our portal to equip their staff with practical expertise skills.</p>
      </div>

      <div class="col-12 col-sm-4 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/clouds.svg')}}" style="width:80px; height:80px;">
        <h3><strong>Network</strong></h3>
        <p>Nearly 7,000 Institutions,  and Learning centres around the world have used our portal to equip their staff with practical expertise skills.</p>
      </div>

      <div class="col-12 col-sm-4 pt-4 pt-sm-0">
        <img alt="image" class="fdb-icon" src="{{asset('Images/experts/layer.svg')}}" style="width:80px; height:80px;">
        <h3><strong>Professional Development</strong></h3>
        <p>Nearly 7,000 Institutions,  and Learning centres around the world have used our portal to equip their staff with practical expertise skills.</p>
      </div>
    </div>

    <div class="row mt-5 justify-content-center">
      <div class="col-8">
        <img alt="image" class="img-fluid" src="{{asset('Images/experts/product-tour.svg.hi.png')}}">
      </div>
    </div>
  </div>
</section>

@endsection
