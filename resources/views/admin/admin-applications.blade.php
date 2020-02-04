@extends('layouts.admin.master')
@section('content')

        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Job Applications</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                            Job Applications
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
              <!-- Start row--> 
               <div class="col-md-12">
                <div class="white-box">
                  <h2 class="header-title"> All Job Applications </h2>
                    <div class="table-responsive">
                      <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Applicant</th>
                                    <th>Employer</th>
                                    <th>Vacancy</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php $column = 0 @endphp
                                    @foreach($applications as $application)
                                    @php $column = $column + 1 @endphp
                                  <tr>
                                    <td>{{$column}}</td>
                                    <td>{{$application->user->name}}</td>
                                    <td>{{$application->cprofile->cname}}</td>
                                    <td>{{$application->job->jobtitle}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                    </div>
                      {{$applications->links()}}  
                </div>
               </div>
              <!-- End row-->
			   
			    </div>
        <!-- End Wrapper-->
@endsection