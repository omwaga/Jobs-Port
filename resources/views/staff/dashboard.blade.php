@extends('layouts.employer.team')
@section('content')
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-influence">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">Dashboard </h3>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->

            <!-- Suggested actions - one -->
            <!-- ============================================================== -->
            <div class="offset-xl-1 col-xl-10">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="section-block">
                            <h3>Suggested Actions for you</h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-center p-3 ">
                                <h4 class="mb-0 text-white"> Express Recruitment </h4>
                            </div>
                            <div class="card-body text-center">
                                <p>Recruit faster through our vetted and ready for hire candidates  minimize your risks.</p>
                            </div>
                            <div class="card-body border-top">
                                <a href="#" class="btn btn-outline-secondary btn-block btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header bg-info text-center p-3">
                                <h4 class="mb-0 text-white"> Source Candidates</h4>
                            </div>
                            <div class="card-body text-center">
                                <p>  Receive applications for a job and select candidates from within the portal using the recruitment engine</p>
                            </div>
                            <div class="card-body border-top">
                                <a href="#" class="btn btn-secondary btn-block btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header bg-primary text-center p-3">
                                <h4 class="mb-0 text-white">Talent Pool</h4>
                            </div>
                            <div class="card-body text-center">
                                <p> Create a talent pool of candidates you’ll need in the future to support your business growth.</p>
                            </div>
                            <div class="card-body border-top">
                                <a href="#" class="btn btn-secondary btn-block btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end suggested actions  -->

            <div class="row">
                <!-- ============================================================== -->
                <!-- campaign activities   -->
                <!-- ============================================================== -->
                <div class="col-lg-12">
                    <div class="section-block">
                        <h3 class="section-title">Posted Jobs</h3>
                    </div>
                    <div class="card">
                        <div class="campaign-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Logo</th>
                                        <th class="border-0">Job Title</th>
                                        <th class="border-0">Employment Type</th>
                                        <th class="border-0">Status</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($jobs as $job)
                                    <tr>
                                        <td>
                                            <div class="m-r-10">

                                              @if($job->employer_logo !=="no-logo")
                                              <img class="rounded-circle img-fluid" src="{{asset('storage/job_logos/'.$job->employer_logo)}}" alt="{{$job->job_title}}" width="35">
                                              @else
                                              <img class="rounded-circle img-fluid" src="{{asset('storage/logos/'.$job->employer->logo)}}" alt="{{$job->job_title}}"width="35">
                                              @endif
                                          </div>
                                      </td>
                                      <td>{{$job->job_title}}</td>
                                      <td>{{$job->employment_type}}</td>
                                      <td>{{$job->status}} posted {{$job->created_at->diffForHumans()}}</td>
                                      <td>
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="#" class="dropdown-item">View</a>
                                                <!-- item-->
                                                <a href="#" class="dropdown-item">Update</a>
                                                <!-- item-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <p>No job posted yet!</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end campaign activities   -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end content  -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection