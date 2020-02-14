<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('Images/logo/log.png')}}" type="image/png">
  <title>The NetworkedPros - NetworkedPros</title>

    <link href="{{asset('assets/plugins/morris-chart/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('#description').ckeditor();
    </script>

</head>

<body class="sticky-header">


    <!--Start left side Menu-->
    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="/admin-dashboard"><img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;"></a>
        </div>

        <div class="logo-icon text-center">
            <a href="/admin-dashboard"><img src="{{asset('Images/logo/log.png')}}" alt="" style="width:320px;"></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="nav-active"><a href="/admin-dashboard"><i class="icon-home"></i> <span>Dashboard</span></a>
                    <!--<ul class="sub-menu-list">-->
                        <!--<li class="active"><a href="dashboard2.html"> Dashboard 2</a></li>-->
                    <!--</ul>-->
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>Employers</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('adminemployers')}}"> All Employers</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Jobseekers</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('adminjobseekers')}}"> All Jobseekers</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-loop"></i> <span>Job Vacancies</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('adminvacancies')}}">All Vacancies</a></li>
                    </ul>
                    <ul class="sub-menu-list">
                      <li><a href="{{route('admin-industry')}}">Industries</a></li>
                    </ul>
                    <ul class="sub-menu-list">
                      <li><a href="{{route('admin-category')}}">Categories</a></li>
                    </ul>
                </li>
                
                
                <li class="menu-list"><a href="#"><i class="icon-film"></i> <span>Job Applications</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{route('adminapplications')}}"> All Applications</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-note"></i> <span>Blog</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/blogcategories"> Categories</a></li>
                        <li><a href="/blogarticles"> Articles</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-folder"></i> <span>Resume Services</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/resumedomains"> Samples Domain</a></li>
                        <li><a href="/resumesamples"> Samples</a></li>
                        <li><a href="{{route('resume')}}">Resumes</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href=""> Inbox</a></li>
                        <li><a href=""> Compose Mail</a></li>
                        <li><a href=""> View Mail</a></li>
                    </ul>
                </li>
            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <!--End left side menu-->
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <a class="toggle-btn"><i class="fa fa-bars"></i></a>

            <form class="searchform">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list">
                            <li class="notification-scroll-list notification-list ">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa  fa-shopping-cart noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed.</h5>
                                        <p class="m-0">
                                            <small>29 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-check noti-success"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Databse backup is complete</h5>
                                        <p class="m-0">
                                            <small>12 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-info"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                             <small>17 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-danger"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Database error.</h5>
                                        <p class="m-0">
                                             <small>11 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                             <small>18 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                             </li>
                             <li class="last"> <a href="#">View all notifications</a> </li>
							</ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                         <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
						 <li class="message-list message-scroll-list">
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-8.jpg" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">15 minutes ago</span>
                          </a>
						</li>
						<li class="last"> <a  href="#">All Messages</a> </li>
					</ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/users/avatar-6.jpg" alt="" />
                            {{auth()->user()->name}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="#"> <i class="fa fa-wrench"></i> Settings </a> </li>
                          <li> <a href="#"> <i class="fa fa-user"></i> Profile </a> </li>
                          <li> <a href="#"> <i class="fa fa-info"></i> Help </a> </li>
                          <li> <a href="{{route('logout')}}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"> <i class="fa fa-lock"></i> Logout </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                    @csrf
                                    </form>
                          </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

@yield('content')


        <!--Start  Footer -->
        <footer class="footer-main"> <script>document.write(new Date().getFullYear())</script> &copy; The NetworkedPros.	</footer>	
         <!--End footer -->

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script  src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    <!-- End core plugin -->
    
    <!--Begin Page Level Plugin-->
	<script src="{{asset('assets/plugins/morris-chart/morris.js')}}"></script>
    <script src="{{asset('assets/plugins/morris-chart/raphael-min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('assets/pages/dashboard2.js')}}"></script>
    <script src="{{asset('assets/plugins/chart-js/Chart.js')}}"></script>
	<script src="{{asset('assets/plugins/summernote-master/summernote.min.js')}}"></script>
    <script src="{{asset('assets/pages/compose.js')}}"></script>
    
    
 </body>

</html>
