<?php $page = 'onboarding-payments'; ?>
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
                <div class="col-lg-4 col-md-12">
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
                                    <div class="onboarding-progress active">
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
                                    <div class="onboarding-progress active">
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
                                    <div class="onboarding-progress active">
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
                                    <div class="onboarding-progress active">
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
                <div class="col-lg-8 col-md-12">
                    <div class="onboarding-content-box">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="onboarding-title">
                                    <h2>Payment Details <span>*</span></h2>
                                    <h6>Set Your Payment Methods</h6>
                                </div>
                                <div class="onboarding-content passcode-wrap mail-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="onboarding-lable">Name On Card <span>*</span></label>
                                                <input type="text" placeholder="Max Doe"
                                                    class="form-control placeholder-style" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="onboarding-lable">Expiration
                                                    Date<span>*</span></label>
                                                <select class="select">
                                                    <option disabled selected>Select Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="onboarding-lable">&nbsp;</label>
                                                <input type="text" placeholder="Year"
                                                    class="form-control placeholder-style yearpicker" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="onboarding-lable">CVV<span>*</span></label>
                                                <input type="text" placeholder="Enter CVV"
                                                    class="form-control placeholder-style" maxlength="3" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="onboarding-lable">Card Number<span>*</span></label>
                                                <input type="text" placeholder="4111 1111 1111 1111"
                                                    class="form-control placeholder-style" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1g-12">
                                        <div class="save-detail">
                                            <div class="tog-button">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="tog-slider round"></span>
                                                </label>
                                            </div>
                                            <div class="save-card">
                                                <h5>Save Card for further billing?</h5>
                                                <h6> If you need more info, please check budget planning</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="onboarding-btn Personalize-btn">
                                        <a href="{{ url('onboarding-preferences') }}">Continue</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="payment-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/payment-card.png') }}" alt="payment-card"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
