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
				<form method="POST" action="#">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<label>Full Names:</label>
							<input type="text" class="form-control" name="full_name" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Email Address:</label>
							<input type="text" class="form-control" name="email" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Country:</label>
							<input type="text" class="form-control" name="country" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Phone Number:</label>
							<input type="text" class="form-control" name="phone_number" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>City:</label>
							<input type="text" class="form-control" name="city" required autofocus style="border-radius:0px;">
						</div>

						<div class="col-md-6">
							<label>State:</label>
							<input type="text" class="form-control" name="state" required autofocus style="border-radius:0px;">
						</div>

						<div class="col-md-6">
							<label>ZIP:</label>
							<input type="text" class="form-control" name="zip_code" required="">
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
							<input type="text" class="form-control" name="title" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Description:</label>
							<input type="text" class="form-control" name="description" required autofocus style="border-radius:0px;">
						</div>

						<div class="col-md-6">
							<label>Skills and Expertise:</label>
							<select class="form-control" multiple data-live-search="true">
								<option>Mustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
						</div>

						<div class="col-md-6">
							<label>Rate/Hour:</label>
							<select name="rate" class="form-control" style="border-radius:0px;"required autofocus value="{{old('rate')}}">
								<option>Select</option>
							</select>
						</div>

						<div class="col-md-6">
							<label>Minimum Budget:</label>
							<select name="minimum_budget" class="form-control" style="border-radius:0px;"required autofocus value="{{old('minimum_budget')}}">
								<option>Select</option>
							</select>
						</div>

						<div class="col-md-6">
							<label>Category:</label>
							<select name="category" class="form-control" style="border-radius:0px;"required autofocus value="{{old('category')}}">
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