@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Countries</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li class="active">
        Countries
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          

  <!--Start row-->
  <div class="row">
   <div class="col-md-12">
     <div class="row">

       <div class="col-md-6">
         <div class="white-box">
           <h2 class="header-title">All Countries</h2>

           <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @php $column = 0 @endphp
                @foreach($locations as $location)
                @php $column = $column + 1 @endphp
                <tr>
                  <td>{{$column}}</td>
                  <td>{{$location->name}}</td>
                  <td>
                    <div class="btn-group">
                      <a type="button" href="{{route('countries.edit', $location->id)}}" class="btn btn-info float-left">Edit</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{$locations->links()}}
        </div>
      </div> <!--/.col-md-4-->


      <div class="col-md-6">
       <div class="white-box">
         <h2 class="header-title">Add Country</h2>
         <!-- <div class="compose-body"> -->
          @include('errors')
          @include('success')
          <form class="row" method="post" action="{{route('countries.store')}}">
            @csrf
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Country Name:</label>
              <div class="col-md-9">
                <input type="text" name="jobcategories" class="form-control" value="{{old('jobcategories')}}">
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Code:</label>
              <div class="col-md-9">
                <textarea class="form-control" name="seo_description">{{old('seo_description')}}</textarea>
              </div>
            </div>

            <div class="compose-options">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Add</button>
              </div>
            </div>
          </form>
          <!-- </div> -->
         <h2 class="header-title">Add City/State</h2>
         <!-- <div class="compose-body"> -->
          @include('errors')
          @include('success')
          <form class="row" method="post" action="{{route('countries.store')}}">
            @csrf
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">City/State Name:</label>
              <div class="col-md-9">
                <input type="text" name="jobcategories" class="form-control" value="{{old('jobcategories')}}">
              </div>
            </div>
            <div class="form-group">
              <label for="to" class="col-md-3 control-label">Country:</label>
              <div class="col-md-9">
                <textarea class="form-control" name="seo_description">{{old('seo_description')}}</textarea>
              </div>
            </div>

            <div class="compose-options">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Add</button>
              </div>
            </div>
          </form>
          <!-- </div> -->
        </div>
      </div> <!--/.col-md-4-->
    </div>
  </div>
</div>
<!--End row-->   

</div>
<!-- End Wrapper-->

@endsection