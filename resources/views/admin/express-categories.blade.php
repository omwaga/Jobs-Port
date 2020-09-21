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
  <div class="col-md-12">
    <div class="white-box">
      <h2 class="header-title"> All Express Categories </h2>
      <a href="#" class="btn btn-success">Export Excel</a>
      <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">Add Category</button>
      @include('admin.new-express-category')

      @include('success')
      @include('errors')
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Candidates</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $column = 0 @endphp
            @foreach($categories as $category)
            @php $column = $column + 1 @endphp
            <tr>
              <td>{{$column}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->users->count()}}</td>
              <td>
                <div class="btn-group">
                  <a type="button" href="{{route('expresscategories.edit', $category->id)}}" class="btn btn-info float-left">Edit</a>
                  <form method="POST" action="{{route('expresscategories.destroy', $category->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger float-left" >Delete</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{$categories->links()}}  
    </div>
  </div>        
</div>
<!-- End Wrapper-->
@endsection