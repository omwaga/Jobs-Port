@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;">
  <div class="container" style=" padding-top: 3rem;">
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
    @include('success')
   @include('front.jobs-list')
    {{$jobs->links()}}
  </div>

  <div class="col-md-4">
   @include('front.rightnav')    
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
