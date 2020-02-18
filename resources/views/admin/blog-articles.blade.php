@extends('layouts.admin.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Blog Articles</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a href="/blogarticles">Blog Articles</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <div class="row"> 
                           <div class="col-md-6">
                       <h2 class="header-title">Blog Articles</h2>
                       </div>
                       <div class="col-md-6">
                    <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Article</button>
                    </div>
                    </div>
                             @include('errors')
                             @include('success')
                       @if($articles->count() > 0)
                       <!--Start row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="row">
                         @foreach($articles as $article)
                         <div class="col-md-12">
                             <div class="user-box">
                                 <div class="user-img">
                                     <img src="assets/images/users/avatar-1.jpg"  alt=""/>
                                 </div>
                                 <div class="user-info">
                                    <h4><a href="/blogarticles/{{$article->id}}/edit">{{$article->title}}</a></h4>
                                    <p><strong>Category:</strong>  {{$article->category->name}}</p>
                                    <span><strong>Posted By:</strong>  {{auth()->user()->name}}</span>
                                 </div>
                             </div>
                         </div> 
                         @endforeach
                      </div>
                  </div>
              </div>
              <!--End row-->
                       @else
                         <form class="js-validation-bootstrap form-horizontal" action="/blogarticles" method="post">
                             @csrf
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Title: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-username" name="title" value="{{old('title')}}" placeholder="Enter Category Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-skill">Category: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <select class="form-control" id="val-skill" name="category_id">
                                <option value="">Please select</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="14" placeholder="Category Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                              <button class="btn  btn-primary" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                        @endif
                       </div>
                    </div>
                </div>
                 <!-- end row --> 
 
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
                      <form class="js-validation-bootstrap form-horizontal" action="/blogarticles" method="post">
                             @csrf
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Title: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-username" name="title" value="{{old('title')}}" placeholder="Enter Category Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-skill">Category: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <select class="form-control" id="val-skill" name="category_id">
                                <option value="">Please select</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="14" placeholder="Category Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                              <button class="btn  btn-primary" type="submit">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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