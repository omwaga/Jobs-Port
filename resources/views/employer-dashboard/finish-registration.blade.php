
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- <link href="{{ asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css')}}">
    <title>The NetworkedPros - Employer Dashboard</title>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
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

<body>


   <!--Start login Section-->
   <section class="login-section pt-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-6">

                <div class="logo p-3" style="background-color: #005691">
                   <img src="{{asset('Images/logo/log.png')}}"  alt="logo"/>
               </div>                        

               <h3 class="text-center">Finish Registration</h3>
               <p class="text-center">Upload the following Documents to verify your company details</p>
               <form method="POST" action="{{route('employer-upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Business Permit</label>
                    <input type="file" name="business_permit" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Certificate of Incorporation</label>
                    <input type="file" name="certificate" class="form-control" >
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <a href="{{route('employdashboard')}}">Skip for Now</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input type="submit" value="Submit Details" class="btn btn-primary btn-block" >
                     </div>
                 </div>
             </div>

         </form>

     </div>

 </div>
</div>
</section>
<!--End login Section-->




<!--Begin core plugin -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- End core plugin -->

</body>

</html>
