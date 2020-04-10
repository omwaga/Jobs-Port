@extends('layouts.admin.master')
@section('content')

<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Add Employer</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li class="active">
        Add New Employer
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          


  <!--Start row-->
  <form method="POST" action="{{route('add-employer')}}">
    @csrf
    <div class="row">
      @include('errors')
      @include('success')
      <div class="col-md-6">
        <div class="white-box">
          <div class="form-group">
            <label>Company Name</label>
            <input class="form-control" value="{{old('employer_name')}}" name="employer_name"  placeholder="Enter Title" type="text">
          </div>
        <div class="form-group">
          <label  class="control-label">Company Industry</label>
          <select name="industry" class="form-control">
            <option>Select Industry</option>
            @foreach($industries as $industry)
            <option value="{{$industry->id}}">{{$industry->name}}</option>
            @endforeach
          </select>
        </div>
          <div class="form-group">
            <label>Website URL</label>
            <input class="form-control" value="{{old('website')}}" name="website"  placeholder="Enter Title" type="text">
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" value="{{old('email')}}" name="email"  placeholder="Enter Title" type="text">
          </div>
          <div class="form-group">
            <label>Employer Type</label>
            <select name="employer_type" class="form-control">
            <option>Select Employer Type</option>
            <option>Direct Employer</option>
            <option>Recruiting Agency</option>
          </select>
          </div>
        </div>
      </div> <!--/.col-md-6-->


      <div class="col-md-6">
       <div class="white-box">
          <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" value="{{old('phone')}}" name="phone"  placeholder="Enter Title" type="text">
          </div>
        <div class="form-group">
          <label  class="control-label">Country</label>
          <select name="country" class="form-control">
            <option>Select Country</option>
            @foreach($countries as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Town/State</label>
          <select name="state" class="form-control">
            <option>Select Town</option>
            @foreach($towns as $town)
            <option value="{{$town->id}}">{{$town->name}}</option>
            @endforeach
          </select>
        </div>
          <div class="form-group">
            <label>Physical Address</label>
            <input class="form-control" value="{{old('physical_address')}}" name="physical_address"  placeholder="Enter Title" type="text">
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input class="form-control" value="{{old('logo')}}" name="logo" type="file">
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
        <label class="control-label">Company Description</label>
        <div class="col-md-12">
          <textarea name="description" class="form-control ckeditor" id="val-suggestions">{{old('description')}}</textarea>
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