@extends('layouts.jobs')
@section('content')
            <div class="container-fluid">
                @if (\Session::has('success'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
                                <div class="">
                    <a class="btn btn-info btn-sm text-white" href="{{route('ball')}}">Browse all Job functions</a>
                </div>
                <br>
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Applied Jobs</h5>
                            </div>
                            <div class="s-r">
                                <h6 class="text-dark">{{$apcount}}
                                   <a href="{{route('myapplications')}}"> <i class="far fa-edit"></i></a>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Applied trainings</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Saved trainings</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Professional bodies membership</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Recommended trainings</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Recommended Jobs</h5>
                            </div>
                            <div class="s-r">
                                <h6 class="text-dark">{{$filtercount}}
                                    <a href="{{route('recommended')}}"><i class="far fa-smile"></i></a>
                                </h6>
                            </div>
                        </div>
                         <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Total subscriptions</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-light">
                            <div class="s-l">
                                <h5 class="text-dark">Career Journey</h5>
                            </div>
                            <div class="s-r">
                                <h6>0
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Pie-chart -->
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                            <div class="card-header text-center text-uppercase text-dark bg-light">My recent job applications</div>
                            <div class="card-body table-responsive">
                                <table class="table  table-striped table-bordered" id="tjobs">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Position</th>
                                            <th>Organization</th>
                                            <th>Date applied</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td>{{$job->id}}</td>
                                            <td>{{$job->position}}</td>
                                            <td>{{$job->company_id}}</td>
                                            <td>{{$job->created_at}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-12">
                            <div class="card-header text-center text-dark text-uppercase bg-light">Upcomming trainings</div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped" id="ttraining">
                                    <thead class="thead">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Start date</th>
                                            <th>Duration</th>
                                            <th>Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td><a class="btn btn-danger text-white btn-sm">view more</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center text-dark text-uppercase bg-light">Enroled professional Bodies</div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         
            <!-- Countdown -->
            <!--// Countdown -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2019 Thenetworkedpros . All Rights Reserved 
                </p>
            </div>
@endsection