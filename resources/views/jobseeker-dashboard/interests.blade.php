@extends("layouts.dashboard")
@section("content")
<div class="dashboard-wrapper"><br>
  <div class="container">
    @include('errors')
    @include('success')
    <p>The settings below will be used to find you jobs, and industry insights that match your interests. Please be careful in not making too narrow selections to avoid missing interesting opportunities.</p>
    @if($user_interests)
    <h4>Your Selected Categories</h4>
    <div class="row">
      <div class="col-md-6">
        <ul>
          @foreach($user_interests as $interest)
          <li class="p-1">
            <form action="{{route('interests.destroy', $interest->id)}}" method="POST">
              @csrf
              @method('DELETE')
              {{$interest->category->jobcategories}}
              <button type="submit" class="btn btn-xs"><i class="fas fa-trash text-danger">Remove</i></button>
            </form>
          </li>
          @endforeach
        </ul>
      </div>
      <div>        
        <button class="btn btn-sm text-white btn-info" data-toggle="modal" data-target="#add">Add Category</button>
        @include('jobseeker-dashboard.add-category')
      </div>
    </div>
    @else
    <form method="POST" action="{{route('interests.store')}}">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Select Job Category</label>
            <select class="form-control" name="interests">
              <option value="">Select Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->jobcategories}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div><br>
      <button class="btn btn-danger">Save Category</button>
    </form>
    @endif
    @if($job_levels)
    <h4>Your Selected Job Level</h4>
    <div class="row">
      <div class="col-md-6">
        <ul>
          @foreach($job_levels as $job_level)
          <li class="p-1">
            <form action="{{route('joblevels.destroy', $job_level->id)}}" method="POST">
              @csrf
              @method('DELETE')
              {{$job_level->selected->name}}
              <button type="submit" class="btn btn-xs"><i class="fas fa-trash text-danger">Remove</i></button>
            </form>
          </li>
          @endforeach
        </ul>
      </div>    
      <div>
        <button class="btn btn-sm text-white btn-info" data-toggle="modal" data-target="#addLevel">Add Level</button>
        @include('jobseeker-dashboard.add-level')
      </div>
    </div>
    @else
    <form method="POST" action="{{route('joblevels.store')}}">
      @csrf
      <p>Please select the job levels you are interested in. You can also leave this empty</p>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <select class="form-control" name="level">
              <option value="">Select Level</option>
              @foreach($levels as $level)
              <option value="{{$level->id}}">{{$level->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <button class="btn-danger btn btn-sm">Save Level</button>
    </form>
    @endif
  </div>
  @endsection