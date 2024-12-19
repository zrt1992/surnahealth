<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{ URL::asset('/assets/img/choose-us-six.png') }}" class="img-fluid"
                                    alt="Surna Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Login <span>Surna</span></h3>
                                </div>
                                <form action="{{ route('login-admin') }}" method="post">
                                    @csrf
                                    <div class="mb-4 form-focus">
                                        <input type="email" class="form-control floating"
                                            name="email" id="email">
                                        <label class="focus-label">Email</label>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3 form-focus">
                                        <label class="focus-label">Password</label>
                                        <div class="pass-group">
                                            <input class="form-control pass-input floating" type="password"
                                                name="password" id="password">
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="{{ url('forgot-password') }}">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Login</button>
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
                                    <div class="text-center dont-have">Don’t have an account? <a
                                            href="{{ url('register') }}">Register</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
