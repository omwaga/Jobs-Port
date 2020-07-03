@extends('layouts.app')
@section('content')s
<div class="container" style="padding: 5%;">
  <div class="card card-body">
    <div class="row">
      <div class="col-md-12">
       {!!Form::open(['action'=>'PagesController@storeprof','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
       {{csrf_field()}}
       @if (session('error'))
       <div class="alert alert-danger" role="alert">
        {{session('error')}}
      </div>
      @endif
      <br>
      <fieldset class="border p-2">
        <legend  class="w-auto">Create your Company Profile</legend>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">First Name</label>
              <input type="text" class="form-control border-success @error('fname') is-invalid @enderror" value="{{ old('fname') }}" placeholder="Catherine" style="border-radius: 0px;" name="fname" required>
              @error('fname')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Lastname</label>
              <input type="text" class="form-control border-success @error('lname') is-invalid @enderror" value="{{ old('lname') }}" placeholder="catheri" style="border-radius: 0px;" name="lname" required>
              @error('lname')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control border-success @error('ccemail') is-invalid @enderror" placeholder="Catherine@gmail.com" style="border-radius: 0px;" name="ccemail" autocomplete="ccemail" required>
              @error('ccemail')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Create your password</label>
              <input type="password" class="form-control border-success @error('password') is-invalid @enderror" placeholder="catherine@gmail.com" style="border-radius: 0px;" name="password" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Phone Number</label>
              <input type="tel" class="form-control border-success @error('tel') is-invalid @enderror" placeholder="Catherine" style="border-radius: 0px;" name="tel" value="{{ old('tel') }}" required>
              @error('tel')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Address</label>
              <input type="text" class="form-control border-success @error('address') is-invalid @enderror" placeholder="P.O.BOX kasarani" style="border-radius: 0px;" name="address" value="{{ old('address') }}" required>
              @error('address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-6 ">
            <button class="btn btn-info float-right btn-block text-white" type="submit" style="border-radius:0px;">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
        </div>
      </fieldset>
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      {!!Form::close()!!}
    </div>
  </div>
</div>
</div>
@endsection