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
    <script src="{{ asset('js/partners.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Qwigley&display=swap" rel="stylesheet"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--homeslider-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
  $(function() {
    if(cookieOrLocalStorageVariable) {
       $('#myModal').modal(options);
    }
});
</script>

</body>

</html>
