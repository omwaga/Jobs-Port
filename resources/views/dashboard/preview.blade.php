
    <br>
    <div class="row">
                      <div class="col-md-12">
                  <button class="btn btn-danger"><i class="fa fa-backward"></i>Back to Job Description</button>
                  <form method="POST" action="/jobapplications">
                      @csrf
                      <input type="hidden" name="job_id" value="{{$job->id}}">
                      <input type="hidden" name="employer_id" value="{{$job->employer_id}}">
                  <button class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i>Submit Application</button>
                  </form>
                  </div>
                  </div>
                  <p><i class="text-info fa fa-bell"></i>Tip: A complete profile puts you ahead of other applicants.</p>
                  @include('errors')
                  <hr>
<h3 style="color:#0B0B3B;">Personal Information</h3>
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
          <select name="nationality" class="form-control" style="border-radius:0px;"required autofocus value="{{old('nationality')}}">
               <option>Select Country</option>
               @foreach($countries as $country)
              <option>{{$country->country}}</option>
              @endforeach
          </select>
    </div>
    <div class="col-md-4">
          <label>City:</label>
          <select name="city" class="form-control" style="border-radius:0px;"required autofocus value="{{old('city')}}">
               <option>Select City</option>
              <option>Nairobi</option>
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
              <button type="submit" class="btn btn-success">Save</button>
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
                <label><strong>Nationality:</strong> {{$personalinfo->nationality ?? ''}}</label><br>
                <label><strong>City:</strong> {{$personalinfo->city ?? ''}}</label><br>
                <label><strong>Postal Address:</strong> {{$personalinfo->postal_address ?? ''}}</label><br>
                <label><strong>Postal Code:</strong> {{$personalinfo->postal_code ?? ''}}</label><br>

              </div>
              
              <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i>Edit</button>
                  </div>
              </div>
              @include('dashboard.editpersonalinfo')
              </div>
              @endif
              <br><hr>
 
    <h3 style="color:#0B0B3B;">Personal Statement</h3> 
    @if(!$personalstatements)
<form method="POST" action="/personalstatements"> 
                      @csrf
  <div class="row">
      <div class="col-md-12">
      <label>Personal Statement:</label>
      <textarea name="statement" class="form-control ckeditor" id="article-ckeditor" required autofocus rows="3"style="border-radius:0px;"></textarea>    
      </div>
  </div>
  <br>
  <button type="submit" class="btn btn-success">Save & Continue</button>
  </form>
@else
<div class="row">
   <div class="col-md-10 profile-text">
                  <label><strong>Personal Statement:</strong> {!!$personalstatements->statement  ?? ''!!}</label><br>

              </div>
              
              <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i>Edit</button>
                  </div>
                  @include('dashboard.editpersonalstatement')
              </div>
              </div>
              @endif
              <br><hr>
          
    <h3 style="color:#0B0B3B;">Employment History</h3>  
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
  <button type="submit" class="btn btn-success">Save & Continue</button>
  </form>
    @else
<div class="row">
                @foreach($experience as $exp)
   <div class="col-md-6 profile-text">
                  <label><strong>Employer:</strong> {{$exp->employer ?? ''}}</label><br>
                  <label><strong>Position:</strong> {{$exp->position ?? ''}}</label><br>
       </div>
   <div class="col-md-6 profile-text">
                  <label><strong>Stat Date:</strong> {{$exp->start_date ?? ''}}</label><br>
                  <label><strong>End Date:</strong> {{$exp->end_date ?? ''}}</label><br>
                 </div>
                 <div class="col-md-10">
                  <label><strong>Resposibilities and Achievements:</strong> {!!$exp->roles  ?? ''!!}</label><br></div>
                  <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#experience-{{$exp->id}}"><i class="fa fa-edit"></i>Edit</button>
                  <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#newexperience"><i class="fa fa-plus"></i>Add</button>
                  </div>
                  @include('dashboard.editexperience')
                  @include('dashboard.newexperience')
              </div>
              @endforeach
                 </div>
                 @endif
                 <br><hr>


    <h3 style="color:#0B0B3B;">Education History</h3>
    @if(!$education->count())
    <form method="POST" action="/education">
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
    <div class="col-md-4" style="margin-left:10px;">
     <label>Graduation Date:</label>
     <div class="input-group date">
    <input type="date" name="grad_date" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
    </div>
    
    <div class="col-md-4" style="margin-left:40px;">
      <label>Attained Score:<br>
      <small>For example: First Class Honors</small></label>
       <input type="text" class="form-control" name="score" autofocus style="border-radius:0px;">
    </div>
  </div>
  <br>
                         <button type="submit" class="btn btn-success">Save & Continue</button>
                            </form>
    @else
