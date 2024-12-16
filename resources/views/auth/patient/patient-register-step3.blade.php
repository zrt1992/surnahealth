<?php $page = 'patient-register-step3'; ?>
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
                                        <li><a href="javascript:;" class="active-done">2</a></li>
                                        <li><a href="javascript:;" class="active">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                      
                                    </ul>
                                </div>
                                <form id="personal_details" action="{{ route('user-registration.store.step3') }}" method="POST">  
                                    @csrf
                                <div class="text-start mt-2">
                                    <h4 class="mt-3">Insurance information</h4>
                                </div>
                                <div class="step-process-col mt-4">
                                 
                                    <div class="mb-3">
                                        <label class="mb-2">Insurance provider name</label>
                                        <input type="text" name="insurance_provider_name"  class="form-control" id="insurance_provider_name" value="{{ old('insurance_provider_name') }}">
                                        @error('insurance_provider_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Insurance Id</label>
                                        <input type="text" class="form-control"  id="insurance_id" name="insurance_id" value="{{ old('insurance_id') }}">
                                        @error('insurance_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Emergency_contact</label>
                                        <input type="text" class="form-control"  id="emergency_contact" name="emergency_contact" value="{{ old('emergency_contact') }}">
                                        @error('emergency_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Name</label>
                                        <input type="text" class="form-control"  id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="mb-2">Relationship</label>
                                        <input type="text" class="form-control"  id="relationship" name="relationship" value="{{ old('relationship') }}">
                                        @error('relationship')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Phone number</label>
                                        <input type="text" class="form-control"  id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                                        @error('phone_number')
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
