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
                    <h5 class="pageheader-title">Team Management</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Management</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- data table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                  @include('errors')
                  @include('success')
                  <div class="card-header">
                    <h5 class="mb-0">Team</h5>
                    <div align="right">
                        <a href="{{route('teams.create')}}" class="btn btn-primary">Add Member</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                               <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Designation</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th style="width: 20%">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($team as $tim)
                            <tr>
                                <td>name</td>
                                <td>designation</td>
                                <td>email</td>
                                <td>phone</td>
                                <td>
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                   <a href="#" class="btn btn-success btn-sm text-white"><i class="fa fa-eye"></i>Edit </a>


                                   <a href="#" class="btn btn-primary btn-sm text-white">
                                    <i class="fa fa-edit"></i>Delete
                                </a>
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