@extends('layouts.employer.super-employer')
@section('content')

<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Post a Job</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('the-dashboard')}}">Dashboard</a>
      </li>
      <li class="active">
        Create Job Post
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          


  <!--Start row-->
  <form method="POST" action="{{route('updatejob', $job->id)}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="row">
      @include('errors')
      @include('success')
      <div class="col-md-6">
        <div class="white-box">
          <div class="form-group">
            <label>Select Employer</label>
            <select name="employer_id" class="form-control">
              <option value="">{{$job->employer->company_name ?? 'Select Employer'}}</option>
              @foreach($employers as $employer)
              <option value="{{$employer->id}}">{{$employer->company_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Job Title</label>
            <input class="form-control" value="{{$job->job_title}}" name="job_title"  placeholder="Enter Title" type="text" required="">
          </div>
        <div class="form-group">
          <label class="control-label">Employer Name</label>
          <input name="employer_name" value="{{$job->employer_name}}" class="form-control" placeholder="" type="text">
        </div>
        <div class="form-group">
          <label class="control-label">Employer Logo</label>
          <input name="employer_logo" value="{{$job->employer_logo}}" class="form-control" placeholder="" type="file">
        </div>
          <div class="form-group">
            <label>Employment Type</label>
            <select name="employment_type" class="form-control">
              <option value="">{{$job->employment_type ?? 'Select Employment type'}}</option>
              <option>Job Type</option>
              <option>Full Time</option>
              <option>Contract</option>
              <option>Internship</option>
            </select>
          </div>
          <div class="form-group">
            <label>Job Category</label>
            <select name="jobcategories_id" class="form-control">
              <option value="">{{$job->category->jobcategories ?? 'Select Category'}}</option>
              @foreach($categories as $jobcategory)
              <option value="{{$jobcategory->id}}">{{$jobcategory->jobcategories}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Deadline</label>
            <input name="deadline" value="{{$job->deadline}}" class="form-control" placeholder="mm/dd/yyyy" type="date" id="datepicker-autoclose">
          </div>
        </div>
      </div> <!--/.col-md-6-->


      <div class="col-md-6">
       <div class="white-box">
        <div class="form-group">
          <label class="control-label">Job Type</label>
          <select name="job_type" class="form-control">
            <option value="">Select Job Type</option>
            <option value="Government Jobs">Government Jobs</option>
            <option value="International Jobs">International Jobs</option>
            <option value="Humanitarian Jobs">Humanitarian Jobs</option>
            <option value="NGO Jobs">NGO Jobs</option>
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Job Industry</label>
          <select name="industry" class="form-control">
            <option value="">{{$job->industries->name ?? 'Select Industry'}}</option>
            @foreach($industries as $industry)
            <option value="{{$industry->id}}">{{$industry->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Country</label>
          <select name="country_id" class="form-control">
            <option value="">{{$job->country->name ?? 'Select Country'}}</option>
            @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Town/State</label>
          <select name="location" class="form-control">
            <option value="">{{$job->town->name ?? 'Select Town'}}</option>
            @foreach($towns as $town)
            <option value="{{$town->id}}">{{$town->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Salary<small> (if confidential leave blank)</small></label>
          <input name="salary" value="{{$job->salary}}" class="form-control" placeholder="00.00" type="text">
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
        <label class="control-label">Job Description</label>
        <div class="col-md-12">
          <textarea name="summary" class="form-control ckeditor" id="val-suggestions">{{$job->summary}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Job Requirements</label>
        <div class="col-md-12">
          <textarea name="description" class="form-control ckeditor" id="val-suggestions">{{$job->description}}</textarea>
        </div>
      </div>
      <!-- <div class="form-group">
        <div class="checkbox primary">
          <input  type="checkbox" name="apply" value="{{old('apply')}}" id="checkbox1"> <label for="checkbox1"> Apply With Us  <small>(Select if you want to receive the applications via the networkedpros portal)</small> </label>
        </div>
      </div> -->
      <div class="form-group">
        <label class="control-label">How To Apply</label>
        <div class="col-md-12">
          <textarea name="application_details" class="form-control ckeditor" id="val-suggestions">{{$job->application_details}}</textarea>
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