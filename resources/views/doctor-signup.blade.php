<?php $page = 'doctor-signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Doctor Signup -->
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
                        <div class="widget-set">
                            <div class="account-info">
                                <div class="widget-content multistep-form">
                                    <fieldset id="first">
                                        <div class="login-back">
                                            <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left-long"></i>
                                                Back</a>
                                        </div>
                                        <div class="login-title">
                                            <h3>Doctor Signup</h3>
                                            <p class="mb-0">Welcome back! Please enter your details.</p>
                                        </div>
                                        <div class="widget-setcount">
                                            <ul id="progressbar">
                                                <li class="progress-active">
                                                    <div class="step-box">
                                                        <div class="step-icon">
                                                            <span>
                                                                <img src="{{ URL::asset('/assets/img/icons/signup-users.svg') }}"
                                                                    alt="icon">
                                                            </span>
                                                        </div>
                                                        <div class="step-content">
                                                            <p>Step 1</p>
                                                            <h4>Create Account</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-box">
                                                        <div class="step-icon">
                                                            <span>
                                                                <img src="{{ URL::asset('/assets/img/icons/signup-unlock.svg') }}"
                                                                    alt="icon">
                                                            </span>
                                                        </div>
                                                        <div class="step-content">
                                                            <p>Step 2</p>
                                                            <h4>Verify Account</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <form action="#">
                                            <div class="mb-3">
                                                <label class="mb-2">Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Email</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Phone Number</label>
                                                <input
                                                    class="form-control form-control-lg group_formcontrol form-control-phone"
                                                    id="phone" name="phone" type="text">
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Password
                                                </label>
                                                <div class="pass-group">
                                                    <input type="password" class="form-control pass-input-sub"
                                                        placeholder="*************">
                                                    <span class="feather-eye-off toggle-password-sub"></span>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="widget-btn">
                                            <a class="btn btn-primary w-100 next_btn">Next</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="field-card">
                                        <div class="login-back">
                                            <a href="javascript:void(0);" class="prev_btn">
                                                <i class="fa-solid fa-arrow-left-long"></i> Back
                                            </a>
                                        </div>
                                        <div class="login-title">
                                            <h3>Security Verification</h3>
                                            <p class="mb-0">To Secure your Account create complete the following verify
                                                request.</p>
                                        </div>
                                        <div class="widget-setcount">
                                            <ul id="progressbar1">
                                                <li class="progress-active">
                                                    <div class="step-box">
                                                        <div class="step-icon">
                                                            <span>
                                                                <img src="{{ URL::asset('/assets/img/icons/signup-users.svg') }}"
                                                                    alt="icon">
                                                            </span>
                                                        </div>
                                                        <div class="step-content">
                                                            <p>Step 1</p>
                                                            <h4>Create Account</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-box">
                                                        <div class="step-icon">
                                                            <span>
                                                                <img src="{{ URL::asset('/assets/img/icons/signup-unlock.svg') }}"
                                                                    alt="icon">
                                                            </span>
                                                        </div>
                                                        <div class="step-content">
                                                            <p>Step 2</p>
                                                            <h4>Verify Account</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <form action="{{ url('signup-success') }}" class="signup-verfication-form">
                                            <div class="mb-3">
                                                <div class="form-group-flex">
                                                    <label class="mb-2">Phone Number Verfication Code</label>
                                                    <a href="javascript:void(0);" class="forgot-link">Get Code</a>
                                                </div>
                                                <div class="pass-group">
                                                    <input
                                                        class="form-control form-control-lg group_formcontrol form-control-phone"
                                                        id="phone-number" name="phone-number" type="text">
                                                </div>
                                                <p class="signup-code">Enter the 6 digit code sent to 98****4578</p>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group-flex">
                                                    <label class="mb-2">Email Verfication Code</label>
                                                    <a href="javascript:void(0);" class="forgot-link">Get Code</a>
                                                </div>
                                                <div class="pass-group">
                                                    <input type="text" class="form-control form-control-phone"
                                                        placeholder="example@gmail.com">
                                                </div>
                                                <p class="signup-code">Enter the 6 digit code sent to ex****@gmail.com</p>
                                            </div>
                                            <div class="mb-0">
                                                <button class="btn btn-primary w-100" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Doctor Signup -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
