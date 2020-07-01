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
				@forelse($pros as $pro)
				<div class="col-md-4">
					<div class="card-body border-light shadow-lg p-3 mb-3 bg-white rounded" align="center">
						<article class="panel-body">
							<figure class="text-center">
								<img src="{{asset('assets/images/avatar.png')}}" class="img-thumbnail img-circle img-responsive" alt="me" width="140" height="140">
								<figcaption>
									<h3>{{$pro->full_name  ?? ''}}</h3> {{$pro->state ?? ''}}. {{$pro->procity->name ?? ''}}. {{$pros_details->procountry->name ?? ''}}
									<br> Tel. {{$pro->phone_number ?? ''}} E-mail: {{$pro->email ?? ''}}
								</figcaption>
							</figure>
						</article>
						<a href="" class="btn btn-danger btn-sm">View Pro Details</a>
					</div>
				</div>
				@empty
				<p>No Registered pro yet!</p>
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