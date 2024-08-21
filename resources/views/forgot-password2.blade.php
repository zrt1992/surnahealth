<?php $page = 'forgot-password2'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Forgot Password -->
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
                                <a href="{{ url('login-email') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            </div>
                            <div class="login-title">
                                <h3>Password Recovery</h3>
                                <p class="mb-0">Enter your email and we will send you a link to reset your password.</p>
                            </div>
                            <form action="{{ url('login-email') }}">
                                <div class="mb-3">
                                    <label class="mb-2">E-mail</label>
                                    <input type="text" class="form-control" placeholder="example@email.com">
                                </div>
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">Sign in</button>
                                </div>
                                <div class="mb-3 back-btn-light mb-0">
                                    <button class="btn btn-light w-100" type="submit">
                                        <i class="fa-solid fa-arrow-left"></i> Back
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
