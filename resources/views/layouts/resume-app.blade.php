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
     
</head>
<body style="background-color: #fff; padding-top: 2rem;">
    <div id="app">
    @include('navigation.navbar')
        <main class="py-4">
            @yield('content')
        </main>
         
    </div>
    
    @include('footer.footer')
 
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="js/main.js"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
