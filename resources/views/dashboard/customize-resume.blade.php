@extends('layouts.resume-app')
@section('content')
<div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" style="width: 100px; height: 100px" src="resume/images/profile.png" alt="" />
                <td><a href="#" id="name" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your fullname" class="editable editable-click editable-empty"><h3>Full Name</h3></a></td>
                <h3 class="tagline" id="position">Position</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email" id="email"><i class="fas fa-envelope"></i>{{auth()->user()->email}}</li>
                    <li class="phone" id="phone"><i class="fas fa-phone">Phone Number:</i>{{$personalinfo->phone ?? 'Empty'}}</li>
                    <td>Date of Birth:<a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title" id="education">Education</h2>
                @if($education->count() > 0)
                    @php $education_number = 0;
                    $course = 0 @endphp
                @foreach($education as $educated)
                @php $education_number = $education_number + 1; 
                $course = $course + 1@endphp
                <div class="item">
                    <h4 class="degree" id="education{{$education_number}}" style="text-transform: uppercase;">{{$educated->qualification}}</h4>
                    <h5 class="meta" id="course{{$course}}">{{$educated->institution}}</h5>
                    <div class="time" id="start{{$education_number}}">{{$educated->start_date}} - {{$educated->grad_date}}</div>
                </div><!--//item-->
                @endforeach
                @else
                <div class="item">
                    <h4 class="degree" id="education1" style="text-transform: uppercase;">Course/Qualification</h4>
                    <h5 class="meta" id="course1">Institution/School</h5>
                    <label class="time" id="start1">start date</label><label class="time">- end date</label>
                </div>
                @endif
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title" id="award">Award & Certifications</h2>
                <ul class="list-unstyled interests-list">
                    @if($awards->count() > 0)
                    @php $award_number = 0 @endphp
                    @foreach($awards as $award)
                    @php $award_number = $award_number + 1 @endphp
                    <li id="award{{$award_number}}">{{$award->name}} <span class="lang-desc">({{$award->institution}})</span></li>
                    @endforeach
                    @else
                    <li id="award1">award name</li>
                    @endif
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title" id="interests">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li id="interest1">Climbing</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <a class="section-title" id="career_section"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</a>
                <div class="summary">
                    <td><a href="#" id="career" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">{{$personalstatements->statement ?? ''}}</a></td>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title" id="experience"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                <td>
                    @if($experience->count() > 0)
          <span class="badge">1</span> 
          <a id="username"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add experience: </a>
      </td>
                    @php $number = 0 @endphp
                @foreach($experience as $experienced)
                    @php $number = $number + 1 @endphp
                <div class="item">
                    <div class="meta">
                        <!-- <div class="upper-row"> -->
                            <td><a href="#" id="position{{$number}}" data-type="textarea" data-pk="1" data-placeholder="Your details here..." data-title="Job Position" class="editable editable-pre-wrapped editable-click">{{$experienced->position}}</a></td><!-- 
                            <div class="time">2015 - Present</div> -->
                        <!-- </div> --><!--//upper-row-->
                        <h5 class="company" id="employer{{$number}}">{{$experienced->employer}}</h5>
                    </div><!--//meta-->
                    <div class="details">
                    <td><a href="#" id="experience{{$number}}" data-type="textarea" data-pk="1" data-placeholder="Your career profile here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</a></td>
                    </div><!--//details-->
                </div><!--//item-->
                @endforeach
                @else
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <td><a href="#" id="position1" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">Position</a></td>
                            <div class="time">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Employer/Organization</div>
                    </div><!--//meta-->
                    <div class="details">
                    <td><a href="#" id="experience1" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">Roles and responsibilities</a></td>
                    </div><!--//details-->
                </div>
                @endif
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title" id="project"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p id="project_intro" data-type="textarea" data-title="Project Intro">You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro--><!--//item-->
                <div class="item">
                    <span class="project-title" id="project1" data-title="First Project Title"><a href="#" target="_blank">Delta</a></span> - <span class="project-tagline" id="project_desc1"  data-type="textarea" data-title="First Project Desription">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title" id="skill"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset"> 
                    @if($skills->count() > 0)
                    @php $skill_number = 0 @endphp
                @foreach($skills as $skill)
                @php $skill_number = $skill_number +1 @endphp      
                    <div class="item">
                        <h3 class="level-title" id="skill{{$skill_number}}">{{$skill->skillname}}</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                               
                    </div><!--//item-->
                    @endforeach
                    @else
                    <div class="item">
                        <h3 class="level-title" id="skill1">Skill Name</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                               
                    </div>
                    @endif
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
@endsection