<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="/images/logo/Networked.jpg" />
  <link rel="icon" type="image/png" href="/images/logo/Networked.jpg" />
  <title>NetworkedPros Resume Builder | Build</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Canonical SEO -->
  <!-- <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/> -->

  <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
  <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
  <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
  <!-- <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg"> -->

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
  <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
  <meta name="twitter:creator" content="@creativetim">
  <!-- <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg"> -->

  <!-- Open Graph data -->

  <!-- CSS Files -->
  <link href="resume_builder/css/bootstrap.min.css" rel="stylesheet" />
  <link href="resume_builder/css/paper-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->

  <!-- Fonts and Icons -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="resume_builder/css/themify-icons.css" rel="stylesheet">
  
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<style type="text/css">
    .table-sortable tbody tr {
    cursor: move;
}
</style>

  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
    $('#duties').ckeditor();
    $('#edesc').ckeditor();
    $('#summary').ckeditor();
    $('#article-ckeditor').ckeditor();
    $('#editass').ckeditor();
        $('.textarea').ckeditor(); // if class is prefered.
      </script>
    </head>

    <body>
      <div class="image-container set-full-height" style="background-image: url('resume_builder/img/paper-1.jpeg')">
        <!--   Creative Tim Branding   -->
      


        <!--   Big container   -->
        <div class="container">
          <div class="row">
          <a href="/">
           <div class="logo-container col-md-6">
              <div class="logo">
                  <img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;">
              </div>
          </div>
      </a>
      <div  class="col-md-6">
        <ul class="navbar-nav ml-auto pull-right">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i style="font-size:2.5em;" class="fa fa-user text-white">
                </i>
          {{ Auth::user()->name }} <span class="caret">
        </a>
        <div class="dropdown-menu" style="background: #90959e;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-suitcase"></i> Products and Billing</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div> 
        </li>
        </ul>
      </a>
      </div>
      </div>
          <div class="row">
            <div class="col-sm-12">

              <!--      Wizard container        -->
              <div class="wizard-container">
