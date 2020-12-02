<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
  {!! SEOMeta::generate() !!}
  <link rel="shortcut icon" href="/Images/logo/Networked.jpg">
  <link rel="shortcut icon" href="{{asset('Images/logo/Networked.jpg')}}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link type="text/css" rel="stylesheet" href="resume/style.css">
  
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- google fonts -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

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
  <link href="{{ asset('css/button.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

  <script src="https://www.google.com/recaptcha/api.js"></script>
  
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
      OneSignal.init({
        appId: "a78997e7-23a2-4b7a-ade4-06223bd21cda",
      });
    });
  </script>

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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142371933-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142371933-1');
  </script>

  <script data-ad-client="ca-pub-9415122333094581" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

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
  <!-- carousel -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function ()
    {
      jQuery('select[name="country"]').on('change',function(){
       var countryID = jQuery(this).val();
       if(countryID)
       {
        jQuery.ajax({
         url : 'dropdownlist/getstates/' +countryID,
         type : "GET",
         dataType : "json",
         success:function(data)
         {
          console.log(data);
          jQuery('select[name="state"]').empty();
          jQuery.each(data, function(key,value){
           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
         });
        }
      });
      }
      else
      {
        $('select[name="state"]').empty();
      }
    });
    });
  </script>

</body>

</html>
