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
                                        <li><a href="javascript:;" class="active">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                    </ul>
                                </div>
                                <form id="personal_details" action="{{ route('doctor-registration.store.step2') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Gender Selection -->
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Select Your Gender</h4>
                                    </div>
                                    <div class="select-gender-col">
                                        <div class="row">
                                            <div class="col-6 pe-2">
                                                <input type="radio" id="test1" name="gender" value="Male"
                                                    {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                                <label for="test1">
                                                    <span class="gender-icon">
                                                        <img src="{{ URL::asset('assets/img/icons/male.png') }}"
                                                            alt="male-icon">
                                                    </span>
                                                    <span>Male</span>
                                                </label>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <input type="radio" id="test2" name="gender" value="Female"
                                                    {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                                <label for="test2">
                                                    <span class="gender-icon">
                                                        <img src="{{ URL::asset('assets/img/icons/female.png') }}"
                                                            alt="female-icon">
                                                    </span>
                                                    <span>Female</span>
                                                </label>
                                            </div>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Professional Details -->
                                    <div class="text-start mt-2">
                                        <h4 class="mt-3">Professional Details</h4>
                                    </div>
                                    <div class="step-process-col mt-4">
                                        <div class="mb-3">
                                            <label class="mb-2">Medical Licence Number</label>
                                            <input type="text" name="medical_licence_number" class="form-control"
                                                id="medical_licence_number" value="{{ old('medical_licence_number') }}">
                                            @error('medical_licence_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Specialization</label>
                                            <select class="form-select form-control select" id="specialization"
                                                name="specialization">
                                                <option value="">Select specialization</option>
                                                @foreach ($specializations as $specialization)
                                                    <option value="{{ $specialization->id }}"
                                                        @if (old('specialization')) selected @endif>
                                                        {{ $specialization->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('specialization')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Years of Experience</label>
                                            <select class="form-select form-control select" id="years_of_experience"
                                                name="years_of_experience">
                                                <option value="">Select years of experience</option>
                                                @for ($i = 1; $i <= 9; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ old('years_of_experience') == $i ? 'selected' : '' }}>
                                                        {{ $i }}</option>
                                                @endfor
                                                <option value="+10"
                                                    {{ old('years_of_experience') == '+10' ? 'selected' : '' }}>+10
                                                </option>
                                            </select>
                                            @error('years_of_experience')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Educational Background -->
                                        <div class="text-start mt-2">
                                            <h4 class="mt-3">Educational Background</h4>
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Medical School</label>
                                            <input type="text" name="medical_school" class="form-control"
                                                id="medical_school" value="{{ old('medical_school') }}">
                                            @error('medical_school')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Residency</label>
                                            <input type="text" name="residency" class="form-control" id="residency"
                                                value="{{ old('residency') }}">
                                            @error('residency')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Certification Upload -->
                                        <div class="row justify-content-center mb-3">
                                            <div class="col-12 col-md-6 d-flex">
                                                <div class="profile-pic-upload d-flex flex-wrap justify-content-center">
                                                    <div class="cam-col">
                                                        <img src="{{ URL::asset('assets/img/icons/camera.svg') }}"
                                                            alt="camera-image">
                                                    </div>
                                                    <span class="text-center">Upload Certifications</span>
                                                    <input type="file" id="certifications" name="certifications">
                                                    @error('certifications')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Hospital/Clinic Affiliation</label>
                                            <input type="text" name="hospital_clinic_affiliation" class="form-control"
                                                id="hospital_clinic_affiliation"
                                                value="{{ old('hospital_clinic_affiliation') }}">
                                            @error('hospital_clinic_affiliation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <button type="submit"
                                            class="btn btn-primary w-100 btn-lg login-btn step2_submit">Continue</button>
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
