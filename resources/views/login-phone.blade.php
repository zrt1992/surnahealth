<?php $page = 'login-phone'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Login Phone -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="account-content">
                        <div class="login-shapes">
                            <div class="shape-img-left">
                                <img src="{{ URL::asset('/assets/img/shape-01.png') }}" alt="shape-image">
                            </div>
                            <div class="shape-img-right">
                                <img src="{{ URL::asset('/assets/img/shape-02.png') }}" alt="shape-image">
                            </div>
                        </div>
                        <div class="account-info">
                            <div class="login-back">
                                <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            </div>
                            <div class="login-title">
                                <h3>Sign in</h3>
                                <p>We'll send a confirmation code to your Phone.</p>
                                <span>Sign in with <a href="{{ url('login-email') }}">Email</a></span>
                            </div>
                            <form action="{{ url('login-phone-otp') }}">
                                <div class="mb-3">
                                    <label class="mb-2">Phone Number</label>
                                    <input class="form-control form-control-lg group_formcontrol form-control-phone"
                                        id="phone" name="phone" type="text">
                                </div>
                                <div class="mb-3">
                                    <div class="form-group-flex">
                                        <label class="mb-2">Password</label>
                                        <a href="{{ url('forgot-password') }}" class="forgot-link">Forgot password?</a>
                                    </div>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" placeholder="*************">
                                        <span class="feather-eye-off toggle-password"></span>
                                    </div>
                                </div>
                                <div class="mb-3 form-check-box">
                                    <div class="form-group-flex">
                                        <label class="custom_check d-inline-flex"> Remember Me
                                            <input type="checkbox" name="login">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_check d-inline-flex"> Login with OTP
                                            <input type="checkbox" name="login">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">Sign in</button>
                                </div>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="social-login-btn">
                                    <a href="javascript:void(0);" class="btn w-100">
                                        <img src="{{ URL::asset('/assets/img/icons/google-icon.svg') }}" alt="google-icon">
                                        Log in with Google
                                    </a>
                                </div>
                                <div class="account-signup">
                                    <p>Don't have an account ? <a href="{{ url('signup') }}">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Phone -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
