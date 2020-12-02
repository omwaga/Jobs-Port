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
  <div class="col-md-12">
    <div class="white-box">
      <h2 class="header-title float-left"> All Jobseekers </h2>
      <a href="#"><button class="btn btn-success"><i class="fa fa-save"></i> Export Excel</button></a>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Jobs Posted</th>
              <th>Received Applications</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $column = 0 @endphp
            @foreach($employers as $employer)
            @php $column = $column + 1 @endphp
            <tr>
              <td>{{$column}}</td>
              <td>{{$employer->company_name}}</td>
              <td>{{$employer->company_email}}</td>
              <td>{{$employer->jobs->count()}}</td>
              <td>{{$employer->applications->count()}}</td>
              <td><a href="{{route('employer.profile', $employer->id)}}"><button class="btn btn-primary">View Profile</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>      
  </div>
  {{$employers->links()}}
  <!-- End row-->        
</div>
<!-- End Wrapper-->
@endsection