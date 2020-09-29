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
                    <h5 class="pageheader-title">Express Recruitment</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Express Recruitment</li>
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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- card influencer one -->
                <!-- ============================================================== -->
                
                <div class="row">
                    @forelse($categories as $category)                     
                    <div class="col-md-4">      
                        <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
                          <a href="{{route('employer.candidates', $category->id)}}">  
                            <img src="{{asset('storage/expresscategories/'.$category->cover_image)}}" width=100% height="120">
                            <h5>{{$category->name}}</h5>
                            <p> 
                              {{$category->users->count() ?? 0}} Candidates</p>
                          </a>
                      </div>
                  </div>
                  @empty
                  @endforelse
              </div>
          </div>
      </div>
  </div>
  @endsection