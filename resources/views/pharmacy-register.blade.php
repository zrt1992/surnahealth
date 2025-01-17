<?php $page = 'pharmacy-register'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Register Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{ URL::asset('/assets/img/login-banner.png') }}" class="img-fluid"
                                    alt="Surna Register">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Pharmacy Register <a href="{{ url('doctor-register') }}">Are you a Doctor?</a></h3>
                                </div>

                                <!-- Register Form -->
                                <form action="{{ url('pharmacy-register-step1') }}">
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Name</label>
                                    </div>
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Mobile Number</label>
                                    </div>
                                    <div class="mb-3 form-focus">
                                        <input class="form-control pass-input floating" type="password">

                                        <label class="focus-label">Create Password</label>
                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="{{ url('login') }}">Already have an account?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Signup</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="row social-login">
                                        <div class="col-6">
                                            <a href="javascript:;" class="btn btn-facebook w-100"><i
                                                    class="fab fa-facebook-f me-1"></i> Login</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:;" class="btn btn-google w-100"><i
                                                    class="fab fa-google me-1"></i> Login</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- /Register Form -->

                            </div>
                        </div>
                    </div>
                    <!-- /Register Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
