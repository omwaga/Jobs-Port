@extends('layouts.app')
@section('content')
 <div class="container" style="margin-top:3%;">
	      <div class="card card-header"><h5 style="font-family: 'Roboto', sans-serif;">Accounts</h5>
	      </div>
	    @if (session('error'))
                    <div class="alert alert-danger">
                    {{ session('danger') }}
                             </div>
                             @endif
     @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                             </div>
                             @endif
	      <hr>
	      <ul class="nav nav-tabs text-white" id="myTab" role="tablist" style="background-color:#0C345D">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user"></i> Login and security</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-lock"></i> Privacy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Subscriptions</a>
  </li>
</ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="card card-body">
      <h5 class="text-dark">Change account name and email address</h5>
  <hr>
         
      
                        <form method="POST" action="{{route('editper',[$user->id])}}">
                            @method('PUT')
                            @csrf
          <div class="row">
              <div class="col-md-6">
                  <label>Account name</label>
                  <input type="text" name="name" value="<?php echo $user->name?>" class="form-control">
              </div>
              <div class="col-md-6">
                   <label>Account email</label>
                  <input type="email" name="email" value="<?php echo $user->email?>" class="form-control">
              </div>
          </div>
          <br>
          <div class="row">
              
              <div class="col-md-6">
                 <a class="btn btn-primary text-white" href="">Close</a>
              </div>
              <div class="col-md-6">
                  <button type="submit" class="btn btn-danger text-white float-right">Save changes</button>
              </div>
          </div>
          <br>
  @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                             </div>
                             @endif
</form>
</div>
    
  <div class="card card-body">
    <h5 class="text-dark">Change Password</h5>
  <hr>
  
      <form method="POST" action="{{route('securitty',[$user->id])}}">
           @method('PUT')
      @csrf
         <div class="row">
             <div class="col-xl-10">
                 <label>Old password</label>
                 <input type="password" name="oldp" class="form-control" required >
             </div>
             <br>
             <div class="col-xl-10">
                 <label>New Password</label>
                 <input type="password" name="npassword" class="form-control" required>
             </div>
             <br>
             <div class="col-xl-10">
                 <label>Confirm password</label>
                 <input type="password" name="cpassword" class="form-control" required>
             </div>
         </div>
         <br>
          <div class="row">
              <div class="col-md-5">
                   
                 <a class="btn btn-primary text-white" href="">Close</a>
              </div>
              <div class="col-md-5">
                  <button type="submit" class="btn btn-danger text-white float-right">Save changes</button>
              </div>
          </div>
</form>
  </div>
      </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 <div class="card card-body">
     <ul class="list-group list-group-flush">
  <li class="list-group-item"><a href="{{route('jobseekeraccount')}}" class="nav-link"><h4><b>Edit your public profile</b></h4>
  <p>Choose how your profile appears to the employers to enhance your chances of landing to your dream job.</p></a></li>
</ul>
 </div>
      </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="card card-body">
          <ul class="list-group list-group-flush">
  <li class="list-group-item"><a href="#" class="nav-link"><h4><b>Subscribe to receive job alerts</b></h4>
  <p>We make your job search easy. Subscribe to receive latest jobs tailored to your areas of specialization</p></a></li>
  <li class="list-group-item"><a href="#" class="nav-link"><h4><b>Subscribe to eye catching cover letters and Professional CVs</b></h4>
  <p>Access over 1,000 CV designs and cover letters that will let you be discovered by top employers.</p></a></li>
</ul>
          <hr>
      </div>
  </div>
</div>
 </div>
 </div>
 @endsection