@extends('layouts.employer.super-employer')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Employers</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('the-dashboard')}}">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            Employers
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!-- Start row-->
                <div class="row">
                    <div class="calendar-layout clearfix">
                        @foreach($employers as $employer)
                      <div class="col-md-4">
                          <div class="card-profile3">
                              <div class="p-header">
                                   <img src="{{asset('storage/logos/'.$employer->logo)}}"  alt="">
                                  <h4>{{$employer->company_name}}</h4>
                                  <p>{{$employer->company_email}}</p>
                              </div>
                              <div class="p-info">
                                  <div class="row">
                                     <div class="col-md-6 co-sm-6 col-xs-6">
                                         <div class="p-stats">
                                            <h4>Posted Jobs</h4>
                                            <p>{{$employer->jobs->count()}}</p>
                                         </div>
                                     </div>
                                     
                                     <div class="col-md-6 co-sm-6 col-xs-6">
                                         <div class="p-stats last">
                                            <h4>Received Applications</h4>
                                            <p>{{$employer->applications->count()}}</p>
                                         </div>
                                     </div>
                                  </div>
                                  
                              </div> <!--/.p-info-->
                              
                          </div>
                      </div>
                      @endforeach
                    </div>      
                 </div>
               <!-- End row-->        
			    </div>
        <!-- End Wrapper-->
@endsection