<div class="jumbotron jumbotron-fluid" style="padding-top: 5rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})">
  <h4 class="text-white text-center">Create Your Career Profile</h4>
  <p class="text-white text-center">Fill all the sections to complete your profile</p>
</div>
<div class="container">
  @include('alert')
  @include('errors')
  <hr>
  <h4 class="text-center">Personal Information</h4>
  @if(!$personalinfo)
  <form method="POST" action="/personalinfo">
   @csrf
   <div class="row">
    <div class="col-md-4">
      <label>Name:</label>
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
  </div>

  <div class="row">
    <div class="col-md-4">
      <label>Phone Number:</label>
      <input type="text" name="phone" class="form-control"style="border-radius:0px;"required autofocus value="{{old('phone')}}">
    </div>
    <div class="col-md-4">
      <label>Gender:</label>
      <select name="gender" class="form-control" style="border-radius:0px;"required autofocus>
       <option>Select Gender</option>
       <option>Male</option>
       <option>Female</option>
     </select>
   </div>

   <div class="col-md-4">
    <label>Online Links:</label>
    <input type="text" name="links" class="form-control"style="border-radius:0px;" autofocus value="{{old('links')}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <label>Religion:</label>
    <select name="religion" class="form-control" style="border-radius:0px;" required autofocus value="{{old('religion')}}">
     <option>Select religion</option> 
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
</div>
<div class="row">
 <div class="col-md-4">
  <label>Nationality:</label>
  <select name="country" class="form-control" style="border-radius:0px;"required autofocus value="{{old('nationality')}}">
   <option value="">Select Country</option>
   @foreach ($countries as $key => $value)
   <option value="{{ $value->id }}">{{ $value->name }}</option>
   @endforeach
 </select>
</div>
<div class="col-md-4">
  <label>City:</label>
  <select name="state" class="form-control" style="border-radius:0px;"required autofocus value="{{old('state')}}">
   <option>Select City</option>
   @foreach($states as $state)
   <option value="{{$state->id}}">{{$state->name}}</option>
   @endforeach
 </select>
</div>
<div class="col-md-4">
  <label>Postal Address:</label>
  <input type="text" name="postal_address" class="form-control"style="border-radius:0px;" required autofocus value="{{old('postal_address')}}">
</div>
</div>

<div class="row">
  <div class="col-md-4">
    <label>Postal Code:</label>
    <input type="text" name="postal_code" class="form-control"style="border-radius:0px;" required autofocus value="{{old('postal_code')}}">
  </div>
</div><br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
  <div class="col-md-5">
    <label><strong>Name:</strong> {{$personalinfo->name ?? ''}}</label><br>
    <label><strong>Email:</strong> {{$personalinfo->email ?? ''}}</label><br>
    <label><strong>Phone Number:</strong> {{$personalinfo->phone?? ''}}</label><br>
    <label><strong>ID/Passport Number:</strong> {{$personalinfo->id_pass ?? ''}}</label><br>
    <label><strong>Date of Birth:</strong> {{$personalinfo->dob?? ''}}</label><br>
  </div>
  <!-- /col-md-4 -->
  <div class="col-md-5">
    <label><strong>Marital Status:</strong> {{$personalinfo->marital_status ?? ''}}</label><br>
    <label><strong>Religion:</strong> {{$personalinfo->religion ?? ''}}</label><br>
    <label><strong>Gender:</strong> {{$personalinfo->gender ?? ''}}</label><br>
    <label><strong>Nationality:</strong> {{$personalinfo->country->name ?? ''}}</label><br>
    <label><strong>City:</strong> {{$personalinfo->state->name ?? ''}}</label><br>
    <label><strong>Postal Address:</strong> {{$personalinfo->postal_address ?? ''}}</label><br>
    <label><strong>Postal Code:</strong> {{$personalinfo->postal_code ?? ''}}</label><br>

  </div>

  <div class="col-md-2">
    <div class="btn-group" role="group">
      <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</button>
    </div>
  </div>
  @include('dashboard.wizard.edit-personal-details')
