<?php $page = 'reset-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-content-info">
        <div class="container">
            <!-- Reset Password -->
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
                                <a href="javascript:void(0);"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                            </div>
                            <div class="login-title">
                                <h3>Reset Password</h3>
                                <p>Your new password must be different from previous used passwords.</p>
                            </div>
                            <form action="{{ route('password.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{ session('email') }}">

                                <div class="mb-3">
                                    <label class="mb-2">New Password</label>
                                    <div class="pass-group" id="passwordInput">
                                        <input type="password" name="password" class="form-control pass-input"
                                            placeholder="*************" required>
                                        <span class="toggle-password feather-eye-off"></span>
                                        <span class="pass-checked"><i class="feather-check"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="pass-group">
                                        <input type="password" name="password_confirmation"
                                            class="form-control pass-input-sub" placeholder="*************" required>
                                        <span class="feather-eye-off toggle-password-sub"></span>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0">
                                    <button class="btn w-100" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Reset Password -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
