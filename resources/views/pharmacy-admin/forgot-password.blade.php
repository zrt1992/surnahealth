<?php $page = 'forgot-password'; ?>
@extends('layout.mainlayout_pharmacy_admin')
@section('content')
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="../assets_pharmacy/img/logo-white.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Forgot Password?</h1>
                        <p class="account-subtitle">Enter your email to get a password reset link</p>

                        <!-- Form -->
                        <form action="{{ url('pharmacy-admin/login') }}">
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="mb-0">
                                <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                            </div>
                        </form>
                        <!-- /Form -->

                        <div class="text-center dont-have">Remember your password? <a
                                href="{{ url('pharmacy-admin/login') }}">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
