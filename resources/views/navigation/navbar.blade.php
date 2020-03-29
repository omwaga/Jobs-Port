<nav class="navbar navbar-icon-top navbar-expand-md navbar-laravel navbar-dark fixed-top shadow-lg" style="background-color: #ffffff">
        <a class="navbar-brand" href="{{route('homee')}}">
           <img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;">
        </a>
        <button class="navbar-toggler" style="background-color:#000" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
              @guest
              <li class="nav-item active">
              <a class="nav-link text-secondary" href="/">
                <i class="fa fa-home text-secondary">
                </i>
                Home
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('alljobs')}}">
                <i class="fa fa-search text-secondary">
                </i>
                Job Search
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('resumesamples')}}">
                <i class="fa fa-check text-secondary">
                </i>
                Resume Builder
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="#">
                <i class="fa fa-graduation-cap text-secondary">
                </i>
                Career Hub
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('fromblog')}}">
                <i class="fa fa-sticky-note text-secondary">
                </i>
                Career Insights
              </a>
            </li>
            @else
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('alljobs')}}">
                <i class="fa fa-search text-secondary">
                </i>
                Find a Job
              </a>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('resumesamples')}}">
                <i class="fa fa-check text-secondary">
                </i>
                Resume Builder
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('recommended')}}">
                <i class="fa fa-superpowers text-secondary">
                </i>
                Recommended Jobs
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('savedjobs')}}">
                <i class="fa fa-heart text-secondary">
                </i>
                Saved Jobs
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{url('/jobapplications')}}">
                <i class="fa fa-rocket text-secondary">
                </i>
                Job Applications
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="#">
                <i class="fa fa-graduation-cap text-secondary">
                </i>
                Career Advice
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-secondary" href="{{route('career-profile')}}">
                <i class="fa fa-road text-secondary">
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
        <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i style="font-size:2.5em;" class="fa fa-user text-danger">
                </i>
          {{ Auth::user()->name }} <span class="caret">
        </a>
        <div class="dropdown-menu" style="background: #90959e;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-suitcase"></i> Products and Billing</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div> 
        </li>
          </ul>
                        
                        @endguest
                                   
          
        </div>
      </nav>



