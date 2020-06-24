<!--Edit Work experience Modal -->
<div class="modal fade" id="experience-{{$experienced->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Work Experience Details </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="/experiences/{{$experienced->id}}">
					@csrf
					@method('PATCH')
					<div class="row">
						<input type="hidden" class="form-control" name="id" value="<?php echo $experienced->id?>"  required autofocus style="border-radius:0px;">
						
						<div class="col-md-6">
							<label>Employer:</label>
							<input type="text" class="form-control" name="employer" value="<?php echo $experienced->employer?>" id="emp" placeholder="Organization" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Position:</label>
							<input type="text" class="form-control" name="position"  value="<?php echo $experienced->position ?>" id="pos" placeholder="Job Position" required autofocus style="border-radius:0px;">
						</div>
						<div class="col-md-6">
							<label>Start Date:</label>
							<div class="input-group date">
								<input type="date" value="{{$experienced->start_date}}" name="start_date" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<label>End Date:</label>
							<div class="input-group">
								<input type="date" value="<?php echo $experienced->end_date?>" name="end_date" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="current_employer" value="current employer" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Current Employer
								</label>
							</div>
						</div>
						
						<div class="col-md-12">
							<label>Achievements and Responsibilities:</label>
							<textarea name="roles" class="form-control ckeditor" id="duties " required autofocus rows="3"style="border-radius:0px;">{{$experienced->roles}}</textarea>    
						</div>
					</div>
					<br>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success">Save & Continue</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>