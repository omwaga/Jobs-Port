@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Edit Resume Template</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                           Edit Resume Template
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
              <!-- Start row--> 
               <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title">Edit Resume Template </h2>
                     @include('success')
                     @include('errors')
                    <form class="form-horizontal" method="POST" action="{{ route('cvupload.update', ['id' => $cvupload->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Name:</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="name" value="{{$cvupload->name}}" id="inputEmail3" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="7" placeholder="Template Description">{{$cvupload->description}}</textarea>
                            </div>
                          </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Resume Template:</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="resume" value="{{$cvupload->resume}}" type="file" name="resume" autofocus>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                     </form>
                    </div>
                </div>
               </div>
 @endsection