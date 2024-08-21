<?php $page = 'mobile-otp'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Login Phone Otp -->
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
                                <a href="{{ url('login-phone-otp') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            </div>
                            <div class="login-verify-img">
                                <img src="{{ URL::asset('/assets/img/icons/mobile-icon.svg') }}" alt="mobile-icon">
                            </div>
                            <div class="login-title">
                                <h3>Phone OTP Verification</h3>
                                <p class="mb-0">OTP sent to your mobile number ending <strong>******9575</strong></p>
                            </div>
                            <form method="get" class="digit-group login-form-control" data-group-name="digits"
                                data-autosubmit="false" autocomplete="off" action="{{ url('doctor-dashboard') }}">
                                <div class="otp-box">
                                    <div class="forms-block">
                                        <input type="text" id="digit-1" name="digit-1" data-next="digit-2"
                                            maxlength="1">
                                        <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                            data-previous="digit-1" maxlength="1">
                                        <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                            data-previous="digit-2" maxlength="1">
                                        <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                            data-previous="digit-3" maxlength="1">
                                    </div>
                                </div>
                                <div class="forms-block">
                                    <div class="otp-info">
                                        <div class="otp-code">
                                            <p>Didn't receive OTP code?</p>
                                            <a href="javascript:void(0);">Resend Code</a>
                                        </div>
                                        <div class="otp-sec">
                                            <p><i class="feather-clock"></i> 00:25 secs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="reset-btn">
                                    <button class="btn w-100" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Phone Otp -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
