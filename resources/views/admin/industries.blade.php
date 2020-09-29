@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Industries</h4>
    <ol class="breadcrumb">
      <li>
        <a href="/admin-dashboard">Dashboard</a>
      </li>
      <li class="active">
        Industries
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
           <h2 class="header-title">All Industries</h2>
           
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
                @foreach($industries as $industry)
                @php $column = $column + 1 @endphp
                <tr>
                  <td>{{$column}}</td>
                  <td>{{$industry->name}}</td>
                  <td>
                    <div class="btn-group">
                      <a type="button" href="{{route('industries.edit', $industry->id)}}" class="btn btn-info float-left">Edit</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{$industries->links()}}
        </div>
      </div> <!--/.col-md-4-->


      <div class="col-md-6">
       <div class="white-box">
         <h2 class="header-title">Add Industry</h2>
         <!-- <div class="compose-body"> -->
          @include('errors')
          @include('success')
          <form class="row" method="post" action="">
            @csrf
            <div class="form-group">
              <label class="col-md-3 control-label">Industry Name:</label>
              <div class="col-md-9">
                <input type="text" name="name" class="form-control" id="to">
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