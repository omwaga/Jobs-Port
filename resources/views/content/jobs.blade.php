@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-color: #2A3A4A">
  <div class="container-fluid">
      {!!Form::open(['action'=>'PagesController@searchjobs','method'=>'GET','class'=>'needs-validation'])!!}
      {{csrf_field()}}
<div class="row">
  <div class="col-sm-3">
      <div class="form-group">
          <label for="exampleFormControlInput1" class="text-white">Job Category</label>
          <select class="form-control search-slt" id="exampleFormControlSelect1" name="category"style="border-radius: 0%;">
              <option>Select Category</option>
             @foreach ($categories as $item)
          <option value="{{$item->id}}">{{$item->jobcategories}}</option>
             @endforeach
          </select>
        </div>
  </div>
  <div class="col-sm-3">
      <div class="form-group">
          <label for="exampleFormControlInput1" class="text-white">Industry</label>
          <select class="form-control search-slt" id="exampleFormControlSelect1" name="industry"style="border-radius: 0%;">
               <option>Select Industry</option>
             @foreach ($industries as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
             @endforeach

          </select>
      </div>
  </div>
  <div class="col-sm-3">
      <div class="form-group">
          <label for="exampleFormControlInput1" class="text-white">Location</label>
          <select class="form-control search-slt" id="exampleFormControlSelect1" name="location" style="border-radius: 0%;">
              <option>Locations</option>
              <option>Nairobi</option>
              <option>Eldoret</option>
              <option>Kisumu</option>
              <option>Mombasa</option>
              <option>Nakuru</option>
              <option>Rest of Kenya</option>
          </select>
  </div>
  </div>
  <div class="col-sm-3">
      <div class="form-group">
         <label>..</label><br>
         
<button type="submit" class="btn btn-danger btn-block" style="border-radius: 0%;">Search Job</button>
      </div>
  </div>
</div>
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
         </div>
         @endif
 {!!Form::close()!!}
  </div>
</div>
			<!--------------- center content! ----------------->
			<div class="container-fluid" id="body-container-fluid">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-9">
						<br>
						<br>
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#foreign" role="tab">Found Jobs</a>
								  </li>
								  
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
								  <div class="tab-pane active" id="foreign" role="tabpanel"> 
									 
                                      @if (count($applications)>0)
                                      @foreach ($applications as $search)
                                      <div class="card card-body">
                                        <h5 class="mb-1"><b><a href="/jobview/{{$search->id}}"></a> {{$search->jobtitle}}</b></h5>
                                        <hr style=" border: 1px solid red;">
                                        <p class="mb-1"><i class="fa fa-map-marker text-primary" aria-hidden="true"></i> {{$search->location}}.| {{$search->jobtype}}.| {{$search->salary}}
                                        <a class="btn btn-primary float-right text-white" style="border-radius: 0%;" href="/jobview/{{$search->id}}">Apply this job</a></p><hr>
                                        <p>{{ str_limit(strip_tags($search->summary), 200) }}
                                          @if (strlen(strip_tags($search->summary)) > 200)
                                          ... <a href="/jobview/{{$search->id}}" class="btn btn-default btn-sm text-danger">Read More</a>
                                        @endif</p>                                
                                      </div>
                                     
                                      <br>
                                              @endforeach  
                                      @else
                                          <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                        <div class="d-flex w-100 justify-content-between">
                                                          <h5 class="mb-1 text-primary">We don not have jobs that match your search
                                                              criteria
                                                          </h5>
                                                      
                                                        </div>
                                                        <p class="mb-1">Kindly check your search criteria again.</small>
                                                        <footer class="blockquote-footer">thenetworkedpros.com</footer>
                                                      </a>
                                          </div>
                                      @endif	
{{$applications->links()}}

								  </div>

								  <div class="tab-pane" id="local" role="tabpanel"> 
								  </div>
								  
								  <div class="tab-pane" id="blogs" role="tabpanel">
								  </div>
								  
								  <div class="tab-pane" id="related" role="tabpanel">Related</div>
								  
								  <div class="tab-pane" id="photos" role="tabpanel">
									<div class="card" style="width: 20rem;">
										  <img class="card-img-top" src="images/download.svg" alt="Card image cap">
										  <div class="card-block">
										  <h6 class="card-title">Card title</h6>
										  </div>
										  
									</div>
								  </div>
								  
								  <div class="tab-pane" id="link2" role="tabpanel">link2</div>
								  
								  <div class="tab-pane" id="link3" role="tabpanel">link3</div>
								  
								  <div class="tab-pane" id="link4" role="tabpanel">link4</div>
								  
 
								</div>
						</div>
	
						<div class="col-lg-3 ">
						                                    <h5 class="text-danger">Filter by Industries</h5>
                                <hr style=" border: 0.5px solid red;">
								<ul class="w3-ul w3-small">
                  @if (count($industries)>0)
                      @foreach ($industries as $item)
                <li><a href="/Industries/{{$item->id}}" class="text-primary"><i class="fas fa-angle-double-right text-danger"></i> {{$item->name}} </a></li>
                      @endforeach
                  @else
                      
                  @endif
						<br>			
								</ul>
                                <h5 class="text-danger">Filter by Locations</h5>
                                <hr style=" border: 0.5px solid red;">
                                <ul class="w3-ul w3-small">
                                      @if (count($towns)>0)
                                      @foreach ($towns as $town)
                                <li><a href=""class="text-primary"><i class="fas fa-angle-double-right text-danger"></i> {{$town->name}}</a></li>
                                      @endforeach
                                  @else
                                      
                                  @endif

                                </ul>
                                <br>
                        </div>
                    </div>
                    
				</div>
			</div>
@endsection