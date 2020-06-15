@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h5 class="pageheader-title">Use Job Template</h5>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Employer-dashboard" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('picktemplate')}}" class="breadcrumb-link">Job Templates</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Use Template: {{$jobpost->job_title}}</li>
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
               <h5>Use Job template: {{$jobpost->job_title}}</h5>
           </div>
           <div class="card-body">
            @include('errors')
            <form role="form" method="post" action="{{route('postempjob')}}">
              @csrf<!--display the error messages -->
              <input type="hidden" id="jobid" name="id">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="panel panel-info">
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Job Title:</label>
                            <input class="form-control @error('jobtitle') is-invalid @enderror" type="text" value="{{$jobpost->job_title}}" name="jobtitle" required />
                            @error('jobtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Employment Type:</label>
                            <select class="form-control" name="jobtype" required>
                               <option>{{$jobpost->employment_type ?? 'Select Employment Type'}}</option>
                               <option>Part-time</option>
                               <option>Full-time</option>
                               <option>Contract</option>
                               <option>Internship</option>
                           </select>
                       </div>
                       <div class="form-group">
                        <label>Job Category:</label>
                        <select class="form-control" name="category" required>
                            <option value="{{$jobpost->category->id ?? ''}}">{{$jobpost->category->jobcategories ?? 'Select Category'}}</option>
                            @foreach($jobcategories as $category)
                            <option value="{{$category->id}}">{{$category->jobcategories}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Salary Specification</label>
                        <input class="form-control @error('salary') is-invalid @enderror"  type="text" name="salary" value="{{$jobpost->salary}}" required />
                        @error('salary')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

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
                    @foreach ($industries as $industry)
                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Country:</label>
                <select class="form-control" name="country" required>
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Select Town/County:</label>
                <select class="form-control" name="state" required>
                    <option value="">Select Town/County/State</option>
                    @foreach ($towns as $town)
                    <option value="{{$town->id}}">{{$town->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Expiry date</label>
                <input class="form-control"  type="date" name="expirydate" required value="{{$jobpost->expirydate}}"/>

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
        <div class="checkbox">
            <label>
                <input type="checkbox" value="Yes" name="apply" />Check the box if you want applicants to use the portal for application purposes. we will review their CVs and shortlist successfull applicants for you.
            </label>
        </div>
    </div>
</div>                 
<div class="col-md-12">
   <div class="panel panel-dark">
    <div class="form-group">
        <label>Application Details:</label>
        <textarea class="form-control ckeditor" name="applicationdet" rows="3" >{!!$jobpost->applicationdet!!}</textarea>
    </div>
</div>   
</div>
<div class="modal-footer no-bd">
   <button type="submit" id="addRowButton" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>Post Job</button>
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

<script type="text/javascript">
    jQuery(document).ready(function ()
    {
        jQuery('select[name="country"]').on('change',function(){
         var countryID = jQuery(this).val();
         if(countryID)
         {
          jQuery.ajax({
           url : 'dropdownlist/getstates/' +countryID,
           type : "GET",
           dataType : "json",
           success:function(data)
           {
            console.log(data);
            jQuery('select[name="state"]').empty();
            jQuery.each(data, function(key,value){
             $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
         });
        }
    });
      }
      else
      {
          $('select[name="state"]').empty();
      }
  });
    });
</script>
@endsection