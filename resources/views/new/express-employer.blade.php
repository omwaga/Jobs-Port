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
<div class="container">
  <div class="row">
    @forelse($express_categories as $category) 
    <div class="col-md-4">
      <div class="card card-body border-light shadow-lg p-3 mb-3 bg-white rounded" style="background-color:#aaa;">
        @php $cat = str_slug($category->name, '-'); @endphp
        <a href="{{route('expresscandidates', $cat)}}"><h4>{{$category->name}}</h4></a>
        <p>{{App\PersonalStatement::where('category'.$category->id, $category->name)->count()}} Candidates</p>
      </div>
    </div>
    @empty
    @endforelse
    {{$express_categories->links()}}
  </div>
</div>
</div>
@endsection
