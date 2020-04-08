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
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Insights</li>
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
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Total Jobs Online</h5>
                                            <h2 class="mb-0"> {{$jobs->count(), '0'}}</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-white">Total Job Applications</h5>
                                            <h2 class="mb-0 text-white"> {{$applications->count(),'0'}}</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card bg-success">
                                    <div class="card-body" align="center">
                                        <div class="d-inline-block">
                                            <h5 class="text-white">Don’t have time to post your Job Vacancy?</h5>
                                            <p class="text-white">Send us your job advert to info@thenetworkedpros.com will do the rest</p>
                                            <!-- <h2 class="mb-0 text-white"> {{$applications->count(),'0'}}</h2> -->
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-balance-scale fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                             <h5 class="breadcrumb-item active" aria-current="page">Suggested Actions for you.</h5>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-dark">Publish Job</h5>
                                            <a class="btn btn-info btn-sm" href="{{route('emppostjob')}}">Post a Job</a>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-book fa-fw fa-sm text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-dark">Add Team Member</h5>
                                            <a class="btn btn-secondary btn-sm" href="#">Add users</a>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-dark">Manage Subscriptions</h5>
                                            <a class="btn btn-secondary btn-sm" href="#">Pick a Plan</a>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class=" far fa-heart fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-dark">Source Candidates</h5>
                                            <a class="btn btn-secondary btn-sm" href="{{route('emppostjob')}}">Find Candidates</a>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-users fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                               <!-- recent Job applications  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Applications</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Applicant's Name</th>
                                                        <th class="border-0">Job Title</th>
                                                        <th class="border-0">Application Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                            @php $column_number = 0; @endphp
											    @foreach($recentapplications as $application)
											    @php $column_number = $column_number + 1; @endphp                                                    <tr>
                                                        <td>{{$column_number}}</td>
                                                        <td>{{$application->user->name}}</td>
                                                        <td>{{$application->job->jobtitle}}</td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>{{$application->created_at}} </td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="9"><a href="{{route('allapplicants')}}" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent job applications  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header">Most Applied Jobs</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Campaign</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($most_applied as $most)
                                                    <tr>
                                                        <td>{{$most->job->jobtitle}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>
                        
                        <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Active Jobs</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <th>#</th>
											<th>Job Title</th>
											<th>Job Type</th>
											<th>Salary</th>
											<th>Status</th>
											<th style="width: 20%">Action</th>
                                        </thead>
                                        <tbody>
                                            @php $column_number = 0; @endphp
											    @foreach($jobs as $job)
											    @php $column_number = $column_number + 1; @endphp
												<tr>
												    <td>{{$column_number}}</td>
													<td>{{$job->jobtitle}}</td>
													<td>{{$job->jobtype}}</td>
													<td>{{$job->salary}}</td>
													<td>{{$job->status}}</td>
													<td>
													    <div class="btn-group" role="group" aria-label="Basic example">
                                                           <a data-hidden="true" href="/jobposts/{{$job->id}}/edit" class="btn btn-primary btn-btngroup btn-sm text-white">
																<i class="fa fa-edit"></i>Update
															</a>
															
															<button data-hidden="true" type="button" data-toggle="modal" data-id="{{$job->id}}" class="btn btn-danger btn-btngroup btn-sm text-white" data-target="#delete">
																<i class="fa fa-times"></i>Delete
															</button>
															@include('empdash.content.deletejob')
														</div>
													</td>
												</tr>
													@endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Job Title</th>
                                                <th>Job Type</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                        </div>
                    </div>
                </div>
@endsection