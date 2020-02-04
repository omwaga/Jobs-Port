@extends('layouts.employer')
@section('content')
<div class="container">
      <marquee behavior="scroll" direction="left">Your Account is pending approval.Please wait for a few seconds as we validate your details entered.</marquee>
      <div class="card card-body" style="font-family: 'PT Sans Narrow', sans-serif;font-size:17px;">
        <h2 class="text-primary">My Company profile <a><i class="fas fa-edit float-right text-primary"></i></a></h2><hr style="border:solid 1px #000;">
          <div class="row">
              <div class="col-md-6">
                  @foreach($profile as $profil)
                  <img src="/storage/uploads/{{$profil->logo}}">
                  @endforeach
              </div>
          </div>
          <div class="row">
<div class="col-md-6" style="border-right:solid 1px #000;">
    <p class="text-primary">Contact Person details</p>
    <div class="row">
          @foreach($profile as $profil)
    <div class="col-md-6">
       <p>Firstname: {{$profil->firstname}}</p>
       <p>Lastname: {{$profil->lastname}}</p>
        <p>Town/City: {{$profil->caddress}}</p>
         </div>
           @endforeach  
                    @foreach($profile as $profil)
    <div class="col-md-6">
       <p>Email address: {{$profil->cemail}}</p>
       <p>Postal Code: {{$profil->postcode}}</p>
       <p>Contact Number: {{$profil->phonenumber}}</p>
         </div>
           @endforeach  
    </div>
</div>
    
<div class="col-md-6">
        <p class="text-primary">Company details</p>
        <div class="row">
         @foreach($profile as $profil)
        <div class="col-md-6">
       <p>Company Name: {{$profil->cname}}</p>
       <p>Location: {{$profil->location}}</p>
      <p>Company Email: {{$profil->email}}</p>
      <p>Size: {{$profil->csize}} employees</p>
      <p>Contact No: {{$profil->telephone}}</p>
      <p>Address: {{$profil->address}}</p>
         </div>
        @endforeach
          @foreach($profile as $profil)
        <div class="col-md-6">
       <p> Website: <a href="{{$profil->website}}">{{$profil->website}}</a></p>
       <p>Industry Type: {{$profil->industry}}</p>
        <p>Contact Person: {{$profil->cperson}}</p>
        <p>Employer Type: {{$profil->temployer}}</p>
        <p>Country: {{$profil->country}}</p>
         </div>
        @endforeach
        </div>
</div>
        
      </div>
</div>
</div>

@endsection