@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h5 class="pageheader-title">Update Profile</h5>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Company Profile</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    @include('errors')
    @include('success')
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="card">
      <div class="card-header no-bd">
       <h5>Update Company Profile</h5>
     </div>
     <div class="card-body">
       @include('errors')
       <h4>Company Registration Details</h4>
       <form role="form" method="post" action="{{route('employer-profile.update', $company->id)}}" enctype="multipart/form-data">
         @method('PATCH')
         @csrf<!--display the error messages -->
         <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
            <div class="panel-body">

              <div class="form-group">
                <label>Company Name:</label>
                <input class="form-control @error('company_name') is-invalid @enderror" type="text" value="{{$company->company_name}}" name="company_name" required />
                @error('company_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Type of Employer:</label>
                <select class="form-control" name="employer_type" required>
                  <option>{{$company->employer_type ?? 'Select Employer Type'}}</option>
                  <option>Direct Employer</option>
                  <option>Recruitment Agency</option>
                </select>
              </div>
              <div class="form-group">
                <label>Company Phone Number:</label>
                <input class="form-control @error('company_phone_number') is-invalid @enderror"  type="text" name="company_phone_number" value="{{$company->company_phone_number}}" />
                @error('company_phone_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
              <div class="form-group">
                <label>Company Email:</label>
                <input class="form-control @error('company_email') is-invalid @enderror"  type="text" name="company_email" value="{{$company->company_email}}" />
                @error('company_email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
              <div class="form-group">
                <label>Company Website:</label>
                <input class="form-control @error('company_website') is-invalid @enderror"  type="text" name="company_website" value="{{$company->company_website}}" />
                @error('company_website')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
              <div class="form-group">
                <label>Company Logo:</label>
                <input class="form-control @error('logo') is-invalid @enderror"  type="file" name="logo" value="{{$company->logo}}" />
                @error('logo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="panel panel-info">

          <div class="panel-body">
            <div class="form-group">
              <label>Industry Type:</label>
              <select class="form-control" name="company_industry" required>
                <option value="{{$company->company_industry?? ''}}">{{$company->company_industry ?? 'Select Industry'}}</option>
                @foreach ($industries as $indust)
                <option value="{{$indust->name}}">{{$indust->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Country:</label>
              <select class="form-control" name="country" required>
                <option>{{$company->country ?? 'Select Category'}}</option>
                @foreach ($countries as $country)
                <option>{{$country->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Town/County/State:</label>
              <select class="form-control" name="company_location" required>
                <option>{{$company->company_location ?? 'Select Town/County/State'}}</option>
                @foreach ($towns as $town)
                <option>{{$town->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Company Size:</label>
              <select class="form-control" name="company_size">
                <optio>{{$company->company_size ?? 'Select Size'}}</option>
                 <option>0-19</option>
                 <option>20-49</option>
                 <option>50-99</option>
                 <option>100-249</option>
                 <option>Above 250</option>
               </select>
             </div>
             <div class="form-group">
              <label>Company Address:</label>
              <input class="form-control @error('company_address') is-invalid @enderror"  type="text" name="company_address" value="{{$company->company_address}}" />
              @error('company_address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Company Description:</label>
          <textarea class="form-control ckeditor" rows="4" name="description" required>{!!$company->description!!}</textarea>
        </div>  
      </div>

      <div class="card-footer no-bd">
        <button type="submit" class="btn btn-primary btn-sm">Update Details</button>
      </div>
    </form>
    <div class="col-md-12" align="center" style="padding-top: 3rem">
      <h4>Update Login Information</h4>

      <form method="post" action="{{route('password.update', $company->id)}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <div class="row">
            <div class="col-md-4">
              <label class="text-right">Email Address:</label>
            </div>
            <div class="col-md-8">
              <input class="form-control text-left"  type="text" name="username" value="{{$company->username}}" />
            </div>
          </div>
        </div> 
        <div class="form-group">
          <div class="row">
            <div class="col-md-4">
              <label class="text-right">Password:</label>
            </div>
            <div class="col-md-8">
              <input class="form-control text-left"  type="text" name="password" value="{{old('password')}}" />
            </div>
          </div>
        </div> 
        <div class="form-group">
          <div class="row">
            <div class="col-md-4">
              <label class="text-right">Confirm Password:</label>
            </div>
            <div class="col-md-8">
              <input class="form-control text-left"  type="text" name="confirm_password" />
            </div>
          </div>
        </div>        
      </div>
    </div>
    <div class="card-footer no-bd">
     <button type="submit" id="addRowButton" class="btn btn-primary btn-sm">Update Login info</button>
   </div>
 </form>
</div>
</div>
</div>
@endsection