@extends('layouts.jobs')
@section('content')
       <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="media flex-column flex-md-row">
			    @foreach($bio as $bioo)
			    @if($bioo->filename=="")
				    <img class="mr-3 img-fluid picture mx-auto" src="{{asset('admin/images/avatar.png')}}" alt="">
				    @else
				     <img class="mr-3 img-fluid picture mx-auto" src="/storage/uploads/{{$bioo->filename}}" alt="">
				    @endif
				    @endforeach
				    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
					    <div class="primary-info">
						    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">{{auth()->user()->name}}</h1>
						    <!--<div class="title mb-3">Full Stack Developer</div>-->
						    <ul class="list-unstyled">
							    <li class="mb-2"><a href="#"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>{{auth()->user()->email}}</a></li>
						    </ul>
					    </div><!--//primary-info-->
					    <!--<div class="secondary-info ml-md-auto mt-2">-->
						   <!-- <ul class="resume-social list-unstyled">-->
				     <!--           <li class="mb-3"><a href="#"><span class="fa-container text-center mr-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/stevedoe</a></li>-->
				     <!--           <li class="mb-3"><a href="#"><span class="fa-container text-center mr-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/username</a></li>-->
				     <!--           <li class="mb-3"><a href="#"><span class="fa-container text-center mr-2"><i class="fab fa-codepen fa-fw"></i></span>codepen.io/username/</a></li>-->
				     <!--           <li><a href="#"><span class="fa-container text-center mr-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li>-->
						   <!-- </ul>-->
					    <!--</div><!--//secondary-info-->
					    
				    </div><!--//media-body-->
			    </div><!--//media-->
		    </header>
		    <div class="resume-body p-5">
		        <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Biodata </h2>
				    <div class="resume-section-content">
				    @if(count($biodata) > 0)
				    <div class="row">
				        @foreach($biodata as $biod)
				        <div class="col-lg-4">
				            <p>Id/Passport: {{$biod->idpass}}</p>
				            <p>Telephone: {{$biod->telephone}}</p>
				            <p>Gender: {{$biod->gender}}</p>
				        </div>
				        <div class="col-lg-4">
				            <p>Religion: {{$biod->religion}}</p>
				            <p>Status: {{$biod->mstatus}}</p>
				            <p>D.O.B: {{$biod->dob}}</p>
				        </div>
				        <div class="col-lg-4">
				            <p>Country: {{$biod->country}} <a class="float-right" data-toggle="modal" data-target="#biod-{{$biod->id}}" data-id="{{$biod->id}}"> <i class="fas fa-pencil-alt text-danger"></i></a></p>
				            <p>Nationality: {{$biod->nationality}}</p>
				            <p>Physical address: {{$biod->paddress}}</p>
				        </div>
				        @include('content.editbiodata')
				        @endforeach
				   @else
				   <div class="col-lg-12">
				     <p class="text-danger">Be discovered by employers when you update the biodata.You wont be able to to apply for a job without biodata. <a class="" data-toggle="modal" data-target="#biodata" data-id="#"> <i class="fas fa-pencil-alt text-danger"></i></a></p>  
				   </div>
				   </div>
				   @endif
				    </div>
				    @include('content.addbiodata')
			    </section><!--//personal information-->
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Objective</h2>
				    <div class="resume-section-content">
				        @if(count($bio)>0)
				        @foreach($bio as $bi)
					    <p class="mb-0">{!!$bi->bio!!}.<a class="" data-toggle="modal" data-target="#career-{{$bi->id}}" data-id="{{$bi->id}}"> <i class="fas fa-pencil-alt text-danger"></i></a></p>
					     @include('content.edcareer')
					    @endforeach
					    @else
					    <p>Summarise your career here<a class="" data-toggle="modal" data-target="#career" data-id=""> <i class="fas fa-pencil-alt text-danger"></i></a></p>
					    @endif
				    </div>
				    @include('content.editcareer')
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience<a class="float-right btn btn-sm btn-danger text-white text-lowercase" data-toggle="modal" data-target="#experienceadd"><i class="fas fa-plus-square "></i> add</a></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
							        @foreach($experience as $experien)
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">{{$experien->position}}</h3>
										        <div class="resume-company-name ml-auto"><a class="btn btn-danger btn-sm text-white" data-toggle="modal" data-target="#{{$experien->id}}" data-id="{{$experien->id}}"><i class="fas fa-pencil-alt"></i> </a></div>
										    </div><!--//row-->
										    <div class="resume-position-time">{{$experien->start}} - {{$experien->enddate}}</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>{!!$experien->description!!}</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    {!!$experien->tdescription!!}
										    <!--<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>-->
										    <!--<ul class="list-inline">-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">Angular</span></li>-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">Python</span></li>-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">Webpack</span></li>-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>-->
											   <!-- <li class="list-inline-item"><span class="badge badge-primary badge-pill">PostgresSQL</span></li>-->
										    <!--</ul>-->
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								      @include('content.editexpe')
								    @endforeach
								  @include('content.addexpe')
								    
							    </div><!--//resume-timeline-->
			
						    </div>
					    </section><!--//experience-section-->
					      <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Consultancy and short assignments<a class="float-right btn btn-sm btn-danger text-white text-lowercase" data-toggle="modal" data-target="#consultancy"><i class="fas fa-plus-square "></i> add</a></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
							         <ul class="list-unstyled">
							             @if(count($assignment) > 0)
							      @foreach($assignment as $assign )
							      <li class="mb-2"> 
								        <div class="resume-degree font-weight-bold">{{$assign->position}}<a class="" data-toggle="modal" data-target="#assign-<?php echo $assign->id ?>" data-id="{{$assign->id}}"> <i class="fas fa-pencil-alt text-danger"></i></a></div>
								        <div class="resume-degree-org">{{$assign->organization}}- {{$assign->atype}}</div<br>
								         <div class="resume-degree-time"><h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4></div>
								        <div class="resume-degree-time">{!!$assign->description!!}</div>
								        
								    </li>
								   @include('content.editassign')
								    @endforeach
								    @else
								   <li class="mb-2"> 
								    <div class="resume-degree-time"><p class="text-danger">Update consultancy or any short assignments that you have done. <a class="" data-toggle="modal" data-target="#consultancy"><i class="fas fa-pencil-alt text-danger "></i></a></p></div>
								   </li>
								    @endif
								    </ul>
								    @include('content.addconsult')
							    </div><!--//resume-timeline-->
						    </div>
					    </section>
					    <!--end of consultanct-->
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Referees<a class="float-right btn btn-sm btn-danger text-white text-lowercase" data-toggle="modal" data-target="#referee"><i class="fas fa-plus-square "></i> add</a></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
							         <ul class="list-unstyled">
							             @if(count($reference)>0)
							      @foreach($reference as $ref )
							      <li class="mb-2"> 
								        <div class="resume-degree font-weight-bold">{{$ref->name}}<a class="" data-toggle="modal" data-target="#ref-<?php echo $ref->id ?>" data-id="{{$ref->id}}"> <i class="fas fa-pencil-alt text-danger float-right"></i></a></div>
								        <div class="resume-degree-org">{{$ref->position}} - {{$ref->organization}}</div>
								        <div class="resume-degree-time">{{$ref->phone}}</div>
								        <div class="resume-degree-time">{{$ref->email}}</div>
								    </li>
								    @include('content.editref')
								    @endforeach
								    @else
								    <li class="mb-2"> 
								    <div class="resume-degree font-weight-bold">
								        <p class="text-danger">Add referess <a class="" data-toggle="modal" data-target="#referee"><i class="fas fa-pencil-alt "></i></a></p>
								    </div>
								    </li>
								    @endif
								    </ul>
								    @include('content.addref')
							    </div><!--//resume-timeline-->
						    </div>
					    </section>
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools <a class=" float-right text-lowercase" data-toggle="modal" data-target="#skills"><i class="fas fa-plus-square text-danger fa-sm "></i></a></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <!--<h4 class="resume-skills-cat font-weight-bold">Frontend</h4>-->
							        <ul class="list-unstyled mb-4">
							            @if(count($skills) >0)
							            @foreach($skills as $skill)
								        <li class="mb-2">
								            <div class="resume-skill-name">{{$skill->skillname}} <a class="" data-toggle="modal" data-target="#mod-{{$skill->id}}" data-id="{{$skill->id}}"> <i class="fas fa-pencil-alt text-danger"></i></a></div>
									        <div class="progress resume-progress">
									            
									            @if($skill->level=='Intermediate')
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											    @elseif($skill->level=='Beginner')
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											    @elseif($skill->level=='Expert')
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											    @else
											    @endif
											</div>
								        </li>
								        @include('content.editskill')
								        @endforeach
								        @else
								        <li class="mb-2">
								            <div class="resume-skill-name"><p class="text-center tex-danger">Add skills<a class=" text-lowercase" data-toggle="modal" data-target="#skills"><i class="fas fa-pencil-alt text-danger fa-sm "></i></a></p></div>
								            </li>
								        @endif
							        </ul>
							        @include('content.addskill')
						        </div><!--//resume-skill-item-->
						       
						        
						        <!--<div class="resume-skill-item">-->
						        <!--    <h4 class="resume-skills-cat font-weight-bold">Others</h4>-->
						        <!--    <ul class="list-inline">-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Git</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>-->
							       <!--     <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>-->
						        <!--    </ul>-->
						        <!--</div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education <a class=" float-right text-lowercase" data-toggle="modal" data-target="#academicupdate"><i class="fas fa-plus-square text-danger fa-sm "></i></a></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
							        @if(count($academics) > 0)
							        @foreach($academics as $academic)
								    <li class="mb-2"> 
								        <div class="resume-degree font-weight-bold">{{$academic->course}}<a class="" data-toggle="modal" data-target="#modal-<?php echo $academic->id?>" data-id="{{$academic->id}}"> <i class="fas fa-pencil-alt text-danger float-right"></i></a></div>
								        <div class="resume-degree-org">{{$academic->institution}}</div>
								        <div class="resume-degree-time">{{$academic->sdate}} - {{$academic->edate}}</div>
								    </li>
								    @include('content.editedu')
								    @endforeach
								    @else
								     <li class="mb-2"> 
								     <div class="resume-degree font-weight-bold">
								        <p class="text-center text-danger">Add academics<a class="text-lowercase" data-toggle="modal" data-target="#academicupdate"><i class="fas fa-pencil-alt text-danger fa-sm "></i></a></p> 
								     </div>
								     </li>
								    @endif
							    </ul>
							    @include('content.addacademic')
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Certifications <a class=" float-right text-lowercase" data-toggle="modal" data-target="#profcert"><i class="fas fa-plus-square text-danger fa-sm "></i></a></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
							        @if(count($awards)>0)
							         @foreach($awards as $award)
								    <li class="mb-2 pl-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">{{$award->name}}<a class="" data-toggle="modal" data-target="#moda-<?php echo $award->id?>" data-id="{{$award->id}}"> <i class="fas fa-pencil-alt text-danger float-right"></i></a></div>
								        <div class="resume-award-desc">{!!$award->description!!}</div>
								    </li>
								    @include('content.editaward')
								    @endforeach
								    @else
								    <li class="mb-2 pl-4 position-relative">
								        <div class="resume-award-name">
								            <p class="text-center text-danger">Add certifications<a class="" data-toggle="modal" data-target="#profcert"><i class="fas fa-pencil-alt text-danger fa-sm "></i></a></p>
								        </div>
								    </li>
								    @endif
							    </ul>
							    @include('content.addcert')
						    </div>
					    </section><!--//interests-section-->
					    <!--<section class="resume-section language-section mb-5">-->
						   <!-- <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>-->
						   <!-- <div class="resume-section-content">-->
							  <!--  <ul class="list-unstyled resume-lang-list">-->
								 <!--   <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>-->
								 <!--   <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>-->
								 <!--   <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>-->
							  <!--  </ul>-->
						   <!-- </div>-->
					    <!--</section><!--//language-section-->
					    <!--<section class="resume-section interests-section mb-5">-->
						   <!-- <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>-->
						   <!-- <div class="resume-section-content">-->
							  <!--  <ul class="list-unstyled">-->
								 <!--   <li class="mb-1">Climbing</li>-->
								 <!--   <li class="mb-1">Snowboarding</li>-->
								 <!--   <li class="mb-1">Cooking</li>-->
							  <!--  </ul>-->
						   <!-- </div>-->
					    <!--</section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article>
@endsection