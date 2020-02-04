@extends('layouts.jobs')
@section('content')
<div class="container-fluid">
    <marquee behavior="scroll" direction="left">Complete your profile to increase chances of being shortlisted!</marquee>
    <div class="card card-header"><h5 style="font-family: 'Roboto', sans-serif;">Career profile</h5></div>
	      <hr>
	      <div class="row">
	          <div class="col-xl-4"></div>
	          <div class="col-xl-4">
<div class="card">
@foreach ($bio as $prof)
  <img class="card-img-top" src="/storage/uploads/{{$prof->filename}}" alt="" style="width:100$;height:200px;">
       @endforeach
  <div class="card-body">
    <p class="card-text"><h3>Name: {{auth()->user()->name}}</h3></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Email: {{auth()->user()->email}}</li>
  </ul>
</div>
	          </div>
	          <div class="col-xl-4"></div>
	      </div>
	<div class="row">
			<div class="col-md-12">
			  <div class="card card-body " style="border:0px;">
			<h5 style="font-family: 'Roboto', sans-serif;"><strong>My Bio-data</strong><a class="" href="#"data-toggle="modal" data-target="#biodata"><i class="fas fa-plus-square float-right text-danger">ADD</i></a><a class=""data-toggle="modal" data-target="#editbio"><i class="fas fa-edit float-right text-primary"></i></a></h5><hr style="border:1px solid #000;">
			<div class="row">
			    @if(count($biodata)>0)
			    @foreach($biodata as $biod)
			    <div class="col-md-4">
			        <p>Id/Passport : {{$biod->idpass}}</p>
			        <p>Telephone : {{$biod->telephone}}</p>

			      <p>Physical address : {{$biod->paddress}}</p>
			    </div>
			    @endforeach
			      @foreach($biodata as $biod)
			    <div class="col-md-4">
			        <p>Gender/Sex : {{$biod->gender}}</p>
			        <p>Religion : {{$biod->religion}}</p>
			         <p>Country : {{$biod->country}}</p>
			    </div>
			    @endforeach
			      @foreach($biodata as $biod)
			    <div class="col-md-4">
			        <p>Marital Status : {{$biod->mstatus}}</p>
			        <p>D.O.B : {{$biod->dob}}</p>
			        <p>Nationality : {{$biod->nationality}}</p>
			    </div>
			    @endforeach
			    @else
			    <p class="h5 text-danger text-center">Kindly add your biodata information. This is neccesary so that all employers can see who you are.</p>
			    @endif
			</div>
	
			<div class="modal fade" id="biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          {!!Form::open(['action'=>['DashboardController@biodata'],'method'=>'POST','class'=>'needs-validation'])!!}
                {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update your Bio Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
    <div class="col">
          <label>Id/Passport No.</label>
    <input type="number" name="idpass" class="form-control"style="border-radius:0px;"required autofocus >
    </div>
    <div class="col">
        <label>Telephone</label>
<input type="text" name="tel" class="form-control"style="border-radius:0px;"required autofocus >
    </div>
  </div>
  <br>
<div class="row">
    <div class="col">
          <label>Gender/Sex</label>
          <select name="gender" class="form-control" style="border-radius:0px;"required autofocus>
               <option>--select gender--</option>
              <option>Male</option>
               <option>Female</option>
          </select>
    </div>
    <div class="col">
        <label>Religion</label>
 <select name="religion" class="form-control" style="border-radius:0px;" required autofocus>
               <option>--select one--</option>
              <option>Christianity</option>
               <option>Islam</option>
               <option>Hinduism</option>
               <option>Buddhism</option>
               <option>Prefer not to say</option>
          </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Maritial Status</label>
          <select name="mstatus" class="form-control" style="border-radius:0px;"required autofocus >
               <option>--select--</option>
              <option>Single</option>
               <option>Married</option>
               <option>Divorced</option>
                <option>Widowed</option>
             <option>Separated</option>
          </select>
    </div>
    <div class="col">
        <label>D.O.B</label>
<input type="date" name="dob" class="form-control"style="border-radius:0px;" required autofocus >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Ethnicy</label>
   <input type="text" name="ethnicity" class="form-control"style="border-radius:0px;" required autofocus >
    </div>
    <div class="col">
        <label>Country of residence</label>
<input type="text" name="country" class="form-control"style="border-radius:0px;" required autofocus >
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col">
          <label>Nationality</label>
   <input type="text" name="nationality" class="form-control"style="border-radius:0px;" required autofocus >
    </div>
    <div class="col">
        <label>Physical address</label>
<input type="text" name="paddress" class="form-control"style="border-radius:0px;" required autofocus >
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;"><i class="fas fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary"style="border-radius:0px;">Save changes</button>
      </div>
      @if (session('status'))
              <div class="alert alert-success">
              {{ session('status') }}
                       </div>
                       @endif
          {!!Form::close()!!}
    </div>
  </div>
</div>
@foreach($biodata as $biod)
			<div class="modal fade" id="editbio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          {!!Form::open(['action'=>['DashboardController@editbiodata',$biod->id],'method'=>'POST','class'=>'needs-validation'])!!}
                {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify your Personal Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
    <div class="col">
          <label>Id/Passport No.</label>
    <input type="number" name="idpass" value="<?php echo $biod->idpass ?>" class="form-control"style="border-radius:0px;"required autofocus >
    </div>
    <div class="col">
        <label>Telephone</label>
<input type="text" name="tel" class="form-control"style="border-radius:0px;"required autofocus value="<?php echo $biod->telephone ?>" >
    </div>
  </div>
  <br>
<div class="row">
    <div class="col">
          <label>Gender/Sex</label>
          <select name="gender" class="form-control" style="border-radius:0px;"required autofocus value="<?php echo $biod->gender ?>">
               <option>--select gender--</option>
              <option>Male</option>
               <option>Female</option>
          </select>
    </div>
    <div class="col">
        <label>Religion</label>
 <select name="religion" class="form-control" style="border-radius:0px;" required autofocus value="<?php echo $biod->religion ?>">
               <option>--select one--</option>
              <option>Christianity</option>
               <option>Islam</option>
               <option>Hinduism</option>
               <option>Buddhism</option>
               <option>Prefer not to say</option>
          </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Maritial Status</label>
          <select name="mstatus" class="form-control" style="border-radius:0px;"required autofocus value="<?php echo $biod->mstatus ?>">
               <option>--select--</option>
              <option>Single</option>
               <option>Married</option>
               <option>Divorced</option>
                <option>Widowed</option>
             <option>Separated</option>
          </select>
    </div>
    <div class="col">
        <label>D.O.B</label>
<input type="date" name="dob" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->dob ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
          <label>Ethnicy</label>
   <input type="text" name="ethnicity" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->ethnicity ?>" >
    </div>
    <div class="col">
        <label>Country of residence</label>
<input type="text" name="country" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->country ?>">
    </div>
  </div>
  <br>
    <div class="row">
    <div class="col">
          <label>Nationality</label>
   <input type="text" name="nationality" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->nationality ?>">
    </div>
    <div class="col">
        <label>Physical address</label>
<input type="text" name="paddress" class="form-control"style="border-radius:0px;" required autofocus value="<?php echo $biod->paddress ?>" >
    </div>
  </div>
      </div>
      <div class="modal-footer">
           {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;"><i class="fas fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary"style="border-radius:0px;">Save changes</button>
      </div>
      @if (session('status'))
              <div class="alert alert-success">
              {{ session('status') }}
                       </div>
                       @endif
          {!!Form::close()!!}
    </div>
  </div>
</div>
@endforeach
			    </div>
		
			<div class="card card-body" style="border:0px;">
				<h5 style="font-family: 'Roboto', sans-serif;"><strong>My academic Qualifications</strong><a class="" href="#"data-toggle="modal" data-target="#academicupdate"><i class="fas fa-plus-square float-right text-danger">Add qualification</i></a></h5>
			<div class="row">
<div class="table-responsive">
	<table class="table" id="academic" >
		<thead>
			<tr>
				<th>#</th>
				<th>Qualification Type</th>
				<th>Degree type</th>
				<th>Institution</th>
				<th>Start</th>
				<th>End</th>
				<th>Action</th>
			</tr>
		</thead>
		@if(count($academic) > 0)
		@foreach ($academic as $item)
		<tbody>
		 <tr>
             <td><i class="fas fa-dot-circle"></i></td>
              <td>{{$item->course}}</td>
             <td>{{$item->courseype}}</td>
              <td>{{$item->institution}}</td>
               <td>{{$item->sdate}}</td>
             <td>{{$item->edate}}</td>
              <td><a class="btn btn-danger btn-sm text-white" href="/editacademic/{{$item->id}}"><i class="fas fa-edit text-white"></i> Edit</a></td>
              </tr>
              </tbody>
		@endforeach
		@else
		<p class="text-danger h5">Kindly add your academic qualifications to increase chances of being shortlisted.</p>
		@endif
	</table>
</div>
        <div class="modal fade" id="academicupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@store','method'=>'POST','class'=>'needs-validation'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your academic Qualififcations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
    <div class="col">
        <label>Course Name</label>
      <input type="text" class="form-control" name="course" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>Course type</label>
                                                        <select name="ctype" class="form-control"style="border-radius:0px;">
                                                          <option>Certificate</option>
                                                          <option>Diploma</option>
                                                          <option>Degree</option>
                                                          <option>Masters</option>
                                                          <option>PHD</option>
                                                        </select>
    </div>
  </div>
  <br>
  <div class="row">
        <div class="col">
        <label>Institution</label>
      <input type="text" class="form-control" name="institution" placeholder="Kenyatta University" required autofocus style="border-radius:0px;">
    </div>
       <div class="col">
        <label>Start Date</label>
      <input type="date" class="form-control" name="sdate" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
  </div>
  <br>
    <div class="row">
       <div class="col">
        <label>End Date</label>
      <input type="date" class="form-control" name="edate" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius:0px;"><i class="fas fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
      @if (session('status'))
      <div class="alert alert-success">
      {{ session('status') }}
     </div>
         @endif
              {!!Form::close()!!}
    </div>
  </div>
</div>
            </div>
			</div>
				<div class="card card-body" style="border:0px;">
				<h5 style="font-family: 'Roboto', sans-serif;"><strong>My work Experience</strong><a class="" href=""data-toggle="modal" data-target="#experienceadd"><i class="fas fa-plus-square float-right text-danger">Add experience</i></a></h5>
			<div class="row">
<div class="table-responsive">
	<table class="table table-borderless " id="experience" >
		<thead>
			<tr>
				<th>#</th>
				<th>Position</th>
				<th>Company</th>
				<th>Brief Description</th>
				<th>Start</th>
				<th>End</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach ($experience as $item)
		<tbody>
		 <tr>
             <td><i class="fas fa-dot-circle"></i></td>
              <td>{{$item->position}}</td>
             <td>{{$item->company}}</td>
              <td>{!!$item->description!!}</td>
               <td>{{$item->start}}</td>
             <td>{{$item->enddate}}</td>
              <td><a class="btn btn-danger btn-sm text-white" href="/Otherinfo/{{$item->id}}/edit"><i class="fas fa-edit text-white"></i> Edit</a></td>
              </tr>
              </tbody>
		@endforeach

	</table>
</div>
<div class="modal fade" id="experienceadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>'InfoController@experience','method'=>'POST','class'=>'needs-validation'])!!}
        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your Work Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="row">
    <div class="col">
      <label>Position</label>
       <input type="text" class="form-control" name="position" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>Company</label>
     <input type="text" class="form-control" name="company" required autofocus style="border-radius:0px;">
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <label>Start Date</label>
       <input type="date" class="form-control" name="sdate" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>End Date</label>
     <input type="date" class="form-control" name="edate" required autofocus>
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col">
      <label>Brief Description</label>
      <textarea name="description" class="form-control" id="article-ckeditor" required autofocus rows="3"style="border-radius:0px;"></textarea>    
      </div>
  </div>
  <br>
   <div class="row">
      <div class="col">
      <label>Detailed Description</label>
      <textarea name="tdescription" placeholder="You can list your achievements here"class="form-control" id="tdesct" required autofocus rows="3"style="border-radius:0px;"></textarea>    
      </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary"style="border-radius:0px;">Save changes</button>
      </div>
 @if (session('status'))
 <div class="alert alert-success">
 {{ session('status') }}
 </div>
    @endif
               {!!Form::close()!!}    
    </div>
  </div>
</div>
            </div>
			</div>
		
<div class="card card-body" style="border:0px;">
<h5 style="font-family: 'Roboto', sans-serif;"><strong>My Professional Qualifications/Certifications</strong><a class="" href=""data-toggle="modal" data-target="#profcert"><i class="fas fa-plus-square float-right text-danger">Add certification</i></a></h5>
    <div class="table-responsive">
                                                <table class="table" id='qualification'>
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Certification</th>
                                                            <th>Institution</th>
                                                            <th>Brief Description</th>
                                                             <th>Action</th>
                                                        </tr>
                                                    </thead>
                                             @if (count($procert)>0)
                                                    @foreach ($procert as $item)
                                                        <tbody>
                                                            <tr>
                                                            <td><i class="fas fa-dot-circle"></i></td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->institution}}</td>
                                                            
                                                 <td> {!!$item->description!!}</td>
                                                 <td><a class="btn btn-danger btn-sm text-white" href="/update-certification/{{$item->id}}"><i class="fas fa-edit text-white"></i> Edit</a></td>
                                                            </tr>
                                                        </tbody>
                                                    @endforeach
                                                 @else
                                                 <p class="h5 text-danger">Kindly add your certications</p>
                                        @endif
                                                </table>
                                            </div>
<div class="modal fade" id="profcert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@procert','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
                                                     {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your professional qualifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                                                   <div class="col-lg-6">
                                                       <label>Certificate Name</label>
                                                       <input type="text" class="form-control" name="cname" required autofocus style="border-radius:0px;">
                                                   </div>
                                                   <div class="col-lg-6">
                                                         <label>Institution</label>
                                                      <input type="text" name="cinstitution" class="form-control" required autofocus style="border-radius:0px;">
                                                   </div>
                                                   </div>
                                                   <br>
                                                 <div class="row">
                                                         <div class="col">
                                                                 <label>Brief Description</label>
                                                                 <textarea name="cdescription" class="form-control briefd" id="article-ckeditor" rows="4" required autofocus></textarea>
        
                                                           </div>  
                                                 </div>
                                               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
                @if (session('status'))
                                             <div class="alert alert-success">
                                             {{ session('status') }}
                                                      </div>
                                                      @endif
               {!!Form::close()!!}
    </div>
  </div>
</div>
	</div>

<div class="card card-body" style="border:0px;">
    <h5 style="font-family: 'Roboto', sans-serif;"><strong>Consultancy and Short Assignments</strong><a class="" href=""data-toggle="modal" data-target="#assignment"><i class="fas fa-plus-square float-right text-danger">Add consultation</i></a></h5>
       <div class="table-responsive">
                                                    <table class="table " id="reff">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Assignment</th>
                                                                <th>Description</th>
                                                                <th>Assignment type</th>
                                                                <th>Organization</th>
                                                                <th>Start date</th>
                                                                <th>Duration</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                          @if (count($assignments)>0)
                                                    @foreach ($assignments as $item)
                                                <tbody>
                                                    <tr>
                                                    <td><i class="fas fa-dot-circle"></i></td>
                                                    <td>{{$item->position}}</td>
                                                     <td>{!!$item->description!!}</td>
                                                    <td>{{$item->atype}}</td>
                                                    <td>{{$item->organization}}</td>
                                                    <td>0{{$item->startdate}}</td>
                                                    <td>{{$item->duration}}</td>
                                                    <td><a class="btn btn-danger btn-sm text-white" href="/Editass/{{$item->id}}"><i class="fa fa-edit"></i> Edit</a></td>
                                                    </tr>
                                                </tbody>
                                                    @endforeach
                                                @else
                                                    <p>You dont have any references. Kindly
                                                        add them below.
                                                    </p>
                                                    @endif
                                                </table>
                                            </div>
    <div class="modal fade" id="assignment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@assignments','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your short assignments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                                    <label>Organization</label>
                                    <input type="text" class="form-control" name="organization" required autofocus  style="border-radius:0px;">
                                        </div>
                                         <div class="col-lg-6">
                                         <label>Position</label>
                                        <input type="text" name="position" class="form-control" required autofocus style="border-radius:0px;">
                                                                    </div>
                                                                </div>
             <br>
                                                       <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Type</label>
                                                                <select name="atype" class="form-control" style="border-radius:0px;">
                                                                    <option>Selet one</option>
                                                                    <option>Consultancy</option>
                                                                     <option>Training</option>
                                                                     <option>Voluntary</option>
                                                                      <option>Technical Assistant</option>
                                                                </select>
                                                            
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <label>Start Date</label>
                                                               <input type="date" name="sdate" class="form-control" required autofocus style="border-radius:0px;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Duration</label>
                                        <input type="text" name="duration" class="form-control" required autofocus style="border-radius:0px;">
                                        <small>Duration can in terms of weeks or months .You can write 2 weeks, I month, 4 days e.t.c</small>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Brief description</label>
                                                                <textarea name="bdescription" class="form-control"  style="border-radius:0px;" rows="4" ></textarea>
                                                                <small>Give a brief description of what you achieved in the above assignment.</small>
                                                            </div>
                                                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
               @if (session('status'))
                                                     <div class="alert alert-success">
                                                     {{ session('status') }}
                                                              </div>
                                                              @endif
                       {!!Form::close()!!}
    </div>
  </div>
</div>
</div>

<div class="card card-body" style="border:0px;">
    <h5 style="font-family: 'Roboto', sans-serif;"><strong>My Referees</strong><a class="" href=""data-toggle="modal" data-target="#referee"><i class="fas fa-plus-square float-right text-danger">Add referees</i></a></h5>
       <div class="table-responsive">
                                                    <table class="table " id="reff">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>Designation</th>
                                                                <th>Organization</th>
                                                                <th>Phone Number</th>
                                                                <th>Email Address</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                          @if (count($references)>0)
                                                    @foreach ($references as $item)
                                                <tbody>
                                                    <tr>
                                                    <td><i class="fas fa-dot-circle"></i></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->position}}</td>
                                                    <td>{{$item->organization}}</td>
                                                    <td>0{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td><a class="btn btn-danger btn-sm text-white" href="/editreference/{{$item->id}}"><i class="fa fa-edit"></i> Edit</a></td>
                                                    </tr>
                                                </tbody>
                                                    @endforeach
                                                @else
                                                    <p>You dont have any references. Kindly
                                                        add them below.
                                                    </p>
                                                    @endif
                                                </table>
                                            </div>
    <div class="modal fade" id="referee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@reference','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Referees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="rname" required autofocus placeholder="james nyanga" style="border-radius:0px;">
                                        </div>
                                         <div class="col-lg-6">
                                         <label>Title</label>
                                        <input type="text" name="rtitle" class="form-control" required autofocus placeholder="developer Indepth research services" style="border-radius:0px;">
                                                                    </div>
                                                                </div>
             <br>
                                                       <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Phone</label>
                                                                <input type="tel" class="form-control" name="rphone" required autofocus placeholder="+254721531634"style="border-radius:0px;">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <label>Email address</label>
                                                               <input type="email" name="remail" class="form-control" required autofocus placeholder="james@indepthresearch.co.ke"style="border-radius:0px;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Company/Institution</label>
                                        <input type="text" name="rorganization" class="form-control" required autofocus placeholder=" Indepth research services" style="border-radius:0px;">
                                                            </div>
                                                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
               @if (session('status'))
                                                     <div class="alert alert-success">
                                                     {{ session('status') }}
                                                              </div>
                                                              @endif
                       {!!Form::close()!!}
    </div>
  </div>
</div>
</div>
<div class="row">
    <div class="col-xl-12">
        
			<div class="card card-body table-responsive" style="border:0px;">
				<h5 class="" style="font-family: 'Roboto', sans-serif;"><strong >Employment Availability</strong></h5>
           <table class="table">
               <thead>
                   <tr>
                       <th></th>
                       <th>Job Status</th>
                       <th>Job type</th>
                       <th>Preferred Salary</th>
                        <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($salary as $item)
                   <tr>
                       <td><i class="fas fa-dot-circle"></i></td>
                       <td>{{$item->jobsearch}}</td>
                       <td>{{$item->jobtype}}</td>
                       <td>Ksh{{$item->salary}}</td>
                       <td><a class="btn btn-danger btn-sm text-white" href="#" data-toggle="modal" data-target="#editsal"><i class="fas fa-edit"></i> edit</a></td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
          <div class="modal fade" id="editsal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>['InfoController@editsal',$item->id],'method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
                                                         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Edit Employment Availability</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Job status</label>
        <select name="jobs" class="form-control">
            <option>Open to offers</option>
            <option>Close to offers</option>
        </select>
       <br>
        <label>Job type</label>
        <select name="jobt" class="form-control">
            <option>Fulltime</option>
            <option>Parttime</option>
            <option>Contract</option>
             <option>Internship</option>
        </select>
        <br>
        <label>Preferred salary</label>
        <input type="text" class="form-control" name="psalary" required value="<?php echo $item->salary?>">
      </div>
      <div class="modal-footer">
          {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Modify changes</button>
      </div>
      @if (session('status'))
                                                 <div class="alert alert-success">
                                                 {{ session('status') }}
                                                          </div>
                                                          @endif
                   {!!Form::close()!!}
    </div>
  </div>
</div>
   
			</div>
    </div>
</div>
<div class="card card-body" style="border:0px;">
<h5 style="font-family: 'Roboto', sans-serif;" ><strong >My Skills</strong><a class="" href=""data-toggle="modal" data-target="#skills"><i class="fas fa-plus-square float-right text-danger">Add skills</i></a></h5>
@if (count($skills)>0)
<div class="row table-responsive">
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Skillname</th>
            <th>Level of experience</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
          @foreach ($skills as $item)
          <tr>
              <td><i class="fas fa-dot-circle"></i></td>
              <td>{{$item->skillname}}</td>
              <td>{{$item->level}}</td>
              <td><a class="btn btn-danger btn-sm text-white" href="/Editskills/{{$item->id}}"><i class="fas fa-edit"></i> edit</a></td>
          </tr>
    @endforeach  
    </tbody>
</table>
    </div>
    @endif
<div class="modal fade" id="skills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@skills','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
                                                         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your skills</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                                                       <div class="col-lg-12">
                                                           <label>Skill Name</label>
                                                           <input type="text" class="form-control" name="skill" required autofocus style="border-radius:0px;">
                                                       </div>
                                                       <div class="col-lg-12">
                                                           <label>Level</label>
                                                           <select name="level" class="form-control" style="border-radius:0px;">
                            <option>Select one</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Expert</option>
                                                           </select>
                                     
                                                       </div>
                                                   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
                     @if (session('status'))
                                                 <div class="alert alert-success">
                                                 {{ session('status') }}
                                                          </div>
                                                          @endif
                   {!!Form::close()!!}
    </div>
  </div>
</div>
    </div>
<hr>

<div class="card card-body">
    <p><a class="btn btn-danger text-white float-right">Convert CV to pdf</a></p>
</div>
		</div>

</div>
</div>
@endsection