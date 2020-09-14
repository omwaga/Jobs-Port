@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 7rem">
  <form id="regForm" action="{{route('createcompany')}}" method="post" enctype="multipart/form-data">
   @csrf
   <div class="tab"><strong>Personal Information:</strong>
    @include('errors')
    <hr style="border:solid 1px #000;">
    <div class="row">
      <br>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">First Name</label>
          <input type="text" class="form-control border-success @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}"  style="border-radius: 0px;" name="firstname" required>
          @error('firstname')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Last Name</label>
          <input type="text" class="form-control border-success @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}"  style="border-radius: 0px;" name="lastname" required>
          @error('lastname')
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
          <input type="email" value="{{ old('personal_email') }}" class="form-control border-success @error('personal_email') is-invalid @enderror"  style="border-radius: 0px;" name="personal_email" autocomplete="personal_email" required>
          @error('personal_email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
         <label for="exampleFormControlInput1">Job Title</label>
         <input type="text" value="{{ old('job_title') }}" class="form-control border-success @error('job_title') is-invalid @enderror"  style="border-radius: 0px;" name="job_title" required>
         @error('job_title')
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
        <label for="exampleFormControlInput1">Country</label>
        <select name="country" class="form-control border-success" id="country">
          <option>Choose Country</option>
          @foreach($countries as $country)
          <option value="{{$country->id}}" data-price="+{{$country->country_code}}">{{$country->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleFormControlInput1">Phone Number</label>
        <input type="tel" class="form-control border-success @error('personal_phone_number') is-invalid @enderror" id="phone" style="border-radius: 0px;" name="personal_phone_number" value="{{ old('personal_phone_number') }}" required>
        @error('personal_phone_number')
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
        <label for="exampleFormControlInput1">Postal Code</label>
        <input type="text" value="{{ old('postal_code') }}" class="form-control border-success"  style="border-radius: 0px;" name="postal_code" required>
      </div>
    </div>

  </div>
</div>
<div class="tab"><strong>Company Registration Details:</strong>
  <hr style="border:solid #000 1px;">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleFormControlInput1">Company Name</label>
        <input type="text" class="form-control  @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"  style="border-radius: 0px;" name="company_name">
        @error('company_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleFormControlInput1">State/Town</label>
        <select name="company_location" class="form-control " style="border-radius: 0px;">
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
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Company Website</label>
      <input type="url" class="form-control  @error('company_website') is-invalid @enderror"  style="border-radius: 0px;" name="company_website" autocomplete="company_website" value="{{ old('company_website') }}">
      @error('company_website')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1"> Industry Type</label>
      <select name="company_industry" class="form-control " style="border-radius: 0px;">
       <option>Choose your industry</option>
       @foreach($industry as $indust)
       <option value="{{$indust->name}}">{{$indust->name}}</option>
       @endforeach
     </select>
   </div>
 </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="tel" class="form-control  @error('company_email') is-invalid @enderror" style="border-radius: 0px;" name="company_email" value="{{ old('company_email') }}" autocomplete="company_email">
      @error('company_email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>
  <div class="col-md-6">

  </div>
</div>
</div>
<div class="tab"><strong>Company details:</strong>
 <div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Company Size</label>
      <select name="company_size" class="form-control " style="border-radius: 0px;">
       <option>Select Size</option>
       <option>0-19</option>
       <option>20-49</option>
       <option>50-99</option>
       <option>100-249</option>
       <option>Above 250</option>
     </select>
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1">Type of Employer</label>
    <select name="employer_type" class="form-control " style="border-radius: 0px;">
      <option>Select Employer Type</option>
      <option>Direct Employer</option>
      <option>Recruitment Agency</option>
    </select>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Company Phone Number</label>
      <input type="tel" class="form-control  @error('company_phone_number') is-invalid @enderror"  style="border-radius: 0px;" name="company_phone_number" value="{{ old('company_phone_number') }}" autocomplete="company_phone_number">
      @error('company_phone_number')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Country of Registration</label>
      <input type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Kenya" style="border-radius: 0px;" name="country" value="{{ old('country') }}">
      @error('country')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <label>Company Logo</label>
    <input type="file" class="form-control" style="border-radius:0px" name="logo" value="{{ old('logo') }}" >
  </div>
</div>
<div class="row">
 <div class="col-md-12">
  <div class="form-group">
   <label for="exampleFormControlInput1">Physical Address</label>
   <textarea name="company_address" class="form-control" style="border-radius:0px" rows="4">{{ old('company_address') }}</textarea>
 </div>
</div>
</div>
</div>
<div class="tab"><strong>Account Login Details</strong>
 <div class="row">
 <div class="col-md-6">
  <div class="form-group">
 <label>Username<small> provide email for username</small></label>
 <input value="{{ old('username') }}"  type="email"placeholder="" class="form-control" name="username">
 <p><small>The username should be an email address</small></p>
  </div>
</div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleFormControlInput1">Password</label>
     <input class="form-control" name="password" type="password">
    </div>
  </div>
</div>
<button class="btn btn-danger" type="submit">Register</button> 
</form>
<script>
  $('#country').on('change',function(){
    var price = $(this).children('option:selected').data('price');
    $('#phone').val(price);
  });
</script>
</div>
@endsection
