
@extends('layouts.app')
@section('content')
<div class="container"  style=" padding-top: 5rem;">

     <div class="row">
         <div class="col-md-8">
             @if(!$articles->count())
             <p>No articles yet</p>
             @endif
          @foreach($articles as $article)
                 <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
    <h5><a href="/blog/{{$article->title}}"  style="color:#0B0B3B;">{{$article->title}}</a></h5>
    
    </div>
                        <div class="row">
                 <p class="text-secondary">{{$article->category->name}} | {{$article->created_at}}</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                    {!! str_limit($article->description, $limit = 300, $end = '...') !!}<a class="btn pull-right text-white btn-sm" style="background-color:#0B0B3B;" href="/blog/{{$article->title}}">Read More</a>
                </p>
                </div>
     </div>
       </div> 
  </div>
     @endforeach
          
          {{$articles->links()}}
             </div>
         <div class="col-md-4">  
         @include('new.blog-rightnav')
         </div>
     </div>

</div>
@endsection
