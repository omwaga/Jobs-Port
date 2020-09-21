@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Edit Express Category</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}}">Dashboard</a>
      </li>
      <li>
        <a href="{{route('expresscategories.index')}}">Express Categories</a>
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          


  <!--Start row-->
  <div class="row">
   <div class="col-md-12">
     <div class="white-box">
       <div class="row"> 
         <div class="col-md-6">
           <h2 class="header-title">Edit Express Category</h2>
         </div>
       </div>
       @include('errors')
       @include('success')
       <form class="js-validation-bootstrap form-horizontal" action="{{route('expresscategories.update', $expresscategory->id)}}" method="POST">
         @method('PATCH')
         @csrf
        <div class="form-group">
          <label class="col-md-3 control-label" for="val-skill">Category Name: <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <input type="text" class="form-control" value="{{$expresscategory->name}}" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-8 col-md-offset-3">
            <button class="btn  btn-primary" type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end row --> 

</div>
<!-- End Wrapper-->
@endsection