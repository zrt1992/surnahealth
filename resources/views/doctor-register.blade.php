<?php $page = 'doctor-register'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Account Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{ URL::asset('/assets/img/choose-us-six.png') }}" class="img-fluid"
                                    alt="Login Banner">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Doctor Register <a href="{{ url('register') }}">Not a Doctor?</a></h3>
                                </div>

                                <!-- Register Form -->
                                <form action="{{ route('doctor-registration.register') }}" method="POST">
                                    @csrf
                                
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating" name="name" value="{{ old('name') }}">
                                        <label class="focus-label">Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3 form-focus">
                                        <input type="email" class="form-control floating" name="email" value="{{ old('email') }}">
                                        <label class="focus-label">Email</label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating" name="phone" value="{{ old('phone') }}">
                                        <label class="focus-label">Phone</label>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3 form-focus">
                                        <input class="form-control pass-input floating" type="password" name="password">
                                        <label class="focus-label">Create Password</label>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3 form-focus">
                                        <input class="form-control pass-input floating" type="password" name="password_confirmation">
                                        <label class="focus-label">Confirm Password</label>
                                    </div>
                                
                                    <div class="text-end">
                                        <a class="forgot-link" href="{{ url('login') }}">Already have an account?</a>
                                    </div>
                                
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Signup</button>
                                
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                
                                    <div class="row social-login">
                                        <div class="col-6">
                                            <a href="javascript:;" class="btn btn-facebook w-100">
                                                <i class="fab fa-facebook-f me-1"></i> Login
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:;" class="btn btn-google w-100">
                                                <i class="fab fa-google me-1"></i> Login
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                
                                <!-- /Register Form -->

                            </div>
                        </div>
                    </div>
                    <!-- /Account Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
