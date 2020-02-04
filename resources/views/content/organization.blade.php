@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">
        <div class="container">
            <i class="fas fa-home text-white"></i> <b class="text-white">Find your companies | Get career Advise</b>
        </div>
        <hr style="border:solid 0.5px #fff;">
<p><h2 class=" text-white text-center" style="text-transform: uppercase;">Filter  trainings and seminars in Kenya</h2></p>
<br>
<div class="container">
<div class="row" style="margin-bottom: 3%;">
    <div class="col-md-3">
        <select name="duration" class="form-control" style="border-radius:0px;">
             <option>Select duration</option>
            <option>1 week</option>
            <option>2 weeks</option>
        </select>
    </div>
    <br>
    <div class="col-md-3">
        <select name="duration" class="form-control" style="border-radius:0px;">
             <option>Select category</option>
            <option>1 week</option>
            <option>2 weeks</option>
        </select>
    </div>
    <br>
    <div class="col-md-3">
        <select name="duration" class="form-control" style="border-radius:0px;">
             <option>Select Location</option>
            <option>1 week</option>
            <option>2 weeks</option>
        </select>
    </div>
    <br>
    <div class="col-md-3">
        <button type="submit" class="btn btn-danger text-white btn-block" style="border-radius:0px;"><i class="fas fa-search"></i> Filter</button>
    </div>
    <br>
</div>    
</div>
</div>
<div class="container">
    <h4 class="text-center text-uppercase"><strong>Extended search</strong></h4><hr>
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-danger text-white btn-block" href="#" style="border-radius:0px;"><i class="fas fa-chevron-circle-right"></i> All Trainings</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-danger text-white btn-block" href="#" style="border-radius:0px;"><i class="fas fa-circle"></i> Free trainings</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-danger text-white btn-block" href="#" style="border-radius:0px;"><i class="fas fa-circle"></i> Online trainings</a>
        </div>
        <div class="col-md-3">
            <a class="btn btn-danger text-white btn-block" href="#" style="border-radius:0px;"><i class="fas fa-circle"></i> Distance learning</a>
        </div>
    </div>
    
</div>
<br>
<div class="container">
    <div class="row">
                <div class="col-md-8">
                    
            <div class="card-header bg-danger text-white" style="border-radius:0px;">
            <h5 class="text-center">Popular Trainings</h5>
        </div>
         <div class="card-body " style="border-radius:0px;">
               <table class="table table-striped table-bordered table-responsive">
                   <thead>
                       <tr>
                           <th>Serial</th>
                           <th>Course title</th>
                            <th>Start date</th>
                             <th>Duration</th>
                             <th>Category</th>
                             <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                        @foreach($trainingc as $train)
                       <tr>
                           <td>{{$train->id}}</td>
                           <td>{{$train->title}}</td>
                            <td>{{$train->sdate}}</td>
                            <td>{{$train->duration}}</td>
                             <td>{{$train->duration}}</td>
                           
                            <td><a class="btn btn-danger btn-sm text-white" style="border-radius:0px;">View details</a></td>
                       </tr>
                         @endforeach
                   </tbody>
               </table>
           </div>
           <br>
         
        </div>
        <div class="col-md-4">
                    <div class="container mt-10">
                <h4 class="text-center">Advanced filter</h4>
            <div class="col-md-12">
                <center>
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne6">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                            Category
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne6">
                                    <div class="panel-body">
                                        <p>Filter based on category </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                                            Towns
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo6">
                                    <div class="panel-body">
                                        <p>Filter based on town </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                            Training providers
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree6">
                                    <div class="panel-body">
                                        <p>Training based on service providers. </p>
                                    </div>
                                </div>
                            </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="country">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                            Country
                                        </a>
                                    </h4>
                                </div>
                                <div id="country" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree6">
                                    <div class="panel-body">
                                        <p>Training based on country. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        </div>
    </div>


    </div>
 <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <div class="row bg-light">
                    @foreach($training as $train)
                  <div class="col-lg-3">
                    <img class="rounded-circle" src="{{asset('Images/default-logo.png')}}" alt="Generic placeholder image" width="140" height="140">
                  </div>
                <div class="col-lg-9 float-left">
                <p class="text-primary" style="margin-top:5%;">{{$train->title}} <a class="float-right text-danger" href="#">View description</a></p>
                <p>Event start date: {{$train->sdate}} : Training duration: {{$train->duration}}</p>
                </div>
            
                @endforeach
                <hr>
              </div>
                  
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    </div>
@endsection