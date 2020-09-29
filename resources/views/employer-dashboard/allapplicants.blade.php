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
                    <h2 class="pageheader-title">Job Applications</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Applications</li>
                            </ol>
                        </nav>
                        @include('success')
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
                        <h5 class="mb-0">Latest Aplications</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                 <tr>
                                   <th>Applicant Name</th>
                                   <th>Position applied</th>
                                   <th> Applied</th>
                                   <th>Applicant Profile</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($application as $apply)
                            <tr>
                               <td>{{$apply->user->name}}</td>
                               <td>{{$apply->job->job_title}}</td>
                               <td>{{$apply->created_at->diffForHumans()}}</td>
                               <td>
                                   <a  href="/applicantprofile/{{$apply->user->id}}" class="btn btn-info btn-sm text-white">
                                    <i class="fa fa-eye"></i>View Profile
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        {{$application->links()}}
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
@endsection