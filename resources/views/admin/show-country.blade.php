@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">{{$country->name}}</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('admin')}}">Dashboard</a>
      </li>
      <li class="active">
        {{$country->name}}
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
         <h2 class="header-title">States</h2>
         @include('success')
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
              @foreach($country->towns as $town)
              @php $column = $column + 1 @endphp
              <tr>
                <td>{{$column}}</td>
                <td>{{$town->name}}</td>
                <td>
                  <div class="btn-group">
                    <a type="button" href="{{route('countries.editstate', $town->id)}}" class="btn btn-info float-left">Edit</a>
                    <form method="POST" action="{{route('countries.deletestate', $town->id)}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger float-left">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End row-->   

</div>
<!-- End Wrapper-->
@endsection