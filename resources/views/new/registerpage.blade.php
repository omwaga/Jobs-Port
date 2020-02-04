@extends('layouts.app')
@section('content')
<div class="container-fluid"  style="padding-top:7rem;">
  <div class="row">
    <div class="col-sm-6 bg-light">
    	<h5 class="text-center">Create Your ccount </h5>
      		<form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
    <div class="col-sm-6 bg-light">
         <h5 class="text-center">Quick Sign up</h5><hr style="border:1px solid #000;"><p class="text-center"><a class="btn btn-danger btn-md text-white text-center"style="border-radius:0px;" href="{{route('google.login')}}"><i class="fab fa-google-plus-g"></i> Sign Up with Google</a></p>
            <p class="text-center">Have an account?</p>
      <p class="text-center"><a href="{{route('login')}}" class="text-white btn btn-sm bg-danger">Login</a></p>
    </div>
  </div>
</div>
@endsection


