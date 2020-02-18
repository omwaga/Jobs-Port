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
                    </div>
                             @include('errors')
                             @include('success')
                         <form class="js-validation-bootstrap form-horizontal" action="/blogarticles/{{$blogarticle->id}}" method="POST">
                         <form class="js-validation-bootstrap form-horizontal" action="/blogarticles/{{$blogarticle->id}}" method="POST">
                             @method('PATCH')
                             @csrf
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Title: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-username" name="title" value="{{$blogarticle->title}}" placeholder="Enter Category Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-skill">Category: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <select class="form-control ckeditor" id="val-skill" name="category_id">
                                <option value="{{$blogarticle->category_id}}">{{$blogarticle->category->name}}</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="14" placeholder="Category Description">{{$blogarticle->description}}</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                              <button class="btn  btn-primary" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                       </div>
                    </div>
                </div>
                 <!-- end row --> 
 
            </div>
      <!-- End Wrapper-->
@endsection