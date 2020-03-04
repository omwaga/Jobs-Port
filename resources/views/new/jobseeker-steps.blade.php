@extends('layouts.app')
@section('content')
    <div class="container work-process" style="padding-top:6rem;">
        <div class="col-md-12">
        <div class="title mb-5 text-center">
        <h4 style="color:#070A53;"><strong>Create your career profile with us <br> and we connect you to potential employers all over the East African Region</strong></h4>
    </div>
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Register your account</h5>
                            <p><small>Register using your email address and set a password for your account. </small></p>
                        </div>
                    </div>
                    <!--<div class="process-line-l"></div>-->
                </div>
            </div>
            <div class="col-md-7">
                <!--<div class="process-point-left"></div>-->
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-7">
                <!--<div class="process-point-left"></div>-->
            </div>
            <!--<div class="col-md-2"></div>-->
            <div class="col-md-5">
                <div class="process-box process-right">
                     <!--data-aos="fade-left" data-aos-duration="1000"-->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Login to your account and fill your career profile</h5>
                            <p><small>Create your career profile by providing your Education History, Skills and Referees.</small></p>
                        </div>
                    </div>
                    <!--<div class="process-line-r"></div>-->
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Browse the available jobs</h5>
                            <p><small>Browse the available jobs that match your skill-set.</small></p>
                        </div>
                    </div>
                    <!--<div class="process-line-l"></div>-->
                </div>
            </div>
            <div class="col-md-7">
                <!--<div class="process-point-left"></div>-->
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-7">
                <!--<div class="process-point-left"></div>-->
            </div>
            <!--<div class="col-md-2"></div>-->
            <div class="col-md-5">
                <div class="process-box process-right">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Submit your job application</h5>
                            <p><small>Submit your job application and wait to be contacted by the Employer.</small></p>
                        </div>
                    </div>
                    <!--<div class="process-line-r"></div>-->
                </div>
            </div>
            
            
        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0"></p><br>
                                <h4 class="m-0 p-0">Get Started</h4>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Click on the link to get started</h5>
                            <p><small> <a class="btn btn-default bg-danger text-white align-center"href="{{route('Register')}}"><i class="fa fa-user-plus text-white" aria-hidden="true"></i> Create an Account</a></small></p>
                        </div>
                    </div>
                    <!--<div class="process-line-l"></div>-->
                </div>
            </div>
            <div class="col-md-7">
                <!--<div class="process-point-left"></div>-->
            </div>
        </div>
        <!-- ============ -->
    </div>
    </div>
@endsection