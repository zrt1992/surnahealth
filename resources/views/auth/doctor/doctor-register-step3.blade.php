<?php $page = 'doctor-register-step2'; ?>
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
                                    <img src="{{ URL::asset('assets/img/logo.png') }}" alt="Surna-logo">
                                </div>
                                <div class="step-list">
                                    <ul>
                                        <li><a href="javascript:;" class="active-done">1</a></li>
                                        <li><a href="javascript:;" class="active-done">2</a></li>
                                        <li><a href="javascript:;" class="active">3</a></li>
                                        <li><a href="javascript:;" >4</a></li>
                                    </ul>
                                </div>
                                <form id="personal_details" action="{{ route('doctor-registration.store.step3') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Availability</h4>
                                    </div>
                                    <div class="step-process-col mt-4">

                                        <div class="mb-3">
                                            <label class="mb-2">Start time</label>
                                            <input type="text" name="start_time" class="form-control" id="start_time" value="{{ old('start_time') }}">
                                            @error('start_time')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">End time</label>
                                            <input type="text" name="end_time" class="form-control" id="end_time" value="{{ old('end_time') }}">
                                            @error('end_time')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Time Zone</label>
                                            <select name="time_zone" class="form-control" id="time_zone">
                                                <option value="" selected disabled>Select Time Zone</option>
                                                <option value="UTC" {{ old('time_zone') == 'UTC' ? 'selected' : '' }}>UTC</option>
                                                <option value="America/New_York" {{ old('time_zone') == 'America/New_York' ? 'selected' : '' }}>America/New York (GMT-5)</option>
                                                <option value="America/Los_Angeles" {{ old('time_zone') == 'America/Los_Angeles' ? 'selected' : '' }}>America/Los Angeles (GMT-8)</option>
                                                <option value="Europe/London" {{ old('time_zone') == 'Europe/London' ? 'selected' : '' }}>Europe/London (GMT+0)</option>
                                                <option value="Europe/Berlin" {{ old('time_zone') == 'Europe/Berlin' ? 'selected' : '' }}>Europe/Berlin (GMT+1)</option>
                                                <option value="Asia/Kolkata" {{ old('time_zone') == 'Asia/Kolkata' ? 'selected' : '' }}>Asia/Kolkata (GMT+5:30)</option>
                                                <option value="Asia/Tokyo" {{ old('time_zone') == 'Asia/Tokyo' ? 'selected' : '' }}>Asia/Tokyo (GMT+9)</option>
                                                <option value="Australia/Sydney" {{ old('time_zone') == 'Australia/Sydney' ? 'selected' : '' }}>Australia/Sydney (GMT+11)</option>
                                            </select>
                                            @error('time_zone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                      
                                        <div class="mb-3">
                                            <label class="mb-2">Consultation modes</label>
                                            <div class="pregnant-col pt-4">
                                                <div>
                                                    <div class="remember-me-col d-flex justify-content-between">

                                                        <label class="custom_check">Video Call
                                                            <input type="checkbox" class="" id="is_registered"
                                                                name="consultation_modes[]" value="video call" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="remember-me-col d-flex justify-content-between">

                                                        <label class="custom_check">Audio Call
                                                            <input type="checkbox" class="" id="is_registered"
                                                                name="consultation_modes[]" value="audio call">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="remember-me-col d-flex justify-content-between">

                                                        <label class="custom_check">Chat
                                                            <input type="checkbox" class="" id="is_registered"
                                                                name="consultation_modes[]" value="chat">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Consultation Fees</label>
                                            <input type="text" name="consultation_fees" class="form-control"
                                                id="consultation_fees" value="{{ old('consultation_fees') }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">city</label>
                                            <input type="text" name="city" class="form-control" id="city" value="{{ old('city') }}">
                                            @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">State</label>
                                            <input type="text" name="state" class="form-control" id="state" value="{{ old('state') }}">
                                            @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Language</label>
                                            <input type="text" name="language" class="form-control" id="language" value="{{ old('language') }}">
                                            @error('language')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit"
                                            class="btn btn-primary w-100 btn-lg login-btn step2_submit">Continue </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="login-bottom-copyright">
                            <span>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Surna. All rights reserved.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Register Content -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
