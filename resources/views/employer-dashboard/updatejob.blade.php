@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h5 class="pageheader-title">Update Job</h5>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('employerjobs')}}" class="breadcrumb-link">Posted Jobs</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$jobpost->job_title}}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="card">
      <div class="card-header no-bd">
       <h5>Update Job Post</h5>
     </div>
     <div class="card-body">
       @include('errors')
       <form role="form" method="post" action="/jobposts/{{ $jobpost->id}}">
         @method('PATCH')
         @csrf<!--display the error messages -->
         <input type="hidden" id="jobid" name="id">
         <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
            <div class="panel-body">

              <div class="form-group">
                <label>Job Title:</label>
                <input class="form-control @error('job_title') is-invalid @enderror" type="text" value="{{$jobpost->job_title}}" name="job_title" required />
                @error('job_title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Employment Type:</label>
                <select class="form-control" name="employment_type" required>
                  <option>{{$jobpost->employment_type ?? 'Select Employment Type'}}</option>
                  <option>Part-time</option>
                  <option>Full-time</option>
                  <option>Contract</option>
                  <option>Internship</option>
                </select>
              </div>
              <div class="form-group">
                <label>Job Category:</label>
                <select class="form-control" name="jobcategories_id" required>
                 <option value="{{$jobpost->category->id ?? ''}}">{{$jobpost->category->jobcategories ?? 'Select Category'}}</option>
                 @foreach($jobcategory as $jobc)
                 <option value="{{$jobc->id}}">{{$jobc->jobcategories}}</option>
                 @endforeach
               </select>
             </div>
             <div class="form-group">
              <label>Deadline:</label>
              <input class="form-control"  type="date" name="deadline" required value="{{$jobpost->deadline}}"/>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
       <div class="panel panel-info">

        <div class="panel-body">
          <div class="form-group">
            <label>Job Industry:</label>
            <select class="form-control" name="industry" required>
              <option value="{{$jobpost->industries->id ?? ''}}">{{$jobpost->industries->name ?? 'Select Industry'}}</option>
              @foreach ($industry as $indust)
              <option value="{{$indust->id}}">{{$indust->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Country:</label>
            <select class="form-control" name="country_id" required>
              <option value="{{$jobpost->country->id ?? ''}}">{{$jobpost->country->name ?? 'Select Category'}}</option>
              @foreach ($countries as $country)
              <option value="{{$country->id}}">{{$country->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Town/County/State:</label>
            <select class="form-control" name="location" required>
              <option value="{{$jobpost->town->id ?? ''}}">{{$jobpost->town->name ?? 'Select Town/County/State'}}</option>
              @foreach ($towns as $town)
              <option value="{{$town->id}}">{{$town->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Salary:</label>
            <input class="form-control @error('salary') is-invalid @enderror"  type="text" name="salary" value="{{$jobpost->salary}}" />
            @error('salary')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
   <div class="panel panel-dark">
    <div class="form-group">
      <label>Job Description:</label>
      <textarea class="form-control ckeditor" rows="4" name="summary" required>{!!$jobpost->summary!!}</textarea>
    </div> 
  </div>   
</div>
<div class="col-md-12">
 <div class="panel panel-dark">
  <div class="form-group">
    <label>Job Requirements:</label>
    <textarea class="form-control @error('jdescription') is-invalid @enderror ckeditor" rows="4" name="description" required>{!!$jobpost->description!!}</textarea>
    @error('jdescription')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div> 
</div>   
</div>

<div class="col-md-12">
  <div class="form-group">
    <label>Apply with us?</label>
    <div class="form-check">
      <input type="checkbox" name="apply" value="Yes"
      @if($jobpost->apply === "Yes") checked @endif>
      <label>Check the box if you want applicants to use the portal for application purposes. we will review their CVs and shortlist successfull applicants for you.</label>
    </div>
  </div>
</div>                 
<div class="col-md-12">
 <div class="panel panel-dark">
  <div class="form-group">
    <label>How To Apply:</label>
    <textarea class="form-control ckeditor" name="application_details" rows="3" >{!!$jobpost->application_details!!}</textarea>
  </div>
</div>   
</div>
<div class="card-footer no-bd">
 <button type="submit" id="addRowButton" class="btn btn-primary btn-sm">Update Job</button>
 @if (session('status'))
 <div class="alert alert-success" role="alert">
  {{session('status')}}
</div>
@endif
</div>
</form>
</div>
</div>
</div>
@endsection