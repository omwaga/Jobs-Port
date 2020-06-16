@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row  p-2">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h5 class="pageheader-title">Post a Job</h5>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('employdashboard')}}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Source Candidates</li>
              </ol>
              <a href="{{route('picktemplate')}}" class=" btn btn-sm btn-success float-right text-white">Pick a Template</a>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          @include('errors')
          @include('success')
          <form role="form" method="post" action="{{route('postempjob')}}">
            @csrf
            <div class="row p-3">
              <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                  <label class="col-form-label">Job Title:</label>
                  <input class="form-control" type="text" name="job_title" value="{{ old('job_title') }}" required="" />
                </div>
                <div class="form-group">
                  <label>Employment Type:</label>
                  <select class="form-control" name="employment_type" required>
                    <option value="">Select Employment Type</option>
                    <option>Part-time</option>
                    <option>Full-time</option>
                    <option>Contract</option>
                    <option>Internship</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Job Category:</label>
                  <select class="form-control" name="category" required>
                    <option value="">Select Job Category</option>
                    @foreach($jobcategory as $jobc)
                    <option value="{{$jobc->id}}">{{$jobc->jobcategories}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Expiry date:</label>
                  <input class="form-control" value="{{old('expiry_date')}}" type="date" name="expiry_date" required />

                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">

                <div class="panel-body">
                  <div class="form-group">
                    <label>Industry:</label>
                    <select class="form-control" name="industry" required>
                    <option value="">Select Industry</option>
                     @foreach ($industry as $indust)
                     <option value="{{$indust->id}}">{{$indust->name}}</option>
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
                  <label>Town/County/State:</label>
                  <select class="form-control" name="state" required>
                    <option>Select Town/County</option>
                    <option value="">Select Town</option>
                    @foreach ($towns as $town)
                    <option value="{{$town->id}}">{{$town->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Salary:</label>
                  <input class="form-control @error('salary') is-invalid @enderror" value="{{old('salary')}}"  type="text" name="salary"/>
                  @error('salary')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>

                <!-- for the email -->
                <div class="form-group">
                 <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                 required autofocus name="emaill" value="<?php echo Auth::guard('employer')->user()->email ?>"> 
               </div>
               <div class="form-group">
                 @foreach ($cname as $item)
                 <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                 required autofocus name="company" value="<?php echo $item->cname ?>">  
                 @endforeach
               </div>
               <!-- end for the email -->

             </div>
           </div>
         </div>
       </div>

       <div class="col-md-12">
         <div class="panel panel-dark">
          <div class="form-group">
            <label>Job Description:</label>
            <textarea class="form-control ckeditor" id="summary-ckeditor" rows="4" name="job_description" id="summary" required>{{old('job_description')}}</textarea>
          </div> 
        </div>   
      </div>
      <div class="col-md-12">
       <div class="panel panel-dark">
        <div class="form-group">
          <label>Job Requirements:</label>
          <textarea class="form-control @error('job_requirements') is-invalid @enderror ckeditor" rows="20" name="job_requirements" id="descc" required>{{old('job_requirements')}}</textarea>
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
            <input type="checkbox" value="Yes" name="apply_with_us" />Check the box to receive the job applications using our portal. </label>
          </div>
        </div>
      </div>                 
      <div class="col-md-12">
       <div class="panel panel-dark">
        <div class="form-group">
          <label>Application details</label>
          <textarea class="form-control ckeditor" name="application_details" rows="3" >{{old('application')}}</textarea>
        </div>
      </div>   
    </div>
    <p class="text-right">
      <button type="submit" class="btn btn-space btn-primary">Submit</button>
    </p><br>
  </form>
</div>
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