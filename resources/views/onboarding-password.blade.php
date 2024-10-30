<?php $page = 'onboarding-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="left-panel">
        <div class="onboarding-logo text-center">
            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png') }}" class="img-fluid"
                    alt="Surna-logo"></a>
        </div>
        <div class="onboard-img">
            <img src="{{ URL::asset('/assets/img/onboard-img/onb-slide-img.png') }}" class="img-fluid" alt="onboard-slider">
        </div>
        <div class="onboarding-slider">
            <!-- Slider -->
            <div id="onboard-slider" class="owl-carousel owl-theme onboard-slider slider">
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->

            </div>
            <!-- /Slider -->
        </div>
    </div>
    <div class="right-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="right-panel-title text-center">
                        <a href="{{ url('/') }}"> <img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png') }}"
                                alt="Surna-logo"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="on-board-wizard">
                        <ul>
                            <li>
                                <a href="{{ url('onboarding-email') }}">
                                    <div class="onboarding-progress active">
                                        <span>1</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Registration</h6>
                                        <p>Enter Details for Register </p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('onboarding-identity') }}">
                                    <div class="onboarding-progress">
                                        <span>2</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Upload Identity</h6>
                                        <p>Upload your Identity for Verification</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-personalize') }}">
                                    <div class="onboarding-progress">
                                        <span>3</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Personal Details</h6>
                                        <p>Enter your Personal Details</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-verification') }}">
                                    <div class="onboarding-progress">
                                        <span>4</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Doctor Verification</h6>
                                        <p>Upload Documents for the Verification</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-payments') }}">
                                    <div class="onboarding-progress">
                                        <span>5</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Payment details</h6>
                                        <p>Setup Your Payment Details</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-preferences') }}">
                                    <div class="onboarding-progress">
                                        <span>6</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Preferences</h6>
                                        <p>Setup Your Preferences for your Account</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="onboarding-content-box content-wrap">
                        <div class="onboard-set">
                            <div class="onboarding-title pass-title">
                                <h2>Create a passcode on your Surna account</h2>
                            </div>
                            <div class="onboarding-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3 forms-block pass-group">
                                            <div class="input-placeholder form-focus passcode-wrap mail-box">
                                                <label class="focus-label">Enter New Password<span>*</span></label>
                                                <input class="form-control floating pass-icon" type="password">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3 pass-group">
                                            <div class="input-placeholder form-focus passcode-wrap mail-box">
                                                <label class="focus-label">Enter Confirm Password<span>*</span></label>
                                                <input class="form-control floating pass-icon-1" type="password">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="onboarding-btn">
                            <a href="{{ url('onboarding-identity') }}">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
