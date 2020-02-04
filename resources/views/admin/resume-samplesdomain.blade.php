@extends('layouts.admin.master')
@section('content')

        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Resume Samples Domain</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                            Resume Samples Domain
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
                  <!--Start row-->
                    <div class="row">
                       <div class="col-md-12">
                       
                        
                       <div class="row">
                            @if($domains->count() > 0)
                            
                             <div class="col-md-12">
                <div class="white-box">
                  <div class="row"> 
                           <div class="col-md-6">
                       <h2 class="header-title">Resume Domains</h2>
                       </div>
                       <div class="col-md-6">
                    <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Category</button>
                    </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Domain Name</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php $column = 0 @endphp
                                    @foreach($domains as $domain)
                                    @php $column = $column + 1 @endphp
                                  <tr>
                                    <td>{{$column}}</td>
                                    <td>{{$domain->name}}</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                    </div> 
                </div>
               </div>
                            
                            @else
                        <div class="col-md-3">
                          <!--<a href="inbox.html" class="btn btn-primary outline-btn btn-block m-b-10">Back to Inbox</a>-->
                          <!--  <ul class="list-unstyled mailbox-nav">-->
                          <!--      <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success">4</span></a></li>-->
                          <!--      <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>-->
                          <!--      <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>-->
                          <!--      <li><a href="#"><i class="fa fa-exclamation-circle"></i>Spam</a></li>-->
                          <!--      <li><a href="#"><i class="fa fa-trash"></i>Trash</a></li>-->
                          <!--  </ul>-->
                        </div>
                        <div class="col-md-9">
                          <div class="white-box">
                            <div class="mailbox-content">
                             <div class="mailbox-header">
                            </div>
                            
                                <div class="compose-body">
                                    @include('errors')
                                    @include('success')
                                    <form class="row" method="post" action="/resumedomains">
                                        @csrf
                                        <div class="form-group">
                                            <label for="to" class="col-md-4 control-label">Domain Name:</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" id="to">
                                            </div>
                                        </div>
                                        
                                <div class="compose-options">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
                                    </div>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                          </div>
                     @endif
                       </div>
                      </div>
                    </div>
                    <!--End row-->
                
			   
			    </div>
        <!-- End Wrapper-->
         
      <!-- Large Modal -->
            <div  id="modal-large" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
            
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Category</h4>
                  </div>
                  <div class="modal-body">
                      <form class="row" method="post" action="/resumedomains">
                                        @csrf
                                        <div class="form-group">
                                            <label for="to" class="col-md-4 control-label">Domain Name:</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" id="to">
                                            </div>
                                        </div>
                                        
                                <div class="compose-options">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
                                    </div>
                                </div>
                                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
            
              </div>
            </div>
             <!-- END Large Modal -->
@endsection
