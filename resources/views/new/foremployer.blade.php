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
		<div class="col-md-6" style="padding-top: 7rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 86, 135, 1)), url({{asset('Images/employer.svg')}})">
			<div class="shadow-lg p-3 mb-3">
				<div class="row" align="center">
					<div class="col-md-12">
						<h4 class="text-white"> WE ARE THERE FOR YOU!</h4>
						<ul style="list-style: none" class="text-white">
							<li><i class="fa fa-check text-danger" aria-hidden="true"></i>Post and Manage Jobs.</li>
							<li><i class="fa fa-check text-danger" aria-hidden="true"></i>Create Candidate Talent Pools.</li>
							<li><i class="fa fa-check text-danger" aria-hidden="true"></i>Manage Your Applicants.</li>
							<li><i class="fa fa-check text-danger" aria-hidden="true"></i>Candidate Express Recruitment.</li>
						</ul>
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