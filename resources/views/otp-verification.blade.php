<?php $page = 'forgot-password'; ?>
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
                                    <h3>Verify OTP</h3>
                                    <p class="small text-muted">Enter your otp to verify.</p>
                                </div>

                                <!-- Forgot Password Form -->
                                <form action="{{ route('check.otp') }}" method="post">
                                    @csrf
                                      {{-- <input type="hidden" name="email" value="{{ session('email') }}"> --}}
                                    <div class="mb-3 form-focus">
                                        <input type="text" class="form-control floating" name="otp">
                                        <label class="focus-label">Enter OTP</label>
                                    </div>
                                   
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Verify
                                        </button>
                                </form>
                                <!-- /Forgot Password Form -->

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
