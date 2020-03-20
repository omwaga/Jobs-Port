@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem">
    <div class="row">
        <div class="col-md-12">
            <a class="btn text-white" href="{{action('DashboardController@downloadresume', auth()->user()->id)}}" style="background-color:#0B0B3B;">Download Resume</a>
        </div>
        <div class="col-md-8">
          <div id="wrapper">
            <div id="page"> 
                <div id="content" style="padding-left: 50px">
                    <div class="post">
                        <h2 class="title">Personal Information</h2>
                        <div style="clear: both;">&nbsp;</div>
                        <div class="entry">
                            <p style="width: 60%">{{$personalstatements->statement  ?? ''}}</p>
                        </div>
                    </div>
                    <div class="post">
                        <h2 class="title">Experience</h2>
                        <p class="meta"><span class="date">November 07, 2011</span></p><br>
                        <div style="clear: both;">&nbsp;</div>
                        @foreach($experience as $experienced)
                        <div class="entry">
                            <label style="width: 60%"><strong>Employer:</strong>{{$experienced->employer}}</label>
                            <label style="width: 60%"><strong>Position:</strong>{{$experienced->position}}</label>
                            <!-- <p style="width: 60%"><strong>Roles and Resposiblities:</strong>{{$experienced->roles}}</p> -->
                        </div>
                        @endforeach
                    </div>
                    <div class="post">
                        <h2 class="title">Education</h2>
                        <p class="meta"><span class="date">November 07, 2011</span></p><br>
                        <div style="clear: both;">&nbsp;</div>
                        @foreach($education as $educated)
                        <div class="entry">
                            <label style="width: 60%"><strong>Institution:</strong>{{$educated->institution}}</label>
                            <label style="width: 60%"><strong>Qualification:</strong>{{$educated->Qualification}}</label>
                            <!-- <p style="width: 60%"><strong>Roles and Resposiblities:</strong>{{$experienced->roles}}</p> -->
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <h4>{{$personalinfo->name  ?? ''}}</h4>
                            <ul>
                                <li class="text-white">{{$personalinfo->email  ?? ''}}</li>
                                <li class="text-white"><strong>Phone:</strong>{{$personalinfo->phone  ?? ''}}</li>
                                <li class="text-white"><strong>Gender:</strong>{{$personalinfo->gender  ?? ''}}</li>
                                <li class="text-white"><strong>Religion:</strong>{{$personalinfo->religion  ?? ''}}</li>
                                <li class="text-white"><strong>DOB:</strong>{{$personalinfo->dob  ?? ''}}</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
            </div>
            <!-- end #page -->
        </div>
    </div>
    <div class="col-md-4">
        <h5 class="">Select a template to preview</h5>
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-1.jpg') }}" style="width: 150px; height: 150px">
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-2.jpg') }}" style="width: 150px; height: 150px">
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-3.jpg') }}" style="width: 150px; height: 150px">
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-4.jpg') }}" style="width: 150px; height: 150px">
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-5.jpg') }}" style="width: 150px; height: 150px">
        <img src="{{ asset('resume/free-resume-cv-bootstrap-template-for-developer-color-6.jpg') }}" style="width: 150px; height: 150px">
    </div>
</div>
</div>
@endsection