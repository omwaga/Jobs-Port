@extends('layouts.empapp')
@section('content')
   <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">My Profile</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-4">
<div class="panel panel-default">
                        <div class="panel-heading">
                           Company logo
                        </div>
                        <div class="panel-body">
                            @foreach($profile as $prof)
                           <img src="/storage/uploads/{{$prof->logo}}">
                           @endforeach
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="panel panel-default">
                        <div class="panel-heading">
                           Company details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                      @foreach($profile as $prof)
                           <p>Company name: {{$prof->cname}}</p>
                           <p>Company location: {{$prof->location}}</p>
                           <p>Company website: {{$prof->website}}</p>
                           <p>Industry type: {{$prof->industry}}</p>
                           <hr style="border:1px solid #000;">
                         <p>Company email: {{$prof->email}}</p>
                        <p>Company size: {{$prof->csize}}</p>
                        <p>Contact person: {{$prof->cperson}}</p>
                        <p>Contact No: {{$prof->telephone}}</p>
                        <p>Country: {{$prof->country}}</p>
                        <p>Address: {{$prof->address}}</p>
                           @endforeach
                                </div>
                                
                            </div>
                         
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                            </div>

        </div>
    </div>
    </div>
@endsection