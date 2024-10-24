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
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a></h4>
                                        <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS
                                        </p>
                                        <h5 class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Florida,
                                                USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 98%</li>
                                            <li><i class="far fa-comment"></i> 17 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Darren Elder</a>
                                        </h4>
                                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork,
                                                USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Deborah Angel</a>
                                        </h4>
                                        <p class="doc-speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-04.png') }}"
                                                class="img-fluid" alt="Speciality">Cardiology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(27)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Georgia,
                                                USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 99%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $100 - $400 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Sofia Brient</a>
                                        </h4>
                                        <p class="doc-speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-01.png') }}"
                                                class="img-fluid" alt="Speciality">Urology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Louisiana,
                                                USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 97%</li>
                                            <li><i class="far fa-comment"></i> 4 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $150 - $250 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Katharine
                                                Berthold</a></h4>
                                        <p class="doc-speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-03.png') }}"
                                                class="img-fluid" alt="Speciality">Orthopaedics</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(52)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Texas, USA
                                            </p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 52 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $100 - $500 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm prime-btn" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
