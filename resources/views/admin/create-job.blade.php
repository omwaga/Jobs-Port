@extends('layouts.admin.master')
@section('content')

<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Post a Job</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li>
        <a href="{{route('adminvacancies')}}">Job Vacancies</a>
      </li>
      <li class="active">
        Create Job Post
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          


  <!--Start row-->
  <form method="POST" action="{{route('admin_savejob')}}">
    @csrf
    <div class="row">
      @include('errors')
      @include('success')
      <div class="col-md-6">
        <div class="white-box">
          <div class="form-group">
            <label>Job Title</label>
            <input class="form-control" value="{{old('jobtitle')}}" name="jobtitle"  placeholder="Enter Title" type="text">
          </div>
          <div class="form-group">
            <label>Job Type</label>
            <select name="jobtype" class="form-control">
              <option>Select Type</option>
              <option>Job Type</option>
              <option>Full Time</option>
              <option>Contract</option>
              <option>Internship</option>
            </select>
          </div>
          <div class="form-group">
            <label>Job Category</label>
            <select name="jobcategories_id" class="form-control">
              <option>Select Category</option>
              @foreach($jobcategories as $jobcategory)
              <option value="{{$jobcategory->id}}">{{$jobcategory->jobcategories}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Expiry Date</label>
            <input name="expirydate" value="{{old('expirydate')}}" class="form-control" placeholder="mm/dd/yyyy" type="date" id="datepicker-autoclose">
          </div>
        </div>
      </div> <!--/.col-md-6-->


      <div class="col-md-6">
       <div class="white-box">
        <div class="form-group">
          <label  class="control-label">Job Industry</label>
          <select name="industry" class="form-control">
            <option>Select Industry</option>
            @foreach($industries as $industry)
            <option value="{{$industry->id}}">{{$industry->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Country</label>
          <select name="country_id" class="form-control">
            <option>Select Country</option>
            @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Town/State</label>
          <select name="location" class="form-control">
            <option>Select Town</option>
            @foreach($towns as $town)
            <option value="{{$town->id}}">{{$town->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Salary<small> (if confidential leave blank)</small></label>
          <input name="salary" value="{{old('salary')}}" class="form-control" placeholder="00.00" type="text">
        </div>
      </div>
    </div><!-- /.col-md-6-->

  </div>
  <!--End row-->
  <!--Start row-->
  <div class="row">
   <div class="col-md-12">
     <div class="white-box">
      <div class="form-group">
        <label class="control-label">Job Summary</label>
        <div class="col-md-12">
          <textarea name="summary" class="form-control ckeditor" id="val-suggestions">{{old('summary')}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Job Description</label>
        <div class="col-md-12">
          <textarea name="description" class="form-control ckeditor" id="val-suggestions">{{old('description')}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="checkbox primary">
          <input  type="checkbox" name="apply" value="{{old('apply')}}" id="checkbox1"> <label for="checkbox1"> Apply With Us  <small>(Select if you want to receive the applications via the networkedpros portal)</small> </label>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Application Details</label>
        <div class="col-md-12">
          <textarea name="applicationdet" class="form-control ckeditor" id="val-suggestions">{{old('applicationdet')}}</textarea>
        </div>
      </div> 
      <button type="submit" class="btn btn-success">Submit</button> 
    </div>
  </div>
</div>
</form>
<!--End row-->

</div>
<!-- End Wrapper-->
@endsection