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
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('storage/logos/'.auth()->user()->logo)}}" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{auth()->user()->name}}</h5>
                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Account Settings</a>
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
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li>
                        <!--logo-->
                        <div class="logo">
                            <a href="{{route('employer.team')}}"><img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;"></a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#"><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                    </li>
                    <li class="nav-divider text-success">
                        Staff Recruitment
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="{{route('team.options')}}"><i class="fas fa-fw fa-database"></i>Source Candidates</a>
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="{{route('team.jobs')}}"><i class=" fas fa-align-justify"></i>Manage Jobs</a>
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="#"><i class="fas fa-address-book"></i>Job Applications Inbox</a>
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="#"><i class=" fas fa-certificate"></i>Shortlisted Candidates</a>
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="#"><i class="fas fa-plus-square"></i>Talent Pools</a>
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="#"><i class="fas fa-trash-alt"></i>Declined Applications</a>
                    </li>   

                    <li class="nav-divider text-success">
                        Quick Hire
                    </li>
                    <li class="nav-item menu-list">
                        <a class="nav-link" href="#"><i class=" fas fa-graduation-cap"></i>Quick Hire</a>
                    </li>                       
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
        <!-- ============================================================== -->