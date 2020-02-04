@extends('layouts.app')
@section('title')
The Networked Pros | Job Vacancies and best career site in Kenya
@stop
@section('description')
Top job vacancies in ICT, Accounting,Sales and Marketing In kenya.
@stop
@section('keywords')
The Networked Pros,Thenetworkedpros, thenetworkedpros.com, thenetworked pros kenya,Job vacancies in Kenya,ICT jobs in Kenya, Accounting Jobs in kenya
@stop
@section('content')
<!--<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(rgba(9, 96, 165, 0.2), rgba(6, 32, 147, 0.2)),url({{asset('home/img/employer.jpg')}});background-size:cover;">-->
<!--  <div class="container">-->
<!--    <p class=" text-white"><b>Hire qualified Employees</b></p>-->
<!--    <p class="text-white">Get the best and the brightest candidates for your preferred job vacancies.<br>-->
<!--    As an employer , you will be connected to top qualified candidates from the portal.-->
<!--    <br>You will be able to view the candidates profiles before shortlisting them for an interview.<br>-->
<!--    <a class="btn btn-danger text-white" href="{{route('hirre')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create an Employer  account</a>-->
<!--    <a class="btn btn-danger text-white" href="{{route('admin.login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a></p>-->
<!--  </div>-->
<!--</div>-->
<!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="jumbotron jumbotron-fluid" style="background-color:#2B3856; background-image:url('{{asset('Images/corporate.jpg')}}');">

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">

                        <!-- Heading -->
                        <h4 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Find your perfect <br>
                            & qualified candidates easier
                        </h4>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                            The Networkedpros can help you reach both passive and active job seekers.
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="{{route('hirre')}}" class="btn btn-primary ">
                                Create a Profile
                            </a>
                            <a class="btn btn-danger text-white" href="{{route('admin.login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
<div class="container">
    <h3 class="text-center" style="font-family: 'Qwigley', cursive; font-size:50px;"><b>We help you make your Employer Brand shine</b></h3>
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-3">
	        
	    </div>
	    <div class="col-md-9">
	        		<div class="how-it-work clearfix">
        		<div class="main-how-it">
        			<h4> Follow <span class="bg-theme"> Steps</span> </h4>
        		</div>
	    		<div class="panel panel-default col-sm-12 col-sm-offset-2">
				  <div class="panel-body">
				  	<span> 1 </span> <h4 class="step-heading"> Step 1 </h4>
				    Create an Employer account if you are new. If you have an account, login to your account
				  </div>
				</div>       	

	    		<div class="panel panel-default col-sm-12 col-sm-offset-2">
				  <div class="panel-body">
				  	<span> 2 </span> <h3 class="step-heading"> Step 2 </h3>
				    On your dashboard, view all applicants by clicking on View applicants on the Jobs menu. 
				  </div>
				</div>
	    	
	    		<div class="panel panel-default col-sm-12 col-sm-offset-2">
				  <div class="panel-body">
				  	<span> 3 </span> <h3 class="step-heading"> Step 3 </h3>
				    On the view applicants page, you can search applicants by position applied,a list will be displayed if there any applications relating to the applied job. 
				  </div>
				</div>
	    	
	    		<div class="panel panel-default col-sm-12 col-sm-offset-2">
				  <div class="panel-body">
				  	<span> 4 </span> <h3 class="step-heading"> Step 4 </h3>
				    From the list, view applicants profile using the view profile in the table. Shortlist the candidate in a few seconds by clicking 
				    on the shortlist button in the table.
				  </div>
				</div>
	        	
	        </div>
	    </div>

	</div>
</div>
<div class="container">
    <h3 class="text-center" style="font-family: 'Qwigley', cursive; font-size:50px;"><b>WhyThe networked pros</b></h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
               <p><h3><i class="fa fa-check-circle-o" aria-hidden="true"></i> Posting a job is easier and faster</h3></p>
               <p><h3><i class="fa fa-check-circle-o" aria-hidden="true"></i> Shortlisting of candidates is just a button away</h3></p>
               <p><h3><i class="fa fa-check-circle-o" aria-hidden="true"></i> Create and access your own talent pool</h3></p>
               
                       </div>
            <div class="col-md-4">
                <img src="https://classroomclipart.com/images/gallery/Animations/Computers/man-using-computer-keyboard-2-animated.gif" class="img-block" style="height:200px;">
            </div>

    </div>
</div>
@endsection