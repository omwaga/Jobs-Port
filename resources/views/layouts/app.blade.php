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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Qwigley&display=swap" rel="stylesheet">
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
    <link href="{{ asset('css/jobseekar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('css/accordion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/howit.css') }}" rel="stylesheet">
     <link href="{{ asset('css/package.css') }}" rel="stylesheet">
     <link href="{{ asset('css/beautify.css') }}" rel="stylesheet">
     <!--<link id="theme-style" rel="stylesheet" href="assets/css/pillar-2.css">-->
     
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
        $('#editex').ckeditor();
        $('#article-ckeditor').ckeditor();
        $('#editass').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
<!-- Bootstrap Date-Picker Plugin -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>-->

       <script>
           // Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}
</script>


<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142371933-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142371933-1');
</script>
<!--endofgoogle analytics-->
<!--hotjar integration-->
<!-- Hotjar Tracking Code for https://thenetworkedpros.com/ -->
 <script>
//     (function(h,o,t,j,a,r){
//         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
//         h._hjSettings={hjid:1557665,hjsv:6};
//         a=o.getElementsByTagName('head')[0];
//         r=o.createElement('script');r.async=1;
//         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
//         a.appendChild(r);
//     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
// </script>
<!--end of hotjar integration-->
<!--google adsense intergration-->

<script data-ad-client="ca-pub-5156056510965897" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--<script data-ad-client="ca-pub-9415122333094581" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!--end of google adsense integration-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dc0190de4c2fa4b6bd9e3ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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

	<script>
  AOS.init();
</script>

</body>

</html>
