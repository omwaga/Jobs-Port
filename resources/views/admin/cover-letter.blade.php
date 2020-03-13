@extends('layouts.admin.master')
@section('content')
<!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Cover Letter Templates</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="active">
                            Cover Letter Templates
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
              <!-- Start row--> 
               <div class="col-md-12">
                <div class="white-box">
                    @if($cover_letters->count() > 0)
                    <div class="row">
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-large" type="button">New Template</button>
                    </div>
                    @include('success')
                     @include('errors')
                    @foreach($cover_letters as $cover_letter)
                    <div class="col-md-4">
                          <div class="card-profile">
                             <img src="{{ asset('storage/'.$cover_letter->cover_letter)}}" style="width: 100%; height: 100%;"></img>
                             <div class="" align="center">
                                 <h4>{{$cover_letter->name}}</h4>
                                 <p>{!!$cover_letter->description!!}</p>
                                 <div class="btn-group">
                                <a href="{{ route('coverletters.edit', ['id' => $cover_letter->id]) }}" class="btn btn-primary btn-sm btn-block m-t-10">Edit</a>
                                <form method="POST" action="{{route('coverletters.destroy', ['id' => $cover_letter->id])}}">
  @method('DELETE')
  @csrf
    <div class="field">
      <div class="control">
          <button type="submit" class="btn btn-danger">Delete </button> 
        </div>
    </div>
 </form>
                                </div>
                             </div>
                          </div>
                      </div>
                      @endforeach
                    @else
                      <h2 class="header-title">Cover Letter Template Upload</h2>
                     @include('success')
                     @include('errors')
                    <form class="form-horizontal" method="POST" action="{{ route('coverletters.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Name:</label>
                            <div class="col-sm-9">
                              <input class="form-control" value="{{old('name')}}" name="name" id="inputEmail3" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">Description: <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control ckeditor" id="val-suggestions" name="description" rows="7" placeholder="Template Description">{{old('description')}}</textarea>
                            </div>
                          </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Cover Letter Template:</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="cover_letter" type="file" name="cover_letter" autofocus>
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
               @include('admin.add-coverlettermodal')
 @endsection