@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Industries</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li class="active">
        Industries
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          

  <!--Start row-->
  <div class="container">
   <div class="col-md-12">
     <div class="row">
       <div class="white-box">
         <h2 class="header-title">Edit Industry</h2>
         <!-- <div class="compose-body"> -->
          @include('errors')
          <form class="row" method="post" action="{{route('industries.update', $industry->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Industry Name:</label>
              <div class="col-md-9">
                <input type="text" name="name" class="form-control" value="{{$industry->name}}">
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">SEO Description:</label>
              <div class="col-md-9">
                <textarea class="form-control" name="seo_description">{{$industry->seo_description}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Description:</label>
              <div class="col-md-9">
                <textarea class="form-control ckeditor" name="description">{{$industry->description}}</textarea>
              </div>
            </div>

            <div class="compose-options">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
              </div>
            </div>
          </form>
          <!-- </div> -->
        </div>
    </div>
  </div>
</div>
<!--End row-->   

</div>
<!-- End Wrapper-->

@endsection