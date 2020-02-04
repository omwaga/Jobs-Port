@extends('layouts.admin.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Admin Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           

                  <!--Start row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="row">
                          <div class="col-md-3">
                        <div class="dash-box">
                          <div class="dash-icon bg-primary"> <i class="fa fa-magic"></i> </div>
                          <div class="dash-info">
                              <h4>{{$applications->count()}}</h4>
                              <p>Received Applications</p>
                          </div>
                        </div> 
                      </div> <!-- /analytics-box-->
 
 
                         <div class="col-md-3">
                        <div class="dash-box">
                          <div class="dash-icon bg-success"> <i class="fa fa-shopping-cart"></i> </div>
                          <div class="dash-info">
                              <h4>{{$users->count()}}</h4>
                              <p>Total Registered Users</p>
                          </div>
                        </div> 
                      </div> <!-- /analytics-box-->
 
                        
                          <div class="col-md-3">
                        <div class="dash-box">
                          <div class="dash-icon bg-warning"> <i class="fa fa-comments"></i> </div>
                          <div class="dash-info">
                              <h4>{{$employers->count()}}</h4>
                              <p>Total Registered Employers</p>
                          </div>
                        </div> 
                      </div> <!-- /analytics-box-->
                        
                        
                          <div class="col-md-3">
                        <div class="dash-box">
                          <div class="dash-icon bg-info"> <i class="fa fa-dollar"></i> </div>
                          <div class="dash-info">
                              <h4>{{$jobs->count()}}</h4>
                              <p>Total Jobs Posted</p>
                          </div>
                        </div> 
                      </div> <!-- /analytics-box-->
                          
                         </div>                       
                      </div>
                  </div>
                  <!--End row-->
                  
           
           
                 <!--Start row-->
                 <!--<div class="row">-->
                 <!--    <div class="col-md-12">-->
                 <!--        <div class="white-box">-->
                 <!--             <h2 class="header-title">Sales Statics</h2>-->
                            <!--Start chart-->
                 <!--             <div class="col-md-9"> -->
                 <!--             <canvas id="sharpLinechart" height="90"></canvas>-->
                 <!--             </div>-->
                            <!--End chart-->  
                            
                 <!--           <div class="col-md-3">-->
                 <!--                   <div class="progress-main">-->
                 <!--                       <span class="progress-text">Total orders in period</span>-->
                 <!--                       <span class="progress-stats">48%</span>-->
                 <!--                       <div class="progress progress-sm">-->
                 <!--                           <div style="width: 48%;" class="progress-bar"></div>-->
                 <!--                       </div>-->
                 <!--                   </div>-->
                                    
                 <!--                   <div class="progress-main">-->
                 <!--                       <span class="progress-text">Orders in last month</span>-->
                 <!--                       <span class="progress-stats">60%</span>-->
                 <!--                       <div class="progress progress-sm">-->
                 <!--                           <div style="width: 60%;" class="progress-bar progress-bar-success"></div>-->
                 <!--                       </div>-->
                 <!--                   </div>-->
                                    
                 <!--                   <div class="progress-main">-->
                 <!--                       <span class="progress-text">Monthly income</span>-->
                 <!--                       <span  class="progress-stats">22%</span>-->
                 <!--                       <div class="progress progress-sm">-->
                 <!--                           <div style="width: 22%;" class="progress-bar progress-bar-danger"></div>-->
                 <!--                       </div>-->
                 <!--                   </div>-->
                                   
                 <!--               </div>-->
                            
                 <!--        </div>-->
                 <!--    </div>-->
                 <!--</div>-->
                 <!--End row-->
           
                  
              <!--Start row-->
              <div class="row">
             <!-- Start Feeds-->
              <div class="col-md-4">
                  <div class="white-box feeds">
                      <h2 class="header-title">Feeds</h2>
                      
                      <div class="feeds-box">
                          <div  class="feeds-icon  bg-primary"> <i class="fa fa-edit"></i>   </div>
                          <div class="feeds-info">
                              <h5>You have 4 pending tasks. </h5>
                              <span>Just Now</span>
                          </div>
                      </div><!-- /feed-box-->
                      
                      <div class="feeds-box">
                          <div  class="feeds-icon bg-danger"> <i class="fa fa-edit"></i>   </div>
                          <div class="feeds-info">
                              <h5>Server #1 overloaded.</h5>
                              <span>Just Now</span>
                          </div>
                      </div><!-- /feed-box-->
                      
                      <div class="feeds-box">
                          <div  class="feeds-icon bg-warning"> <i class="fa fa-edit"></i>   </div>
                          <div class="feeds-info">
                              <h5>New user registered. </h5>
                              <span>Just Now</span>
                          </div>
                      </div><!-- /feed-box-->

                      <div class="feeds-box">
                          <div  class="feeds-icon bg-info"> <i class="fa fa-edit"></i>   </div>
                          <div class="feeds-info">
                              <h5>New user registered. </h5>
                              <span>Just Now</span>
                          </div>
                      </div><!-- /feed-box-->
                      
                      <div class="feeds-box">
                          <div  class="feeds-icon bg-success"> <i class="fa fa-edit"></i>   </div>
                          <div class="feeds-info">
                              <h5>New Version just arrived. </h5>
                              <span>Just Now</span>
                          </div>
                      </div><!-- /feed-box-->
                                            
                                            
                  </div>
              </div>     
             <!-- End Feeds-->   
             
             
             <!-- Start To Do List-->   
             <div class="col-md-4">
                 <div class=" white-box">
                     <h2 class="header-title">To Do List </h2>
                      <ul class="todo-list list-task ">
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist">
                              <label for="todolist">Schedule meeting </label>
                            </div>  
                        </li>
                        
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist2">
                              <label for="todolist2"> Give Purchase report</label>
                            </div>  
                        </li>
                        
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist3">
                              <label for="todolist3">Book flight for holiday</label>
                            </div>  
                        </li>
  
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist4">
                              <label for="todolist4"> Forward all tasks</label>
                            </div>  
                        </li>
  
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist5">
                              <label for="todolist5"> Recieve shipment </label>
                            </div>  
                        </li>
  
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist6">
                              <label for="todolist6"> Important tasks </label>
                            </div>  
                        </li>
                        
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist7">
                              <label for="todolist7"> Give Purchase report</label>
                            </div>  
                        </li>
                        
                         <li>
                            <div class="checkbox checkbox-primary">
                              <input type="checkbox"  id="todolist8">
                              <label for="todolist8">Book flight for holiday</label>
                            </div>  
                        </li>
                      </ul>                      
                 </div>
             </div>      
            <!-- End To Do List-->   
            
              <!-- Start Browsers Stats -->        
             <div class="col-md-4">
                 <div class="white-box">
                     <h2 class=" header-title">Browsers Stats </h2>
                     
                     <ul class="Browser_stats">
                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/chrome.png">Google Crome</span>
                           <span class="broser-stats">32%</span>
                         </li>
                         
                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/firefox.png">Firefox</span>
                           <span class="broser-stats">42%</span>
                         </li>

                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/safari.png">Google Crome</span>
                           <span class="broser-stats">32%</span>
                         </li>

                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/opera.png">Google Crome</span>
                           <span class="broser-stats">32%</span>
                         </li>

                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/Ie.png">Google Crome</span>
                           <span class="broser-stats">32%</span>
                         </li>

                        <li>
                           <span  class="browser-info"><img alt="google" src="assets/images/mobile.png">Google Crome</span>
                           <span class="broser-stats">32%</span>
                         </li>
                         
                     </ul>
                     
                 </div>
             </div>
            <!-- Start Browsers Stats --> 
               
          </div>
          <!--End row-->
        </div>
        <!-- End Wrapper-->
        @endsection