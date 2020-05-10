@extends('layouts.employer.employer')
@section('content')
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h5 class="pageheader-title"><strong>Job Title: </strong>{{$job->job_title}}</h5>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/Employer-dashboard" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('employerjobs')}}" class="breadcrumb-link">Published Jobs</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$job->job_title}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">{{$job->applications->count()}} Received Applications so far</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($job->applications as $applicant)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{$applicant->user->name}}</td>
                                                <td>{{$applicant->user->email}}</td>
                                                <td>@mdo</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <!-- list styled  -->
                                    <!-- ============================================================== -->
                                    <div class="card" id="styled-list">
                                        <h5 class="card-header">Job Details</h5>
                                        <div class="card-body">
                                        	<div class="row">
                                        	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        	<ul class="list-unstyled arrow">
                                                <li><strong>Salary: </strong> {{$job->salary}}</li>
                                                <li><strong>Job Type: </strong> {{$job->jobtype}}</li>
                                                <li><strong>Industry: </strong> </li>
                                            </ul>
                                        	</div>
                                        	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        	<ul class="list-unstyled arrow">
                                                <li><strong>Location: </strong> </li>
                                                <li><strong>Expiry Date: </strong> {{$job->expirydate}}</li>
                                                <li><strong>Status: </strong> {{$job->status}}</li>
                                            </ul>
                                        	</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end list styled  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Job Summary</h5>
                                        <p>{!!$job->summary!!}</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Job Description</h5>
                                        <p>{!!$job->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <a class="btn btn-danger btn-sm text-white float-right">Unpublish</a>
                                </div>
                            </div>
                     </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/jobposts/{{$job->id}}/edit" class="btn btn-info btn-sm text-white float-right">Update</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
 @endsection