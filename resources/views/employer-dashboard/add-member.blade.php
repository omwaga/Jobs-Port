@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row  p-2">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h5 class="pageheader-title">Add Team Member</h5>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Team Member</li>
              </ol>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          @include('errors')
          @include('success')
          <form role="form" method="post" action="{{route('postempjob')}}">
            @csrf
            <div class="row p-3">
              <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                  <label class="col-form-label">Full Name:</label>
                  <input class="form-control" type="text" name="name" value="{{ old('name') }}" required="" />
                </div>
                <div class="form-group">
                  <label>Designation:</label>
                  <input class="form-control" value="{{old('designation')}}" type="text" name="designation" required />
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input class="form-control" value="{{old('password')}}" type="text" name="password" required />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">

                <div class="panel-body">
                  <div class="form-group">
                    <label>Email:</label><br>
                    <small>The email will be used for login</small>
                    <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"  type="email" name="email"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <label>Phone Number:</label>
                  <input class="form-control @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}"  type="text" name="phone_number"/>
                  @error('phone_number')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <p class="text-right">
            <button type="submit" class="btn btn-space btn-primary">Add Member</button>
          </p><br>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection