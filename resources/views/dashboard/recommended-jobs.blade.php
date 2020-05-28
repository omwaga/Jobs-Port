@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:7rem;">
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-8">

              <div class="card card-body border-light shadow-lg p-3 mb-5 bg-white rounded" align="center">
                <h5 style="color:#070A53;"><strong>Selected Industries</strong></h5>  
                <ul>
                    @foreach($user_industries as $user_industry)
                    <li>{{$user_industry->industry->name}}</li>
                    @endforeach
                </ul>
                @include('errors')
                @include('success')
                @if($user_industries->count() > 0)
                <button class="btn text-white pull-right" style="background-color:#070A53;" data-toggle="modal" data-target="#newindustry">Add Industry</button>
                @include('dashboard.add-industrymodal')
                @else
                <form method="post" action="{{route('rjobs')}}">
                  @csrf
                  <div class="row">
                      <div class="col-md-6">
                          <label>Select Industry</label>
                          <select data-live-search="true" name="industry" class="form-control" data-live-search-style="startsWith" class="selectpicker">
                              <option>Select Industry</option>
                              @foreach($industries as $industry)
                              <option value="{{$industry->id}}">{{$industry->name}}</option>
                              @endforeach
                          </select>

                      </div>
                      <div class="col-md-6">
                       <br>
                       <button type="submit" class="btn text-white"  style="background-color:#070A53;">Save</button>

                   </div>
               </div>
           </form>
           @endif
       </div> 
</div>
<div class="col-md-4">
  @include('new.rightnav')
</div>
</div>
</div>
</div>
</div>
</div>
@endsection