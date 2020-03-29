@extends('layouts.resume-app')
@section('content')
<div class="container" style="padding-top: 6rem;">
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <!-- <img class="profile" style="width: 100px; height: 100px" src="resume/images/profile.png" alt="" /> -->
                <h1 class="name">Alan Doe</h1>
                <h3 class="tagline">Full Stack Developer</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com">alan.doe@website.com</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a></li>
                    <li class="website"><i class="fas fa-globe"></i><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/" target="_blank">portfoliosite.com</a></li>
                    <li class="linkedin"><i class="fab fa-linkedin-in"></i><a href="#" target="_blank">linkedin.com/in/alandoe</a></li>
                    <li class="github"><i class="fab fa-github"></i><a href="#" target="_blank">github.com/username</a></li>
                    <li class="twitter"><i class="fab fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>
                    <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">superuser</a></td>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
                    <h4 class="degree">MSc in Computer Science</h4>
                    <h5 class="meta">University of London</h5>
                    <div class="time">2011 - 2012</div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">BSc in Applied Mathematics</h4>
                    <h5 class="meta">Bristol University</h5>
                    <div class="time">2007 - 2011</div>
                </div><!--//item-->
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
                <h2 class="container-block-title">Interests</h2>
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
                  
  <tr><td><span class="badge">2</span> <span id="w2_t">Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat ma</span></td><td>door(w:36;h:86;)</td><td>dishwasher, sink</td></tr>
                    <a id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click" data-original-title="" title="">Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/orbit-free-resume-cv-bootstrap-theme-for-developers/" target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</a>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Lead Developer</h3>
                            <div class="time">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>  
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Senior Software Engineer</h3>
                            <div class="time">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class="company">Google, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class="company">Amazon, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
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
                    <div class="item">
                        <h3 class="level-title">Python &amp; Django</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                              
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Angular</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
                  <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                                
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                                  
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="progress level-bar">
                <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>


    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="https://raw.githubusercontent.com/fooplugins/FooTable/V2/dist/footable.min.js" type="text/javascript"></script>
 
    
    <table class="footable table table-hover">
<thead>
  <tr>
    <th>Wall #</th>
    
    <th data-hide="phone">Wall objects </th>
    <th data-hide="phone,tablet">Appliences</th>
  </tr>
</thead>
<tbody>
  <tr>
      <td>
          <span class="badge">1</span> 
          <a id="add_wall_measurements"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add wall measurements: </a>
      </td>
      <td>
          <a href="#" id="add_wall_objects"><span class="glyphicon glyphicon-plus"></span> Add wall objects: </a>
          <div id="wall_objects"></div> 
      </td>
      <td>
          <a href="#" id="add_apliences"><span class="glyphicon glyphicon-plus"></span> Add Appliences: </a>
          <div id="applience_list"></div> 
      </td>
      
  </tr>
  <tr><td><span class="badge">2</span> <span id="w2_t">Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat ma</span></td><td>door(w:36;h:86;)</td><td>dishwasher, sink</td></tr>
  <tr><td><span class="badge">3</span> <span id="w3_t">w:120; h:96; a:90</span></td><td>soffit(w:12;h:12;d:12 along the wall)</td><td>refrigerator(standard w: 36" h:71"</td></tr>
</tbody>
</table>

 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other commercial license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="#" target="_blank">The NetworkedPros</a></small>
        </div><!--//container-->
    </footer>
    </div>
    <script type="text/javascript">
          //turn to inline mode
    
    
    $(document).ready(function() {
     
        
        $.fn.editable.defaults.mode = 'inline';
        $('#username').editable();
        
        $('#username').editable({
        type: 'text',
        pk: 1,
        url: '/post',
        title: 'measurements'
        });
        
        //tooltips
        $("#add_wall_measurements, #w2_t, #w3_t").attr("title",'Click to edit: Width = 120" Height = 96" Angle b/n wall 1 and 2 = 90"').tooltip().editable();
        
        // ===== Communication with server=======//
         //ajax call simulation
       
        // ===== Wall Objects =======//
            $('#add_wall_objects').editable({
                type: 'checklist',    
                source: [
                         {value: 0, text: 'Window'},
                         {value: 1, text: 'Door'},
                         {value: 2, text: 'Obsticle/Soffit'} 
                       ],
                  
                pk: 1,    
                title: 'Select wall objects',
                placement: 'right',
                display: function(value, sourceData) {
                    var $el = $('#wall_objects'),
                        checked, html = '';
                    if(!value) {
                        $el.empty();
                        return;
                    }            
                    
                    checked = $.grep(sourceData, function(o){
                          return $.grep(value, function(v){ 
                               return v == o.value; 
                          }).length;
                    });
                    
                    $.each(checked, function(i, v) { 
                        html+= '<li>'+$.fn.editableutils.escape(v.text)+'</li>';
                    });
                    if(html) html = '<ul>'+html+'</ul>';
                    $el.html(html);
                }
            });
              // ===== Wall Objects =======//
              
              // ===== Appliences =======//
            $('#add_apliences').editable({
                type: 'checklist',    
                source: [
                         {value: 0, text: 'Sink'},
                         {value: 1, text: 'Dishwasher'},
                         {value: 2, text: 'Range'},
                         {value: 3, text: 'Cooktop'},
                         {value: 4, text: 'Hood'},
                         {value: 5, text: 'Microwave'},
                         {value: 5, text: 'Refrigerator'},
                       ],
                  
                pk: 1,    
                title: 'Select wall objects',
                placement: 'right',
                display: function(value, sourceData) {
                    var $el = $('#applience_list'), checked, html = '';
                   
                   if(!value) { $el.empty();return;}            
                    
                    checked = $.grep(sourceData, function(o){
                          return $.grep(value, function(v){ 
                               return v == o.value; 
                          }).length;
                    });
                    
                    $.each(checked, function(i, v) { 
                        html+= '<li>'+$.fn.editableutils.escape(v.text)+'</li><div id="'+$.fn.editableutils.escape(v.text)+'"></div>';
                        
                        
                    });
                    if(html) html = '<ul>'+html+'</ul>';
                    $el.html(html);
                }
            });
            function make_appliences_editable(applience){
            //alert("applinece = " + applience);
            switch (applience) {
            case "Range":
                var html;
                $("#Range").html('<ul><li>Type: <a href="#" data-type="select" id="range_type"></a></li><li>Size: <a href="#" data-type="select" id="range_size"></a></li></ul>');
                
                        var sources = {
                        1: [{value: 24, text: 24}, {value: 30, text: "30 standard"},{ value:33, text:33},{value:36, text:36},{value:"sustom",text:"custom"}], 
                        2: [{value: 24, text: 24}, {value: 30, text: "30 standard"},{ value:33, text:33},{value:36, text:36},{value:"sustom",text:"custom"}] 
                        };
                        
                        $('#range_type').editable({
                          url: '/post',    
                          pk: 1,
                          source: [{value: 1, text: 'Gas'}, {value: 2, text: 'electric'}],
                          title: 'Select type of range',
                          success: function(response, newValue) {
                             $('#range_size').editable('option', 'source', sources[newValue]);  
                             $('#range_size').editable('setValue', null);
                          }
                        });
                        
                        $('#range_size').editable({
                          url: '/post',    
                          pk: 1,    
                          title: 'Select Range Size',
                          sourceError: 'Please, select range type first' 
                        });
                break;
            case 1:
                day = "Monday";
                break;

    }
            }; 
              // ===== appliences  =======//
              
                 $('.footable').footable();
              
    }); //end doc ready
    
   





    </script>
@endsection
