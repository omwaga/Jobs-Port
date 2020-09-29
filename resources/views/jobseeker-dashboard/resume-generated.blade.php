
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

  <title></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
  <link rel="stylesheet" type="text/css" href="resume/resume.css" media="all" />

</head>
<body>

<div class="yui-t7">
  <div id="inner">
  
    <div id="hd">
      <div class="yui-gc">
        <div class="yui-u first">
          <h1>{{auth()->user()->name}}</h1>
          <h2>Web Designer, Director</h2>
        </div>
      </div><br><!--// .yui-gc -->
      <div class="">
            <div class="col-md-6">
              <label><strong>Name:</strong> {{$personalinfo->name ?? ''}}</label><br>
                  <label><strong>Email:</strong> {{$personalinfo->email ?? ''}}</label><br>
                  <label><strong>Phone Number:</strong> {{$personalinfo->phone?? ''}}</label><br>
                  <label><strong>ID/Passport Number:</strong> {{$personalinfo->id_pass ?? ''}}</label><br>
                  <label><strong>Date of Birth:</strong> {{$personalinfo->dob?? ''}}</label><br>
            </div>
            <div class="col-md-6">
              <label><strong>Marital Status:</strong> {{$personalinfo->marital_status ?? ''}}</label><br>
                <label><strong>Religion:</strong> {{$personalinfo->religion ?? ''}}</label><br>
                <label><strong>Gender:</strong> {{$personalinfo->gender ?? ''}}</label><br>
                <label><strong>Nationality:</strong> {{$personalinfo->nationality ?? ''}}</label><br>
                <label><strong>City:</strong> {{$personalinfo->city ?? ''}}</label><br>
                <label><strong>Postal Address:</strong> {{$personalinfo->postal_address ?? ''}}</label><br>
                <label><strong>Postal Code:</strong> {{$personalinfo->postal_code ?? ''}}</label><br>
            </div>
          </div>
    </div><!--// hd -->

    <div id="bd">
      <div id="yui-main">
        <div class="yui-b">

          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Profile</h2>
            </div>
            <div class="yui-u">
              <p class="enlarge">
                {!!$personalstatements->statement!!} 
              </p>
            </div>
          </div><!--// .yui-gf -->

          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Skills</h2>
            </div>
            <div class="yui-u">
                  @foreach($skills as $skill)
                  <h2>{{$skill->skillname}}</h2>
                  <p>Assertively exploit wireless initiatives rather than synergistic core competencies.  </p>
                  @endforeach
            </div>
          </div><!--// .yui-gf -->

          <div class="yui-gf">
  
            <div class="yui-u first">
              <h2>Experience</h2>
            </div><!--// .yui-u -->

            <div class="yui-u">
              @foreach($experience as $experienced)
              <div class="job">
                <h2>{{$experienced->employer}}</h2>
                <h3>{{$experienced->position}}</h3>
                <h4>{{$experienced->start_date}} - {{$experienced->end_date}}</h4>
                <p>{!!$experienced->roles!!}</p>
              </div>
              @endforeach
            </div><!--// .yui-u -->
          </div><!--// .yui-gf -->


          <div class="yui-gf last">
            <div class="yui-u first">
              <h2>Education</h2>
            </div>
            @foreach($education as $educated)
            <div class="yui-u">
              <h2>{{$educated->institution}}</h2>
              <h3>{{$educated->qualification}} &mdash; <strong>{!!$educated->score!!}</strong> </h3>
            </div>
            @endforeach
          </div><!--// .yui-gf -->


        </div><!--// .yui-b -->
      </div><!--// yui-main -->
    </div><!--// bd -->

    <div id="ft">
      <p>Resume Designed By; <a href="thenetworkedpros.com">The NetworkedPros</a></p>
    </div><!--// footer -->

  </div><!-- // inner -->


</div><!--// doc -->


</body>
</html>