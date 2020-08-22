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
      <a href="{{route('export-jobseekers')}}"><button class="btn btn-success"><i class="fa fa-save"></i> Export Excel</button></a>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Registration Date</th>
              <th>Profile Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php $column = 0 @endphp
            @foreach($jobseekers as $jobseeker)
            @php $column = $column + 1 @endphp
            <tr>
              <td>{{$column}}</td>
              <td>{{$jobseeker->name}}</td>
              <td>{{$jobseeker->email}}</td>
              <td>{{$jobseeker->created_at->diffForHumans()}}</td>
              <td>
                @if($jobseeker->experiences->count() === 0 ||$jobseeker->educations->count() === 0 ||$jobseeker->references->count() === 0 || $jobseeker->skills->count() === 0 || !$jobseeker->jobseekerdetail || !$jobseeker->personalstatement)
                <label class="text-danger">Incomplete</label>
                @else
                <label class="text-success">Complete</label>
                @endif
              </td>
              <td><a href="{{route('adminprofile', $jobseeker->id)}}"><button class="btn btn-primary">View Profile</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>      
  </div>
  {{$jobseekers->links()}}
  <!-- End row-->        
</div>
<!-- End Wrapper-->
@endsection