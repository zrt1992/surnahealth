<?php $page = 'patient-cancelled-appointment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Patient Appointments
        @endslot
        @slot('li_1')
            Patient Appointments
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @component('components.sidebar_patient')
                @endcomponent
                <div class="col-lg-8 col-xl-9">
                    <form action="{{ route('patient-preferences-update', $appointmentPreferences->id ?? auth()->id()) }}"
                        method="POST">
                        @csrf

                        <div class="setting-card">

                            <div class="setting-title">
                                <h5>{{ __('messages.appointment_preferences') }}</h5>
                            </div>
                            <div class="setting-card">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">{{ __('messages.preferred_doctor') }} <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="preferred_doctor"
                                                class="form-control"
                                                value="{{ old('preferred_doctor', $appointmentPreferences->preferred_doctor ?? '') }}">
                                            @error('preferred_doctor')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Preferred time <span
                                                    class="text-danger">*</span></label>
                                            <input type="time" class="form-control" name="preferred_time"
                                                class="form-control"
                                                value="{{ old('preferred_time', $appointmentPreferences->preferred_time ?? '') }}">
                                            @error('preferred_time')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">{{ __('messages.preferred_consultation_mode') }}
                                                <span class="text-danger">*</span></label>

                                            <div class="remember-me-col d-flex justify-content-between">
                                                <label class="custom_check">{{ __('messages.video_call') }}
                                                    <input type="checkbox" id="video_call" name="video_call" value="1"
                                                        {{ old('video_call', $appointmentPreferences->video_call ?? '') == 1 ? 'checked' : '' }}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="remember-me-col d-flex justify-content-between">
                                                <label class="custom_check">{{ __('messages.audio_call') }}
                                                    <input type="checkbox" id="audio_call" name="audio_call" value="1"
                                                        {{ old('audio_call', $appointmentPreferences->audio_call ?? '') == 1 ? 'checked' : '' }}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="remember-me-col d-flex justify-content-between">
                                                <label class="custom_check">{{ __('messages.chat') }}
                                                    <input type="checkbox" id="chat" name="chat" value="1"
                                                        {{ old('chat', $appointmentPreferences->chat ?? '') == 1 ? 'checked' : '' }}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-btn text-end">
                                <a href="#" class="btn btn-gray">{{ __('messages.cancel') }}</a>
                                <button type="submit"
                                    class="btn btn-primary prime-btn">{{ __('messages.save_changes') }}</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
