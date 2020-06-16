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
                            <h5 class="pageheader-title">{{$job}}</h5>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="{{route('shortlistedcandidates')}}" class="breadcrumb-link">Shortlisted Candidates</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{$job}}</li>
                                        </ol>
                                    </nav>
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
                            <div class="card-header">
                                <h5 class="mb-0">Shortlisted Candidates for {{$job}}</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12" align="center">
                                <form class="card card-sm" action="shortlist-jobs" method="post">
                                    @csrf
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h6 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <select class="form-control" name="jobtitle" required id="input-select">
                                                <option>Select Job Vacancy</option>
                                                @foreach($jobposts as $jobpost)
                                                <option value="{{$jobpost->id}}">{{$jobpost->job_title}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                           <tr>
                                               <th>#</th>
													<th>Applicant Name</th>
													<th>Phone Number</th>
													<th>Email Address</th>
													<th style="width: 30%">Action</th>
												</tr>
                                        </thead>
                                        <tbody>
                                            @php $column_number = 0; @endphp
												@foreach($candidates as $candidate)
								               @php $column_number = $column_number + 1; @endphp
												<tr>
												    <th>{{$column_number}}</th>
													<td>{{$candidate->name ?? ''}}</td>
													<td>{{$candidate->phone ?? ''}}</td>
													<td>{{$candidate->email ?? ''}}</td>
													<td>
													    <div class="btn-group">
													    <a  href="/applicantprofile/{{$candidate->user_id}}" class="btn btn-info btn-sm text-white">
																<i class="fa fa-eye"></i>View Profile
															</a>
															<button type="button" data-toggle="modal" data-id="" class="btn btn-danger btn-sm text-white" data-target="#removeshotlist-{{$candidate->id}}">
																<i class="fa fa-trash"></i>Remove
															</button>
															</div>
															@include('empdash.content.remove-shortlist')
													</td>
												</tr>
												@endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
                    </div>
                </div>
            </div>
</div>
@endsection