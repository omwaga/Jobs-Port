@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;">
  
  </div>
<div class="container">
     <div class="row">
     	@foreach($companies as $company)
         <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="{{asset('Images/default-logo.png')}}">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="">{{$company->cname}}</a>
                    </div>
                    <div class="desc">{{$company->country}}</div>
                    <a href="" class="btn text-white" style="background-color: #0B0B3B">View Profile</a>
                </div>
            </div>

        </div>
             @endforeach
     </div>

</div>
@endsection
