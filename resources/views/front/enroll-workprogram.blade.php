@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 6rem">
	<div class="row">
		<div class="col-lg-10 offset-lg-1 text-left">
			<h4 class="display-6 font-weight-bold">Enroll to the Work Readiness program</h4>
			<form method="Post" action="{{route('enrollwork')}}">
				@include('errors')
				@csrf
				<div class="form-group">
					<label>Full Name:</label>
					<input class="form-control @error('full_name') is-invalid @enderror" value="{{old('full_name')}}" type="text" name="full_name">
					@error('full_name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Email Address:</label>
					<input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" type="email" name="email">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Phone Number:</label>
					<input class="form-control @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}" type="text" name="phone_number">
					@error('phone_number')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label>Country:</label>
					<select name="country" class="form-control">
						<option value="">Select Country</option>
						@foreach($countries as $country)
						<option value="{{$country->id}}">{{$country->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Select Programs to Enroll:</label><br>
					<label class="checkbox-inline pl-3">
						<input  type="checkbox" value="Career Planning" name="career_planning">Career Planning
					</label>
					<label class="checkbox-inline pl-3">
						<input  type="checkbox" value="Job Preparation" name="job_preparation">Job Preparation
					</label>
					<label class="checkbox-inline pl-3">
						<input  type="checkbox" value="Workplace Skills" name="workplace_skills">Workplace Skills
					</label>
					<label class="checkbox-inline pl-3">
						<input  type="checkbox" value="Personal Development" name="personal_development">Personal Development
					</div>
				</label>
				<label class="checkbox-inline pl-3">
					<input  type="checkbox" value="Basic IT Skills for the Modern Office" name="it_skills">Basic IT Skills for the Modern Office
				</label>
				<label class="checkbox-inline pl-3">
					<input  type="checkbox" value="Business Skills" name="business_skills">Business Skills (Optional)
				</label>
				<label class="checkbox-inline pl-3">
					<input  type="checkbox" value="Consultancy Skills" name="consultancy_skills">Consultancy Skills (Optional)
				</label>
				<div>
					<button class="btn btn-success">Submit</button>
				</div>
			</form>

		</div>
	</div>
</div>
@endsection