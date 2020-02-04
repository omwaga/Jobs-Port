@extends("layouts.app")
@section("content")

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">
        <div class="container" style="">
        <p><h2 class=" text-white text-center" style="text-transform: uppercase;">Discover Best job Vacancies <br> from Top Employers</h2></p>
       
        <form action="/search-jobs" method="get" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="duty" id="exampleFormControlSelect1">
                                <option selected>All Job Functions</option>
                                @foreach($industries as $industry)
                          <option value="{{$industry->id}}">{{$industry->name}}</option>
                          @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="location" id="exampleFormControlSelect1">
                                <option selected>All Locations</option>
                                @foreach($towns as $town)
                          <option value="{{$town->id}}">{{$town->name}}</option>
                          @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input class="form-control search-slt" name="keyword" type="text" placeholder="Search by Keyword">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    
    <section class="section section-top section-full">
          <div class="container"><br><br><br>
          @include('errors')
          <p><i class="text-info fa fa-bell"></i>Tip: A complete profile puts you ahead of other applicants.</p>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a href="#overview" class="nav-item nav-link active" style="color:#0B0B3B;" data-toggle="tab" title="Personal Information">
                      <span class="round-tabs one">
                              <i class="fa fa-user"></i>
                      </span>Personal Information
                  </a>
                  
                   <a href="#statement" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="Personal Statement">
                     <span class="round-tabs three">
                          <i class="fa fa-pencil"></i>
                     </span>Personal Statement</a>

                    <a href="#profile" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="Employment History">
                     <span class="round-tabs two">
                         <i class="fa fa-bandcamp"></i>
                     </span>Employment History
                  </a>
                  <a href="#messages" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="Education">
                     <span class="round-tabs three">
                          <i class="fa fa-graduation-cap"></i>
                     </span>Education History</a>
                      
                     <a href="#awards" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="Awards and Certfications">
                     <span class="round-tabs three">
                          <i class="fa fa-gift"></i>
                     </span>Awards and Certfications</a>
                     
                     <a href="#settings" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="References">
                         <span class="round-tabs four">
                              <i class="fa fa-users"></i>
                         </span> References
                     </a>
                     
                     <a href="#doner" class="nav-item nav-link" style="color:#0B0B3B;" data-toggle="tab" title="Skills">
                         <span class="round-tabs five">
                              <i class="fa fa-briefcase"></i>
                         </span>Skills </a>
                         
                     </div>
                     </nav>

<div class="panel-body">
                     <div class="tab-content">
                          <div id="overview" class="tab-pane active">
                              <div class="col-md-12">
                        @if (!$personalinfo)
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
              <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
              </form>
              @else
             <div class="row">
              <div class="col-md-6">
                  <label><strong>Name:</strong> {{$personalinfo->name}}</label><br>
                  <label><strong>Email:</strong> {{$personalinfo->email}}</label><br>
                  <label><strong>Phone Number:</strong> {{$personalinfo->phone}}</label><br>
                  <label><strong>ID/Passport Number:</strong> {{$personalinfo->id_pass}}</label><br>
                  <label><strong>Date of Birth:</strong> {{$personalinfo->dob}}</label><br>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-6">
                <label><strong>Marital Status:</strong> {{$personalinfo->marital_status}}</label><br>
                <label><strong>Religion:</strong> {{$personalinfo->religion}}</label><br>
                <label><strong>Gender:</strong> {{$personalinfo->gender}}</label><br>
                <label><strong>Nationality:</strong> {{$personalinfo->nationality}}</label><br>
                <label><strong>City:</strong> {{$personalinfo->city}}</label><br>
                <label><strong>Postal Address:</strong> {{$personalinfo->postal_address}}</label><br>
                <label><strong>Postal Code:</strong> {{$personalinfo->postal_code}}</label><br>
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i> Edit </button></p>
                @include('dashboard.editpersonalinfo')

              </div>
              </div>
              @endif
