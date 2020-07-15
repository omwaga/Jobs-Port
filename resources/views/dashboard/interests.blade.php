@extends("layouts.app")
@section("content")
<!--main content start-->
<div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/banner-5.jpg')}}');">
  <div class="container">
    <h2 class=" text-danger text-center" style="text-transform: uppercase;">Be discovered <br> by Top Employers</h2>
  </div>
</div>
<div class="container">
  @include('errors')
  @include('success')
  <p>The settings below will be used to find you jobs, and industry insights that match your interests. Please be careful in not making too narrow selections to avoid missing interesting opportunities.</p>
  <form method="POST" action="{{route('interests.store')}}">
    @csrf
    <div class="row">
      @php $interest = 0 @endphp
      @foreach($categories as $category)
      @php $interest += 1 @endphp
      <div class="col-md-3">
        <div class="form-check">
          <input class="form-check-input" name="interests{{$interest}}" type="checkbox" value="{{$category->id}}" id="{{$category->id}}">
          <label class="form-check-label" for="{{$category->id}}">
            {{$category->jobcategories}}
          </label>
        </div>
      </div>
      @endforeach
    </div><br>
    <button class="btn-danger">SAVE</button>
  </form>
  @forelse($job_levels as $job_level)
  <form method="POST" action="{{route('joblevels.store')}}">
    @csrf
    <p>Please select the job levels you are interested in. You can also leave this empty</p>
    <div class="row">
      @foreach($levels as $level)
      <div class="col-md-3">
        <div class="form-check">
          <input class="form-check-input" name="level{{$level->id}}" type="checkbox" value="{{$level->id}}" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            {{$level->name}}
          </label>
        </div>
      </div>
      @endforeach
    </div>
    <button class="btn-danger">SAVE</button>
  </form>
  @empty
  @endforelse
</div>
@endsection