<div class="row">
                @foreach($education as $edu)
   <div class="col-md-5 profile-text">
                  <label><strong>Institution Name:</strong> {{$edu->institution ?? ''}}</label><br>
                  <label><strong>Name of Course Studied:</strong> {{$edu->qualification ?? ''}}</label><br>
                  <label><strong>Education Level:</strong> {{$edu->level ?? ''}}</label><br>
                  <label><strong>Attained Score:</strong>{{$edu->score ?? ''}}</label>
       </div>
   <div class="col-md-5 profile-text">
                  <label><strong>Start Date:</strong> {{$edu->start_date ?? ''}}</label><br>
                  <label><strong>Graduation Date:</strong> {{$edu->grad_date ?? ''}}</label><br>
            </div>  
            <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editeducation-{{$edu->id}}"><i class="fa fa-edit"></i>Edit</button>
                  <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#neweducation"><i class="fa fa-plus"></i>Add</button>
                  </div>
                 @include('dashboard.neweducation')
                 @include('dashboard.editeducation')
              </div>
              @endforeach
            </div>
            @endif
            <br><hr>
     
    <h3 style="color:#0B0B3B;">Awards & Certifications</h3>  
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
                         <button type="submit" class="btn btn-success">Save & Continue</button>
                            </form>
@else
<div class="row">
         @foreach($awards as $award)
   <div class="col-md-5 profile-text">
                  <label><strong>Award Name:</strong> {{$award->name ?? ''}}</label><br>
                  <label><strong>Institution:</strong> {{$award->institution ?? ''}}</label><br>
       </div>
   <div class="col-md-5 profile-text">
                  <label><strong>Award Date:</strong> {{$award->award_date ?? ''}}</label><br>
                  <label><strong>Description:</strong> {!!$award->description  ?? ''!!}</label><br>
                  </div>
                  <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i>Edit</button>
                  <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#newaward"><i class="fa fa-plus"></i>Add</button>
                  </div>
                @include('dashboard.newaward')
                @include('dashboard.editaward')
              </div>
              @endforeach
                  </div>
                  @endif
                  <br><hr>
                  
    <h3 style="color:#0B0B3B;">References </h3> 
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
                                                        <button type="submit" class="btn btn-success">Save & Continue</button>
                                                        </form>
    @else
<div class="row">
      @foreach($references as $reference)
   <div class="col-md-5 profile-text">
                  <label><strong>Name:</strong> {{$reference->name  ?? ''}}</label><br>
                  <label><strong>Email:</strong> {{$reference->email  ?? ''}}</label><br>
                  <label><strong>Phone Number:</strong> {{$reference->phone  ?? ''}}</label><br>
       </div>
   <div class="col-md-5 profile-text">
                  <label><strong>Organization:</strong> {{$reference->organization  ?? ''}}</label><br>
                  <label><strong>Position:</strong> {{$reference->position  ?? ''}}</label><br>
                  </div>
                  <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i>Edit</button>
                  <button class="btn btn-info btn-sm text-white"  data-toggle="modal" data-target="#newreferee"><i class="fa fa-plus"></i>Add</button>
                  </div>
                      @include('dashboard.newreference')
                      @include('dashboard.editreference')
              </div>
              @endforeach
                  </div>
                  @endif
                  <br><hr>
            
    <h3 style="color:#0B0B3B;">Skills </h3>  
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
                                                   <button type="submit" class="btn btn-success">Save & Continue</button>
                                                   </form>
@else
<div class="row">
                  @foreach($skills as $skill)
                   <div class="col-md-10 profile-text">
                  <label><strong>Skill Name:</strong> {{$skill->skillname  ?? ''}}</label><br>
                  <label><strong>Expertise Level:</strong> {{$skill->level ?? ''}}</label><br>
                  </div>
                  <div class="col-md-2">
                  <div class="btn-group" role="group">
                  <button class="btn btn-secondary btn-sm text-white" data-toggle="modal" data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i>Edit</button>
                  <button class="btn btn-info btn-sm text-white"  data-toggle="modal" data-target="#newskill"><i class="fa fa-plus"></i>Add</button>
                  </div>
                  @include('dashboard.newskill')
                  @include('dashboard.editskill')
              </div>
              @endforeach
                  </div>
                  @endif
                  <br><hr>
                  
                  <div class="row">
                      <div class="col-md-12">
                  <button class="btn btn-danger"><i class="fa fa-backward"></i>Back to Job Description</button>
                  <form method="POST" action="/jobapplications">
                      @csrf
                      <input type="hidden" name="job_id" value="{{$job->id}}">
                      <input type="hidden" name="employer_id" value="{{$job->employer_id}}">
                  <button class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i>Submit Application</button>
                  </form>
                  </div>
                  </div><hr>