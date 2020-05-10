@extends('layouts.employer.employer')
@section('content')
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">Job template: {{$jobpost->job_title}}</h5>
												</div>
												<div class="modal-body">
                        @include('errors')
													<form role="form" method="post" action="{{route('postempjob')}}">
             	        @csrf<!--display the error messages -->
             	        <input type="hidden" id="jobid" name="id">
             	        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-body">
                        
                                        <div class="form-group">
                                            <label>Enter job title</label>
                                            <input class="form-control @error('jobtitle') is-invalid @enderror" type="text" value="{{$jobpost->job_title}}" name="jobtitle" required />
                                             @error('jobtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                               <div class="form-group">
                                            <label>Select Job Type</label>
                                            <select class="form-control" name="jobtype" required>
                                                <option>Part-time</option>
                                                <option>Full-time</option>
                                                <option>Contract</option>
                                                <option>Internship</option>
                                            </select>
                                        </div>
                                             <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control" name="category" required>
                                              @foreach($jobcategories as $category)
                                                <option value="{{$category->id}}">{{$category->jobcategories}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                <div class="form-group">
                                            <label>Salary Specification</label>
                                            <input class="form-control @error('salary') is-invalid @enderror"  type="text" name="salary" value="{{$jobpost->salary}}" required />
                                            @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
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
                                               @foreach ($industries as $industry)
                                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                          <div class="form-group">
                                            <label>Select Country:</label>
                                            <select class="form-control" name="country" required>
                                                <option>Select Country</option>
                                                @foreach ($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Town/County:</label>
                                            <select class="form-control" name="state" required>
                                                <option>Select Town/County</option>
                                                @foreach ($towns as $town)
                                                <option value="{{$town->id}}">{{$town->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Expiry date</label>
                                            <input class="form-control"  type="date" name="expirydate" required value="{{$jobpost->expirydate}}"/>
                             
                                        </div>
                            </div>
                        </div>
                            </div>
                            </div>
                                                         <div class="col-md-12">
                             <div class="panel panel-dark">
                                        <div class="form-group">
                                            <label>Job Summary</label>
                                            <textarea class="form-control ckeditor" rows="4" name="summary" required>{!!$jobpost->summary!!}</textarea>
                                        </div> 
                             </div>   
                            </div>
                            <div class="col-md-12">
                             <div class="panel panel-dark">
                                <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="form-control @error('jdescription') is-invalid @enderror ckeditor" rows="4" name="description" required>{!!$jobpost->description!!}</textarea>
                                            @error('jdescription')
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
                                            <textarea class="form-control ckeditor" name="applicationdet" rows="3" >{!!$jobpost->applicationdet!!}</textarea>
                                        </div>
                             </div>   
                            </div>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" id="addRowButton" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>Post Job</button>
        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                        {{session('status')}}
                            </div>
                        @endif
												</div>
                               </form>
                           </div>

                           <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>
									@endsection