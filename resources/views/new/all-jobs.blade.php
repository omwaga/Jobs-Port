@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;">
  <div class="container">
    <form method="get" action="{{route('homesearch')}}">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 p-0">
       <select name="industry" class="form-control search-slt">
        <option>All Job Industries</option>
        @foreach($industries as $industry)
        <option value="{{$industry->id}}">{{$industry->name}}</option>
        @endforeach
      </select>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
      <select name="job_category" class="form-control search-slt">
        <option>All Job Categories</option>
        @foreach($categories as $jobt)
        <option value="{{$jobt->id}}">{{$jobt->jobcategories}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
      <select name="country" class="form-control search-slt">
       <option value="">Select Country</option>
       @foreach ($countries as $key => $value)
       <option value="{{ $key }}">{{ $value }}</option>
       @endforeach
     </select> 
   </div>
   <div class="col-lg-2 col-md-2 col-sm-12 p-0">
    <select name="state" class="form-control search-slt">
     <option>State/Region</option>
   </select> 
 </div>
 <div class="col-lg-2 col-md-2 col-sm-12 p-0">
   <button type="submit" class="btn btn-danger wrn-btn">Search</button>
 </div>
</div>
</form>
</div>
</div>
<div class="container">
 <div class="row">
   <div class="col-md-8">
    @foreach($jobs as $job)
    <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
          @php $jobtitle = str_slug($job->job_title, '-'); @endphp
          <h4 style="color:#0B0B3B;"><a href="/jobview/{{$job->id}}/{{$jobtitle}}">{{$job->job_title}}</a></h4>
          <ul style="list-style: none;">
            <li class="text-danger" style="font-size: 1.2em; font-weight: bold">{{$job->employer_name ?? $job->employer->company_name}}</li>
            <li><strong style="font-weight: bold;">Employment Type:</strong> {{$job->employment_type}}</li>
            <li><b style="font-weight: bold;">Salary:</b> {{$job->salary}}</li>
            <li><b style="font-weight: bold;">Category:</b> {{$job->category->jobcategories ?? ''}}</li>
            <li><b style="font-weight: bold;">Job Advert Expires In:</b> <span class="badge badge-success badge-pill">{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->diffInDays($job->deadline) ?? ''}} days</span></li>
          </ul>

      <div class="row">
        <div class="col-md-3">
          @if($job->employer_logo !=="no-logo")
          <img class="rounded-circle img-fluid" src="{{asset('storage/job_logos/'.$job->employer_logo)}}" alt="{{$job->job_title}}" width="140" height="140">
          @else
          <img class="rounded-circle img-fluid" src="{{asset('storage/logos/'.$job->employer->logo)}}" alt="{{$job->job_title}}" width="140" height="140">
          @endif
        </div>
        <div class="col-md-9">
          <p class="text-dark">
            {!! str_limit($job->summary, $limit = 300, $end = '...') !!}<a class="btn btn-danger pull-right" href="/jobview/{{$job->id}}/{{$jobtitle}}">View Job Details</a>
          </p>
        </div>
      </div>
    </div> 
    @endforeach
    {{$jobs->links()}}
  </div>

  <div class="col-md-4">
   @include('new.rightnav')    
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
