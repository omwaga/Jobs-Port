@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Resume Templates</h4>
                    <h4 class="page-title">Job Applications</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                            Resume Templates
                            Job Applications
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
                                <a href="" class="btn btn-primary btn-sm btn-block m-t-10">Edit</a>
                                <a href="{{route('cvupload.destroy', ['id' => $resume->id])}}" class="btn btn-danger btn-sm btn-block m-t-10">Delete</a>
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
                  <h2 class="header-title"> All Job Applications </h2>
                    <div class="container mt-40 mb-30">
            <h3 class="text-center">Hover Effect Style : Demo - 21</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">willimson</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-2.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo95/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h4 class="title">Kristiana</h4>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis augue in odio suscipit, at.</p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
                </div>
               </div>
              <!-- End row-->
			   
			    </div>
 @endsection