</div>
@endif
<br><hr>

<h4 class="text-center">Personal Statement</h4> 
@if(!$personalstatements)
<form method="POST" action="/personalstatements"> 
  @csrf
  <div class="row">
    <div class="col-md-12">
      <label>Job Category:</label>
      <select class="form-control" name="category">
        <option value="">Select Category</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-12">
      <label>Personal Statement:</label>
      <textarea name="statement" class="form-control ckeditor" id="article-ckeditor" required autofocus rows="3"style="border-radius:0px;"></textarea>    
    </div>
  </div>
  <br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
 <div class="col-md-10 profile-text">
  <label><strong>Job Category:</strong> {!!$personalstatements->categoryname->name  ?? ''!!}</label><br>

</div>
 <div class="col-md-10 profile-text">
  <label><strong>Personal Statement:</strong> {!!$personalstatements->statement  ?? ''!!}</label><br>

</div>

<div class="col-md-2">
  <div class="btn-group" role="group">
    <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i>Edit</button>
  </div>
  @include('dashboard.wizard.edit-personal-statements')
</div>
</div>
@endif
<br><hr>

<h4 class="text-center">Employment History</h4>  
@if(!$experience->count())
<form method="POST" action="/experiences">
  @csrf
  <div class="row">
    <div class="col-md-3">
      <label>Employer:</label>
      <input type="text" class="form-control" name="employer" placeholder="Organization" required autofocus style="border-radius:0px;">
    </div>
    <div class="col-md-3">
      <label>Position:</label>
      <input type="text" class="form-control" name="position" placeholder="Job Position" required autofocus style="border-radius:0px;">
    </div>
    <div class="col-md-3">
      <label>Employment Start Date:</label>
      <div class="input-group date">
        <input type="date" name="start_date" class="form-control">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <label>Employment End Date:</label>
      <div class="input-group date">
        <input type="date" name="end_date" class="form-control">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="hidden" name="current_employer" value="" id="defaultCheck1">
        <input class="form-check-input" type="checkbox" name="current_employer" value="current employer" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
          Current Employer
        </label>
      </div>
    </div>
  </div>
  <br>
  <div class="row">


    <div class="col-md-12">
      <label>Achievements and Responsibilities:</label>
      <textarea name="roles" class="form-control ckeditor" id="duties" required autofocus rows="3"style="border-radius:0px;"></textarea>    
    </div>
  </div>
  <br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
  @foreach($experience as $experienced)
  <div class="col-md-6 profile-text">
    <label><strong>Employer:</strong> {{$experienced->employer ?? ''}}</label><br>
    <label><strong>Position:</strong> {{$experienced->position ?? ''}}</label><br>
  </div>
  <div class="col-md-6 profile-text">
    <label><strong>Stat Date:</strong> {{$experienced->start_date ?? ''}}</label><br>
    <label><strong>End Date:</strong> {{$experienced->end_date ?? ''}}</label><br>
  </div>
  <div class="col-md-8">
    <label><strong>Resposibilities and Achievements:</strong> {!!$experienced->roles  ?? ''!!}</label><br></div>
    <div class="col-md-4">
      <div class="btn-group" role="group">
        <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#experience-{{$experienced->id}}"><i class="fa fa-edit"></i>Edit</button>
        <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#newexperience"><i class="fa fa-plus"></i>Add</button>        
        <form method="POST" action="{{route('experiences.destroy', $experienced->id)}}">
          @csrf
          @method('DELETE')                  
          <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
        </form>
      </div>
      @include('dashboard.wizard.edit-experience')
      @include('dashboard.wizard.new-experience')
    </div>
    @endforeach
  </div>
  @endif
  <br><hr>


  <h4 class="text-center">Education History</h4>
  @if(!$education->count())
  <form method="POST" action="/educations">
    @csrf
    <div class="row">
      <div class="col-md-4">
        <label>Institution Name:</label>
        <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
      </div>
      <div class="col-md-4">
       <label>Name of Course Studied:</label>
       <input type="text" class="form-control" name="qualification" placeholder="Bsc. Computer Science" required autofocus style="border-radius:0px;">
     </div>

     <div class="col-md-4">
      <label>Education Level:</label>
      <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
       <option>Select Education Level</option>
       <option>Certificate</option>
       <option>Diploma</option>
       <option>Degree</option>
       <option>Masters</option>
     </select>
   </div>

   <div class="col-md-4">
     <label>Start Date:</label>
     <div class="input-group date">
      <input type="date" name="start_date" class="form-control">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
   <label>Graduation Date:</label>
   <div class="input-group date">
    <input type="date" name="grad_date" class="form-control">
    <div class="input-group-addon">
      <span class="glyphicon glyphicon-th"></span>
    </div>
  </div>
