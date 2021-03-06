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
                    <h2 class="pageheader-title">Talent Pools</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Talent Pools</li>
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
                        <h5 class="mb-0">Talent Pools</h5>
                        <button class="btn btn-info btn-sm text-white float-right" data-id="" data-toggle="modal" data-target="#poolname">
                            <i class="fa fa-plus"></i>Add Pool
                        </button>
                        @include('employer-dashboard.add-poolname')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pool Name</th>
                                        <th>No of Jobseekers</th>
                                        <th style="width: 30%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @php $column_number = 0; @endphp
                                   @foreach($talent as $talen)
                                   @php $column_number = $column_number + 1; @endphp
                                   <tr>
                                       <td>{{$column_number}}.</td>
                                       <td>{{$talen->pool_name}}</td>
                                       <td>{{$talen->candidates->count()}}</td>
                                       <td>
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                <i class="mdi mdi-dots-vertical">Click for Actions</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="/talentpool/{{$talen->id}}" class="dropdown-item">Browse Candidates</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Add Candidate</a>
                                            </div>
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
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection