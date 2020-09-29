@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 7rem;">
	<div class="row justify-content-center">
		<div class="col-md-6"  align="center">
			<div class="shadow-lg p-3">
				<h5 style="color:#0B0B3B;">{{ __('Login') }}</h5>
				<p>{{ __('Hire top employees form the East African Region.') }}</p>
				<small>We are there for you, every step of the way..</small>
				<hr>

				@include('success')
				@include('errors')
				<div class="card-body">
					<form action="{{route('admin.login.submit')}}" method="post">
						@csrf
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address:') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border-radius:0px;">

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border-radius:0px;">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-2">
								<button type="submit" class="btn btn-primary btn-block" style="border-radius:0px;">
									{{ __('Login to Post a Job') }}
								</button>

								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
								@endif
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
						<h4 class="text-center"> New to NetworkedPros?</h4><br>
						<div class="list-group">
							<div class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">Express Recruitment</h5>
								</div>
								<p class="mb-1"><i class="fa fa-check text-danger" aria-hidden="true"></i>Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process.</p>
							</div>
							<div class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">Job Posting Services</h5>
								</div>
								<p class="mb-1"><i class="fa fa-check text-danger" aria-hidden="true"></i>Job Posting Services
								Post jobs on the portal and reach widely to the EA region.(Whether posted in the portal or elsewhere) and select candidates from within the portal using the recruitment engine.</p>
							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-md-12" align="center">
								<a href="{{route('hirre')}}" class="btn text-white btn-danger">Get Started For Free</a>
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