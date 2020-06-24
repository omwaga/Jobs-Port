<div class="tab-pane" id="personalinfo">
  <div class="row">
    <div class="col-lg-offset-1 col-lg-10">
      <h4 class="info-text"> Let's start with the basic information</h4>
      @if ($personalinfo)
      @include('dashboard.wizard.display-personal-details')
      @include('dashboard.wizard.edit-personal-details')
      @else
      <form method="POST" action="/personalinfo">
       @csrf
       <div class="col-sm-4">
         <div class="picture-container">
          <div class="picture">
            <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
            <input type="file" id="wizard-picture">
          </div>
          <h6>Choose Picture</h6>
        </div>
      </div>
      <div class="col-md-4">
        <label>Full Name:</label>
        <input type="text" name="name" class="form-control"style="border-radius:0px;"required autofocus value="{{old('name')}}">
      </div>
      <div class="col-md-4">
        <label>Email Address:</label>
        <input type="email" name="email" class="form-control"style="border-radius:0px;"required autofocus value="{{old('email')}}">
      </div>
      <div class="col-md-4">
        <label>Id/Passport Number:</label>
        <input type="number" name="id_pass" class="form-control"style="border-radius:0px;"required autofocus value="{{old('id_pass')}}">
      </div>

      <div class="col-md-4">
        <label>Phone Number:</label>
        <input type="text" name="phone" class="form-control"style="border-radius:0px;"required autofocus value="{{old('phone')}}">
      </div>
      <div class="col-md-4">
        <label>Gender:</label>
        <select name="gender" class="form-control" style="border-radius:0px;"required autofocus>
         <option value="">Select Gender</option>
         <option>Male</option>
         <option>Female</option>
       </select>
     </div>

     <div class="col-md-4">
      <label>Online Links:</label>
      <input type="text" name="links" class="form-control"style="border-radius:0px;" autofocus value="{{old('links')}}">
    </div>

    <div class="col-md-4">
      <label>Religion:</label>
      <select name="religion" class="form-control" style="border-radius:0px;" required autofocus value="{{old('religion')}}">
       <option value="">Select religion</option> 
       <option>Christianity</option>
       <option>Islam</option>
       <option>Hinduism</option>
       <option>Buddhism</option>
       <option>Prefer not to say</option>
     </select>
   </div>
   <div class="col-md-4">
    <label>Maritial Status:</label>
    <select name="marital_status" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
     <option>Marital Status</option>
     <option>Single</option>
     <option>Married</option>
     <option>Divorced</option>
     <option>Widowed</option>
     <option>Separated</option>
   </select>
 </div>

 <div class="col-md-4">
  <label>Date Of Birth:</label>
  <div class="input-group date">
    <input type="date" name="dob" class="form-control">
    <div class="input-group-addon">
      <span class="glyphicon glyphicon-th"></span>
    </div>
  </div>
</div>

<div class="col-md-4">
  <label>Nationality:</label>
  <select name="nationality" class="form-control" style="border-radius:0px;"required autofocus value="{{old('nationality')}}">
   <option value="">Select Country</option>
   @foreach($countries as $country)
   <option>{{$country->country}}</option>
   @endforeach
 </select>
</div>
<div class="col-md-4">
  <label>City:</label>
  <select name="city" class="form-control" style="border-radius:0px;"required autofocus value="{{old('city')}}">
   <option value="">Select City</option>
   <option>Nairobi</option>
 </select>
</div>
<div class="col-md-4">
  <label>Postal Address:</label>
  <input type="text" name="postal_address" class="form-control"style="border-radius:0px;" value="{{old('postal_address')}}">
</div>

<div class="col-md-4">
  <label>Postal Code:</label>
  <input type="text" name="postal_code" class="form-control"style="border-radius:0px;" value="{{old('postal_code')}}">
</div>

<div class="col-md-12"><br>
  <button type="submit" class="btn btn-danger btn-sm pull-right">Save</button>   
</div>
</form>
@endif
</div>
</div>
</div>