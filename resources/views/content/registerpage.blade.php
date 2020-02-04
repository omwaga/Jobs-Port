<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{asset('Images/logo/Networked.jpg')}}">
<head>
	<title>Register User</title>
	<style type="text/css">
		.bg, .bg-filter {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
.bg-filter {
  z-index: -99;
}

	</style>
</head>
<body>
<div class="bg-filter" style="background-color:#0C345D;">
</div>
<div class="container-fluid">
  <div class="row" style="padding-top: 10%;">
    <div class="col-sm-6 bg-light" style="margin-left:25%;margin-bottom:5%;">
         <h5 class="text-center">Quick Sign up</h5><hr style="border:1px solid #000;">
            <p class="text-center">
      	Have an account?
      </p>
      <p class="text-center"><a href="{{route('login')}}" class="text-white btn btn-sm bg-danger">Login</a></p>
      <p class="text-center"><a class="btn btn-danger btn-md text-white text-center"style="border-radius:0px;" href="{{route('google.login')}}"><i class="fab fa-google-plus-g"></i> Sign Up with Google</a></p>
          <!--<p class="text-center"> <a class="btn btn-success btn-md text-white" style="border-radius:0px;">Sign Up with facebook</a></p><hr>-->
    	<h5 class="text-center">Create Your ccount </h5>
      		<form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border-radius:0px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"style="border-radius:0px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right ">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"style="border-radius:0px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"style="border-radius:0px;">
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-bottom:3%;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"style="border-radius:0px;">
                                    <i class="fas fa-user-plus"></i> {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
    <!--<div class="col-sm-3">-->
    <!--  <h5 class="">Quick Sign up</h5><hr style="border:1px solid #000;">-->
    <!--        <p class="">-->
    <!--  	Have an account?<a href="{{route('login')}}" class="text-white btn btn-sm bg-danger">Login</a>-->
    <!--  </p>-->
    <!--  <p><a class="btn btn-danger btn-md text-white"style="border-radius:0px;" href="{{route('google.login')}}"><i class="fab fa-google-plus-g"></i> Sign Up with Google</a></p>-->
    <!--      <p> <a class="btn btn-success btn-md text-white" style="border-radius:0px;">Sign Up with facebook</a></p><hr>-->
    <!--</div>-->
  </div>
</div>
</body>
</html>



