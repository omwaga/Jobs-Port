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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{asset('assets/plugins/bootstrap-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- <link id="theme-style" rel="stylesheet" href="resume/css/orbit-1.css"> -->
    <link href="{{ asset('resume/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

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
    <div id="app">
        @include('navigation.resume-navbar')
        <main style="padding-top: 9rem; ">
            @yield('content')
        </main>
         
    </div>
    
    @include('footer.footer')

<!--Begin core plugin -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <!-- <script  src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script> -->
    <!-- End core plugin -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script>
    <script src="{{asset('assets/pages/bootstrap-editable-custom.js')}}"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

</body>

</html>
