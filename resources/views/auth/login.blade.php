@extends('layouts.app')

@section('content')
<div class="container" style=" padding-top: 7rem;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 style="color:#0B0B3B; padding-top:1em;" align="center">{{ __('Hello!') }}</h5>
                <h5 style="color:#0B0B3B;" align="center">{{ __('Welcome Back') }}</h5>
                <p align="center">{{ __('You are just a step away from your dream job.') }}</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"  style="border-radius: 0px;">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-danger text-white" href="{{route('google.login')}}"  style="border-radius: 0px;"><i class="fab fa-google-plus-g"></i> Login with Google</a>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>


                    <a href="{{route('Register')}}" class="btn text-white float-right" style="background-color:#0B0B3B ">Not Registered ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
		    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('Images/find-better.svg')}}" alt="First slide" style="width:300px; height:300px">
  <h5 align="center">Find Better</h5>
  <p align="center">Find Better jobs that match your skills from top Employers in East Africa.</p>
  </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Images/quick-apply.svg')}}" alt="Second slide" style="width:300px; height:300px">
  <h5 align="center">Apply Quickly</h5>
  <p align="center">Save time and effort with The NetworkedPros Quick Apply.</p>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('Images/job-alerts.svg')}}" alt="Third slide" style="width:300px; height:300px">
  <h5 align="center">Job Alerts</h5>
  <p align="center">Get real time alerts for hot new jobs.</p>
   </div>
  </div>
</div>
		</div>
	</div>
	        </div>
    </div>
</div>
@endsection
