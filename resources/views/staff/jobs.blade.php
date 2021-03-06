@extends('layouts.employer.team')
@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h5 class="pageheader-title">Posted Jobs</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employer.team')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Posted Jobs</li>
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
                  @include('errors')
                  @include('success')
                  <div class="card-header">
                    <h5 class="mb-0">All Job Vacancies</h5>
                    <div align="right">
                        <a href="{{route('team.post')}}" class="btn btn-primary">Add Job Post</a>
                    </div>
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
                                <td><a href="/job-withapplications/{{$job->id}}">{{$job->job_title}}</a></td>
                                <td>{{$job->employment_type}}</td>
                                <td>{{$job->status}}</td>
                                <td>{{$job->applications->count()}}</td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                   <a href="{{route('team.view', $job->id)}}" class="btn btn-success btn-sm text-white"><i class="fa fa-eye"></i>View </a>


                                   <a href="/jobposts/{{$job->id}}/edit" class="btn btn-primary btn-sm text-white">
                                    <i class="fa fa-edit"></i>Update
                                </a>

                                @if($job->status === 'active')
                                <button  type="button" data-toggle="modal" data-id="{{$job->id}}" class="btn btn-danger btn-sm text-white" data-target="#delete-{{$job->id}}">
                                    <i class="fa fa-times"></i> Unpublish
                                </button>
                                @include('employer-dashboard.unpublishjob')
                                @else
                                <button  type="button" data-toggle="modal" data-id="{{$job->id}}" class="btn btn-danger btn-sm text-white" data-target="#publish-{{$job->id}}">
                                    <i class="fa fa-save"></i> Publish
                                </button>
                                @include('employer-dashboard.publishjob')
                                @endif

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