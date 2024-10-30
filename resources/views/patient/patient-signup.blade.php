<?php $page = 'patient-signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Patient Signup -->
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
                                <a href="{{ url('signup') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            </div>
                            <div class="login-title">
                                <h3>Patient Signup</h3>
                                <p class="mb-0">Welcome back! Please enter your details.</p>
                            </div>
                            <form action="{{ url('signup-success') }}">
                                <div class="mb-3">
                                    <label class="mb-2">Phone Number</label>
                                    <input class="form-control form-control-lg group_formcontrol form-control-phone"
                                        id="phone" name="phone" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name">
                                </div>
                                <div class="mb-3 form-check-box terms-check-box">
                                    <div class="form-group-flex">
                                        <label class="custom_check">
                                            I have read and agree to Surna’s <a href="{{url('terms-condition')}}">Terms of
                                                Service</a> and <a href="{{url('privacy-policy')}}">Privacy Policy.</a>
                                            <input type="checkbox" name="Terms">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">Register Now</button>
                                </div>
                                <div class="mb-3 back-btn-light">
                                    <button class="btn btn-light w-100" type="submit">Create an Account</button>
                                </div>
                                <div class="account-signup">
                                    <p>Already a Member? <a href="{{ url('login-email') }}">Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Patient Signup -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
