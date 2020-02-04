@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
        			<div class="card">
								<div class="card-header bg-light">
									<div class="d-flex align-items-center">
										<h5 class="card-title">All Courses</h5>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" type="text" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Training Title</th>
													<th>Type</th>
													<th>Cost</th>
													<th>Start Date</th>
													<th>Duration</th>
													<th style="width: 20%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Training Title</th>
													<th>Type</th>
													<th>Cost</th>
													<th>Start Date</th>
													<th>Duration</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
											    @foreach($courses as $course)
												<tr>
													<td>{{$course->title}}</td>
													<td>{{$course->training_type}}</td>
													<td>{{$course->cost}}</td>
													<td>{{$course->sdate}}</td>
													<td>{{$course->duration}}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-sm text-white" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>Apply
															</button>
														</div>
													</td>
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
			@endsection