@extends('layouts.app')
@section('content')
<br><br><br>
<div class="container">
	    <div class="col-md-12">
	<div class="row">
	        <div class="col-md-8">
	            <h2>{{$institution->name}}</h2>
                    <p><strong>Website: </strong>{{$institution->website}}</p>
                    <p><strong>Institution Type: </strong> {{$institution->institution_type}}</p>
                    <p><strong>Locations: </strong>
                        <span class="tags">Nairobi</span> 
                        <span class="tags">Mombasa</span>
                        <span class="tags">Kisumu</span>
                    </p>
	        </div>
	        <div class="col-md-4">
	            <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        <figcaption class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
	        </div>
	        </div>
	                   
            <div class="divider text-center">
                <div class="row">
                <div class="col-md-4 emphasis">
                    <h2><strong>{{$institution->trainings->count()}}</strong></h2>                    
                    <p><small>Total courses Online</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> View Trainings </button>
                </div>
                <div class="col-md-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Jobs Online</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Jobs</button>
                </div>
                <div class="col-md-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Training Locations</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Contact Institution </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Call</a></li>
                        <li class="divider"></li>
                      </ul>
                    </div>
                </div>
                </div>
            </div>
	    </div>
</div>
@endsection