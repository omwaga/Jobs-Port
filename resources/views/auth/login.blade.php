@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 7rem;">
    <div class="row justify-content-center">
        <div class="col-md-6"  align="center">
            <div class="shadow-lg p-3">
                <h5 style="color:#0B0B3B;">{{ __('Login') }}</h5>
                <p>{{ __('You are just a step away from your dream job.') }}</p>
                
                <div class="col-md-8">
                    <a class="btn btn-danger btn-block" href="{{route('google.login')}}"><i class="fa fa-google"></i> Login with Google</a>
                </div>
                <small>All your activity will remain private.</small>
                <hr>
                <b>OR</b> 

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address:') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block"  style="border-radius: 0px;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="shadow-lg p-3 mb-3">
                <div class="row" align="left">
                    <div class="col-md-12">
                        <h4 class="text-center"> New to NetworkedPros?</h4>
                        <div class="list-group">
                          <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">Express Recruitment</h5>
                          </div>
                          <p class="mb-1"><i class="fa fa-check text-danger" aria-hidden="true"></i>Sit back, relax and let the networked professionals do the job searching for you! Create your career profile today and be discover by leading employers who visit our service every day to recruit trusted professionals</p>
                      </div>
                      <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Job Vacancies</h5>
                      </div>
                      <p class="mb-1"><i class="fa fa-check text-danger" aria-hidden="true"></i>Discover hundreds of jobs and create alerts to notify you when jobs matching your qualifications are advertised</p>
                  </div>
                  <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">Work Readiness Program</h5>
                  </div>
                  <p class="mb-1"><i class="fa fa-check text-danger" aria-hidden="true"></i>Are you a fresh graduate who has not worked before? Enroll for our NP Work Readiness Training worth USD 1,000 in the market for free!</p>
              </div>
          </div>

          <div class="row" style="padding-top: 1rem">
            <div class="col-md-12" align="center">
                <a href="{{route('Register')}}" class="btn text-white btn-danger">Register for Free</a>
            </div>
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
