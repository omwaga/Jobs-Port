@extends('new.layout.app')
@section('content')
<div class="wrapper">
  <div class="main-panel" id="main-panel">
    <div class="content">
      <div class="row">
          <div class="container">
              <div class="row">
                  <div class="col-8">
                      <div class="card">
                          <div class="card-header">Create your company profile</div>
                          <div class="card-body">
                              {!!Form::open(['action'=>'DashboardController@store','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
                              {{csrf_field()}}
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Company Name</label>
                                  <div class="col-sm-10">
                                    <input type="text"class="form-control" id="staticEmail" value="" name="cname" required autofocus>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-2 col-form-label">Company website</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="www.indepth.co.ke" name="cwebsite" required autofocus>
                                  </div>
                                </div>
                                <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Location</label>
                                        <div class="col-sm-10">
                                            <select name="location" class="form-control">
                                                <option>Select Location</option>
                                                @foreach($towns as $town)
                                                <option value="{{$town->name}}">{{$town->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Company Function</label>
                                            <div class="col-sm-10">
                                                <select name="function" class="form-control">
                                                <option>Select Industry</option>
                                                @foreach($industries as $inda)
                                                <option value="{{$inda->name}}">{{$inda->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">Logo</label>
                                                <div class="col-sm-10">
                            <input type="file" class="form-control border-info" name="logo" required autofocus>
                                                </div>
                                              </div>
                                             
                                              <div class="form-group row">
                                                  <label for="inputPassword" class="col-sm-2 col-form-label">Contact Email</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputPassword" placeholder="" name="email" required autofocus value="<?php echo auth()->user()->email?>">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                      <input type="text" hidden class="form-control" id="inputPassword" placeholder="" name="namee" required autofocus value="<?php echo auth()->user()->name?>">
                                                    </div>
                                                  </div>
                                                <hr>
                                              <br>
                                              <button type="submit" class="btn btn-primary text-white float-right">Create & Proceed</button>
                                              @if (session('status'))
                                              <div class="alert alert-success">
                                              {{ session('status') }}
                                                       </div>
                                                       @endif
                {!!Form::close()!!}
                          </div>
                  </div>
                  </div>
                  <div class="col-4">
                      <div class="card">
                          <div class="card-header">Company Profile will help you</div>
                          <div class="card-body">
                              <p>1. Post a job</p>
                              <p>2. Recruit a Consultant</p>
                              <p>3. Recruit an Expert</p>
                              <p>4. Post an Event</p>
                              <p>5. Post a Training</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection