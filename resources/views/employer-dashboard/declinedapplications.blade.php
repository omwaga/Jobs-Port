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
                                <h2 class="pageheader-title"> Declined Applications</h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Declined Applications</li>
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
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Declined Applications</h5>
                                @include('success')
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
                                          <td>{{$applicant->user->name}}</td>
                                        <td>{{$applicant->user->email}}</td>
                                        <td>{{$applicant->created_at}}</td>
                                        <td>
											<div class="btn-group" role="group" aria-label="Basic example">
															<a href="/candidate-profile/{{$applicant->user_id}}" class="btn btn-primary btn-sm text-white">
																<i class="fa fa-eye"></i>View Profile
															</a>
															<button type="button" data-toggle="modal" title="" class="btn btn-danger btn-sm text-white" data-target="#removeapplicant-{{$applicant->id}}">
																<i class="fa fa-trash"></i>Remove
															</button>
											 </div>
                                         </td>
                                           </tr>
                                       </tbody>
                                       @include('empdash.content.remove-declined')
                                       @endforeach
                                       @else
                                       @endif
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
@endsection