
@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url({{asset('Images/cv2.jpg')}})" style=" padding-top: 5rem;">
  <div class="container">
              <form method="get" action="{{route('homesearch')}}">
                @csrf
             <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
               <select name="industry" class="form-control search-slt">
                  <option>Job functions</option>
                  @foreach($industries as $industry)
                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                  @endforeach
              </select>

          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select name="function" class="form-control search-slt">
                  <option>Select category</option>
                  @foreach($categories as $jobt)
                   <option value="{{$jobt->id}}">{{$jobt->jobcategories}}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                          <select name="country" class="form-control search-slt">
                       <option value="">Select Country</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
              </select> 
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                          <select name="state" class="form-control search-slt">
                       <option>State/Region</option>
              </select> 
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 p-0">
             <button type="submit" class="btn btn-danger wrn-btn">Search</button>
          </div>
          </div>
          </form>
    </div>
  </div>
<div class="container">
     <div class="row">
         <div class="col-md-8">
          @foreach($jobs as $job)
                 <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
        @php $jobtitle = str_slug($job->jobtitle, '-'); @endphp
    <h5 style="color:#0B0B3B;"><a href="/jobview/{{$job->id}}/{{$jobtitle}}">{{$job->jobtitle}}</a></h5>
    
    </div>
                  <p>Posted By: <a href="" class="text-primary">company</a></p>
                        <div class="row">
                 <p class="text-secondary">{{$job->jobtype}} | Salary: {{$job->salary}}</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                    {!! str_limit($job->summary, $limit = 300, $end = '...') !!}<a class="btn btn-danger pull-right" href="/jobview/{{$job->id}}">Apply</a>
                </p>
                </div>
     </div>
       </div> 
  </div>
     @endforeach
          
          {{$jobs->links()}}
             </div>
                      <div class="col-md-4">
                           @include('new.rightnav')    
         </div>
     </div>

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
