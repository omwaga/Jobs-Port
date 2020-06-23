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
                    <h5 class="pageheader-title">Source Candidates</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Source Candidates</li>
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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="cardaction">
                    <h3 class="section-title">Select Job Post Method</h3>
                    <p>Select one of the options to post your job.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card" align="center">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">Post and Manage Jobs</h4>
                        <div class="dropdown ml-auto"><i class="fab fa-mixcloud"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Post and Manage your posted jobs.
                            <ul align="left" style="list-style: none">
                                <li><i class="fas fa-check"></i>  View & Process job applications</li>
                                <li><i class="fas fa-check"></i>  Shortlist or Decline or Create a talent pool</li>
                                <li><i class="fas fa-check"></i>  Schedule Interviews for shortlisted</li>
                                <li><i class="fas fa-check"></i>  Score the candidates</li>
                                <li><i class="fas fa-check"></i>  Process recruitment</li>
                            </ul>
                        </p>
                        <a href="{{route('employerjobs')}}" class="btn btn-primary">Post and Manage Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card" align="center">
                    <div class="card-header d-flex">
                        <h4 class="mb-0">Post a Job</h4>
                        <div class="dropdown ml-auto"><i class="fab fa-mixcloud"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Advertise your job and provide a URL or Email Address to receive the applications</p>
                        <a href="{{route('emppostjob')}}" class="btn btn-primary">Post Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection