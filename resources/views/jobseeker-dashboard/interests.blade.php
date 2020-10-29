@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper">
  <div class="container">
    @include('errors')
    @include('success')
    <p>The settings below will be used to find you jobs, and industry insights that match your interests. Please be careful in not making too narrow selections to avoid missing interesting opportunities.</p>
    @if($interests)
    <h4>Your Selected Categories</h4>
    <div class="row">
      <div class="col-md-3">{{$interests->interests}}</div>
      <button class="btn-danger">UPDATE INTERESTS</button>
    </div>
    @else
    <form method="POST" action="{{route('interests.store')}}">
      @csrf
      <div class="row">
        @php $interest = 0 @endphp
        @foreach($categories as $category)
        @php $interest += 1 @endphp
        <div class="col-md-3">
          <div class="form-check">
            <input class="form-check-input" name="interests{{$category->id}}" type="checkbox" value="{{$category->jobcategories}}" id="{{$category->id}}">
            <label class="form-check-label" for="{{$category->id}}">
              {{$category->jobcategories}}
            </label>
          </div>
        </div>
        @endforeach
      </div><br>
      <button class="btn-danger">SAVE CATEGORIES</button>
    </form>
    @endif
    @if($job_levels)
    <h4>Your Selected Job Level</h4>
    <div class="row">
      <div class="col-md-3">{{$job_levels->level1}}</div>    
      <button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#editlevel"><i class="fa fa-edit"></i>UPDATE JOB LEVELS</button>
    </div>
    @else
    <form method="POST" action="{{route('joblevels.store')}}">
      @csrf
      <p>Please select the job levels you are interested in. You can also leave this empty</p>
      <div class="row">
        @foreach($levels as $level)
        <div class="col-md-3">
          <div class="form-check">
            <input class="form-check-input" name="level{{$level->id}}" type="checkbox" value="{{$level->name}}" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              {{$level->name}}
            </label>
          </div>
        </div>
        @endforeach
      </div>
      <button class="btn-danger">SAVE JOB LEVELS</button>
    </form>
    @endif
  </div>
  @endsection