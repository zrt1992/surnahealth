<?php $page = 'search'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Search
        @endslot
        @slot('li_1')
            Search
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
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Gender</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type" checked>
                                        <span class="checkmark"></span> Male Doctor
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Female Doctor
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Select Specialist</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Urology
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Neurology
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Dentist
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Orthopedic
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Cardiologist
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Cardiologist
                                    </label>
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" class="btn w-100">Search</button>
                            </div>
                        </div>
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
                                        <a href="{{ url('doctor-profile-2') }}">
                                            <img src="{{$doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile-2') }}">Dr. {{ $doctor->name ?? '--' }}</a></h4>
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
                                                class="img-fluid" alt="Speciality">{{ $doctor->doctorSpecialization->first()->name ?? '--' }}</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(0)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{ $doctor->city ?? '--' }}, {{ $doctor->state ?? '--' }},
                                                {{ $doctor->country ?? '--' }}</p>
                                            <ul class="clinic-gallery">
                                                @if (!empty($doctor->doctorClinic) && $doctor->doctorClinic->isNotEmpty())
                                               
                                         
                                                @foreach ($doctor->doctorClinic->first()->gallery as $gallery )
                                                <li>
                                                    <a href="{{$gallery->image ?? URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{$gallery->image ?? URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                @endforeach
                                                @else
                                                No doctor clinic available.
                                            @endif
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>clinic service 1</span>
                                            <span>clinic service 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 0%</li>
                                            <li><i class="far fa-comment"></i> 0 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> {{ $doctor->state ?? '--' }},  {{ $doctor->country ?? '--' }}</li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i>
                                                ${{ $doctor->availableTimings->min('appointment_fees') ?? 'N/A' }} - ${{ $doctor->availableTimings->max('appointment_fees') ?? 'N/A' }}
                                                <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile-2/'. $doctor->id) }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking/'. $doctor->id) }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm prime-btn" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
