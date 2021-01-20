<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
    <!-- <a class="navbar-brand" href="/">The NetworkedPros</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar-right-top">
        <li class="nav-item">
          <div id="custom-search" class="top-search-bar">
            <input class="form-control" type="text" placeholder="Search..">
          </div>
        </li>
        <li class="nav-item dropdown notification">
          <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
          <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
            <li>
              <div class="notification-title"> Notifications</div>
              <div class="notification-list">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active">
                    <div class="notification-info">
                      <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                      <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>applied to the software developer position.
                        <div class="notification-date">2 min ago</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="list-footer"> <a href="#">View all notifications</a></div>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown connection">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
          <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
            <li class="connection-list">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                  <a href="{{route('emppostjob')}}" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>New JD</span></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                  <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>New Vacancy</span></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                  <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Interview</span></a>
                </div>
              </div>
            </li>
            <li>
              <div class="conntection-footer">Quick Actions</div>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown nav-user">
          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('storage/logos/'.auth::user()->logo)}}" alt="" class="user-avatar-md rounded-circle"></a>
          <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
            <div class="nav-user-info">
              <h5 class="mb-0 text-white nav-user-name">{{auth::user()->company_name}}</h5>
              <span class="status"></span><span class="ml-2">Available</span>
            </div>
            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off mr-2"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-primary">
  <div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="d-xl-none d-lg-none" href="{{route('jobseekeraccount')}}">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
          <li>
            <!--logo-->
            <div class="logo">
              <a href="{{route('jobseekeraccount')}}"><img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;"></a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="{{route('jobseekeraccount')}}"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
          </li> 
          <li class="nav-divider text-success">
           Job Vacancies
         </li>
         <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('dashboard.jobs')}}">
            <i class="fa fa-search text-white">
            </i>
            Find a Job
          </a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('recommended')}}">
            <i class="fa fa-list text-white">
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
          <a class="nav-link text-white" href="{{route('jobapplications.index')}}">
            <i class="fa fa-rocket text-white">
            </i>
            Job Applications
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('interests')}}">
            <i class="fa fa-database text-white">
            </i>
            Career Interests
          </a>
        </li>

        <li class="nav-divider text-success">
          Quick Hire
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('profile-wizard')}}">
            <i class="fa fa-road text-white">
            </i>
            Career Profile
          </a>
        </li>

        <li class="nav-divider text-success">
          Resources
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('resumeTemplates')}}">
            <i class="fa fa-road text-white">
            </i>
            Resume Builder
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('workReady')}}">
            <i class="fa fa-road text-white">
            </i>
            Work Readiness Program
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="/blog">
            <i class="fa fa-road text-white">
            </i>
            Career Insights
          </a>
        </li>                     
        </ul>
      </div>
    </nav>
  </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
        <!-- ============================================================== -->