@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h4 style="color:#0B0B3B;">{{$blog->title}}</h4>
            
            <p>Category: <b class="text-primary">{{$blog->category->name}} | {{$blog->created_at}}</b></p>

                        <hr>
                        <p>{!!$blog->description!!}</p>
        </div>
        
        <div class="col-lg-4">
         @include('new.blog-rightnav')
            
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- verticaladd -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9415122333094581"
     data-ad-slot="5481420996"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
    </div>
</div>
@endsection