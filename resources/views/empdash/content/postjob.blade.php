@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <p class="pageheader-text">Staff Recruitmant and Staff Development</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Insights</li>
                                        </ol>
                                      <a href="{{route('picktemplate')}}" class=" btn btn-sm btn-success float-right text-white">Pick a Template</a>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
             	    <form role="form" method="post" action="{{route('postempjob')}}">
             	        @csrf
             	        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-body">
                        
                                        <div class="form-group">
                                            <label>Enter job title</label>
                                            <input class="form-control @error('jobtitle') is-invalid @enderror" type="text" name="jobtitle" value="{{ old('jobtitle') }}" required />
                                             @error('jobtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                       <div class="form-group">
                                            <label>Select Position</label>
                                            <select class="form-control" name="positiontype" required id="input-select">
                                                <option>Part-time</option>
                                                <option>Full-time</option>
                                                <option>Contract</option>
                                                <option>Internship</option>
                                            </select>
                                        </div>
                                             <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control" name="jfunction" required>
                                              @foreach($jobcategory as $jobc)
                                                <option value="{{$jobc->id}}">{{$jobc->jobcategories}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Expiry date</label>
                                            <input class="form-control"  type="date" name="expiry" required />
                             
                                        </div>
                            </div>
                        </div>
                            </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                      
                        <div class="panel-body">
                          <div class="form-group">
                                        <label>Select Industry</label>
                                            <select class="form-control" name="industry" required>
                                               @foreach ($industry as $indust)
                                                <option value="{{$indust->id}}">{{$indust->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                             <div class="form-group">
                                            <label>Select Town</label>
                                            <select class="form-control" name="jlocation" required>
                                            	@foreach ($towns as $town)
                                            	<option value="{{$town->id}}">{{$town->name}}</option>
                                            	@endforeach
                                            </select>
                                        </div>
                                <div class="form-group">
                                            <label>Salary Specification</label>
                                            <input class="form-control @error('salary') is-invalid @enderror"  type="text" name="salary" required />
                                            @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                                        </div>
                                         <div class="form-group">
                                             <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                                                        required autofocus name="emaill" value="<?php echo Auth::guard('employer')->user()->email ?>"> 
                                        </div>
                                         <div class="form-group">
                                         @foreach ($cname as $item)
                                            <input type="hidden" hidden class="form-control" id="formGroupExampleInput" placeholder=""
                                            required autofocus name="company" value="<?php echo $item->cname ?>">  
                                            @endforeach
                                        </div>
                            </div>
                        </div>
                            </div>
                            </div>
                            
                                                         <div class="col-md-12">
                             <div class="panel panel-dark">
                                        <div class="form-group">
                                            <label>Job Summary</label>
                                            <textarea class="form-control ckeditor" id="summary-ckeditor" rows="4" name="jsummary" id="summary" required></textarea>
                                        </div> 
                             </div>   
                            </div>
                            <div class="col-md-12">
                             <div class="panel panel-dark">
                                <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="form-control @error('jdescription') is-invalid @enderror ckeditor" rows="4" name="jdescription" id="descc" required></textarea>
                                            @error('jdescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div> 
                             </div>   
                            </div>
                            <div class="col-md-12">
                             <div class="panel panel-dark">
                                <div class="form-group">
                                            <label>Roles and Responsibilities</label>
                                            <textarea class="form-control @error('roles') is-invalid @enderror ckeditor" rows="4" name="roles" id="descc" required>{{old('roles')}}</textarea>
                                            @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div> 
                             </div>   
                            </div>

        <div class="col-md-12">
<div class="form-group">
                            <label>Apply with us</label>
                            <div class="checkbox">
                                <label>
                    <input type="checkbox" value="Yes" name="apply" />Check the box if you want applicants to use the portal for application purposes. we will review their CVs and shortlist successfull applicants for you.
                                                </label>
                                            </div>
                                        </div>
        </div>                 
    <div class="col-md-12">
                             <div class="panel panel-dark">
                                        <div class="form-group">
                                            <label>Application details</label>
                                            <textarea class="form-control ckeditor" name="application" rows="3" ></textarea>
                                        </div>
                             </div>   
                            </div>
        <button type="submit" class="btn btn-danger float-right btn-sm">Post your job </button>
        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                        {{session('status')}}
                            </div>
                        @endif
                               </form>
                </div>
                    </div>
                </div>
            </div>
</div>
@endsection