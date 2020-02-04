@extends('layouts.admin.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Jobseekers</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            Jobseekers
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!-- Start row-->
                <div class="row">
                    <div class="calendar-layout clearfix">
                        <!--<div class="col-md-12">-->
                      <div class="row">
                         @foreach($jobseekers as $jobseeker)
                         <div class="col-md-4">
                             <div class="user-box">
                                 <div class="user-img">
                                     <img src="assets/images/users/avatar-3.jpg"  alt=""/>
                                 </div>
                                 <div class="user-info">
                                    <h4>{{$jobseeker->name}}</h4>
                                    <p>{{$jobseeker->email}}</p>
                                    <span>Jobseeker</span>
                                 </div>
                             </div>
                         </div> <!-- /.col-md-3-->
                         @endforeach
                      </div>
                  <!--</div>-->
                    </div>      
                 </div>
                 {{$jobseekers->links()}}
               <!-- End row-->        
			    </div>
        <!-- End Wrapper-->
@endsection