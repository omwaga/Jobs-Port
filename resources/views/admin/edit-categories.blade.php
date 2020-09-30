@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Categories</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li class="active">
        Categories
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
         <h2 class="header-title">Edit Category</h2>
         <!-- <div class="compose-body"> -->
          @include('errors')
          <form class="row" method="post" action="{{route('categories.update', $category->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Category Name:</label>
              <div class="col-md-9">
                <input type="text" name="jobcategories" class="form-control" value="{{$category->jobcategories}}">
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">SEO Description:</label>
              <div class="col-md-9">
                <textarea class="form-control" name="seo_description">{{$category->seo_description}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Description:</label>
              <div class="col-md-9">
                <textarea class="form-control ckeditor" name="description">{{$category->description}}</textarea>
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