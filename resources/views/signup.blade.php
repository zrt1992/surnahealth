<?php $page = 'signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Signup -->
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
                                <a href="{{ url('login-email') }}"><i class="fa-solid fa-arrow-left-long"></i> Back to
                                    Login</a>
                            </div>
                            <div class="login-title">
                                <h3>Signup</h3>
                            </div>
                            <div class="signup-option-btns">
                                <a href="{{ url('doctor-signup') }}" class="signup-btn-info">
                                    <div class="signup-info">
                                        <div class="signup-icon">
                                            <img src="{{ URL::asset('/assets/img/icons/doctor-icon.svg') }}"
                                                alt="doctor-icon">
                                        </div>
                                        <div class="signup-content">
                                            <h4>Doctor</h4>
                                            <p>Lorem ipsum amet, consectetur</p>
                                        </div>
                                    </div>
                                    <div class="signup-arrow">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                                <a href="{{ url('patient-signup') }}" class="signup-btn-info">
                                    <div class="signup-info">
                                        <div class="signup-icon">
                                            <img src="{{ URL::asset('/assets/img/icons/patient-icon.svg') }}"
                                                alt="patient-icon">
                                        </div>
                                        <div class="signup-content">
                                            <h4>Patient</h4>
                                            <p>Lorem ipsum amet, consectetur</p>
                                        </div>
                                    </div>
                                    <div class="signup-arrow">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Signup -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
