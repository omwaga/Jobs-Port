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
                    <h5 class="pageheader-title">Pros For Hire</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pros For Hire</li>
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
            <!-- search bar  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary search-btn" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end search bar  -->
            <!-- ============================================================== -->
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- card influencer one -->
                <!-- ============================================================== -->
                @forelse($jobseekers as $jobseeker)
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="user-avatar float-xl-left pr-4 float-none">
                                    <img src="{{asset('assets/images/avatar.png')}}" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                </div>
                                <div class="pl-xl-3">
                                    <div class="m-b-0">
                                        <div class="user-avatar-name d-inline-block">
                                            <h2 class="font-24 m-b-10">{{$jobseeker->full_name ?? ''}}</h2>
                                        </div>
                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <p class="d-inline-block text-dark">14 Reviews </p>
                                        </div>
                                    </div>
                                    <div class="user-avatar-address">
                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>{{$jobseeker->prostate->name}}/{{$jobseeker->procity->name}}, {{$jobseeker->procountry->name}} <span class="m-l-10">Gender</span>
                                        </p>
                                        <div class="mt-3">
                                            <a href="#" class="mr-1 badge badge-light">Skill 1</a><a href="#" class="mr-1 badge badge-light">Skill 2</a><a href="#" class="mr-1 badge badge-light">Skill 3</a><a href="#" class="badge badge-light">Skill 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                    <a href="#" class="btn-wishlist m-r-10"><i class="far fa-star"></i></a>
                                    <a href="#" class="btn btn-secondary">Full Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>Nothing to show</p>
                @endforelse
                {{$jobseekers->links()}}
                <!-- ============================================================== -->
                <!-- end card influencer one -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- influencer sidebar  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="font-16">Sorting By</h3>
                        <select class="form-control">
                            <option>Name</option>
                            <option>Expertise Level</option>
                        </select>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Experts by Rating</h3>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1"><i class="fas fa-star rating-color fa-xs"></i></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs"></i></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5"><i class="fas fa-star rating-color fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i><i class="fas fa-star rating-color fa-xs fa-xs"></i></label>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Experts by Industry</h3>
                        @foreach($industries as $industry)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="industryCheck{{$industry->id}}">
                            <label class="custom-control-label" for="industryCheck{{$industry->id}}">{{$industry->name}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Experts by Category</h3>
                        @foreach($categories as $category)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="category{{$category->id}}">
                            <label class="custom-control-label" for="category{{$category->id}}">{{$category->jobcategories}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-body border-top">
                        <a href="#" class="btn btn-secondary btn-lg btn-block">Submit</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end influencer sidebar  -->
            <!-- ============================================================== -->
        </div>
    </div>
    @endsection