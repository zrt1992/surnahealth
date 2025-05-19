<?php $page = 'search'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            {{ __('messages.search') }}
        @endslot
        @slot('li_1')
            {{ __('messages.search') }}
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{ __('messages.search_filter') }}</h4>
                        </div>
                        <form action="{{ route('frontend.search') }}" method="GET">
                            <div class="card-body">
                                <div class="filter-widget">
                                    <div class="">
                                        <input type="date" name="date" class="form-control datetimepicker"
                                            placeholder="Select Date" value="{{ request('date') }}">
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>{{ __('messages.gender') }}</h4>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="gender_type" value="male"
                                                {{ request('gender_type') == 'male' ? 'checked' : '' }}>
                                            <span class="checkmark"></span> Male Doctor
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="radio" name="gender_type" value="female"
                                                {{ request('gender_type') == 'female' ? 'checked' : '' }}>
                                            <span class="checkmark"></span> Female Doctor
                                        </label>
                                    </div>
                                </div>

                                <div class="filter-widget">
                                    <h4>{{ __('messages.select_specialist') }}</h4>
                                    @php
                                        $specializations = [
                                            'Urology',
                                            'Neurology',
                                            'Dentist',
                                            'Orthopedic',
                                            'Cardiology',
                                        ];
                                    @endphp
                                    @foreach ($specializations as $specialization)
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist[]"
                                                    value="{{ $specialization }}"
                                                    {{ in_array($specialization, (array) request('select_specialist', [])) ? 'checked' : '' }}>
                                                <span class="checkmark"></span> {{ $specialization }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="btn-search">
                                    <button type="submit" class="btn w-100">{{ __('messages.search') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /Search Filter -->

                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">

                    <!-- Doctor Widget -->
                    @foreach ($allDoctors as $doctor)
                        <div class="card">
                            <div class="card-body">
                                <div class="doctor-widget">
                                    <div class="doc-info-left">
                                        <div class="doctor-img">
                                            <a href="{{ url('/frontend/doctor-profile') }}">
                                                
                                                <img src="{{ !empty($doctor->profile_image) ? $doctor->profile_image : asset('assets/img/profile-image.avif') }}"
                                                    class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{ url('/frontend/doctor-profile') }}">Dr.
                                                    {{ $doctor->name ?? '--' }}</a></h4>
                                            <p class="doc-speciality">
                                                @if (!empty($doctor->doctorEducation) && $doctor->doctorEducation->isNotEmpty())
                                                    @foreach ($doctor->doctorEducation as $education)
                                                        {{ $education->course ?? 'doctor education' }}
                                                    @endforeach
                                                @else
                                                    No education details available.
                                                @endif
                                            </p>

                                            <h5 class="doc-department"><img
                                                    src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                                    class="img-fluid"
                                                    alt="Speciality">{{ $doctor->doctorSpecialization->first()->name ?? '--' }}
                                            </h5>
                                          
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn"
                                                href="{{ url('frontend/doctor-profile/' . $doctor->id) }}">{{ __('messages.view_profile') }}</a>
                                            <a class="apt-btn"
                                                href="{{ url('frontend/booking/' . $doctor->id) }}">{{ __('messages.book_appointment') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm prime-btn"
                            href="javascript:void(0);">{{ __('messages.load_more') }}</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
