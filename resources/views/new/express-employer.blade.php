@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 5rem;">
  <h4 class="text-center text-dark">Express Recruitment</h4><br>
  <p class="text-center">Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process.</p>
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
