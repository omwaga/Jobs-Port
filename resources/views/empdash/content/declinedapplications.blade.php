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
                                <h5 class="mb-0">Declined Applications</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                           <tr>
                                                <th>#</th>
                                                <th>Applicants name</th>
                                                <th>Position applied</th>
                                                <th>Date Applied</th>
                                                <th style="width: 30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if(count($applicants) > 0)
                                       @php $column_number = 0; @endphp
                                       @foreach($applicants as $applicant)
                                       @php $column_number = $column_number + 1; @endphp
                                       <tbody>
                                           <tr>
                                            <td>{{$column_number}}</td>
                                          <td>{{$applicant->name}}</td>
                                        <td>{{$applicant->position}}</td>
                                        <td>{{$applicant->created_at}}</td>
                                        <td>
											<div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" data-toggle="modal" title="" class="btn btn-success btn-sm text-white" data-target="#update">
																<i class="fa fa-contact"></i>Contact
															</button>
															<a href="" class="btn btn-primary btn-sm text-white">
																<i class="fa fa-eye"></i>View Profile
															</a>
															<button type="button" data-toggle="modal" title="" class="btn btn-danger btn-sm text-white" data-target="#update">
																<i class="fa fa-trash"></i>Remove
															</button>
											 </div>
                                         </td>
                                           </tr>
                                       </tbody>
                                       @endforeach
                                       @else
                                       @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Applicant Name</th>
                                                <th>Position Applied</th>
                                                <th>Category/Field</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
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