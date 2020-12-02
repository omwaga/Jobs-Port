@extends('layouts.admin.master')
@section('content')<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Employer Profile</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>

      <li class="active">
        Employer Profile
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          

  <div class="col-md-12">
    <div class="white-box">
      <div class="card">
        <div class="col-md-12">
          <h4 class="font-16">Employer Information</h4>
          <div class="" align="center">
            <ul class="list-unstyled mb-0">
              <li>Employer Name:  {{$employer->company_name ?? ''}}</li>
              <li class="mb-1">Email Address:  {{$employer->company_email ?? ''}}</li>
              <li class="mb-1">Employer Type:  {{$employer->employer_type ?? ''}}</li>
            </ul><br><br>
            <label>Business Permit: <a href="{{route('permit.download', $employer->id)}}">{{$employer->doc->business_permit ?? ''}}</a></label><br>
            <label>Certificate of Incorporation: <a href="{{route('certificate.download', $employer->id)}}">{{$employer->doc->certificate ?? ''}}</a></label>
          </div>
        </div>
      </div>

    </div>
  </div>
  @endsection