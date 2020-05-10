@extends('layouts.employer.super-employer')
@section('content')

<!--body wrapper start-->
<div class="wrapper">

  <!--Start Page Title-->
  <div class="page-title-box">
    <h4 class="page-title">Job Vacancies</h4>
    <ol class="breadcrumb">
      <li>
        <a href="{{route('the-dashboard')}}">Dashboard</a>
      </li>
      <li class="active">
        Job Vacancies
      </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          

  <!-- Start row--> 
  <div class="col-md-12">
    <div class="white-box">
      <h2 class="header-title"> All Vacancies </h2>
      @include('success')
      <a href="{{route('createjob')}}" class="btn btn-success">Post a Job</a>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Vacancy Title</th>
              <th>Deadline</th>
              <th>Employer</th>
              <th>Applications</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $column = 0 @endphp
            @foreach($vacancies as $vacancy)
            @php $column = $column + 1 @endphp
            <tr>
              <td>{{$column}}</td>
              <td>{{$vacancy->job_title}}</td>
              <td>{{$vacancy->deadline}}</td>
              <td>{{$vacancy->employer->company_name}}</td>
              <td>{{$vacancy->applications->count()}}</td>
              <td>
                <div class="btn-group m-b-20">
                  <a type="button" href="{{route('updateform', $vacancy->id)}}" class="btn btn-info">Edit</a>
                  <form method="POST" action="{{route('deletejob', $vacancy->id)}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" href="" class="btn btn-danger">Delete</button>
                  </div>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{$vacancies->links()}}  
    </div>
  </div>
  <!-- End row-->

</div>
<!-- End Wrapper-->
@endsection