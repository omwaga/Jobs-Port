@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
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
											  <th>#</th>
											  <th>Job Title</th>
										      <th>Job Type</th>
											  <th>Status</th>
                                              <th>Applications</th>
											  <th style="width: 20%">Action</th>
											</tr>
                                        </thead>
                                        <tbody>
                                            @php $column_number = 0; @endphp
											    @foreach($jobs as $job)
											    @php $column_number = $column_number + 1; @endphp
												<tr>
												    <td>{{$column_number}}.</td>
													<td><a href="/job-withapplications/{{$job->jobtitle}}">{{$job->jobtitle}}</a></td>
													<td>{{$job->jobtype}}</td>
													<td>{{$job->status}}</td>
                                                    <td>{{$job->applications->count()}}</td>
													<td>
														<div class="btn-group" role="group" aria-label="Basic example">
															<a data-hidden="true" href="/jobposts/{{$job->id}}/edit" class="btn btn-primary btn-sm text-white">
																<i class="fa fa-edit"></i>Update
															</a>
															
															<button data-hidden="true" type="button" data-toggle="modal" data-id="{{$job->id}}" class="btn btn-danger btn-sm text-white" data-target="#delete-{{$job->id}}">
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
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
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
			@endsection