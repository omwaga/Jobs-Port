
<h4 class="text-center" style="font-family: 'Source Sans Pro', sans-serif;">Advanced filter</h4>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b><i class="fa fa-bars"></i>  Job Categories</b>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
          @foreach($categories as $category)
          @php $cat = str_slug($category->jobcategories, '-'); @endphp
          @if($category->jobs->count() > 0)
          <li class="d-flex justify-content-between align-items-center">
            <a href="{{url('job-category',[$cat])}}" class="nav-link" style="color:#0B0B3B;">
              <i class="fas fa-angle-right"></i>
              {{$category->jobcategories}}
            </a>
            <span class="badge badge-primary badge-pill">
              {{$category->jobs->count()}}
            </span>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <b><i class="fa fa-globe"></i> Job Locations</b>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
          @foreach($locations as $location)
          @if($location->jobposts->count() > 0)
          <li class="d-flex justify-content-between align-items-center">
            <a href="{{url('job-location',[$location->name])}}" class="nav-link" style="color:#0B0B3B;">
              <i class="fas fa-angle-right"></i>
              {{$location->name}}
            </a>
            <span class="badge badge-primary badge-pill">
              {{$location->jobposts->count()}}
            </span>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <b><i class="fa fa-check"></i> Job Industry</b>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       <ul>
         @foreach($industries as $industry)
         @php $ind = str_slug($industry->name, '-'); @endphp
         @if($industry->jobposts->count() > 0)
         <li class="d-flex justify-content-between align-items-center">
          <a href="{{url('job-industry',[$ind])}}" class="nav-link" style="color:#0B0B3B;">
            <i class="fas fa-angle-right"></i>
            {{$industry->name}}
          </a>
          <span class="badge badge-primary badge-pill">
            {{$industry->jobposts->count()}}
          </span>
        </li>
        @endif
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header" id="jobtype">
    <h5 class="mb-0">
      <button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#jobtype" aria-expanded="false" aria-controls="collapseThree">
        <b><i class="fa fa-check"></i> Job Type</b>
      </button>
    </h5>
  </div>
  <div id="jobtype" class="collapse" aria-labelledby="jobtype" data-parent="#accordionExample">
    <div class="card-body">
     <ul>
       <li class="d-flex justify-content-between align-items-center">
        <a href="{{route('government-jobs')}}" class="nav-link" style="color:#0B0B3B;">
          <i class="fas fa-angle-right"></i>
          Government Jobs
        </a>
      </li>
      <li class="d-flex justify-content-between align-items-center">
        <a href="{{route('private-jobs')}}" class="nav-link" style="color:#0B0B3B;">
          <i class="fas fa-angle-right"></i>
          Private Company Jobs
        </a>
      </li>
      <li class="d-flex justify-content-between align-items-center">
        <a href="{{route('un-jobs')}}" class="nav-link" style="color:#0B0B3B;">
          <i class="fas fa-angle-right"></i>
          UN Jobs
        </a>
      </li>
      <li class="d-flex justify-content-between align-items-center">
        <a href="{{route('humanitarian-jobs')}}" class="nav-link" style="color:#0B0B3B;">
          <i class="fas fa-angle-right"></i>
          Humanitarian and NGO Jobs
        </a>
      </li>
      <li class="d-flex justify-content-between align-items-center">
        <a href="{{route('consultancies')}}" class="nav-link" style="color:#0B0B3B;">
          <i class="fas fa-angle-right"></i>
          Consultancies
        </a>
      </li>
    </ul>
  </div>
</div>
</div>

<div class="card">
  <div class="card-header" id="headingThree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" style="color:#0B0B3B;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
        <b><i class="fa fa-list"></i> Order by</b>
      </button>
    </h5>
  </div>
  <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">
      <ul>
        <li>Default</li>
        <li>Latest</li>
        <li>Most Popular</li>
      </ul>
    </div>
  </div>
  <div>
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
