@extends('layouts.admin.master')
@section('content')
        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Enrolled Candidates</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li>
                            <a href="/blogcategories">Work Readiness Program</a>
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
                       <h2 class="header-title">Enrolled Candidates</h2>
                       </div>
                       <div class="col-md-6">

                    </div>
                    </div>
                             @include('errors')
                             @include('success')
                       @if($candidates->count() > 0)
                       <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <h2 class="header-title">All Candidates</h2>
                            <div class="table-responsive">
                             <table id="example" class="display table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $column=0 @endphp
                                        @foreach($candidates as $candidate)
                                        @php $column = $column+1; @endphp
                                        <tr>
                                            <td>{{$column}}</td>
                                            <td>{{$candidate->full_name}}</td>
                                            <td>{{$candidate->phone_number}}</td>
                                            <td>{{$candidate->email}}</td>
                                            <td>{{$candidate->country}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   </table>  
                            </div>
                       </div>
                   </div>
               </div>
               <!--End row-->
                       @else
                         <p>No candidated enrolled.</p>
                        @endif
                       </div>
                    </div>
                </div>
                 <!-- end row --> 
 
            </div>
      <!-- End Wrapper-->
@endsection