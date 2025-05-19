<?php $page = 'register'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Register Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{ URL::asset('/assets/img/choose-us-six.png') }}" class="img-fluid"
                                    alt="Surna Register">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Patient Register <a href="{{ url('doctor-register') }}">Are you a Doctor?</a></h3>
                                </div>

                                <!-- Register Form -->
                                <form action="{{ route('register.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating" name="name" id="name">
                                        <label class="focus-label">Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating" name="email" id="number">
                                        <label class="focus-label">Email</label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-5 form-focus">
                                        <input type="text" class="form-control floating" name="phone" id="number">
                                        <label class="focus-label">Phone</label>
                                        <span class="text-info">Note : Add USA number without country code</span>

                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 form-focus">
                                        <label class="focus-label">Create Password</label>
                                        <div class="pass-group position-relative">
                                            <input class="form-control pass-input floating" type="password" name="password"
                                                id="password">
                                            <span
                                                class="custom-toggle-password position-absolute end-0 top-50 translate-middle-y me-3 cursor-pointer"
                                                onclick="togglePasswordVisibility()">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 form-focus">
                                        <label class="focus-label">Confirm Password</label>
                                        <div class="pass-group position-relative">
                                            <input class="form-control pass-input floating" type="password"
                                                name="password_confirmation" id="password_confirmation">
                                            <span
                                                class="custom-toggle-confirm-password position-absolute end-0 top-50 translate-middle-y me-3 cursor-pointer"
                                                onclick="toggleConfirmPassword()">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <a class="forgot-link" href="{{ url('login') }}">Already have an account?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Signup</button>
                                    
                                </form>
                                <!-- /Register Form -->

                            </div>
                        </div>
                    </div>
                    <!-- /Register Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
