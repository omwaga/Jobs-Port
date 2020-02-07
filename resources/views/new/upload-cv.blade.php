@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-top:5rem">
    <h5 style="color:#0B0B3B;" align="center">Upload Resume to get Started</h5>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  	<div class="container">
      @include('success')
  	    <form action="{{ route('cvupload.store') }}" method="POST" enctype="multipart/form-data">
  	        @csrf
  		<div class="row justify-content-center">
  	    <div class="col-md-4">
  		    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name:') }}</label>
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        </div>
                        
                        
  	    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email address:') }}</label>
                                 <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        </div>
                        
                        
  	    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="resume" class="col-md-4 col-form-label text-md-right">{{ __('Resume:') }}</label>
                               <div class="col-md-10">
                                <input id="resume" type="file" name="resume" autofocus>

                                @error('resume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info text-white">Submit</button>
                        </div>
  		</div>
  		</form>
  	</div>
  </div>
</div>
</div>
@endsection