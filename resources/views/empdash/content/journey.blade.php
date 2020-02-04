@extends('empdash.layouts')
@section('content')

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 30px auto;
  font-family: Raleway;
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
  font-family: Raleway;
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
  font-family: Raleway;
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
<form id="regForm" method="post" action="{{route('postempjob')}}">
	@csrf
  <h1>Post your Job</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Job post details:
    <div class="row">
    	  	<br>
        <div class="col-md-6">
    <div class="form-group">
                    <label>Enter job title</label>
              <input class="form-control @error('jobtitle') is-invalid @enderror" type="text" name="jobtitle" value="{{ old('jobtitle') }}" required />
                                             @error('jobtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
        </div>
        <div class="col-md-6">
    <div class="form-group">
                                            <label>Select Position</label>
                                            <select class="form-control" name="positiontype" required>
                                            	<option>--Select one--</option>
                                                <option>Part-time</option>
                                                <option>Full-time</option>
                                                <option>Contract</option>
                                                <option>Internship</option>
                                            </select>
                                        </div>        </div>
    </div>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                                            <label>Select Category</label>
                                            <select  class="form-control" name="jfunction" required>
                                            	<option>select category</option>
                                              @foreach($category as $jobc)
                                                <option value="{{$jobc->jobcategories}}">{{$jobc->jobcategories}}</option>
                                                @endforeach
                                            </select>
                                        </div>
        </div>
        <div class="col-md-6">
     <div class="form-group">
                                        <label>Select Industry</label>
                                            <select class="form-control" name="industry" required>
                                            <option>select Industry</option>
                                               @foreach ($industry as $indust)
                                                <option value="{{$indust->name}}">{{$indust->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
      <div class="form-group">
                                            <label>Select Town</label>
                                            <select class="form-control" name="jlocation" required>
                                            	<option>select town</option>
                                            	@foreach ($town as $tow)
                                            	<option value="{{$tow->name}}">{{$tow->name}}</option>
                                            	@endforeach
                                            </select>
                                        </div>
        </div>
        <div class="col-md-6">
 <div class="form-group">
                      <label>Salary Specification</label>
                                            <input class="form-control @error('salary') is-invalid @enderror"  type="text" name="salary" required />
                                            @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                                        </div>
        </div>
    </div>
  </div>
  <div class="tab">Job summary details
        <div class="row">
        <div class="col-md-6">
    <div class="form-group">
                                            <label>Expiry date</label>
                                            <input class="form-control"  type="date" name="expiry" required />
                             
                                        </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                                             <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                                                        required autofocus name="emaill" value="<?php echo Auth::guard('employer')->user()->email ?>"> 
                                        </div>	

        </div>
        <div class="col-md-3">
                                                     <div class="form-group">
                                         @foreach ($cname as $item)
                                            <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                                            required autofocus name="company" value="<?php echo $item->cname ?>">  
                                            @endforeach
                                        </div>
        </div>
    </div>
        <div class="row">
  <div class="col-md-12">
                                <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="form-control @error('jdescription') is-invalid @enderror" rows="4" name="jdescription" id="descc" required></textarea>
                                            @error('jdescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div> 
                             </div>   

    </div>
  </div>
  <div class="tab">Job details:
  	        <div class="row">
   <div class="col-md-12">
                        
                                        <div class="form-group">
                                            <label>Job Summary</label>
                                            <textarea class="form-control" rows="4" name="jsummary" id="summary" required></textarea>
                                        </div> 
                               
                            </div>
    </div>
  </div>
    <div class="tab">Job details:
  	        <div class="row">
   <div class="col-md-12">
                        
                                       <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Application details</label>
            <textarea class="form-control " rows="3" id="application" ></textarea>
                                        </div>
                            </div> 
                               
                            </div>
    </div>
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
    document.getElementById("nextBtn").innerHTML = "Post your Job";
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
</body>
@endsection