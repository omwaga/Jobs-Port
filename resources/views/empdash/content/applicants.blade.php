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
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">All Aplications</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                           <tr>
													<th>Applicant Name</th>
													<th>Position applied</th>
													<th>Date Applied</th>
													<th>Applicant Profile</th>
												</tr>
                                        </thead>
                                        <tbody>
												@foreach($viewapplicant as $application)
												<tr>
													<td>{{$application->name}}</td>
													<td>{{$application->position}}</td>
													<td>{{$application->created_at}}</td>
													<td>
													    <a  href="/applicantprofile/{{$application->user->id}}" class="btn btn-info btn-sm text-white">
																<i class="fa fa-eye"></i>View Profile
															</a>
													</td>
												</tr>
												@endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Applicant Name</th>
                                                <th>Position Applied</th>
                                                <th>Date Applied</th>
                                                <th>Applicant Profile</th>
                                            </tr>
                                        </tfoot>
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