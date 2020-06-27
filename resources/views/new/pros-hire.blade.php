@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 7rem">
	@auth
	@include('dashboard.pros-hire-jobseekers')
	@else
	<div class="row">
		<div class="col-md-8">
			<h4 class="text-center">PROS For HIRE</h4>
			<div class="row">
				@forelse($industries as $skill)
				<div class="col-md-6">
					<div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded">
						<div class="row">
							<div class="col-md-3 h1 text-center">
								<i class="fa fa-users text-secondary"></i>
							</div>
							<div class="col-md-9">
								<a href="" class="h5">{{$skill->name}}</a><br>
								<span>{{$skill->pros->count()}}</span>
							</div>
						</div>
					</div>
				</div>
				@empty
				<p>Nothing yet!</p>
				@endforelse
			</div>			
		</div>
		<div class="col-md-4 text-center">		
			<div class="card-body border-light shadow-lg p-3 mb-3 bg-danger rounded">
				<a href="{{route('login')}}" class="text-white">Register as a Pro</a>
			</div>

			<div class="card-body border-light shadow-lg p-3 mb-3 bg-danger rounded">
				<a href="{{route('foremployer')}}" class="text-white">Recruit a pro</a>
			</div>
		</div>
	</div>
	@endauth
</div>
@endsection