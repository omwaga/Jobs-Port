<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'The NetworkedPros') </title>
    <link rel="shortcut icon" href="/images/logo/Networked.jpg">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
      <link rel="shortcut icon" href="{{asset('Images/logo/Networked.jpg')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jobs.js') }}" defer></script>
    <script src="{{ asset('js/partners.js') }}" defer></script>
    
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--homeslider-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/jobs.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/resume-samples.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('css/accordion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
     <link href="{{ asset('css/package.css') }}" rel="stylesheet">
     <link href="{{ asset('css/beautify.css') }}" rel="stylesheet">
     <link href="{{ asset('js/resume_view.js') }}" rel="stylesheet">
     <link href="{{ asset('css/home-steps.css') }}" rel="stylesheet">
     <!--<link id="theme-style" rel="stylesheet" href="assets/css/pillar-2.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <style type="text/css">
        .testimonial_section {
  display: block;
  overflow: hidden;
}
.testimonial_section:after {
  display: block;
  clear: both;
  content: "";
}
.testimonial_section .about_content {
  background-color: #020d26;
  padding-top: 77px;
  padding-right: 210px;
  padding-bottom: 62px;
  position: relative;
}
.testimonial_section .about_content .background_layer {
  background-color: #020d26;
  width: auto;
  margin-left: -200px;
  right: 0;
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
}
.testimonial_section .about_content .layer_content {
  position: relative;
  z-index: 9;
  height: 100%;
}
.testimonial_section .about_content .layer_content .section_title {
  margin-bottom: 24px;
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title:after {
  display: block;
  clear: both;
  content: "";
}
.testimonial_section .about_content .layer_content .section_title h5 {
  color: #fff;
  font-family: "Open Sans";
  font-weight: 400;
  font-size: 15px;
  line-height: 28px;
  color: #818a8f;
  margin-top: -5px;
  margin-bottom: 6px;
}
.testimonial_section .about_content .layer_content .section_title h2 {
  font-family: "Titillium Web";
  font-weight: 300;
  font-size: 45px;
  line-height: 50px;
  padding-bottom: 51px;
  margin-bottom: 0px;
  color: #fff;
}
.testimonial_section .about_content .layer_content .section_title h2 strong {
  font-weight: 600 !important;
  width: 100%;
  display: block;
}
.testimonial_section .about_content .layer_content .section_title .heading_line {
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title .heading_line span {
  transition: all 0.5s ease-in-out 0s;
  position: relative;
}
.testimonial_section .about_content .layer_content .section_title .heading_line span:after {
  content: "";
  right: auto;
  left: 69px;
  position: absolute;
  bottom: 28px;
  width: 17px;
  margin-left: 0;
  border-bottom-width: 3px;
  border-bottom-color: #cacaca;
  border-bottom-style: solid;
}
.testimonial_section .about_content .layer_content .section_title .heading_line:after {
  content: "";
  left: 1%;
  margin-left: 0;
  position: absolute;
  bottom: 28px;
  width: 59px;
  border-bottom-width: 3px;
  border-bottom-style: solid;
  border-bottom-color: #ff5e14;
}
.testimonial_section .about_content .layer_content .section_title p {
  color: #fff;
  margin: 0 0 15px;
}
.testimonial_section .about_content .layer_content a {
  color: #fff;
  text-transform: capitalize;
  font-size: 15px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s;
}
.testimonial_section .about_content .layer_content a i {
  font-size: 18px;
  vertical-align: middle;
}
.testimonial_section .about_content .layer_content a:hover {
  color: #ff5e14;
}
.testimonial_section .testimonial_box {
  margin-top: 60px !important;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container {
  background-color: #ff5e14;
  margin-left: -170px !important;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .background_layer {
  background-color: #ff5e14;
  width: auto;
  margin-right: -200px;
  right: 0;
  background-image: url(../images/map.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content {
  position: relative;
  z-index: 9;
  height: 100%;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel {
  display: block;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials {
  margin: 10px 0 10px 0;
  padding: 62px 0px 72px 50px;
  position: relative;
  text-align: center;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content {
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.13);
  margin-left: 150px;
  margin-top: 69px;
  padding: 45px 40px 45px 40px;
  z-index: 1;
  position: relative;
  background-color: #fff;
  transition: all 0.5s ease-in-out 0s;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption {
  margin-bottom: 15px;
  position: relative;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption:after {
  content: "";
  width: 30px;
  display: block;
  height: 2px;
  text-align: center;
  left: 46%;
  margin-top: 6px;
  background-color: #ff5e14;
  position: absolute;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption h6 {
  padding-top: 0;
  margin-bottom: -5px;
  font-size: 19px;
  font-weight: 600;
  line-height: 24px;
  color: #020d26;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content .testimonial_caption span {
  font-size: 12px;
  color: #9f9f9f;
  margin: 0;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .testimonial_content p {
  padding: 0;
  margin: 0;
  padding-top: 10px;
  font-size: 16px;
  line-height: 28px;
  font-weight: 400;
  color: #5d6576;
  font-style: italic;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .images_box .testimonial_img {
  border: none;
  position: absolute;
  top: 0;
  left: 55px;
  top: 80px;
}
.testimonial_section .testimonial_box .testimonial_container .layer_content .testimonial_owlCarousel .testimonials .images_box .testimonial_img img {
  border: 5px solid #fff;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
  width: 35%;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-prev {
  position: absolute;
  top: 165px;
  right: 42px;
  border-radius: 0;
  background: #ff5e14;
  display: block;
  outline: 0;
  width: 34px;
  line-height: 34px;
  height: 34px;
  color: #fff;
  font-size: 23px;
  margin-top: -20px;
  transition: all 0.3s ease-in-out;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-prev:hover {
  background: #020d26;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-next {
  position: absolute;
  top: 165px;
  right: 5px;
  border-radius: 0;
  display: block;
  background: #ff5e14;
  outline: 0;
  width: 34px;
  text-align: center;
  line-height: 34px;
  height: 34px;
  color: #fff;
  font-size: 23px;
  margin-top: -20px;
  transition: all 0.3s ease-in-out;
}
.testimonial_section .testimonial_box .testimonial_container .owl-nav .owl-next:hover {
  background: #020d26;
}

@media all and (max-width: 991px) {
  .testimonial_section .about_content {
    padding-right: 15px !important;
  }
  .testimonial_section .about_content .background_layer {
    width: 200% !important;
  }
  .testimonial_section .testimonial_box {
    margin-top: 0 !important;
  }
  .testimonial_section .testimonial_box .background_layer {
    width: 200% !important;
    margin-left: -200px;
  }
  .testimonial_section .testimonial_box .about_content {
    padding-left: 15px !important;
    padding-right: 15px !important;
    margin-top: 28% !important;
  }
  .testimonial_section .testimonial_box .testimonial_container {
    margin-left: -15px !important;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials {
    margin: 0px 0 20px 0;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials .testimonial_content {
    margin-left: -36px !important;
  }
  .testimonial_section .testimonial_box .testimonial_container .testimonials .images_box {
    display: none;
  }
}
    </style>
    <style type="text/css">
        

.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("{{asset('Images/cv2.jpg')}}");
    background-size: cover;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}


    </style>
     <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

h3{
    font-family: 'Poppins', sans-serif;
}

.social-box .box{
    background: #FFF;
    border-radius: 10px; 
    padding: 40px 10px;
    margin: 20px 0px;
    cursor: pointer;
    transition: all 0.5s ease-out;
}

.social-box .box:hover{
   box-shadow: 0 0 6px #4183D7;
}

.social-box .box .box-text{
    margin:20px 0px;
    font-size: 15px;
    line-height: 30px;
}

.social-box .box .box-btn a{
    text-decoration: none;
    color: #4183D7;
    font-size: 16px;
}
     </style>
     <style type="text/css">
#MiCarousel{
    margin-top: 30px;
    margin-bottom: 30px;
    -webkit-box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 38px -13px rgba(0,0,0,0.75);
}
.carousel-img{
    background-color: #000;
    color: #fff;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: absolute;    
    z-index: 2;
    -webkit-clip-path: polygon(0 0, 96% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
    opacity: 0.8;
}

.div-r{
    padding: 40px;
}

.carousel-title{
    font-size: 80px;
    font-weight: bold;
    margin-left: 20px;
    margin-top: 20px;
}

.carousel-pagination{
    background-color: #000 !important;
    width: 15px !important;
    height: 15px !important;
    border-radius: 100%;
    position: relative;
    bottom: -50px;
    opacity: 0.5;
}

.carousel-pagination.active{
    opacity: 1;   
}

.carousel-controls{
    display: none;
}
     </style>
     
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('#duties').ckeditor();
        $('#edesc').ckeditor();
        $('#summary').ckeditor();
        $('#article-ckeditor').ckeditor();
        $('#editass').ckeditor();
        $('.textarea').ckeditor(); // if class is prefered.
    </script>


</head>
<body style="background-color: #fff; padding-top: 2rem;">
    <!--Landbot io-->
<!--    <script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>-->
<!--<script>-->
<!--  var myLandbot = new LandbotPopup({-->
<!--    index: 'https://landbot.io/u/H-359158-3XNPTXBXE8PKJXOS/index.html',-->
<!--  });-->
<!--</script>-->
    <!--Landbot io-->

    <div id="app">
    @include('navigation.navbar')
        <main class="py-4">
            @yield('content')
        </main>
         
    </div>
    
    @include('footer.footer')
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
  })
  </script>
  <script type="text/javascript">
      $('.testimonial_owlCarousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:false,   
    smartSpeed: 3000, 
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  </script>
        <!-- carousel -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<script type="text/javascript">
  $(function() {
    if(cookieOrLocalStorageVariable) {
       $('#myModal').modal(options);
    }
});
</script>

</body>

</html>