</div>
                  
    </div>
                      <div class="tab-pane fade" id="statement">
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
  <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
  </form> 
  @else
  <div class="row">
   <div class="col-md-12 profile-text">
                  <label><strong>Personal Statement:</strong> {!!$personalstatements->statement!!}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i> Edit </button></p>
                @include('dashboard.editpersonalstatement')

              </div>
              </div>
  @endif
                      </div>
                      <div class="tab-pane fade" id="profile">
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
  <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
  </form>
  @else
      <div class="profile-text">
                <br><p><button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newexperience"><i class="fa fa-plus"></i>Add Experience</button></p><br>
                </div>
                @foreach($experience as $exp)
  <div class="row">
   <div class="col-md-6 profile-text">
                  <label><strong>Employer:</strong> {{$exp->employer}}</label><br>
                  <label><strong>Position:</strong> {{$exp->position}}</label><br>
       </div>
   <div class="col-md-6 profile-text">
                  <label><strong>Stat Date:</strong> {{$exp->start_date}}</label><br>
                  <label><strong>End Date:</strong> {{$exp->current_employer ?? $exp->end_date}}</label>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
                data-toggle="modal" data-target="#experience-{{$exp->id}}"><i class="fa fa-edit"></i> Edit </button></p>
               
              @include('dashboard.newexperience')
              @include('dashboard.editexperience')
              </div>
              <div class="col-md-12">
                  <h6><b>Duties and Responsibilities</b></h6>
                  <p>{!!$exp->roles!!}</p>
              </div><br>
              </div>
              @endforeach
              @endif
                      </div>
                      <div class="tab-pane fade" id="messages">
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
                         <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
                            </form>
                            @else
                <br><p><button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#neweducation"><i class="fa fa-plus"></i>Add Edcation</button></p><br>
                
                @foreach($education as $edu)
                <div class="row">
   <div class="col-md-6 profile-text">
                  <label><strong>Institution Name:</strong> {{$edu->institution}}</label><br>
                  <label><strong>Name of Course Studied:</strong> {{$edu->qualification}}</label><br>
                  <label><strong>Education Level:</strong> {{$edu->level}}</label><br>
                  <label><strong>Attained Score:</strong>{{$edu->score}}</label>
       </div>
   <div class="col-md-6 profile-text">
                  <label><strong>Start Date:</strong> {{$edu->start_date}}</label><br>
                  <label><strong>Graduation Date:</strong> {{$edu->grad_date}}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
                data-toggle="modal" data-target="#editeducation-{{$edu->id}}"><i class="fa fa-edit"></i> Edit </button></p>
            </div>  
            </div>
            @include('dashboard.neweducation')    
            @include('dashboard.editeducation')
              @endforeach
                            @endif
                      </div>
                      <div class="tab-pane fade" id="awards">
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
                         <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
                            </form>
                            @else
      <div class="profile-text">
                <br><p><button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newaward"><i class="fa fa-plus"></i>Add Award/Certification</button></p><br>
                </div>
                                @foreach($awards as $award)
                                <div class="row">
   <div class="col-md-6 profile-text">
                  <label><strong>Award Name:</strong> {{$award->name}}</label><br>
                  <label><strong>Institution:</strong> {{$award->institution}}</label><br>
       </div>
   <div class="col-md-6 profile-text">
                  <label><strong>Award Date:</strong> {{$award->award_date}}</label><br>
                  <label><strong>Description:</strong> {!!$award->description!!}</label><br>
               
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal"
                data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i> Edit </button></p>
               
                @include('dashboard.newaward')
                @include('dashboard.editaward')

              </div>
              </div>
              @endforeach
                            @endif
                      </div>
                      <div class="tab-pane fade" id="settings">
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
                                                        <button type="submit" class="btn btn-success btn-sm">Save & Continue</button>
                                                        </form>
                                                        @else
                            
      <div class="profile-text">
                <br><p><button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newreferee"><i class="fa fa-plus"></i>Add Referee</button></p><br>
                </div>
                                @foreach($references as $reference)
                                <div class="row">
   <div class="col-md-6 profile-text">
                  <label><strong>Name:</strong> {{$reference->name}}</label><br>
                  <label><strong>Email:</strong> {{$reference->email}}</label><br>
                  <label><strong>Phone Number:</strong> {{$reference->phone}}</label><br>
       </div>
   <div class="col-md-6 profile-text">
                  <label><strong>Organization:</strong> {{$reference->organization}}</label><br>
                  <label><strong>Position:</strong> {{$reference->position}}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i> Edit </button></p>
               
                @include('dashboard.newreference')
                @include('dashboard.editreference')

              </div>
              </div>
              @endforeach
                            @endif
                      </div>
                      <div class="tab-pane fade" id="doner">
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
      <div class="profile-text">
                <br><p><button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newskill"><i class="fa fa-plus"></i>Add Skill</button></p><br>
                </div>
                                @foreach($skills as $skill)
   <div class="col-md-12 profile-text">
                  <label><strong>Skill Name:</strong> {{$skill->skillname}}</label><br>
                  <label><strong>Expertise Level:</strong> {{$skill->level}}</label><br>
                
                <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i> Edit </button></p>
               
                @include('dashboard.newskill')
                @include('dashboard.editskill')

              </div>
              @endforeach
              </div>
              @endif
</div>
<div class="clearfix"></div>
</div>
</div>

        <!-- /row -->
      </section>
    </section>
      <script>
$(document).ready(function(){
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});

var activeTab = localStorage.getItem('activeTab');
if(activeTab){
    $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
}
});
</script>
    <!--main content end-->
    @endsection