
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <title>Meter - Responsive Admin Dashboard Template</title>

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/plugins/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    
    <!-- main content start-->
    <div class="" >
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">x-ditable</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Form</a>
                        </li>
                        <li class="active">
                       x-ditable
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!--Start row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h2 class="header-title">Popup editor </h2>
                             <table id="user" class="table table-bordered table-striped">
                              <tbody>
                                <tr>
                                  <td width="35%">Simple text field</td>
                                  <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">superuser</a></td>
                                </tr>
                                <tr>
                                  <td>Empty text field, required</td>
                                  <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                </tr>
                                <tr>
                                  <td>Select, local array, custom display</td>
                                  <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a></td>
                                </tr>
                                <tr>
                                  <td>Select, remote array, no buttons</td>
                                  <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" class="editable editable-click" data-original-title="" title="" style="">Customer</a></td>
                                </tr>
                                <tr>
                                  <td>Select, error while loading</td>
                                  <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a></td>
                                </tr>
                                <tr>
                                  <td>Combodate (date)</td>
                                  <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                                </tr>
                                <tr>
                                  <td>Combodate (datetime)</td>
                                  <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                                </tr>
                                <tr>
                                  <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                  <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome user!</a></td>
                                </tr>
                              </tbody>
                            </table>
                            
                        </div>
                    </div>    
                 </div>
               <!-- end row --> 
               
               
               <!--Start row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h2 class="header-title">Inline editor </h2>
                             <table id="user" class="table table-bordered table-striped" style="clear: both">
                                  <tbody>
                                    <tr>
                                      <td width="35%">Simple text field</td>
                                      <td width="65%"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" style="display: inline;">superuser</a></td>
                                    </tr>
                                    <tr>
                                      <td>Empty text field, required</td>
                                      <td><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                                    </tr>
                                    <tr>
                                      <td>Select, local array, custom display</td>
                                      <td><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a></td>
                                    </tr>
                                    <tr>
                                      <td>Select, remote array, no buttons</td>
                                      <td><a href="#" id="inline-group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" class="editable editable-click">Admin</a></td>
                                    </tr>
                                    <tr>
                                      <td>Select, error while loading</td>
                                      <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a></td>
                                    </tr>
                                    
                                    <tr>
                                      <td>Combodate (date)</td>
                                      <td><a href="#" id="inline-dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                                    </tr>
                                    <tr>
                                      <td>Combodate (datetime)</td>
                                      <td><a href="#" id="inline-event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                                    </tr>
                                    <tr>
                                      <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                                      <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome user!</a></td>
                                    </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                    </div>    
                 </div>
               <!-- end row --> 
 
            </div>
      <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2017 &copy; Meter admin Template.  </footer> 
         <!--End footer -->

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script  src="assets/js/jquery.slimscroll.js "></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- End core plugin -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="assets/plugins//bootstrap-editable/js/bootstrap-editable.min.js"></script>
    <script src="assets/pages/bootstrap-editable-custom.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->


</body>

</html>
