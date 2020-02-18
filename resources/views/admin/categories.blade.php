@extends('layouts.admin.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Industries</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="/admin-dashboard">Dashboard</a>
                    </li>
                    <li class="active">
                        Industries
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
                  
               <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="row">
                           
                         <div class="col-md-6">
                             <div class="white-box">
                             <h2 class="header-title">All Categories</h2>
                                <ol>
                                  @foreach($categories as $category)
                                  <li>{{$category->jobcategories}}</li>
                                  @endforeach
                                </ol>
                             </div>
                         </div> <!--/.col-md-4-->


                         <div class="col-md-6">
                             <div class="white-box">
                             <h2 class="header-title">Add Category</h2>
                                <!-- <div class="compose-body"> -->
                                    @include('errors')
                                    @include('success')
                                    <form class="row" method="post" action="">
                                        @csrf
                                        <div class="form-group">
                                            <label for="to" class="col-md-4 control-label">Category Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" class="form-control" id="to">
                                            </div>
                                        </div>
                                        
                                <div class="compose-options">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
                                    </div>
                                </div>
                                    </form>
                                <!-- </div> -->
                             </div>
                         </div> <!--/.col-md-4-->
                       </div>
                   </div>
               </div>
               <!--End row-->   
                  
       </div>
        <!-- End Wrapper-->

@endsection