@include('errors')
                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                  <form action="{{route('buildresume')}}" method="post">
                    @csrf
                    <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                    <div class="wizard-header text-center">
                      <h3 class="wizard-title">Create your profile to generate your resume</h3>
                      <p class="category">This information will let us know more about you.</p>
                    </div>

                    <div class="wizard-navigation">
                      <div class="progress-with-circle">
                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                      </div>
                      <ul style="list-style: none;">
                        <li>
                          <a href="#about" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-user"></i>
                            </div>
                            Personal Information
                          </a>
                        </li>
                        <li>
                          <a href="#account" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-settings"></i>
                            </div>
                            Employment
                          </a>
                        </li>
                        <li>
                          <a href="#address" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-map"></i>
                            </div>
                            Education
                          </a>
                        </li>
                        <li>
                          <a href="#awards" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-map"></i>
                            </div>
                            Awards and Certifications
                          </a>
                        </li>
                        <li>
                          <a href="#skills" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-map"></i>
                            </div>
                            Skills
                          </a>
                        </li>
                        <li>
                          <a href="#referees" data-toggle="tab">
                            <div class="icon-circle">
                              <i class="ti-map"></i>
                            </div>
                            Referees
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content">
                      <div class="tab-pane" id="about">
                        <div class="row">
                          <h5 class="info-text"> Please complete you profile to generate you Resume and CV.</h5>
                          <div class="col-sm-4 col-sm-offset-1">
                            <div class="picture-container">
                              <div class="picture">
                                <img src="resume_builder/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                <input type="file" id="wizard-picture">
                              </div>
                              <h6>Choose Picture</h6>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Full Name <small>(required)</small></label>
                              <input name="name" type="text" value="{{$personalinfo->name ?? ''}}" class="form-control" placeholder="Andrew...">
                            </div>
                            <div class="form-group">
                              <label>Email <small>(required)</small></label>
                              <input name="email" type="email" class="form-control" value="{{$personalinfo->email ?? ''}}" placeholder="name@domain.com">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                              <div class="form-group">
                                <label>Phone Number: <small>(required)</small></label>
                                <input name="phone" type="text" class="form-control" value="{{$personalinfo->phone?? ''}}" placeholder="0700000000">
                              </div>
                              <div class="form-group">
                                <label>Religion: <small>(required)</small></label>
                                <select name="religion" class="form-control" style="border-radius:0px;" required autofocus>
                                 <option>{{$personalinfo->religion ?? 'Select Religion'}}</option>
                                 <option>Christianity</option>
                                 <option>Islam</option>
                                 <option>Hinduism</option>
                                 <option>Buddhism</option>
                                 <option>Prefer not to say</option>
                               </select>
                             </div>
                             <div class="form-group">
                              <label>Select Nationality</label><br>
                              <select name="country" class="form-control">
                               <option value="">Select Country</option>
                               @foreach ($countries as $key => $value)
                               <option value="{{ $key }}">{{ $value }}</option>
                               @endforeach
                             </select> 
                           </div>
                           <div class="form-group">
                            <label>State/Region</label><br>
                            <select name="state" class="form-control">
                             <option>State/Region</option>
                           </select> 
                         </div>
                        <div class="form-group">
                          <label>Postal Address: <small>(required)</small></label>
                          <input name="postal_address" type="text" class="form-control" value="{{$personalinfo->postal_address?? ''}}" placeholder="">
                        </div>
                       </div>
                       <div class="col-sm-4 col-sm-offset-1">
                        <div class="form-group">
                          <label>ID/Passport Number <small>(required)</small></label>
                          <input name="id_pass" type="text" class="form-control" value="{{$personalinfo->id_pass ?? ''}}" placeholder="23673356">
                        </div>
                        <div class="form-group">
                          <label>Gender: <small>(required)</small></label>
                          <select name="gender" class="form-control" style="border-radius:0px;"required autofocus>
                            <option>{{$personalinfo->gender ?? 'Select Gender'}}</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Maritial Status: <small>(required)</small></label>
                          <select name="marital_status" class="form-control" style="border-radius:0px;"required autofocus >
                            <option>{{$personalinfo->marital_status ?? 'Select Marital Status'}}</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Date Of Birth: <small>(required)</small></label>
                          <input name="dob" type="date" class="form-control" value="{{$personalinfo->dob?? ''}}" placeholder="">
                        </div>
                        <div class="form-group">
                          <label>Postal Code: <small>(required)</small></label>
                          <input name="postal_code" type="text" class="form-control" value="{{$personalinfo->postal_code ?? ''}}" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="account">
                  <h5 class="info-text"> Provide Your Work Experience </h5>
                  <div class="row">
                    @if($experience->count() > 0)

        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable">
                <thead>
                    <tr >
                        <th class="text-center">
                            Employer
                        </th>
                        <th class="text-center">
                            Position
                        </th>
                        <th class="text-center">
                            Start Date
                        </th>
                        <th class="text-center">
                            End Date
                        </th>
                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($experience as $experienced)
                  <tr>
                    <td>{{$experienced->position}}</td>
                    <td>{{$experienced->employer}}</td>
                    <td>{{$experienced->start_date}}</td>
                    <td>{{$experienced->end_date}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    @else
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Employer: <small>(required)</small></label>
                          <input name="employer" type="text" class="form-control" value="{{old('employer')}}" placeholder="">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Position: <small>(required)</small></label>
                          <input name="position" type="text" class="form-control" value="{{old('position')}}" placeholder="">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Start date: <small>(required)</small></label>
                          <input name="start_date" type="date" class="form-control" value="{{old('start_date')}}" placeholder="">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>End Date: <small>(required)</small></label>
                          <input name="end_date" type="date" class="form-control" value="{{old('end_date')}}" placeholder="">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Roles and Responsibilities: <small>(required)</small></label>
                          <textarea class="form-control ckeditor" name="roles">{{old('roles')}}</textarea>
                        </div>
                      </div>
                    </div>
                    @endif



                  <div class="col-sm-8 col-sm-offset-2">
    <div class="row clearfix">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            Employer
                        </th>
                        <th class="text-center">
                            Start Date
                        </th>
                        <th class="text-center">
                            Position
                        </th>
                        <th class="text-center">
                            Description
                        </th>
                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0' data-id="0" class="hidden">
                        <td data-name="nemployer">
                            <input type="text" name='nemployer0'  placeholder='Name' class="form-control"/>
                        </td>
                        <td data-name="start">
                            <input type="date" name='start0' placeholder='Email' class="form-control"/>
                            <input type="date" name='end0' placeholder='Email' class="form-control"/>
                        </td>
                        <td data-name="position">
                            <input type="text" name='position0' placeholder='Email' class="form-control"/>
                        </td>
                        <td data-name="description">
                            <textarea name="description0" rows="10" placeholder="Description" class="form-control"></textarea>
                        </td>
                        <td data-name="delete_employer">
                            <button name="delete_employer0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-primary float-right">Add Employment Details</a>
</div>


                  </div>
                </div>
                <div class="tab-pane" id="address">
                  <div class="row">
                    @if($education->count() > 0)
                    <div class="col-sm-12">
                      <h5 class="info-text"> Education History </h5>
                    </div>
                    <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable">
                <thead>
                    <tr >
                        <th class="text-center">
                            Course/Qualification
                        </th>
                        <th class="text-center">
                            Institution
                        </th>
                        <th class="text-center">
                            Start Date
                        </th>
                        <th class="text-center">
                            Graduation Date
                        </th>
                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($education as $educated)
                  <tr>
                    <td>{{$educated->qualification}}</td>
                    <td>{{$educated->institution}}</td>
                    <td>{{$educated->start_date}}</td>
                    <td>{{$educated->grad_date}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    @else
                    <div class="col-sm-12">
                      <h5 class="info-text"> Please provide your Education history </h5>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                      <div class="form-group">
                        <label>Name of Course:</label>
                        <input type="text" name="qualification" value="{{old('qualification')}}" class="form-control" placeholder="Qualification">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Attained Score:</label>
                        <input type="text" name="score" value="{{old('score')}}" class="form-control" placeholder="242">
                      </div>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                      <div class="form-group">
                        <label>Name of Institution:</label>
                        <input type="text" name="institution" value="{{old('institution')}}" class="form-control" placeholder="5h Avenue">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Level:<small>(level of education)</small></label>
                        <select name="level" class="form-control" style="border-radius:0px;" required autofocus>
               <option>{{$edu->level ?? 'Select Level'}}</option>
               <option>Certificate</option>
              <option>Diploma</option>
               <option>Degree</option>
               <option>Masters</option>
          </select>
                      </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <label>Start Date:</label>
                        <input type="date" value="{{old('education_start_date')}}" name="education_start_date" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Graduation Date:</label><br>
                                                <input type="date" value="{{old('grad_date')}}" name="grad_date" class="form-control">

                      </div>
                    </div>
                    @endif

                    <div class="col-sm-10 col-sm-offset-1">
                      @include('dashboard.resume-addeducation')
                    </div>

                  </div>
                </div>
                <div class="tab-pane" id="awards">
                  <div class="row">
                    @if($awards->count() > 0)
                    <div class="col-sm-12">
                      <h5 class="info-text"> Awards and Certifictaion </h5>
                    </div>

                    <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable">
                <thead>
                    <tr >
                        <th class="text-center">
                            Award Name
                        </th>
                        <th class="text-center">
                            Institution/Body
                        </th>
                        <th class="text-center">
                            Award Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($awards as $award)
                  <tr>
                    <td>{{$award->name}}</td>
                    <td>{{$award->institution}}</td>
                    <td>{{$award->award_date}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    @else
                    <div class="col-sm-12">
                      <h5 class="info-text">Fill Awards and Certifictaion? </h5>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                      <div class="form-group">
                        <label>Award Name:</label>
                        <input name="award_name" value="{{old('award_name')}}" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Institution:</label>
                        <input name="award_institution" value="{{old('award_institution')}}" type="text" class="form-control" placeholder="Institution Name">
                      </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <label>Award Date:</label>
                        <input name="award_date" type="date" class="form-control" value="{{old('award_date')}}">
                      </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                      <div class="form-group">
                        <label>Description</label><br>
                        <textarea class="form-control ckeditor" name="award_description">{{old('award_description')}}</textarea>
                      </div>
                    </div>
                    @endif

                    <div class="col-sm-10 col-sm-offset-1">
                      @include('dashboard.resume-addaward')
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="skills">
                  <div class="row">
                    @if($skills->count() > 0)
                    <div class="col-sm-12">
                      <h5 class="info-text"> Skills </h5>
                    </div>
                    <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable">
                <thead>
                    <tr >
                        <th class="text-center">
                            Skill Name
                        </th>
                        <th class="text-center">
                            Expertise Level
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($skills as $skill)
                  <tr>
                    <td>{{$skill->skillname}}</td>
                    <td>{{$skill->level}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    @else
                    <div class="col-sm-12">
                      <h5 class="info-text"> Skills </h5>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1">
                      <div class="form-group">
                        <label>Skill Name</label>
                        <input name="skill_name" type="text" value="{{old('skill_name')}}" class="form-control" placeholder="Skill Name">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Expertise Level</label>
                        <select name="skill_level" class="form-control" style="border-radius:0px;"required autofocus>
               <option>{{$skill->level ?? 'Select Level'}} </option>
              <option>Beginner</option>
               <option>Intermediate</option>
               <option>Expert</option>
          </select>
                      </div>
                    </div>
                    @endif<div class="col-sm-10 col-sm-offset-1">
                      @include('dashboard.resume-addskill')
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="referees">
                  <div class="row">
                    @if($references->count() > 0)
                    <div class="col-sm-12">
                      <h5 class="info-text"> Referees </h5>
                    </div>
                    <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable">
                <thead>
                    <tr >
                        <th class="text-center">
                            Full Name
                        </th>
                        <th class="text-center">
                            Phone Number
                        </th>
                        <th class="text-center">
                            Email
                        </th>
                        <th class="text-center">
                            Organization
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($references as $reference)
                  <tr>
                    <td>{{$reference->name}}</td>
                    <td>{{$reference->phone}}</td>
                    <td>{{$reference->email}}</td>
                    <td>{{$reference->organization}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
                    @else
                    <div class="col-sm-12">
                      <h5 class="info-text"> Referees </h5>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                      <div class="form-group">
                        <label>Position/Designation</label>
                        <input type="text" name="referee_position" class="form-control" value="{{old('referee_position')}}" placeholder="Position">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="referee_name" class="form-control" value="{{old('referee_name')}}" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" value="{{old('phone_number')}}" name="phone_number" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" value="{{old('referee_email')}}" class="form-control" name="referee_email">
                      </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                      <div class="form-group">
                        <label>Employer/Organization</label>
                        <input type="text" value="{{'organization'}}" name="organization" class="form-control">
                      </div>
                    </div>
                    @endif

                    <div class="col-sm-10 col-sm-offset-1">
                      @include('dashboard.resume-addreference')
                    </div>



                  </div>
                </div>
              </div>
              <div class="wizard-footer">
                <div class="pull-right">
                  <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                  <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
                </div>

                <div class="pull-left">
                  <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div> <!-- wizard container -->
      </div>
    </div><!-- end row -->
  </div> <!--  big container -->

  <div class="footer">
    <div class="container text-center">
      Made with <i class="fa fa-heart heart"></i> by <a href="">The NetworkedPros</a>.
    </div>
  </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="resume_builder/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="resume_builder/js/bootstrap.min.js" type="text/javascript"></script>
<script src="resume_builder/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="resume_builder/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/   -->
<script src="resume_builder/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code
        
        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });
        
        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */
        
        // add the new row
        $(tr).appendTo($('#tab_logic'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();
    
        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });
        
        return $helper;
    };
  
    $(".table-sortable tbody").sortable({
        helper: fixHelperModified      
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});
</script>

</html>
