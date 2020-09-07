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
                    <h5 class="pageheader-title">Express Candidates</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Express Candidates</li>
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
                                            <h2 class="font-24 m-b-10">{{$jobseeker->jobseekerdetail->name ?? $jobseeker->user->name}}</h2>
                                        </div>
                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                            
                                        </div>
                                    </div>
                                    <div class="user-avatar-address">
                                        <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>{{App\State::where('id', $jobseeker->jobseekerdetail->city)->value('name')}}, {{App\Country::where('id', $jobseeker->jobseekerdetail->nationality)->value('name')}} <span class="m-l-10">{{$jobseeker->gender ?? ''}}</span>
                                        </p>
                                        <div class="mt-3">
                                            @forelse($jobseeker->skills as $skill)
                                            <a href="#" class="mr-1 badge badge-light">{{$skill->skillname}}</a>
                                            @empty
                                            <p>No skills added.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="float-xl-right float-none mt-xl-0 mt-4">
                                    <a href="{{route('candidateprofile', $jobseeker->user_id)}}" class="btn btn-secondary">Full Profile</a>
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
                <!-- end content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- influencer sidebar  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body border-top">
                        <h3 class="font-16">Candidates by Category</h3>
                        @foreach($categories as $category)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="category{{$category->id}}">
                            <label class="custom-control-label" for="category{{$category->id}}">{{$category->name}}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Candidates by Location</h3>
                        @foreach($countries as $country)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <label class="custom-control-label">{{$country->name}}</label>
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