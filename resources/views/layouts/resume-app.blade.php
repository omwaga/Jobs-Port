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
    <link type="text/css" rel="stylesheet" href="resume/style.css">
    
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
    <link href="{{ asset('css/jobs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/testimonials.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resume-samples.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('css/accordion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
     <link href="{{ asset('css/package.css') }}" rel="stylesheet">
     <link href="{{ asset('css/beautify.css') }}" rel="stylesheet">
     <link href="{{ asset('css/home-steps.css') }}" rel="stylesheet">
     <!--<link id="theme-style" rel="stylesheet" href="assets/css/pillar-2.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style type="text/css">
        .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
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
  <!-- <script type="text/javascript">
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
  </script> -->
        <!-- carousel -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!-- <script type="text/javascript">
  $(function() {
    if(cookieOrLocalStorageVariable) {
       $('#myModal').modal(options);
    }
});
</script> -->

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
