<!-- vue component for the educations details -->
<div class="accordion" id="accordionExample">
	<div class="card" v-for="(education, index) in educations">
		<h5 class="mb-0">
			<button style="color:#0B0B3B;" class="btn btn-link collapsed" type="button" data-toggle="collapse" :href="'#collapse-'+index" aria-expanded="false" aria-controls="collapseThree">
				<h6>@{{education.qualification}} from @{{education.institution}}</h6><i class="fa fa-edit pull-right text-success"></i>
			</button>
		</h5>
		<div :id="'collapse-'+index" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			<div class="card-body">
				<form method="POST" action="#" @submit.prevent=onSubmit @keydown="form.errors.clear($event.target.name)">
					@csrf
					<div class="row">
						<div class="col-md-12"><i class="fa fa-trash pull-right text-danger"></i></div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="name">School/Institution</label>
								<input type="text" name="education_institution" class="form-control form-control-sm" placeholder="Institution" v-model="education.institution">
							</div>
							<div class="form-group">
								<label for="name">Start Date</label>
								<input type="date" name="start_date" v-model="education.start_date" class="form-control form-control-sm" placeholder="Dates">
							</div>
							<div class="form-group">
								<label for="name">Graduation Date</label>
								<input type="date" name="graduation_date" v-model="education.grad_date" class="form-control form-control-sm" placeholder="Dates">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">Qualification/Degree</label>
								<input type="text" name="education_qualification" v-model="education.qualification" class="form-control form-control-sm" placeholder="Degree">
							</div>
							<div class="form-group">
								<label for="name">Level</label>
								<input type="text" name="level" v-model="education.level" class="form-control form-control-sm" placeholder="Education Level">
							</div>
							<div class="form-group">
								<label for="name">Score</label>
								<input type="text" name="score" v-model="education.score" class="form-control form-control-sm" placeholder="Your Score">
							</div>
						</div>
					</div>
					<button class="pull-right btn btn-sm text-white" type="submit" :disabled="form.errors.any()"  style="background-color:#0B0B3B;"  @click="addEducation">Update</button>
				</form><br>
			</div>
		</div>
	</div>
</div>