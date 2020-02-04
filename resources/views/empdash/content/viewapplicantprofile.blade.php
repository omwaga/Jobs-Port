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
                                <h2 class="pageheader-title">Employer Dashboard</h2>
                                <p class="pageheader-text">Staff Recruitmant and Staff Development</p>
                                    @if (session('success'))
              <div class="alert alert-success">
              {{ session('success') }}
                       </div>
                       @endif
                       @if (session('failure'))
                    <div class="alert alert-danger text-white">
                    {{ session('failure') }}
                    </div>
                    @endif
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">View Applicant Profile</li>
                                        </ol>
                                    </nav>
                                    @if(!$jobseekerdetail)
                                    @else
                                    <div class="pull-right">	
                                    <a  href="#" class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#shotlist-{{$jobseekerdetail->id}}">
																<i class="fa fa-check" aria-hidden="true"></i> Shortlist
															</a>
															<button type="submit" class="btn btn-info btn-sm text-white" data-id="" data-toggle="modal" data-target="#talent-{{$jobseekerdetail->id}}">
																<i class="fa fa-plus"></i>Talent Pool
															</button>
															<button type="submit" class="btn btn-danger btn-sm text-white" data-id="" data-toggle="modal" data-target="#shortlist">
																<i class="fa fa-edit"></i>Decline
															</button>
															@include('empdash.content.addshortlist')
															@include('empdash.content.addtalentpool')
															</div>
															@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">

 <!-- ============================================================== -->
                        <!-- select options  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row ">
            <div class="col-md-12">
      <span class="d-none d-lg-block">
        <img class="img-fluid img-thumbnail rounded-circle mx-auto mb-2 d-flex justify-content-center" src="{{asset('neww/images/index.jpeg')}}" alt="">
      </span>
      </div>
      <div class="col-md-12">
        <h3 style="color:#071d42;">{{$jobseekerdetail->name ?? 'null'}}
        </h3>
        </div>
            <div class="col-md-6">
                <h5>Email Address:{{$jobseekerdetail->email ?? 'null'}}</h5>
                <h5>ID Number:  {{$jobseekerdetail->id_pass ?? 'null'}}</h5>
                <h5>Phone Number:  {{$jobseekerdetail->phone ?? 'null'}}</h5>
                <h5>Gender:  {{$jobseekerdetail->gender ?? 'null'}}</h5>
                <h5>Religion:  {{$jobseekerdetail->religion ?? 'null'}}</h5>
            </div>
            <div class="col-md-6">
                <h5>Date Of Birth:  {{$jobseekerdetail->dob ?? 'null'}}</h5>
                <h5>Marital Status:  {{$jobseekerdetail->marital_status ?? 'null'}}</h5>
                <h5>Postal Address:  {{$jobseekerdetail->postal_address ?? 'null'}}</h5>
                <h5>Nationality:  {{$jobseekerdetail->nationality ?? 'null'}}</h5>
            </div>
        </div><hr>
        <h3 style="color:#071d42;">Personal Statement</h3>
        <p>{!!$personalstatement->statement  ?? 'null'!!}.</p>
                            </div>
                        </div><hr>
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="select">
                                    <h3 class="section-title" style="color:#071d42;">Experience</h3>
                                </div>
                                <div class="w-100">
        @php $column_number = 0; @endphp
        @foreach($experiences as $experience)
        @php $column_number = $column_number + 1; @endphp
          <div class="resume-content">
            <h5>{{$column_number}}.<b>Position: </b>{{$experience->position}}
            <span class="text-primary float-right"><b>Duration: </b>{{$experience->start_date}} - {{$experience->end_date}}</span></h5>
            <h5><b>Employer: </b>{{$experience->employer}}</h5>
            <h5><b>Roles and Responsibilities</b></h5>
            <p>{!!$experience->roles!!}</p>
          </div><hr>
        @endforeach

      </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        </div>
                        
                         <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        </div>
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
  </div>
												</div>
												@if(!$jobseekerdetail)
                                    @else
                                    <div class="pull-right">	
                                    <a  href="#" class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#shotlist-{{$jobseekerdetail->id}}">
																<i class="fa fa-check" aria-hidden="true"></i> Shortlist
															</a>
															<button type="submit" class="btn btn-info btn-sm text-white" data-id="" data-toggle="modal" data-target="#talent-{{$jobseekerdetail->id}}">
																<i class="fa fa-plus"></i>Talent Pool
															</button>
															<button type="submit" class="btn btn-danger btn-sm text-white" data-id="" data-toggle="modal" data-target="#shortlist">
																<i class="fa fa-edit"></i>Decline
															</button>
															@include('empdash.content.addshortlist')
															@include('empdash.content.addtalentpool')
															</div>
															@endif
                            </div>
                        </div>
                    </div>
                </div>
	@endsection