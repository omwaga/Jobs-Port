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
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
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
                        @include('empdash.content.add-poolname')
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
                                        <a href="/talentpool/{{$talen->id}}" class="btn btn-sm btn-info">View Pool</a>
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