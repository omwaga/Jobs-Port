@extends('layouts.employer.employer')
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
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- content  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- influencer profile  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card influencer-profile-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="text-center">
                                        <img src="{{asset('storage/logos/'.auth::user()->logo)}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div class="user-avatar-info">
                                        <div class="m-b-20">
                                            <div class="user-avatar-name">
                                                <h2 class="mb-1">{{auth::user()->company_name}}</h2>
                                            </div>
                                            <div class="rating-star  d-inline-block">
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <p class="d-inline-block text-dark">14 Reviews </p>
                                            </div>
                                        </div>
                                        <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                        <div class="user-avatar-address">
                                            <p class="border-bottom pb-3">
                                                <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>4045 Denver AvenueLos Angeles, CA 90017</span>
                                                <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: 23 June, 2018  </span>
                                                <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male 
                                                </span>
                                                <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span>
                                            </p>
                                            <div class="mt-3">
                                                <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end influencer profile  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- widgets   -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- four widgets   -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total views   -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Total Jobs</h5>
                                <h2 class="mb-0"> {{$jobs->count(), '0'}}</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end total views   -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total followers   -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Total Applications</h5>
                                <h2 class="mb-0">  {{$applications->count(),'0'}}</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end total followers   -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- partnerships   -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Partnerships</h5>
                                <h2 class="mb-0">14</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end partnerships   -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total earned   -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-muted">Total Earned</h5>
                                <h2 class="mb-0"> $149.00</h2>
                            </div>
                            <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end total earned   -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end widgets   -->

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
                                <p>Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process</p>
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                </ul>
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
                                <ul class="list-unstyled bullet-check font-14">
                                    <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                </ul>
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
                                <ul class="list-unstyled bullet-check font-14">
                                    <li>Facebook, Instagram, Pinterest,Snapchat.</li>
                                </ul>
                                <a href="#" class="btn btn-secondary btn-block btn-lg">Contact us</a>
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
                                    <td>{{$job->status}}</td>
                                    <td>
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
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
        <!-- recommended campaigns   -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-block">
                    <h3 class="section-title">Recommended Jobseekers</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card campaign-card text-center">
                    <div class="card-body">
                        <div class="campaign-img"><img src="assets/images/dribbble.png" alt="user" class="user-avatar-xl"></div>
                        <div class="campaign-info">
                            <h3 class="mb-1">Campaigns Name</h3>
                            <p class="mb-3">Vestibulum porttitor laoreet faucibus.</p>
                            <p class="mb-1">Min, Views:<span class="text-dark font-medium ml-2">2,50,000</span></p>
                            <p>Payout: <span class="text-dark font-medium ml-2">$22</span></p>
                            <a href="#"><i class="fab fa-twitter-square fa-sm twitter-color"></i> </a><a href="#"><i class="fab fa-snapchat-square fa-sm snapchat-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card campaign-card text-center">
                    <div class="card-body">
                        <div class="campaign-img"><img src="assets/images/github.png" alt="user" class=" user-avatar-xl"></div>
                        <div class="campaign-info">
                            <h3 class="mb-1">Campaigns Name</h3>
                            <p class="mb-3">Lorem ipsum dolor sit ament</p>
                            <p class="mb-1">Min, Views:<span class="text-dark font-medium ml-2">1,00,000</span></p>
                            <p>Payout: <span class="text-dark font-medium ml-2">$28</span></p>
                            <a href="#"><i class="fab fa-instagram fa-sm instagram-color"></i> </a><a href="#"><i class="fab fa-facebook-square fa-sm facebook-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card campaign-card text-center">
                    <div class="card-body">
                        <div class="campaign-img"><img src="assets/images/slack.png" alt="user" class="user-avatar-xl"></div>
                        <div class="campaign-info">
                            <h3 class="mb-1">Campaigns Name</h3>
                            <p class="mb-3">Maecenas mattis tempor libero pretium.</p>
                            <p class="mb-1">Min, Views:<span class="text-dark font-medium ml-2">3,80,000</span></p>
                            <p>Payout: <span class="text-dark font-medium ml-2">$36</span></p>
                            <a href="#"><i class="fab fa-facebook-square fa-sm facebook-color"></i> </a><a href="#"><i class="fab fa-snapchat-square fa-sm snapchat-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card campaign-card text-center">
                    <div class="card-body">
                        <div class="campaign-img"><img src="assets/images/mail_chimp.png" alt="user" class="user-avatar-xl"></div>
                        <div class="campaign-info">
                            <h3 class="mb-1">Campaigns Name</h3>
                            <p class="mb-3">Proin vitae lacinia leo</p>
                            <p class="mb-1">Min, Views:<span class="text-dark font-medium ml-2">4,50,000</span></p>
                            <p>Payout: <span class="text-dark font-medium ml-2">$57</span></p>
                            <a href="#"><i class="fab fa-twitter-square fa-sm twitter-color"></i> </a><a href="#"><i class="fab fa-snapchat-square fa-sm snapchat-color"></i></a>
                            <a href="#"><i class="fab fa-facebook-square fa-sm facebook-color"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recommended campaigns   -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end content  -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection