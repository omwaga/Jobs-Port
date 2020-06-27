<div class="row">
	<div class="col-md-8">
		<p><i class="fa fa-graduation-cap text-info" aria-hidden="true"></i> Get hired (Pros4hire) for regular gigs by leading institutions as well as individuals looking for trusted professionals for assignments </p>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Basic Details</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Services</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				@include('errors')
				@include('success')
				<form method="POST" action="{{route('pros_details')}}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label>Full Names:</label>
							<input type="text" value="{{old('full_name')}}" class="form-control" name="full_name" required autofocus>
						</div>
						<div class="col-md-6">
							<label>Email Address:</label>
							<input type="text" value="{{old('email')}}" class="form-control" name="email" required autofocus>
						</div>
						<div class="col-md-6">
							<label>Country:</label>
							<select name="country" class="form-control">
								@foreach($countries as $country)
								<option value="{{$country->id}}">{{$country->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label>Phone Number:</label>
							<input type="text" value="{{old('phone_number')}}" class="form-control" name="phone_number" required autofocus>
						</div>
						<div class="col-md-6">
							<label>City:</label>
							<select name="city" class="form-control">
								@foreach($cities as $city)
								<option value="{{$city->id}}">{{$city->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6">
							<label>State:</label>
							<select name="state" class="form-control">
								@foreach($states as $state)
								<option value="{{$state->id}}">{{$state->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6">
							<label>ZIP:</label>
							<input type="text" value="{{old('zip_code')}}" class="form-control" name="zip_code" required="">
						</div>
					</div>
					<br>

					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				<p>Get Started by Listing a service that you offer. You need to list services to receive job matches and be found by the employers.</p>
				<form method="POST" action="#">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label>Title:</label>
							<input type="text" class="form-control" value="{{old('title')}}" name="title" required autofocus>
						</div>
						<div class="col-md-6">
							<label>Description:</label>
							<input type="text" class="form-control" value="{{old('description')}}" name="description" required autofocus>
						</div>

						<div class="col-md-6">
							<label>Skills and Expertise:</label>
							<select name="skills" class="form-control" multiple data-live-search="true">
								@foreach($skills as $skill)
								<option value="{{$skill->id}}">{{$skill->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="col-md-6">
							<label>Rate/Hour:</label>
							<input type="text" class="form-control" name="rate" value="{{old('rate')}}">
						</div>

						<div class="col-md-6">
							<label>Minimum Budget:</label>
							<input type="text" class="form-control" name="minimum_budget" value="{{old('minimum_budget')}}">
						</div>

						<div class="col-md-6">
							<label>Category:</label>
							<select name="category" class="form-control" required autofocus value="{{old('category')}}">
								<option>Select</option>
							</select>
						</div>
					</div>
					<br>

					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<label>Show Profile</label>
		<div class="switchToggle">
			<input checked  type="checkbox" id="switch1">
			<label for="switch1">Toggle</label>
		</div>
	</div>
</div>