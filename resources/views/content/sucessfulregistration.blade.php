@extends("layouts.app")
@section("content")
<div class="container">
	<div class="row text-center">
        <div class="col-sm-12 col-sm-offset-6">
        <br><br> <h2 style="color:#0B0B3B">Registered Successfully</h2>
        <i class="fa fa-check text-success" style="font-size:5em;"></i>
        <h3>You can now Login to apply for our jobs</h3>
        <p style="font-size:20px;color:#0B0B3B;">Thank you for choosing NetworkedPros</p>
        <div class="row">
        <div class="col-sm-12 col-sm-offset-12">
        <a href="{{route('joblogin')}}" class="btn btn-success pull right">Login</a>
        </div>
        </div>
    <br><br>
        </div>
        
	</div>
</div>
@endsection