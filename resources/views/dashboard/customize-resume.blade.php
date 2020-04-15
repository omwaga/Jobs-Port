@extends('layouts.resume-app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>Joe Bloggs - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="resume/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <img src="resume/images/profile.png" alt="Profile Pic" />
        </div>
        
        <div id="name">
            <h1 class="quickFade delayTwo" id="full_name">Joe Bloggs</h1>
            <h2 class="quickFade delayThree" id="position">Job Title</h2>
        </div>
        
        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>e: <a href="mailto:joe@bloggs.com" target="_blank" id="email">{{auth()->user()->email}}</a></li>
                <li>w: <a href="http://www.bloggs.com">www.bloggs.com</a></li>
                <li id="phone">m: {{$personalinfo->phone ?? 'Empty'}}</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Personal Profile</h1>
                </div>
                
                <div class="sectionContent">
                    <p id="career" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter Your Career Profile" class="editable editable-pre-wrapped editable-click">{{$personalstatements->statement ?? ''}}</p>
                </div>
            </article>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Work Experience</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">April 2011 - Present</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">Janruary 2007 - March 2011</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">October 2004 - December 2006</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>
            
            <div class="sectionContent">
                <ul class="keySkills">
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                </ul>
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>
            
            <div class="sectionContent">
                @if($education->count() > 0)
                    @php $education_number = 0;
                    $course = 0 @endphp
                @foreach($education as $educated)
                @php $education_number = $education_number + 1; 
                $course = $course + 1@endphp
                <article>
                    <h2 id="course{{$course}}">{{$educated->institution}}</h2>
                    <p class="subDetails" id="education{{$education_number}}">{{$educated->qualification}}</p>
                    <p id="start{{$education_number}}">{{$educated->start_date}} - {{$educated->grad_date}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article><!--//item-->
                @endforeach
                @else
                <article>
                    <h2>College/University</h2>
                    <p class="subDetails">Qualification</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article>
                @endif
            </div>
            <div class="clear"></div>
        </section>
        
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
@endsection