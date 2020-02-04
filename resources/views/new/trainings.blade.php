@extends('new.layout.app')
@section('content')
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary nav-link" href="#">Training and Seminars</a></li>
  </ol>
</nav>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
        <div class="alert alert-success" role="alert">
      {{$trainings->count()}} training(s) found
      </div><hr>
      </div>
      <div class="col-md-4">
              <form method="GET" action="/searchtraining">
          <div class="input-group mb-3">
  <input type="search" name="search" class="form-control" placeholder="Whatcha Looking For?" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-info bg-info text-white" type="submit">Search</button>
  </div>
</div>
</form>
      </div>
      </div>
</div>
     <div class="row">
         @if($trainings->count())
         <div class="col-md-8">
                <div class="card card-body bg-light" style="border:0px;">
                    @foreach($trainings as $training)
                 <h2 style="color:#0B0B3B;"><strong>{{$training->title}}</strong></h2>
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-6">
                  <p>Posted By: <b class="text-primary"> {{$training->employers_id}}</b></p>
                  
                 </div>
                 <div class="col-md-6 pull-right">
                 <p class="pull-right text-secondary">Category: <i class="fas fa-map-marker text-dark"></i> {{$training->jobcategories}}</p>
                 </div>
                 </div>
                 </div>
                 <div class="col-md-12">
                     <div class="row">
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">Start Date: <i class="fas fa-calendar text-dark"></i> {{$training->sdate}}</p>
                 </div>
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">End Date: <i class="fas fa-coins text-dark"></i> {{$training->edate}}</p>
                 </div>
                 <div class="col-md-4">
                 <p class="pull-right text-secondary">Cost in Ksh: <i class="fas fa-coins text-dark"></i> {{$training->cost}}</p>
                 </div>
                 </div>
</div>
<p>{{$training->short_description}}</p>
        <br>
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-4">
        <a class="btn btn-info btn-block text-light" href="/TrainingSeminars/training/{{$training->id}}">More Details</a>
        </div>
        <div class="col-md-4">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter"><span class="fa fa-star"></span>
  Save it!
</button>
</div>
        <div class="col-md-4">
        <button type="button" class="btn btn-danger btn-block pull-right">Apply Now</button>
        </div>
        
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Save the Training/Seminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" id="firstname" placeholder="John">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="text" class="form-control" id="lastname" placeholder="Doe">
  </div>
        <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register and Save</button>
      </div>
    </div>
  </div>
</div>
<hr style="border:solid 0.5px #1A10AB;">
        @endforeach
        {{$trainings->links()}}
                            </div>   
             </div>
             
        
             @else
             <div class="col-md-8">
                <div class="card card-body bg-light" style="border:0px;">
                 <h2><strong>No trainings and seminars in this category yet</strong></h2>
                            </div>    
             </div>
             @endif
                      <div class="col-md-4">
             <h4 class="text-center" style="font-family: 'Source Sans Pro', sans-serif;">Advanced filter</h4>
             <hr>
             <div>
                 <h4>Categories</h4>
                 <ul>
                     @foreach($categories as $category)
                      @if($category->trainings->count()>0)
  <li class="d-flex justify-content-between align-items-center"><a href="/TrainingSeminars/{{$category->id}}" class="nav-link text-secondary"><i class="fas fa-angle-right"></i>{{$category->jobcategories}}</a><span class="badge badge-primary badge-pill">{{ $category->trainings->count() }}</span></li>
  @endif
  @endforeach
</ul>
             </div>
             <div style="border-top: 1px solid #EDEDFA;border-left: none;border-right: none;">
                 <h4>Location</h4>
                 <ul class="list-group">
                 @foreach($locations as $town)
                  @if($town->trainings->count()>0)
  <li class="d-flex justify-content-between align-items-center"><a href="/TrainingSeminarsLocation/{{$town->id}}" class="nav-link text-secondary"><i class="fas fa-angle-right"></i>{{$town->name}}</a><span class="badge badge-primary badge-pill">{{ $town->trainings->count() }}</span> </li>
  @endif
@endforeach
</ul>
             </div>
             
                    </div>
         </div>
     </div>

</div>
@endsection
