@extends('layouts.app')
@section('content')
<div class="container-fluid"  style="padding-top:6rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3" align="center">

             <h5 class="text-center">Register</h5>
             <a class="btn btn-danger btn-md text-white"style="border-radius:0px;" href="{{route('google.login')}}"><i class="fa fa-google"></i> Register with Google</a>

             <hr>
             <h5 class="text-center">OR </h5>
             <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right ">{{ __('Full Name:') }}</label>

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
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address:') }}</label>

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
                    <label for="password" class="col-md-4 col-form-label text-md-right ">{{ __('Password:') }}</label>

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
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password:') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0" style="margin-bottom:3%;">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-block"style="border-radius:0px;">
                            <i class="fa fa-user-plus"></i> {{ __('Sign Up') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6" style="padding-top: 7rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 86, 135, 1)), url({{asset('Images/recruit/background.jpg')}})">
            <div class="shadow-lg p-3 mb-3">
                <div class="row" align="center">
                    <div class="col-md-12">
                        <h4 class="text-white">BE DISCOVERED BY EMPLOYERS</h4>
                        <ul style="list-style: none" class="text-white">
                            <li><i class="fa fa-check text-danger" aria-hidden="true"></i>One click apply using NetworkedPros profile.</li>
                            <li><i class="fa fa-check text-danger" aria-hidden="true"></i>Get relevant job recommendations.</li>
                            <li><i class="fa fa-check text-danger" aria-hidden="true"></i>Showcase profile to top employers and consultants.</li>
                            <li><i class="fa fa-check text-danger" aria-hidden="true"></i>Know application status on applied jobs.</li>
                        </ul>
                        <hr>

                        <div class="row">
                            <div class="col-md-12" align="center">
                                <a href="{{route('login')}}" class="btn text-white btn-danger">Already registered ? Login"</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