</div>

<div class="col-md-4">
  <label>Attained Score:<br>
    <input type="text" class="form-control" name="score">
  </div>
</div>
<br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
  @foreach($education as $educated)
  <div class="col-md-4 profile-text">
    <label><strong>Institution Name:</strong> {{$educated->institution ?? ''}}</label><br>
    <label><strong>Name of Course Studied:</strong> {{$educated->qualification ?? ''}}</label><br>
    <label><strong>Education Level:</strong> {{$educated->level ?? ''}}</label><br>
    <label><strong>Attained Score:</strong>{{$educated->score ?? ''}}</label>
  </div>
  <div class="col-md-4 profile-text">
    <label><strong>Start Date:</strong> {{$educated->start_date ?? ''}}</label><br>
    <label><strong>Graduation Date:</strong> {{$educated->grad_date ?? ''}}</label><br>
  </div>  
  <div class="col-md-4">
    <div class="btn-group" role="group">
      <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editeducation-{{$educated->id}}"><i class="fa fa-edit"></i>Edit</button>
      <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#neweducation"><i class="fa fa-plus"></i>Add</button>

      <form method="POST" action="{{route('educations.destroy', $educated->id)}}">
        @csrf
        @method('DELETE')                  
        <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
      </form>
    </div>
    @include('dashboard.wizard.new-education')
    @include('dashboard.wizard.edit-education')
  </div>
  @endforeach
</div>
@endif
<br><hr>

<h4 class="text-center">Awards & Certifications</h4>  
@if(!$awards->count())
<form method="POST" action="/awards">
  @csrf
  <div class="row">
    <div class="col-md-4">
      <label>Award Name:</label>
      <input type="text" class="form-control" name="name" required autofocus style="border-radius:0px;">
    </div>
    <div class="col-md-4">
     <label>Institution:</label>
     <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
   </div>

   <div class="col-md-4">
     <label>Award/Qualification Date:</label>
     <div class="input-group date">
      <input type="date" name="award_date" class="form-control">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">

  <div class="col-md-12">
    <label>Description:</label>
    <textarea name="description" class="form-control ckeditor" id="award" required autofocus rows="3"style="border-radius:0px;"></textarea> 
  </div>
</div>
<br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
 @foreach($awards as $award)
 <div class="col-md-4 profile-text">
  <label><strong>Award Name:</strong> {{$award->name ?? ''}}</label><br>
  <label><strong>Institution:</strong> {{$award->institution ?? ''}}</label><br>
</div>
<div class="col-md-4 profile-text">
  <label><strong>Award Date:</strong> {{$award->award_date ?? ''}}</label><br>
  <label><strong>Description:</strong> {!!$award->description  ?? ''!!}</label><br>
</div>
<div class="col-md-4">
  <div class="btn-group" role="group">
    <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i>Edit</button>
    <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#newaward"><i class="fa fa-plus"></i>Add</button>
    <form method="POST" action="{{route('awards.destroy', $award->id)}}">
      @csrf
      @method('DELETE')                  
      <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
    </form>
  </div>
  @include('dashboard.wizard.new-award')
  @include('dashboard.wizard.edit-award')
