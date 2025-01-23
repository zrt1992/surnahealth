<?php $page = 'doctor-register-step4'; ?>
@extends('layout.mainlayout')
@section('content')
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHAV3_SITEKEY') }}"></script>

<!-- Page Content -->
<div class="content login-page pt-0">
    <div class="container-fluid">

        <!-- Register Content -->
        <div class="account-content">
            <div class="d-flex align-items-center justify-content-center">
                <div class="login-right">
                    <div class="inner-right-login">
                        <div class="login-header">
                            <div class="logo-icon">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="Surna-logo">
                            </div>
                            <div class="step-list">
                                <ul>
                                    <li><a href="javascript:;" class="active-done">1</a></li>
                                    <li><a href="javascript:;" class="active-done">2</a></li>
                                    <li><a href="javascript:;" class="active-done">3</a></li>
                                    <li><a href="javascript:;" class="active">4</a></li>
                                </ul>
                            </div>
                            <form id="personal_details" action="{{ route('doctor-registration.store.step4') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="text-start mt-2">
                                    <h4 class="mt-3">Verification Document</h4>
                                </div>

                                <div class="step-process-col mt-4">
                                    <div class="mb-3">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-6 d-flex">
                                                <div class="profile-pic-upload d-flex flex-wrap justify-content-center">
                                                    <div class="cam-col">
                                                        <img src="{{ URL::asset('assets/img/icons/camera.svg') }}" alt="camera-image">
                                                    </div>
                                                    <span class="text-center">Upload ID Proof(Government ID)</span>
                                                    <input type="file" id="photo_id" name="photo_id" value="{{ old('photo_id') }}">
                                                    @error('photo_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 d-flex">
                                                <div class="profile-pic-upload d-flex flex-wrap justify-content-center">
                                                    <div class="cam-col">
                                                        <img src="{{ URL::asset('assets/img/icons/camera.svg') }}" alt="camera-image">
                                                    </div>
                                                    <span class="text-center">Upload Medical License</span>
                                                    <input type="file" id="medical_licence" name="medical_licence" value="{{ old('medical_licence') }}">
                                                    @error('medical_licence')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Payment Details</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Bank name</label>
                                        <input type="text" name="bank_name" class="form-control" id="bank_name" value="{{ old('bank_name') }}">
                                        @error('bank_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Branch name</label>
                                        <input type="text" name="branch_name" class="form-control" id="branch_name" value="{{ old('branch_name') }}">
                                        @error('branch_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Account name</label>
                                        <input type="text" name="account_name" class="form-control" id="account_name" value="{{ old('account_name') }}">
                                        @error('account_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Account number</label>
                                        <input type="text" name="account_number" class="form-control" id="account_number" value="{{ old('account_number') }}">
                                        @error('account_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Payment Gateway</h4>
                                    </div>
                                    <div class="remember-me-col d-flex justify-content-between">
                                        <label class="custom_check">Paypal
                                            <input type="checkbox" name="paypal" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="remember-me-col d-flex justify-content-between">
                                        <label class="custom_check">Stripe
                                            <input type="checkbox" name="stripe" value="1" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Term and Condition</h4>
                                    </div>
                                    <div class="remember-me-col d-flex justify-content-between">

                                        <label class="custom_check"> I have read and agree to Surna’s <a class="text-primary" href="{{url('terms-condition')}}">Terms of
                                            Service</a> and <a class="text-primary" href="{{url('privacy-policy')}}">Privacy Policy.</a>
                                            <input type="checkbox" class="" name="term_and_condition"
                                                value="1" required>
                                            <span class="checkmark"></span>
                                        </label>
                                        @error('term_and_condition')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                                <div class="mt-5">
                                    {!! RecaptchaV3::field('register') !!}
                                    <input class="btn btn-primary w-100 btn-lg login-btn" type="submit" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="login-bottom-copyright">
                        <span>© <script>document.write(new Date().getFullYear())</script> Surna. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Register Content -->

    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        grecaptcha.ready(function () {
            document.querySelector('.login-btn').addEventListener('click', function (e) {
                e.preventDefault();
                grecaptcha.execute('{{ env('RECAPTCHAV3_SITEKEY') }}', { action: 'register' }).then(function (token) {
                    document.getElementById("personal_details").submit();
                });
            });
        });
    });
</script>
<!-- /Page Content -->
@endsection
