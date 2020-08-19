@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
  <h4 class="text-center text-dark">Express Recruitment</h4><br>
  <div class="container" style=" padding-top: 3rem;">
    <form method="get" action="{{route('homesearch')}}">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        <select name="job_category" class="form-control search-slt">
          <option>Any Category</option>
          @foreach($categories as $jobt)
          <option value="{{$jobt->id}}">{{$jobt->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        <select name="country" class="form-control search-slt">
         <option value="">Any Country</option>
         @foreach ($countries as $key => $value)
         <option value="{{ $key }}">{{ $value }}</option>
         @endforeach
       </select> 
     </div>
     <div class="col-lg-3 col-md-3 col-sm-12 p-0">
      <select name="state" class="form-control search-slt">
       <option>Any State/Region</option>
     </select> 
   </div>
   <div class="col-lg-3 col-md-3 col-sm-12 p-0">
     <button type="submit" class="btn btn-danger wrn-btn">Search</button>
   </div>
 </div>
</form>
</div><br>
<div class="row">
  <div class="col-md-12">
    @forelse($jobseekers as $jobseeker)
    <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
      <div class="row">
        <div class="col-md-3">
          <img class="rounded-circle img-fluid" src="{{asset('/Images/profile.png')}}" alt="" width="140" height="140">
        </div>
        <div class="col-md-9">
          <h4>{{str_singular($job_category)}}</h4>
          <p class="text-dark">{!!str_limit($jobseeker->statement ?? '', $limit = 300, $end = '...')!!}</p>
          <div class="mt-3">
          @foreach($jobseeker->skills as $skill)
            <a href="#" class="mr-1 badge badge-light">{{$skill->skillname}}</a>
          @endforeach
          </div>
          <a class="btn btn-danger pull-right btn-sm" href="#">View Profile</a>
        </div>
      </div>
    </div> 
    @empty
    <p>No Jobseekers</p>
    @endforelse
    {{$jobseekers->links()}}
  </div>
</div>
</div>
@endsection
