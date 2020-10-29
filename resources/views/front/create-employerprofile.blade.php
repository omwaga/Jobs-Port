@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem">
 <div class="card p-3">
  <h4 class="text-center"><strong>Company Registration Details:</strong></h4>
  <small class="text-center">All marked  <span class="text-danger">*</span> fields are required</small>
  <hr style="border:solid #000 1px;">
  <form id="regForm" action="{{route('createcompany')}}" method="post" enctype="multipart/form-data">
    @include('errors')
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Company Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control  @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"  style="border-radius: 0px;" name="company_name">
          @error('company_name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Email address <span class="text-danger">*</span></label>
          <input type="email" class="form-control  @error('company_email') is-invalid @enderror" style="border-radius: 0px;" name="company_email" value="{{ old('company_email') }}" autocomplete="company_email">
          @error('company_email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Country of Registration <span class="text-danger">*</span></label>          
          <select name="country" class="form-control search-slt">
           <option value="">Select Country</option>
           @foreach ($countries as $key => $value)
           <option value="{{ $key }}">{{ $value }}</option>
           @endforeach
         </select> 
       </div>
       <div class="form-group">
        <label>State/Town <span class="text-danger">*</span></label>
        <select name="state" class="form-control " style="border-radius: 0px;">
         <option>Select Location</option>
         @foreach($town as $townn)
         <option value="{{$townn->name}}">{{$townn->name}}</option>
         @endforeach
       </select>
       @error('location')
       <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="form-group">
      <label>Company Logo</label>
      <input type="file" class="form-control" style="border-radius:0px" name="logo" value="{{ old('logo') }}" >
    </div>
    <div class="form-group">
      <label>Account Password <span class="text-danger">*</span></label>
      <input class="form-control" name="password" type="password">
    </div>
  </div>
  <div class="col-md-6">      
    <div class="form-group">
      <label> Industry Type <span class="text-danger">*</span></label>
      <select name="company_industry" class="form-control " style="border-radius: 0px;">
       <option>Choose your industry</option>
       @foreach($industry as $indust)
       <option value="{{$indust->name}}">{{$indust->name}}</option>
       @endforeach
     </select>
   </div>
   <div class="form-group">
    <label>Type of Employer <span class="text-danger">*</span></label>
    <select name="employer_type" class="form-control " style="border-radius: 0px;">
      <option>Select Employer Type</option>
      <option>Direct Employer</option>
      <option>Recruitment Agency</option>
    </select>
  </div>
  <div class="form-group">
    <label>Company Phone Number <span class="text-danger">*</span></label>
    <input type="tel" class="form-control  @error('company_phone_number') is-invalid @enderror"  style="border-radius: 0px;" name="company_phone_number" value="{{ old('company_phone_number') }}" autocomplete="company_phone_number">
    @error('company_phone_number')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div class="form-group">
    <label>Physical Address <span class="text-danger">*</span></label>
    <textarea name="company_address" class="form-control" style="border-radius:0px" rows="4">{{ old('company_address') }}</textarea>
  </div>
</div>
<div class="col-md-12" align="right">
 <button class="btn btn-danger" type="submit">Submit Registration Details</button> 
</div>
</div>
</form>
</div>
</div>
@endsection
