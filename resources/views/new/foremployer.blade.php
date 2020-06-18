@extends('layouts.app')
@section('content')
<div class="social-box">
	<div class="container" style=" padding-top: 4rem;">
		<div class="row justify-content-center">
			<h5 style="color:#0B0B3B;">Search Best Talent with The NetworkedPro's Resume Database Access</h5>

			<div class="col-lg-6 col-xs-12 text-center">
				@include('success')
				@include('errors')
				<div class="box">
					<div class="box-title">
						<h5 style="color:#0B0B3B;">Login</h5>
					</div>
					<form action="{{route('admin.login.submit')}}" method="post">
						@csrf
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

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
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary" style="border-radius:0px;">
									{{ __('Login') }}
								</button>
								<a class="btn btn-danger text-white" style="border-radius:0px;" href="{{route('google.login')}}"><i class="fa fa-google-plus"></i>Google Login</a>

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

			<div class="col-lg-6 col-xs-12  text-center">
				<div class="box">
					<div class="box-title">
						<h5 style="color:#0B0B3B;"> Find Better Candidates, Faster.For employers who need great people.</h5>
						<h6>Reach out to millions of jobseekers and hire quickly with our fast and easy job posting services. </h6>
						<div class="row">
							<div class="col-md-6">
								<p><i class="fa fa-graduation-cap text-info" aria-hidden="true"></i>Post jobs on the portal and reach widely to the EA region</p>
								<p><i class="fa fa-users text-info" aria-hidden="true"></i> Receive applications for a job (Whether posted in the portal or elsewhere) and select candidates from within the portal using the recruitment engine. </p>
								<p><i class="fa fa-volume-control-phone text-info" aria-hidden="true"></i> Ready for hire professionals – The Pros4hire facility enables you to quickly and on demand hire trusted professionals who are guaranteed to deliver for temporally or periodic assignments (gigs)</p>
							</div>
							<div class="col-md-6">
								<p><i class="fa fa-flag text-info" aria-hidden="true"></i>Create a talent pool of candidates you’ll need in the future to support your business growth.</p>
								<p><i class="fa fa-bullseye text-info" aria-hidden="true"></i><b> Express recruitment -</b> Recruit faster through our vetted and ready for hire candidates without the need for advertising and minimize your risks, avoid the time consuming and rigorous interviewing process. </p>
								<p><i class="fa fa-pied-piper text-info" aria-hidden="true"></i> Manage your Applicants</p>

								<div class="box-btn">
									<a class="btn btn-danger text-white btn-sm" href="{{route('hirre')}}">Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="{{asset('Images/employer.svg')}}" class="img-fluid img-block">
		</div>		
	</div>
</div>
@endsection