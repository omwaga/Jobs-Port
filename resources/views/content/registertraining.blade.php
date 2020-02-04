@extends('layouts.app')
@section('title', 'Trainings and Seminars')
@section('content')
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
<br>
<br>
<div class="container">
    <div class="row">
       
        <div class="col-md-8">

         <div class="card card-body bg-light" style="border:0px;">
            <div class="row">
    <h5 style="color:#0B0B3B;"> You are applying for {{$training->title}}</h5>
    </div>
           

     <form method="POST" action="/applications">
         @csrf
         <input name="trainings_id" type="hidden" value="{{$training->id}}">
         
        <div class="form-group">
    <label for="exampleInputEmail1">Firstname</label>
     <input class="form-control" name="firstname" type="text" placeholder="First Name">
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Lastname</label>
     <input class="form-control" name="lastname" type="text" placeholder="Last Name">
  </div>
         
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
     <input class="form-control" name="phone_no" type="text" placeholder="Phone Number">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Institution</label>
     <select name="institution" class="form-control">
        <option>{{$training->institution->name}}</option>
     </select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Course</label>
     <select class="form-control" name="course">
  <option>{{$training->title}}</option>
</select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">You will be available from</label>
     <input class="form-control" name="availability" type="text" placeholder="Period">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
</div>
@endsection