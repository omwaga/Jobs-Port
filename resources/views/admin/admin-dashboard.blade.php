@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Admin Dashboard</h4>
    <ol class="breadcrumb">
      <li class="active">
        <a href="/admin-dashboard">Dashboard</a>
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          


  <!--Start row-->
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="dash-box">
            <div class="dash-icon bg-primary"> <i class="fa fa-magic"></i> </div>
            <div class="dash-info">
              <h4>{{$applications->count()}}</h4>
              <p>Received Applications</p>
            </div>
          </div> 
        </div> <!-- /analytics-box-->


        <div class="col-md-3">
          <div class="dash-box">
            <div class="dash-icon bg-success"> <i class="fa fa-shopping-cart"></i> </div>
            <div class="dash-info">
              <h4>{{$users->count()}}</h4>
              <p>Registered Users</p>
              <p>Complete Profiles</p>
            </div>
          </div> 
        </div> <!-- /analytics-box-->


        <div class="col-md-3">
          <div class="dash-box">
            <div class="dash-icon bg-warning"> <i class="fa fa-comments"></i> </div>
            <div class="dash-info">
              <h4>{{$employers->count()}}</h4>
              <p>Registered Employers</p>
            </div>
          </div> 
        </div> <!-- /analytics-box-->


        <div class="col-md-3">
          <div class="dash-box">
            <div class="dash-icon bg-info"> <i class="fa fa-dollar"></i> </div>
            <div class="dash-info">
              <h4>{{$jobs->count()}}</h4>
              <p>Jobs Posted</p>
            </div>
          </div> 
        </div> <!-- /analytics-box-->

      </div>                       
    </div>
  </div>
  <!--End row-->


 
</div>
<!-- End Wrapper-->
@endsection