@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
  <h4 class="text-center text-dark">Express Recruitment</h4><br>
  <div class="container" style=" padding-top: 3rem;">
    <form method="get" action="{{route('expressfilter')}}">
     <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 p-0">
        <select name="category" class="form-control search-slt">
          <option value="">Any Category</option>
          @foreach($categories as $jobt)
          <option value="{{$jobt->id}}">{{$jobt->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 p-0">
        <select name="country" class="form-control search-slt">
         <option value="">Any Country</option>
         @foreach ($countries as $key => $value)
         <option value="{{ $key }}">{{ $value }}</option>
         @endforeach
       </select> 
     </div>
     <div class="col-lg-4 col-md-4 col-sm-12 p-0">
       <button type="submit" class="btn btn-danger wrn-btn">Search</button>
     </div>
   </div>
 </form>
</div><br>
<div class="row">
  <div class="col-md-9">
    @forelse($jobseekers as $jobseeker)
    <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
      <div class="row">
        <div class="col-md-3">
          <img class="rounded-circle img-fluid" src="{{asset('/Images/profile.png')}}" alt="" width="140" height="140">
        </div>
        <div class="col-md-9">
          <h4>{{str_singular($job_category) ?? 'Candidate'}} Candidate</h4>
          <p class="text-dark">{!! Str::limit(strip_tags($jobseeker->statement), 300) !!}</p>
          <div class="mt-3">
            @foreach($jobseeker->skills as $skill)
            <a href="#" class="mr-1 badge badge-light">{{$skill->skillname}}</a>
            @endforeach
          </div>
          <a class="btn btn-danger pull-right btn-sm" href="{{route('foremployer')}}">View Profile</a>
        </div>
      </div>
    </div> 
    @empty
    <p>No Jobseekers</p>
    @endforelse
    {{$jobseekers->links()}}
  </div>
  <div class="col-md-3">
    @include('front.express-sidebar')
  </div>
</div>
</div>
@endsection
