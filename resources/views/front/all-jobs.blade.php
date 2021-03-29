@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;">
  <div class="container" style=" padding-top: 3rem;">
    <p class="text-white">Are you looking for a job? We list up to date jobs in East Africa from top Kenyan, Tanzanian, Ugandan and Rwandese employers. This is a free service to Kenyan, Tanzanian, Ugandan and Rwandese job seekers. Never pay to attend an interview or for psychometric tests. </p>
    <form method="get" action="{{route('homesearch')}}">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 p-0">
       <select name="industry" class="form-control search-slt">
        <option>All Job Industries</option>
        @foreach($industries as $industry)
        <option value="{{$industry->id}}">{{$industry->name}}</option>
        @endforeach
      </select>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
      <select name="job_category" class="form-control search-slt">
        <option>All Job Categories</option>
        @foreach($categories as $jobt)
        <option value="{{$jobt->id}}">{{$jobt->jobcategories}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
      <select name="country" class="form-control search-slt">
       <option value="">Select Country</option>
       @foreach ($countries as $key => $value)
       <option value="{{ $key }}">{{ $value }}</option>
       @endforeach
     </select>
   </div>
   <div class="col-lg-2 col-md-2 col-sm-12 p-0">
    <select name="state" class="form-control search-slt">
     <option>State/Region</option>
   </select>
 </div>
 <div class="col-lg-2 col-md-2 col-sm-12 p-0">
   <button type="submit" class="btn btn-danger wrn-btn">Search</button>
 </div>
</div>
</form>
</div>
</div>
<div class="container">
 <div class="row">
  @include('front.featured-jobs')
  <div class="col-md-8">
    @include('success')
    <!-- < adsense code -->
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
   <!-- end adsense code -->

   @include('front.jobs-list')

   <!-- adsense code -->
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
 <!-- end adsense code -->
 {{$jobs->links()}}
</div>

<!-- begin side bar -->
<div class="col-md-4">
 @include('front.rightnav')
</div>
<!-- end sidebar -->
</div>
</div>
@endsection
