@extends('layouts.admin.master')
@section('content')

    <h5>Example resume for the job-seekers</h5>
    <iframe src="{{ asset('stop-cv-format.pdf') }}" type="application/pdf" width="80%" height="550px" frameborder="0">
    </iframe>
@endsection