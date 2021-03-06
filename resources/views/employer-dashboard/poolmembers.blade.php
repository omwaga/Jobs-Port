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
                    <h4 class="pageheader-title">Talent Pool Members</h4>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Talent Pool Members</li>
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
                            @include('success')
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
                                            <th>Candidate Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th style="width: 30%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @php $column_number = 0; @endphp
                                     @foreach($poolmembers as $member)
                                     @php $column_number = $column_number + 1; @endphp
                                     <tr>
                                         <td>{{$column_number}}.</td>
                                         <td>{{$member->candidate->name}}</td>
                                         <td>{{$member->candidate->phone}}</td>
                                         <td>{{$member->candidate->email}}</td>
                                         <td>
                                             <a  href="/candidate-profile/{{$member->user_id}}" class="btn btn-info btn-sm text-white">
                                               <i class="fa fa-eye"></i>View Profile
                                           </a>


                                           <button type="button" data-toggle="modal" data-id="" class="btn btn-danger btn-sm text-white" data-target="#removetalent-{{$member->id}}">
                                            <i class="fa fa-trash"></i>Remove
                                        </button>
                                    </td> 
                                </tr>
                                @include('empdash.content.remove-poolmember')
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