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
                    @php $cat = str_slug($category->name, '-'); @endphp
                    <div class="col-md-4">        
                        <a href="{{route('employer.candidates', $cat)}}" class="text-white">
                          <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded"  style="background: linear-gradient(rgba(0, 0, 60, 1), rgba(0, 0, 230, 0)), url({{asset('Images/express_categories/graphic.jpg')}})">
                            <h5 class="text-white">{{$category->name}}</h5>
                            <p class="text-white"> {{App\PersonalStatement::where('category'.$category->id, $category->name)->count()}} Candidates</p>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection