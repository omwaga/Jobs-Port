@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Resume Templates</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                            Resume Templates
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
              <!-- Start row--> 
               <div class="col-md-12">
                <div class="white-box">
                    @if($resumes->count() > 0)
                    <div class="row">
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Template</button>
                        @include('admin.new-resumetemplate')
                    </div>
                    @include('success')
                     @include('errors')
                    @foreach($resumes as $resume)
                    <div class="col-md-4">
                          <div class="card-profile">
                             <img src="{{ asset('storage/'.$resume->resume)}}" style="width: 100%; height: 100%;"></img>
                             <div class="" align="center">
                                 <h4>{{$resume->name}}</h4>
                                 <p>{!!$resume->description!!}</p>
                                 <div class="btn-group">
                                <a href="{{ route('cvupload.edit', ['id' => $resume->id]) }}" class="btn btn-primary btn-sm btn-block m-t-10">Edit</a>
                                <form method="POST" action="{{route('cvupload.destroy', ['id' => $resume->id])}}">
  @method('DELETE')
  @csrf
    <div class="field">
      <div class="control">
          <button type="submit" class="btn btn-danger">Delete </button> 
        </div>
    </div>
 </form>
                                <!-- <a href="{{route('cvupload.destroy', ['id' => $resume->id])}}" class="btn btn-danger btn-sm btn-block m-t-10">Delete</a> -->
                                </div>
                             </div>
                          </div>
                      </div>
                      @endforeach
                    @else
                      <h2 class="header-title">Resume Template Upload</h2>
                     @include('success')
                     @include('errors')
                    <form class="form-horizontal" method="POST" action="{{ route('cvupload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Name:</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="name" id="inputEmail3" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="7" placeholder="Template Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Resume Template:</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="resume" type="file" name="resume" autofocus>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                     </form>
                     @endif
                    </div>
                </div>
               </div>
 @endsection