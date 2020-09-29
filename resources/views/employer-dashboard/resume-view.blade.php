@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"> Candidate Profile</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('resumedatabase')}}" class="breadcrumb-link">Express Recruitment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Candidate Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12" align="right">
                <a href="{{ url()->previous() }}" class="btn btn-info">Back</a><br>                    
             </div>
             <!-- ============================================================== -->
             <!-- data table  -->
             <!-- ============================================================== -->
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="card">
                <div class="card-body">
                    <div class="user-avatar text-center d-block">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0">{{$jobseekerdetail->name ?? 'No name'}}</h2>
                        <!-- <p>Project Manager @Influnce</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-body border-top">
                            <h3 class="font-16">Contact Information</h3>
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
                            <h3 class="font-16">Basic Information</h3>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li>Nationality:  {{$jobseekerdetail->country->name ?? ''}}</li>
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
                <div class="card-body border-top">
                    <h3 style="color:#071d42;">Personal Statement</h3>
                    <div>
                        <p>{!!$personalstatement->statement  ?? ''!!}.</p>
                    </div>
                </div>


                <div class="card-body border-top">
                    <div class="section-block" id="select">
                        <h3 class="section-title" style="color:#071d42;">Experience</h3>
                    </div>
                    <div class="w-100">
                        @php $column_number = 0; @endphp
                        @foreach($experiences as $experience)
                        @php $column_number = $column_number + 1; @endphp
                        <div class="resume-content">
                            <h5>{{$column_number}}.<b>Position: </b>{{$experience->position}}
                                <span class="text-primary float-right"><b>Duration: </b> {{ \Carbon\Carbon::parse($experience->start_date)->format('d/m/Y')}} - {{$experience->end_date}}</span></h5>
                                <h5><b>Employer: </b>{{$experience->employer}}</h5>
                                <h5><b>Roles and Responsibilities</b></h5>
                                <p>{!!$experience->roles!!}</p>
                            </div><hr>
                            @endforeach

                        </div>
                    </div>

                    <div class="card-body border-top">
                        <div class="section-block" id="select">
                            <h3 class="section-title">Education</h3>
                        </div>
                        @foreach($academics as $academic)
                        <div class="resume-content">
                            <h5><b>Institution: </b>{{$academic->institution}}
                                <span class="text-primary float-right"><b>Graduation Date: </b>{{$academic->grad_date}}</span></h5>
                                <h5><b>Course: </b>{{$academic->qualification}}</h5>
                                <h5><b>Education Level: </b>{{$academic->level}}</h5>
                                <h5><b>Score: </b>{{$academic->score}}</h5>
                            </div><hr>
                            @endforeach

                        </div>

                        <div class="card-body border-top">
                            <div class="section-block" id="select">
                                <h3 class="section-title">Skills</h3>
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
                                        <h3 class="section-title">Awards &amp; Certifications</h3>
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
                                            <h3 class="section-title">Referees</h3>
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
             <div class="col-md-12" align="right">
                <a href="{{ url()->previous() }}" class="btn btn-info">Back</a><br>                    
             </div>
         </div>
     </div>
 </div>
 @endsection