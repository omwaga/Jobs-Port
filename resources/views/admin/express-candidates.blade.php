@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Express Recruitment Candidates</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      
      <li class="active">
        Express Recruitment Candidates
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          
  
  
  <!-- Start row--> 
  <div class="col-md-12">
    <div class="white-box">
      <h2 class="header-title"> All Candidates </h2>
      <a href="#" class="btn btn-success">Export Excel</a>

      @include('success')
      @include('errors')
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Candidates</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $column = 0 @endphp
            @php $column = $column + 1 @endphp
            <tr>
              <td>{{$column}}</td>
              <td>name</td>
              <td>category</td>
              <td>
                <div class="btn-group">
                  <a type="button" href="#" class="btn btn-info float-left">Edit</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div>
  </div>        
</div>
<!-- End Wrapper-->
@endsection