
@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem;">
     <div class="row">
         <div class="col-md-8">
                 @if(count($location) > 0)
                 @foreach($location as $show)
                 <div class="column card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" style="background-color:#aaa;">
      <div class="col-md-12">
      <div class="row">
    <h5 style="color:#0B0B3B;">{{$show->jobtitle}}</h5>
    
    </div>
                  <p>Posted By: <a href="#" class="text-primary">company name</a></p>
                        <div class="row">
                 <p class="text-secondary">{{ $show->jobtype }} | Salary: {{$show->salary}}</p>
                 </div>
    <div class="row">
    <div class="col-md-3">
                    <img class="rounded-circle img-fluid" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-md-9">
                <p class="text-dark">
                    {!! str_limit(strip_tags($show->summary), 200) !!}
        @php $jobtitle = str_slug($show->jobtitle, '-'); @endphp
        <a class="btn btn-danger pull-right" href="/jobview/{{$show->id}}/{{$jobtitle}}">Apply</a>
                </p>
                </div>
     </div>
       </div> 
  </div>
                 @endforeach
                 {{$location->links()}}
                 @endif
             </div>
                      <div class="col-md-4">
                          @include('new.rightnav')     
         </div>
     </div>

</div>
@endsection
