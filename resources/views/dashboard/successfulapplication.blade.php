@extends("layouts.app")
@section("content")
<div class="container">
	<div class="row text-center">
        <div class="col-sm-12 col-sm-offset-6">
        <br><br> <h2 style="color:#0B0B3B">Application Submitted Successfully</h2>
        <i class="fa fa-check text-success" style="font-size:5em;"></i>
        <h3>Dear, {{ Auth::user()->name }}</h3>
        <p style="font-size:20px;color:#0B0B3B;">Thank you for choosing NetworkedPros for your Job Application.</p>
        <div class="row">
        <div class="col-sm-12 col-sm-offset-6">
         <a href="{{route('alljobs')}}" class="btn btn-danger"><i class="fa fa-backward"></i>Back to all jobs</a>
        <a href="/jobapplications" class="btn btn-success pull right">View your Applications</a>
        </div>
        </div>
    <br><br>
        </div>
        
	</div>
</div>
@endsection