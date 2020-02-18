@extends('layouts.admin.master')
@section('content')

        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">{{$sample->name}}</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li>
                            Resume Samples
                        </li>
                        <li class="active">
                            {{$sample->name}}
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
                                    <form class="row" method="post" action="/resumesamples/{{$sample->id}}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val-skill">Resume Domain </label>
                            <div class="col-md-9">
                              <select class="form-control" id="val-skill" name="domain_id">
                                <option value="{{$sample->domain_id}}">{{$sample->domain->name}}</option>
                                @foreach($resume_domains as $domain)
                                <option value="{{$domain->id}}">{{$domain->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                                        <div class="form-group">
                                            <label for="to" class="col-md-4 control-label">Sample Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$sample->name}}" name="name" class="form-control" id="to">
                                            </div>
                                        </div>
                                        
                                <div class="compose-options">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Update</button>
                                    </div>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                          </div>
                       </div>
                      </div>
                    </div>
                    <!--End row-->
                
			   
			    </div>
        <!-- End Wrapper-->
@endsection