</div>
@endforeach
</div>
@endif
<br><hr>

<h4 class="text-center">References </h4> 
@if(!$references->count())
<form method="POST" action="/references">
  @csrf
  <div class="row">
    <div class="col-lg-4">
      <label>Name:</label>
      <input type="text" class="form-control" name="name" required autofocus placeholder="Full Name" style="border-radius:0px;">
    </div>
    <div class="col-lg-4">
     <label>Title:</label>
     <input type="text" name="position" class="form-control" required autofocus placeholder="Title" style="border-radius:0px;">
   </div>
   <div class="col-lg-4">
    <label>Phone Number:</label>
    <input type="tel" class="form-control" name="phone" required autofocus placeholder="Phone Number"style="border-radius:0px;">
  </div>
</div>
<br>
<div class="row">
  <div class="col-lg-4">
    <label>Email address:</label>
    <input type="email" name="email" class="form-control" required autofocus placeholder="Email Address"style="border-radius:0px;">
  </div>
  <div class="col-lg-4">
    <label>Organization:</label>
    <input type="text" name="organization" class="form-control" required autofocus placeholder=" Organization" style="border-radius:0px;">
  </div>
</div>
<br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
  @foreach($references as $reference)
  <div class="col-md-4 profile-text">
    <label><strong>Name:</strong> {{$reference->name  ?? ''}}</label><br>
    <label><strong>Email:</strong> {{$reference->email  ?? ''}}</label><br>
    <label><strong>Phone Number:</strong> {{$reference->phone  ?? ''}}</label><br>
  </div>
  <div class="col-md-4 profile-text">
    <label><strong>Organization:</strong> {{$reference->organization  ?? ''}}</label><br>
    <label><strong>Position:</strong> {{$reference->position  ?? ''}}</label><br>
  </div>
  <div class="col-md-4">
    <div class="btn-group" role="group">
      <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i>Edit</button>
      <button class="btn btn-info btn-sm text-white"  data-toggle="modal" data-target="#newreferee"><i class="fa fa-plus"></i>Add</button>
      <form method="POST" action="{{route('references.destroy', $reference->id)}}">
        @csrf
        @method('DELETE')                  
        <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
      </form>
    </div>
    @include('dashboard.wizard.new-reference')
    @include('dashboard.wizard.edit-reference')
  </div>
  @endforeach
</div>
@endif
<br><hr>

<h4 class="text-center">Skills </h4>  
@if(!$skills->count())
<form method="POST" action="/jobskills">
  @csrf
  <div class="row">
    <div class="col-md-6">
      <label>Skill Name:</label>
      <input name="skillname" type="text" class="form-control" required autofocus > 
    </div>
    <div class="col-md-6">
      <label>Expertise Level:</label>
      <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
       <option>Select Skill Level</option>
       <option>Beginner</option>
       <option>Intermediate</option>
       <option>Expert</option>
     </select>
   </div>
 </div><br>
<button type="submit" class="btn btn-success pull-right">Save & Continue</button>
</form>
@else
<div class="row">
  @foreach($skills as $skill)
  <div class="col-md-8 profile-text">
    <label><strong>Skill Name:</strong> {{$skill->skillname  ?? ''}}</label><br>
    <label><strong>Expertise Level:</strong> {{$skill->level ?? ''}}</label><br>
  </div>
  <div class="col-md-4">
    <div class="btn-group" role="group">
      <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i>Edit</button>
      <button class="btn btn-info btn-sm text-white"  data-toggle="modal" data-target="#newskill"><i class="fa fa-plus"></i>Add</button>
      <form method="POST" action="{{route('jobskills.destroy', $skill->id)}}">
        @csrf
        @method('DELETE')                  
        <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
      </form>
    </div>
    @include('dashboard.wizard.new-skill')
    @include('dashboard.wizard.edit-skill')
  </div>
  @endforeach
</div>
@endif
<br><hr>
</div>