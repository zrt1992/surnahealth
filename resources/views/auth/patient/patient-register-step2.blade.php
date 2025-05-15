<?php $page = 'patient-register-step2'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content login-page pt-0">
        <div class="container-fluid">
            
            <!-- Register Content -->
            <div class="account-content">
                <div class="d-flex align-items-center">
                    <div class="login-right">
                        <div class="inner-right-login">
                            <div class="login-header">
                                <div class="logo-icon">
                                    <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Surna-logo">
                                </div>
                                <div class="step-list">
                                    <ul>
                                        <li><a href="javascript:;" class="active-done">1</a></li>
                                        <li><a href="javascript:;" class="active">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                       
                                    </ul>
                                </div>
                                <form id="personal_details" action="{{ route('user-registration.store.step2') }}" method="POST">  
                                        @csrf
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Select Your Gender</h4>
                                    </div>
                                    <div class="select-gender-col">
                                        <div class="row">
                                            <div class="col-6 pe-2">
                                                <input type="radio" id="test1" name="gender" value="Male">
                                                <label for="test1">
                                                    <span class="gender-icon"><img src="{{ URL::asset('assets/img/icons/male.png')}}" alt="male-icon"></span>
                                                    <span>Male</span>
                                                </label>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <input type="radio" id="test2" name="gender" value="Female">
                                                <label for="test2">
                                                    <span class="gender-icon"><img src="{{ URL::asset('assets/img/icons/female.png')}}" alt="female-icon"></span>
                                                    <span>Female</span>
                                                </label>
                                            </div>
                                            @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="pregnant-col pt-4">
                                        <div>
                                            <div class="remember-me-col d-flex justify-content-between">
                                                <span class="mt-1">Are you Pregnant</span>
                                                <label class="custom_check">
                                                    <input type="checkbox" class="" id="is_registered" name="pregnant" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="step-process-col mt-4">
                                        {{-- <div class="mb-3" id="preg_div" style="display: none;">
                                            <label class="mb-2">Pregnancy Term</label>
                                            <select class="form-select form-control select" id="preg_term" name="preg_term" tabindex="-1" aria-hidden="true">
                                                <option selected="">Select Your Pregnancy Month</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option>7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div> --}}
                                        {{-- <div class="mb-3">
                                            <label class="mb-2">Your Weight</label>
                                            <div class="row">
                                                <div class="col-7 pe-2">
                                                    <input type="text" class="form-control" name="weight" id="weight">
                                                </div>
                                                <div class="col-5 ps-2">
                                                    <select class="form-select form-control select" id="weight_unit" name="weight_unit">
                                                        <option value="kg">Kg</option>
                                                    </select>
                                                </div>
                                                @error('weight')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Your Height</label>
                                            <div class="row">
                                                <div class="col-7 pe-2">
                                                    <input type="text" class="form-control" id="height" name="height">
                                                </div>
                                                <div class="col-5 ps-2">
                                                    <select class="form-select form-control select" id="height_unit" name="height_unit" tabindex="-1" aria-hidden="true">
                                                        <option value="cm">cm</option>
                                                        <option value="ft">ft</option>
                                                    </select>
                                                </div>
                                                @error('height')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label class="mb-2">Date of birth</label>
                                            <input type="text" name="age" class="form-control" id="age" value="{{ old('age') }}" required>
                                            @error('age')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label class="mb-2">Blood Type</label>
                                            <select class="form-select form-control select" id="blood_group" name="blood_group" tabindex="-1" aria-hidden="true">
                                                <option>Select your blood group</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            </select>
                                            @error('blood_group')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Heart Rate</label>
                                            <select class="form-select form-control select" id="heart_rate" name="heart_rate" tabindex="-1" aria-hidden="true">
                                                <option>Select Your Heart Rate</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            @error('heart_rate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Blood Pressure</label>
                                            <select class="form-select form-control select" id="bp" name="bp" tabindex="-1" aria-hidden="true">
                                                <option>Select Your Blood Pressure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            @error('bp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Glucose Level</label>
                                            <select class="form-select form-control select" id="glucose" name="glucose" tabindex="-1" aria-hidden="true">
                                                <option>Select Your Glucose Level</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            @error('glucose')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div> --}}
                                        <div class="mb-3">
                                            <label class="mb-2">Existing medical conditions</label>
                                            <input type="text" class="form-control" id="existing_medical_conditions" name="existing_medical_conditions" value="{{ old('existing_medical_conditions') }}">
                                            @error('existing_medical_conditions')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Medications currently using(optional)</label>
                                            <input type="text" class="form-control" id="medications_currently_using" name="medications_currently_using" value="{{ old('medications_currently_using') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Primarly health concern(optional)</label>
                                            <input type="text" class="form-control" id="primarly_health_concern" name="primarly_health_concern" value="{{ old('primarly_health_concern') }}">
                                        </div>
                                       
                                        {{-- <div class="checklist-col pregnant-col">
                                            <div class="remember-me-col d-flex justify-content-between">
                                                <span class="mt-1">Do you have any pre-exisiting conditions?</span>
                                                <label class="custom_check mb-3">
                                                    <input type="checkbox" class="" name="cancer" id="cancer"  value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="remember-me-col" id="cancer_div" style="display:none">
                                                <div class="condition_input">
                                                    <input type="text" id="conditions" name="conditions[]" class="form-control" placeholder="">
                                                </div>
                                                <a href="javascript:void(0);" class="add_condition"><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div class="remember-me-col d-flex justify-content-between">
                                                <span class="mt-1">Are you currently taking any medication</span>
                                                <label class="custom_check mb-3">
                                                    <input type="checkbox" class="" name="medicine" id="medicine" value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="remember-me-col" id="medicine_div" style="display:none">
                                                <div class="medicine_input">
                                                    <input type="text" id="medicine_name" name="medicine_name[]" class="form-control" placeholder="Enter medicine_name">
                                                    <input type="text" id="dosage" name="dosage[]" class="form-control" placeholder="Enter dosage">
                                                </div>
                                                <a href="javascript:void(0);" class="add_medicine"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div> --}}

                                        <div class="text-start mt-2">
                                            <h4 class="mt-3">contact Details</h4>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" required>
                                            @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                         <div class="mb-3">
                                            <label class="mb-2">State</label>
                                            <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                                            @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">city</label>
                                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                                            @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                         <div class="mb-3">
                                            <label class="mb-2">Zip Code</label>
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" required>
                                            @error('zipcode')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                         <div class="mb-3">
                                            <label class="mb-2">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Preferred language</label>
                                            <input type="text" class="form-control" id="preferred_language" name="preferred_language" value="{{ old('preferred_language') }}">
                                            @error('preferred_language')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Referral code(optional)</label>
                                            <input type="text" class="form-control" id="referral_code" name="referral_code" value="{{ old('referral_code') }}">
                                        </div>

                                        <div class="text-start mt-2">
                                            <h4 class="mt-3">Appointment preferences</h4>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Prefered doctor(optional)</label>
                                            <input type="text" class="form-control" id="preferred_doctor" name="preferred_doctor" value="{{ old('preferred_doctor') }}">
                                            
                                        </div>
                                        <label class="mb-2">Prefered consultation mode</label>
                                        <div class="remember-me-col d-flex justify-content-between">

                                            <label class="custom_check">Video call
                                                <input type="checkbox" class="" id="is_registered"
                                                    name="video_call" value="1" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="remember-me-col d-flex justify-content-between">

                                            <label class="custom_check">Audio call
                                                <input type="checkbox" class="" id="is_registered"
                                                    name="audio_call" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="remember-me-col d-flex justify-content-between">

                                            <label class="custom_check">Chat
                                                <input type="checkbox" class="" id="is_registered"
                                                    name="chat" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-2">Preferred time</label>
                                            <input type="time" class="form-control datetimepicker" id="preferred_time" name="preferred_time" value="{{ old('preferred_time') }}">
                                            @error('preferred_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
