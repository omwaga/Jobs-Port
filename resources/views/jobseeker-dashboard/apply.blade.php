@extends("layouts.dashboard")
@section("content")
	<div class="container"><br>
		<div class="text-center">
		<h3 class="text-primary">You are applying for:{{$job->job_title}}</h3>
		<small class="text-danger"><i class="text-info fa fa-bell text-info"></i>Tip: Complete your profile before submitting your job application.</small>
		</div>

		<div class="panel-body">
			@include('jobseeker-dashboard.career-profile')
			<div class="clearfix"></div>

			<div class="row">
				<div class="col-md-6">
				<a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-danger"><i class="fa fa-backward"></i>Back to Job Description</a>
				</div>
				<div class="col-md-6">
				<form method="POST" action="{{route('jobapplications.store')}}">
					@csrf
					<input type="hidden" name="job_id" value="{{$job->id}}">
					<input type="hidden" name="employer_id" value="{{$job->employer_id}}">
					<button class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i>Submit Application</button>
				</form>
				</div>
			</div><br>
		</div>
	</div>
	

	@endsection