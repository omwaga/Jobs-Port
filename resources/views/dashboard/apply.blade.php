@extends("layouts.app")
@section("content")
<!--main content start-->
<section class="section section-top section-full">
	<div class="container"><br><br><br>
		<h5 class="text-primary">You are applying for:{{$job->job_title}}</h5>
		<small class="text-danger"><i class="text-info fa fa-bell text-info"></i>Tip: Complete your profile before submitting your job application.</small>

		<div class="panel-body">
			@include('dashboard.career-profile')
			<div class="clearfix"></div>

			<div class="col-md-12">
				<a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-danger"><i class="fa fa-backward"></i>Back to Job Description</a>
					
					<form method="POST" action="/jobapplications">
						@csrf
						<input type="hidden" name="job_id" value="{{$job->id}}">
						<input type="hidden" name="employer_id" value="{{$job->employer_id}}">
						<button class="btn btn-success pull-right"><i class="fa fa-paper-plane"></i>Submit Application</button>
					</form>
				</div><br>
			</div>

			<!-- /row -->
		</section>
	</section>
	<!--main content end-->
	@endsection