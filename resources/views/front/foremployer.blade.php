@extends('layouts.app')
@section('content')
<div class="container" style=" padding-top: 7rem;">
	<div class="row justify-content-center">
		<div class="col-md-8"  align="center">
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

								<a href="{{route('hirre')}}" class="btn text-white btn-danger btn-block">New to  The NetworkedPros? Get Started For Free</a>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection