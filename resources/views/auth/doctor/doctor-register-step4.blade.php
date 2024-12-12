<?php $page = 'doctor-register-step4'; ?>
@extends('layout.mainlayout')
@section('content')
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
                                    <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Surna-logo">
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
                                                            <img src="{{ URL::asset('assets/img/icons/camera.svg')}}" alt="camera-image">
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
                                                            <img src="{{ URL::asset('assets/img/icons/camera.svg')}}" alt="camera-image">
                                                        </div>
                                                        <span class="text-center">Upload Medical Lincence</span>
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
                                            <input type="text" name="bank_name" class="form-control datetimepicker" id="bank_name" value="{{ old('bank_name') }}">
                                            @error('bank_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Branch name</label>
                                            <input type="text" name="branch_name" class="form-control datetimepicker" id="branch_name" value="{{ old('branch_name') }}">
                                            @error('branch_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Account name</label>
                                            <input type="text" name="account_name" class="form-control datetimepicker" id="account_name" value="{{ old('account_name') }}">
                                            @error('account_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div> <div class="mb-3">
                                            <label class="mb-2">Account number</label>
                                            <input type="text" name="account_number" class="form-control datetimepicker" id="account_number" value="{{ old('account_number') }}">
                                            @error('account_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="text-start mt-2">
                                            <h4 class="mt-3">Payment Gateway</h4>
                                        </div>
                                        <div class="remember-me-col d-flex justify-content-between">

                                            <label class="custom_check">Paypal
                                                <input type="checkbox" class="" id="is_registered"
                                                    name="paypal" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="remember-me-col d-flex justify-content-between">

                                            <label class="custom_check">Stripe
                                                <input type="checkbox" class="" id="is_registered"
                                                    name="stripe" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-primary w-100 btn-lg login-btn step2_submit">Continue </button>
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
    <!-- /Page Content -->
@endsection