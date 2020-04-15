@extends('layouts.employer.super-user')
@section('content')

        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Super Employer </h4>
                <ol class="breadcrumb">
                    <li class="active">
                        Dashboard 
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
                 <!--Start row-->
                 <div class="row">
                     <div class="container">
                         <div class="analytics-box">
                             
                         </div>
                     </div>
                 </div>
                 <!--End row-->
           
                  <!--Start row-->
                  <div class="row">
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{$jobs->count()}}</p>
                              <span>Total Jobs </span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="mdi mdi-cart"></i>
                          </div>
                          <!-- <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div> -->
                       </div>
                   </div>
                   <!--End info box-->
                   
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{$employers->count()}}</p>
                              <span>Total Employers</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-multiple"></i> 
                          </div>
                          <!-- <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div> -->
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{$jobseekers->count()}}</p>
                              <span>Total Jobseekers</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-dollar"></i>
                          </div>
                          <!-- <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div> -->
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p>{{$applications->count()}}</p>
                              <span>Job Applications</span>
                          </div>
                          <div class="info-icon text-danger">
                              <i class="mdi mdi-weight"></i>
                          </div>
                          <!-- <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div> -->
                       </div>
                   </div>
                   <!--End info box-->
                
                  </div>
                  <!--End row-->
                  
                   <!--Start row-->
                   <div class="row">
                     <!-- Start inbox widget-->
                     <div class="col-md-12">
                        <div class="white-box">
                          <h2 class="header-title"> Employers </h2>
                            <div class="table-responsive">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Employer Name</th>
                                    <th >Phone number</th>
                                    <th>Email</th>
                                    <th>Approval Status</th>
                                    <th>Posted Jobs</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @php $row = 0 @endphp
                                  @foreach($employers as $employer)
                                  @php $row = $row+1 @endphp
                                  <tr>
                                    <td>{{$row}}</td>
                                    <td>{{$employer->company_name}}</td>
                                    <td>{{$employer->company_phone_number}}</td>
                                    <td>{{$employer->company_email}}</td>
                                    <td><span class="label label-warning">{{$employer->approval}}</span></td>
                                    <td><div class="progress progress-striped progress-sm">
                                      <div class="progress-bar progress-bar-warning" style="width: 25%;"></div>
                                    </div></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                                
                        </div>
                       </div>
          <!-- Start inbox widget-->
                   </div>
                   <!--End row-->
         
          </div>
        <!-- End Wrapper-->
      @endsection