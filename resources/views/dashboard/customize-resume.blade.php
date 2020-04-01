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
                    <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                @if($education->count() > 0)
                    @php $education_number = 0;
                    $course = 0 @endphp
                @foreach($education as $educated)
                @php $education_number = $education_number + 1; 
                $course = $course + 1@endphp
                <div class="item">
                    <h4 class="degree" id="education{{$education_number}}" style="text-transform: uppercase;">{{$educated->qualification}}</h4>
                    <h5 class="meta" id="course{{$course}}">{{$educated->institution}}</h5>
                    <div class="time">2011 - 2012</div>
                </div><!--//item-->
                @endforeach
                @else
                <div class="item">
                    <h4 class="degree" id="education1" style="text-transform: uppercase;">Course/Qualification</h4>
                    <h5 class="meta" id="course1">Institution/School</h5>
                    <div class="time">2011 - 2012</div>
                </div>
                @endif
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Professional)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title" id="interests">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <td><a href="#" id="career" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">{{$personalstatements->statement ?? ''}}</a></td>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                <td>
                    @if($experience->count() > 0)
          <span class="badge">1</span> 
          <a id="username"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add wall measurements: </a>
      </td>
                    @php $number = 0 @endphp
                @foreach($experience as $experienced)
                    @php $number = $number + 1 @endphp
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <td><a href="#" id="position{{$number}}" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">{{$experienced->position}}</a></td>
                            <div class="time">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">{{$experienced->employer}}</div>
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
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>
                    
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> - 
                    <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
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