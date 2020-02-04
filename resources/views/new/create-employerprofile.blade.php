<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link href="https://fonts.googleapis.com/css?family=sans-serif" rel="stylesheet">-->
   <link rel="shortcut icon" href="{{asset('Images/logo/Networked.jpg')}}">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  /*font-family: sans-serif;*/
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  /*font-family: sans-serif;*/
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  /*font-family: sans-serif;*/
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
@include('navigation.navbar')
<form id="regForm" action="{{route('Createcompany')}}" method="post" enctype="multipart/form-data">
	@csrf
  <!--<h3 class="text-center"><strong>Company Registration details:</strong></h3>-->
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><strong>Contact person details:</strong>
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
    <label for="exampleFormControlInput1">Lastname</label>
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
    <input type="email" class="form-control border-success @error('email') is-invalid @enderror"  style="border-radius: 0px;" name="email" autocomplete="email" required>
     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
              <div class="col-md-6">
              <div class="form-group">
                   <label for="exampleFormControlInput1">Job Title</label>
    <input type="text" class="form-control border-success @error('jobtitle') is-invalid @enderror"  style="border-radius: 0px;" name="jobtitle" required>
  @error('jobtitle')
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
    <select name="address" class="form-control border-success" style="border-radius: 0px; background-color:#0C345D;color:#fff;" id="country">
        <option>Choose Country</option>
        @foreach($countries as $country)
        <option value="{{$country->id}}" data-price="+{{$country->CountryCode}}">{{$country->country}}</option>
        @endforeach
    </select>
  </div>
        </div>
                  <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Phone Number</label>
    <input type="tel" class="form-control border-success @error('telephone') is-invalid @enderror" id="phone" style="border-radius: 0px;" name="telephone" value="{{ old('telephone') }}" required>
    @error('telephone')
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
    <input type="text" class="form-control border-success @error('password') is-invalid @enderror"  style="border-radius: 0px;" name="password" required>
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
    <input type="text" class="form-control  @error('companyname') is-invalid @enderror" value="{{ old('companyname') }}"  style="border-radius: 0px;" name="companyname">
    @error('companyname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Town</label>
    <select name="location" class="form-control " style="border-radius: 0px;">
    	<option>..select location..</option>
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
    <label for="exampleFormControlInput1">Website</label>
    <input type="url" class="form-control  @error('website') is-invalid @enderror"  style="border-radius: 0px;" name="website" autocomplete="website" value="{{ old('website') }}">
     @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1"> Industry Type</label>
    <select name="cindustry" class="form-control " style="border-radius: 0px;">
    	<option>..choose your insustry...</option>
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
    <input type="tel" class="form-control  @error('companyemail') is-invalid @enderror" style="border-radius: 0px;" name="companyemail" value="{{ old('companyemail') }}" autocomplete="companyemail">
    @error('companyemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Contact Person</label>
    <input type="text" class="form-control  @error('contactperson') is-invalid @enderror" style="border-radius: 0px;" name="contactperson" value="{{ old('contactperson') }}">
     @error('contactperson')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
    </div>
    </div>
  <div class="tab">Company details:
  	        <div class="row">
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Company size</label>
  <select name="csize" class="form-control " style="border-radius: 0px;">
    	<option>..select size...</option>
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
  <select name="ctype" class="form-control " style="border-radius: 0px;">
    	<option>..choose employer type...</option>
    	<option>Direct Employer</option>
    	<option>Recruiting Agency</option>
    </select>
  </div>
        </div>
    </div>
       <div class="row">
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Company Telephone</label>
    <input type="tel" class="form-control  @error('phonenumber') is-invalid @enderror" placeholder="+254732654616" style="border-radius: 0px;" name="phonenumber" value="{{ old('phonenumber') }}" autocomplete="phonenumber">
    @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
        <div class="col-md-6">
              <div class="form-group">
    <label for="exampleFormControlInput1">Country of Registration</label>
    <input type="text" class="form-control @error('ccountry') is-invalid @enderror" placeholder="Kenya" style="border-radius: 0px;" name="ccountry" value="{{ old('ccountry') }}">
     @error('ccountry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Company logo</label>
            <input type="file" class="form-control" style="border-radius:0px" name="clogo" value="{{ old('clogo') }}" >
        </div>
    </div>
      <div class="row">
    	<div class="col-md-12">
    		<div class="form-group">
    	<label for="exampleFormControlInput1">Physical Address</label>
    	<textarea name="caddress" class="form-control" style="border-radius:0px" rows="4"></textarea>
    </div>
    </div>
    </div>
  </div>
   <div class="tab">Login Info:
   <label>Username</label>
    <p><input  type="email"placeholder="james@gmail.com" oninput="this.className = ''" name="uname"></p>
    <p><small>The username should be an email address</small></p>
    <br>
    <label>Password</label>
    <p><input  type="password" placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
   @if (session('status'))
                                  <div class="alert alert-success">
                                  {{ session('status') }}
                                           </div>
                                           @endif
</form>
@include('footer.footer')
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
    $('#country').on('change',function(){
    var price = $(this).children('option:selected').data('price');
    $('#phone').val(price);
});
</script>
</body>
</html>
