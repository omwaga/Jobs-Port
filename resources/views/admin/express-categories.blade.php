@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Express Recruitment Categories</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      
      <li class="active">
        Express Recruitment Categories
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          
  
  
  <!-- Start row-->
  <div class="row">
    <div class="col-md-12">
      <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">Add Category</button>
      @include('admin.new-express-category')
    </div><br>
    <div class="calendar-layout clearfix">
      @include('success')
      @include('errors')
      @foreach($categories as $category)
      <div class="col-md-4">
        <div class="card-profile3">
         <div class="p-info">
          <div class="row">
           <div class="col-md-12 co-sm-12 col-xs-12">
             <div class="p-stats">
              <h4><a href="#">{{$category->name}}</a></h4>
              <h5>{{App\PersonalStatement::where('category'.$category->id, $category->name)->count()}} Candidates</h5>
            </div>
          </div>
        </div>

      </div> <!--/.p-info-->

    </div>
  </div>
  @endforeach
</div>      
</div>
<!-- End row-->        
</div>
<!-- End Wrapper-->
@endsection