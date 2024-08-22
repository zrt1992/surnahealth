<?php $page = 'onboarding-lock'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="left-panel">
        <div class="onboarding-logo text-center">
            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png') }}" class="img-fluid"
                    alt="Surna health-logo"></a>
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
                        <h3>Welcome to Surna health</h3>
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
                        <h3>Welcome to Surna health</h3>
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
                        <h3>Welcome to Surna health</h3>
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
                <div class="col-lg-12">
                    <div class="set-path">
                        <div class="onboarding-content-box lock-box">
                            <div class="lock-content text-center">
                                <img src="{{ URL::asset('/assets/img/icons/lock.svg') }}" alt="lock">
                                <h2>Your account is temporarily <br> disabled.</h2>
                                <h6>Kindly wait a few seconds</h6>
                                <a href="javascript:;">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
