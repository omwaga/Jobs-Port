<!--search for latest jobs section-->
<hr style="border:solid 0.5px #000000">
<div class="container">
    <p><h5><b class="">Search for latest job vacancies  in Kenya</h5></h4></p>
</div>
<div class="container">
  <ul class="nav nav-tabs" role="tablist" style="border-right:0px;">
    <li class="nav-item">
      <a class="nav-link active text-primary" data-toggle="tab" href="#home"><i class="fa fa-list-alt fa-x text-white" aria-hidden="true"></i> Fiter Jobs by Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker fa-x text-white" aria-hidden="true"></i> Fiter Jobs by Location</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#menu2"><i class="fa fa-clock-o fa-x text-white" aria-hidden="true"></i> View Latest Jobs</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active " style="background-color:#fff;"><br>
    	<div class="row">
    		@foreach($industry as $inda)
    		<div class="col-md-4">
   <ul class="list-group list-group-flush">
  <li class="list-group-item " style="border-top: 0.8px solid #EDEDFA;border-left: none;border-right: none;"><i class="fas fa-angle-double-right text-primary"></i> <a class="" href="/Industries/{{$inda->id}}">{{$inda->name}}</a></li>
</ul>
    		</div>
    		@endforeach
    	</div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <p>
          <div class="row">
                    @if(count($towns) > 0)
          @foreach($towns as $town)
          <div class="col-md-3">
              <ul class="list-group list-group-flush">
  <li class="list-group-item text-primary"><a href="/Location/{{$town->id}}" class="nav-link text-primary"><i class="fas fa-map-marker-alt"></i> {{$town->name}}</a> </li>
</ul>
          </div>
          @endforeach
          @endif    
          </div>
</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="row">
      	@foreach($jobs as $job)
      	<div class="col-md-6">
    <ul class="list-group list-group-flush">
  <li class="list-group-item" style="border-top: 0.5px solid #EDEDFA;border-left: none;border-right: none;"><a href="/jobview/{{$job->id}}" class="nav-link text-primary"><i class="fas fa-angle-double-right"></i> {{$job->jobtitle}}<br>
  {{$job->jobtype}}</a> </li>
</ul>
      	</div>
      	@endforeach
      </div>
    </div>
  </div>
</div>
<!--top employer section-->
<div class="container">
	<h3 class="text-center">Top Employers</h3><br>
    <div class="row" style="background-color:#0C345D;">
        @if(count($companyy) > 0 )
    	@foreach($companyy as $company)
    <div class="col-md-2">
      <div class="card card-body"style="background-color:#0C345D;">
       <img src="{{asset('Images/default-logo.png')}}" class="img-fluid " alt="companyimage" style="width:150px; height:150px;">
     
      <a href="/companysearch/{{$company->id}}" class="text-white"> jobs at 
           {!! str_limit(strip_tags($company->cname), 30) !!}
        @if (strlen(strip_tags($company->cname)) > 30)
        <br>
        ... 
        @else
        <br>
        <a href="/companysearch/{{$company->id}}" class="">....</a>
        @endif</a>
     
      </div>
    </div>
@endforeach
@endif
  </div>
</div>
<!--top trainings part-->

	<div class="container">
	    <div class="row">
	        <div class="col-md-8">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-primary" data-toggle="tab" href="#train"><i class="fa fa-list-alt fa-x text-primary" aria-hidden="true"></i>View Latest Trainings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="tab" href="#trainloca"><i class="fa fa-map-marker fa-x text-primary" aria-hidden="true"></i>Trainings by Locations</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="train" class="container tab-pane active"><br>
    	<div class="row">
    		@foreach($training as $train)
    		<div class="col-md-12">
   <ul class="list-group list-group-flush bg-light">
  <li class="list-group-item bg-light " style="border-top: 1px dotted #000;border-left: none;border-right: none;"><i class="fas fa-angle-double-right text-primary"></i> <a class="#" href="#">{{$train->title}}   </a>
 <a class="float-right btn btn-danger text-white" href="#" style="text-decoration:none; border-radius:0px;" >View description</a>
  <p><i class="far fa-clock text-primary"></i>Training starts on: {{$train->sdate}} - Duration {{$train->duration}} <i class="fas fa-coins text-primary"></i>Cost:  Ksh{{$train->cost}}</p>
</li>
</ul>
    		</div>
    		@endforeach
    	</div>
    </div>
    <div id="trainloca" class="container tab-pane fade"><br>
      <h3>Fiter Jobs by Location</h3>
      <p>
          <div class="row">
                    @if(count($towns) > 0)
          @foreach($towns as $town)
          <div class="col-md-3">
              <ul class="list-group list-group-flush">
  <li class="list-group-item text-primary"><a href="#" class="nav-link text-primary"><i class="fas fa-map-marker-alt"></i> {{$town->name}}</a> </li>
</ul>
          </div>
          @endforeach
          @endif    
          </div>
</p>
    </div>

  </div>
  </div>
  <div class="col-md-4">
      <h4 class="text-center">Our quick guide</h4><hr>
              <div class="container mt-10">
            <div class="col-md-12">
                <center>
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne6">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6" style="text-decoration:none;">
                                           <h6>How to create an employer account</h6> 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne6">
                                    <div class="panel-body">
                                        <p>1. Click on the employer menu item from the main menu. A dropdown menu will be displayed. Click on Register.</p>
                                        <p>2. On the form displayed fill all input required. </p>
                                        <p>3. Log in using the username and password provided above. Note the username should be your email </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6"style="text-decoration:none;">
                                               <h6>How to post a job</h6> 
                                               
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo6">
                                    <div class="panel-body">
                                        <p>1. Login to your employer dashboard using username and password you registered with. </p>
                                        <p>2. On the employer dashboard, navigate through to Jobs menu. Click on it and a dropdown will appear. </p>
                                        <p>3. From the dropdown menu, click on post a job vacancy. A form will be displayed. </p>
                                        <p>4. Fill in the form and click on the post a job vacancy at the bottom. </p>
                                        <b>Note: </b> <p>You must be a registered and validateds user for you to post a job vacancy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"style="text-decoration:none;">
                                               <h6>How to post a training</h6> 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree6" style="text-decoration:none;">
                                    <div class="panel-body">
                                        <p>1. Login to your employer dashboard using username and password you registered with. </p>
                                        <p>2. On the employer dashboard, navigate through to Trainings menu. Click on it and a dropdown will appear. </p>
                                        <p>3. From the dropdown menu, click on post a training . A form will be displayed. </p>
                                        <p>4. Fill in the form and click on the post a training at the bottom. </p>
                                        <b>Note: </b> <p>You must be a registered and validateds user for you to post a training.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="country">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"style="text-decoration:none;">
                                               <h6>How to apply a job through the portal</h6> 
                                        </a>
                                    </h4>
                                </div>
                                <div id="country" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree6">
                                    <div class="panel-body">
                                        <p>1. Click on create account on the homepage to register </p>
                                        <p>2. Complete your profile by filling in the relevant information. </p>
                                        <p>3. After you are done, update your user profle by adding your experinece, academic details, skills to be identified
                                        easily by the employers.</p>
                                        <p>4. Click on my recommended jobs on the dropdown menu from the my dashboard menu. </p>
                                        <p>5. Click on the job that you want to apply. </p>
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
