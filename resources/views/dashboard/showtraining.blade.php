@extends('jdash.layout')
@section('content')
<div class="wrapper">
        <div class="main-panel" id="main-panel">
        <div class="content">
            <div class="row">
                <div class="card card-body">
                  
                <p> <h5 class="text-info">Title</h5><br> {{$train->title}}</p>
                <hr>
                <P><h5 class="text-info">Training Description:</h5> <br>
                    {{$train->description}} </P><hr>
                    <p>
                       <h5 class="text-info">Other Training details</h5>
                    </p>
                    <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> location:  {{$train->location}}  
                    </p>
                 <p><i class="fa fa-money" aria-hidden="true"></i> Cost: {{$train->cost}}
                </p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> Begins on: <button class="btn btn-info text-white">{{$train->sdate}}</button>
                </p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i>Ends on: <button class="btn btn-info text-white">{{$train->edate}}</button>
                </p>
                <p><i class="fa fa-sort" aria-hidden="true"></i> Organised by: {{$train->organizer}}
                </p>
                </div>
            </div>
        </div>
        </div>
</div>
@endsection