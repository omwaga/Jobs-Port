<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : African Daisy 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111031

-->
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Africandaisy by TEMPLATED</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="page">
        <div id="content">
            <div class="post">
                <h2 class="title">Personal Information</h2>
                <div style="clear: both;">&nbsp;</div>
                <div class="entry">
                    <p style="width: 60%">{{$personalstatements->statement}}</p>
                </div>
            </div>
            <div class="post">
                <h2 class="title">Experience</h2>
                <p class="meta"><span class="date">November 07, 2011</span></p><br>
                <div style="clear: both;">&nbsp;</div>
                @foreach($experience as $experienced)
                <div class="entry">
                    <label style="width: 60%"><strong>Employer:</strong>{{$experienced->employer}}</label>
                    <label style="width: 60%"><strong>Position:</strong>{{$experienced->position}}</label>
                    <!-- <p style="width: 60%"><strong>Roles and Resposiblities:</strong>{{$experienced->roles}}</p> -->
                </div>
                @endforeach
            </div>
            <div class="post">
                <h2 class="title">Education</h2>
                <p class="meta"><span class="date">November 07, 2011</span></p><br>
                <div style="clear: both;">&nbsp;</div>
                @foreach($education as $educated)
                <div class="entry">
                    <label style="width: 60%"><strong>Institution:</strong>{{$educated->institution}}</label>
                    <label style="width: 60%"><strong>Qualification:</strong>{{$educated->Qualification}}</label>
                    <!-- <p style="width: 60%"><strong>Roles and Resposiblities:</strong>{{$experienced->roles}}</p> -->
                </div>
                @endforeach
            </div>
        </div>
        <!-- end #content -->
        <div id="sidebar">
            <ul>
                <li>
                    <h4>{{$personalinfo->name}}</h4>
                    <ul>
                        <li>{{$personalinfo->email}}</li>
                        <li><strong>Phone:</strong>{{$personalinfo->phone}}</li>
                        <li><strong>Gender:</strong>{{$personalinfo->gender}}</li>
                        <li><strong>Religion:</strong>{{$personalinfo->religion}}</li>
                        <li><strong>DOB:</strong>{{$personalinfo->dob}}</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end #sidebar -->
    </div>
    <!-- end #page -->
</div>
</body>
</html>
