@extends('layouts.admin.master')
@section('content')<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Jobseekers</h4>
    <ol class="breadcrumb">
        <li>
            <a href="/admin-dashboard">Dashboard</a>
        </li>

        <li class="active">
            Jobseeker Profile
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->          

<div class="col-md-12">
    <div class="white-box">
        <div class="card-profile2">
          <img src="{{asset('assets/images/avatar.png')}}" class="profile-photo"  alt=""/>
          <h4>{{$jobseekerdetail->name ?? ''}}</h4>
          <!-- <p>Web Designer</p> -->

          <div class="row">
            <div class="col-md-4">
                <div class="card-body border-top">
                    <h4 class="font-16">Contact Information</h4>
                    <div class="">
                        <ul class="list-unstyled mb-0">
                            <li>Phone Number:  {{$jobseekerdetail->phone ?? ''}}</li>
                            <li class="mb-1">Email Address:  {{$jobseekerdetail->email ?? ''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body border-top">
                    <h4 class="font-16">Basic Information</h4>
                    <div class="">
                        <ul class="list-unstyled mb-0">
                            <li>Nationality:  {{$jobseekerdetail->nationality ?? ''}}</li>
                            <li>Date Of Birth:  {{$jobseekerdetail->dob ?? ''}}</li>
                            <li>Marital Status:  {{$jobseekerdetail->marital_status ?? ''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body border-top">
                    <h3 class="font-16"></h3>
                    <div class="">
                        <ul class="mb-0 list-unstyled">
                            <li>Postal Address:  {{$jobseekerdetail->postal_address ?? ''}}</li>
                            <li>ID Number:  {{$jobseekerdetail->id_pass ?? ''}}</li>
                            <li>Gender:  {{$jobseekerdetail->gender ?? ''}}</li>
                            <li>Religion:  {{$jobseekerdetail->religion ?? ''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         </div>
        <div class="card-body border-top">
            <h4 style="color:#071d42;">Personal Statement</h4>
            <div>
                <p>{!!$personalstatement->statement  ?? ''!!}.</p>
            </div>
        </div>


        <div class="card-body border-top">
            <div class="section-block" id="select">
                <h4 class="section-title" style="color:#071d42;">Experience</h4>
            </div>
            <div class="w-100">
                @php $column_number = 0; @endphp
                @foreach($experiences as $experience)
                @php $column_number = $column_number + 1; @endphp
                <div class="resume-content">
                    <h5>{{$column_number}}.<b>Position: </b>{{$experience->position}}
                        <span class="text-primary float-right"><b>Duration: </b> {{ \Carbon\Carbon::parse($experience->start_date ?? '')->format('d/m/Y')}} - {{$experience->end_date ?? ''}}</span></h5>
                        <h5><b>Employer: </b>{{$experience->employer}}</h5>
                        <h5><b>Roles and Responsibilities</b></h5>
                        <p>{!!$experience->roles!!}</p>
                    </div><hr>
                    @endforeach

                </div>
            </div>

            <div class="card-body border-top">
                <div class="section-block" id="select">
                    <h4 class="section-title">Education</h4>
                </div>
                @foreach($academics as $academic)
                <div class="resume-content">
                    <h5><b>Institution: </b>{{$academic->institution}}
                        <span class="text-primary float-right"><b>Graduation Date: </b>{{$academic->grad_date ?? ''}}</span></h5>
                        <h5><b>Course: </b>{{$academic->qualification}}</h5>
                        <h5><b>Education Level: </b>{{$academic->level}}</h5>
                        <h5><b>Score: </b>{{$academic->score}}</h5>
                    </div><hr>
                    @endforeach

                </div>

                <div class="card-body border-top">
                    <div class="section-block" id="select">
                        <h4 class="section-title">Skills</h4>
                    </div>
                    <div class="w-100">

                        <ul class="fa-ul mb-0">
                            @foreach($skills as $skill)
                            <li>
                                <i class="fa-li fa fa-check"></i>
                                {{$skill->skillname}}</li>
                                <li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card-body border-top">
                            <div class="section-block" id="select">
                                <h4 class="section-title">Awards &amp; Certifications</h4>
                            </div>
                            <div class="w-100">
                                <ul class="fa-ul mb-0">
                                    @foreach($certifications as $certification)
                                    <li>
                                        <i class="fa-li fa fa-trophy text-warning"></i>
                                        {{$certification->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body border-top">
                                <div class="section-block" id="select">
                                    <h4 class="section-title">Referees</h4>
                                </div>
                                <div class="w-100">
                                    <div class="table-responsive">
                                      <table id="add-row" class="display table table-striped table-hover" >
                                       <thead>
                                        <tr>
                                         <th>Name</th>
                                         <th>Organization</th>
                                         <th>Position</th>
                                         <th>Phone</th>
                                         <th>Email</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($referees as $referee)
                                   <tr>
                                     <td>{{$referee->name}}</td>
                                     <td>{{$referee->organization}}</td>
                                     <td>{{$referee->position}}</td>
                                     <td>{{$referee->phone}}</td>
                                     <td>{{$referee->email}}</td>
                                 </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
     </div>
 </div>
 @endsection