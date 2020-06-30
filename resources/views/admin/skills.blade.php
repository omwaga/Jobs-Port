@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Employers</h4>
    <ol class="breadcrumb">
      <li>
        <a href="/admin-dashboard">Dashboard</a>
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
    <div class="col-md-12">
      <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Skill Set</button>
      @include('admin.new-skillset')
    </div><br>
    <div class="calendar-layout clearfix">
      @include('success')
      @include('errors')
      @foreach($skills as $skill)
      <div class="col-md-4">
        <div class="card-profile3">
         <div class="p-info">
          <div class="row">
           <div class="col-md-12 co-sm-12 col-xs-12">
             <div class="p-stats">
              <h4><a href="#">{{$skill->name}}</a></h4>
              <p>{{$skill->pros->count() ?? 0}}</p>
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