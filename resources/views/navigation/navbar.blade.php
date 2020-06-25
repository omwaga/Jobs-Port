<nav class="navbar navbar-icon-top navbar-expand-md navbar-laravel navbar-dark fixed-top shadow-lg" style="background-color: #005691">
  @guest
  <a class="navbar-brand" href="{{route('homee')}}">
   <img src="{{asset('Images/logo/logo.png')}}" alt="" style="height:80px; width: 250px;">
 </a>
 @else
 <a class="navbar-brand" href="{{route('jobseekeraccount')}}">
   <img src="{{asset('Images/logo/logo.png')}}" alt="" style="height:80px; width: 250px;">
 </a>
 @endguest
 <button class="navbar-toggler" style="background-color:#000" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto ">
    @guest
    <li class="nav-item active pl-2">
      <a class="nav-link text-white" href="/">
        <i class="fa fa-home text-white">
        </i>
        Home
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="{{route('alljobs')}}">
        <i class="fa fa-search text-white">
        </i>
        Job Search
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="{{route('pros')}}">
        <i class="fa fa-search text-white">
        </i>
        Pros4Hire
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="{{route('resumesamples')}}">
        <i class="fa fa-check text-white">
        </i>
        Resume Builder
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="{{route('workprogram')}}">
        <i class="fa fa-graduation-cap text-white">
        </i>
        Work Readiness Program
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="#">
        <i class="fa fa-sticky-note text-white">
        </i>
        Career Insights
      </a>
    </li>
    @else 
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{route('alljobs')}}">
        <i class="fa fa-search text-white">
        </i>
        Find a Job
      </a>
    </li>
    <li class="nav-item active  pl-2">
      <a class="nav-link text-white" href="{{route('pros')}}">
        <i class="fa fa-search text-white">
        </i>
        Pros4Hire
      </a>
    </li>    
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{route('resumesamples')}}">
        <i class="fa fa-check text-white">
        </i>
        Resume Builder
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{route('recommended')}}">
        <i class="fa fa-superpowers text-white">
        </i>
        Recommended Jobs
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{route('savedjobs')}}">
        <i class="fa fa-heart text-white">
        </i>
        Saved Jobs
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{url('/jobapplications')}}">
        <i class="fa fa-rocket text-white">
        </i>
        Job Applications
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-white" href="#">
        <i class="fa fa-graduation-cap text-white">
        </i>
        Career Insights
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-white" href="{{route('profile-wizard')}}">
        <i class="fa fa-road text-white">
        </i>
        Career Profile
      </a>
    </li>
    @endguest
  </ul>
  <!-- Authentication Links -->
  @guest
  <ul class="navbar-nav ml-auto ">
    <li class="nav-item">
      <a class="btn btn-secondary text-white" href="{{ route('login') }}" style="border-radius:0px;"><i class="fa fa-user"></i> Jobseeker</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item" style="padding-left:1em;">
      <a class="btn btn-danger text-white" href="{{route('foremployer')}}" style="border-radius:0px;" type="button"  aria-expanded="false">
        <i class="fa fa-users"></i> For Employer
      </a>
    </li>
  </ul>
  @endif
  @else

  <ul class="navbar-nav ml-auto ">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout<i style="font-size:2.5em;" class="fa fa-sign-out text-danger"></i>
    </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>
</ul>

@endguest


</div>
</nav>



