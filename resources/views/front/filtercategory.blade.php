@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">

 <div class="row">
   <div class="col-md-8">
    @include('success')
    <p class="">{!!$category->description ?? ''!!}</p>
    <div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
      style="display:block"
      data-ad-format="fluid"
      data-ad-layout-key="-e5+6n-34-bt+x0"
      data-ad-client="ca-pub-9415122333094581"
      data-ad-slot="8953952401"></ins>
      <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
     </script>
   </div>
   @include('front.jobs-list')
  <div>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
    style="display:block"
    data-ad-format="fluid"
    data-ad-layout-key="-go-2+1e-3q+3s"
    data-ad-client="ca-pub-9415122333094581"
    data-ad-slot="1159222863"></ins>
    <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
   </script>
 </div>
 {{$jobs->links()}}
</div>
<div class="col-md-4">
  @include('front.rightnav')     
</div>
</div>

</div>
@endsection
