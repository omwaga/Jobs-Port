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
                                <h5 class="pageheader-title">Job Templates</h5>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/Employer-dashboard" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Job Templates</li>
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
                                <h5 class="mb-0">All Templates</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12" align="center">
                                <form class="card card-sm" action="/searchtemplate" method="get">
                                    @csrf
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h6 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <select class="form-control" name="category" required id="input-select" onchange="if (this.value !=0) {this.form.submit();}">
                                                <option>Sort by selecting template category</option>
                                                @foreach($jobcategories as $category)
                                                @if($category->jobs->count() > 0)
                                                <option value="{{$category->id}}">{{$category->jobcategories}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table" style="width:100%">
                                        <thead>
                                           <tr>
                                                <th>#</th>
												<th>Template Name</th>
												<th>Action</th>
												</tr>
                                        </thead>
                                        <tbody>
                                            @php $column = 0 @endphp
												@foreach($jobs as $template)
                                            @php $column = $column + 1 @endphp
												<tr>
                                                    <td>{{$column}}.</td>
													<td>{{$template->jobtitle}}</td>
													<td>
													    <a  href="/use-template/{{$template->jobtitle}}" class="btn btn-info btn-sm text-white">
																<i class="fa fa-eye"></i>Use
															</a>
													</td>
												</tr>
												@endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Template Name</th>
												<th>Action</th>
                                            </tr>
                                        </tfoot>
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