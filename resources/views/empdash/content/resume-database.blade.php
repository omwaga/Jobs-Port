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
                                <p class="pageheader-text">Staff Recruitmant and Staff Development</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Shortlisted Candidates</li>
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
                                <h5 class="mb-0">All Shortlisted Candidates</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12" align="center">
                                <div class="card card-sm" action="shortlist-jobs" method="post">
                                    @csrf
                                    <small>Select an industry below to find the candidates based on their industry interests</small>
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h6 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <form method="post" action="/resume-database">
                                            @csrf
                                        <select class="form-control" name="industry_id" required id="input-select" onchange='if(this.value != 0) { this.form.submit(); }'>
                                                <option>Select Industry</option>
                                                @foreach($industries as $industry)
                                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                           <tr>
                                               <th>#</th>
													<th>Applicant Name</th>
													<th>Industry Interest</th>
													<th style="width: 30%">Action</th>
												</tr>
                                        </thead>
                                        <tbody>
                                             @php $column_number = 0; @endphp
                                            @foreach($user_industries as $user_industry)
                                           @php $column_number = $column_number + 1; @endphp
												<tr>
												    <th>{{$column_number}}</th>
													<td>{{$user_industry->jobseeker->name}}</td>
													<td>{{$user_industry->industry->name}}</td>
													<td>
													    <div class="btn-group">
													    <a  href="/applicantprofile/{{$user_industry->jobseeker->id}}" class="btn btn-info btn-sm text-white">
																<i class="fa fa-eye"></i>View Profile
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
                </div>
            </div>
</div>
@endsection