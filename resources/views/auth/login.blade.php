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
                        </div>
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <a href="{{route('Register')}}" class="btn text-white" style="background-color:#0B0B3B ">Not Registered ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-title">
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="fa fa-graduation-cap text-info" aria-hidden="true"></i> Get hired (Pros4hire) for regular gigs by leading institutions as well as individuals looking for trusted professionals for assignments </p>
                        <p><i class="fa fa-users text-info" aria-hidden="true"></i>Sit back, relax and let the networked professionals do the job searching for you! Create your career profile today and be discover by leading employers who visit our service every day to recruit trusted professionals  </p>
                        <p><i class="fa fa-volume-control-phone text-info" aria-hidden="true"></i> Create compelling CVs and cover letters for your next job applications using our Resume Builder. Over 10 templates available, all for free! </p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fa fa-flag text-info" aria-hidden="true"></i>Discover hundreds of jobs and create alerts to notify you when jobs matching your qualifications are advertised </p>
                        <p><i class="fa fa-bullseye text-info" aria-hidden="true"></i> Are you a fresh graduate who has not worked before? Enroll for our NP Work Readiness Training worth USD 1,000 in the market for free! </p>
                        <div class="box-btn">
                            <a class="btn btn-danger text-white btn-sm" href="{{route('Register')}}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
