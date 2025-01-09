<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="row justify-content-center">
                        <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                            <a href="{{ route('frontend.search', ['doctor_id' => null]) }}" class="serv-wrap blue-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/service-01.svg') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.book_appointment') }}</h4>
                            </a>
                        </div>
                       
                        <div class="col-12 d-flex col-xxl col-lg-12 col-sm-6">
                            <a href="javascript:void(0);" class="serv-wrap info-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/service-03.svg') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.pharmacy') }}</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                            <a href="{{ url('login') }}" class="serv-wrap pink-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/service-06.svg') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.talk_to_doctors') }}</h4>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/banner-img.png') }}" class="img-fluid" alt="patient-image">
                        
                    </div>
                  
                </div>
                <div class="col-lg-3">
                    <div class="row justify-content-center">
                        <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                            <a href="https://huggingface.co/spaces/surna/Surna_TeleHealth_-_Breast_Cancer_Risk_Assessment" class="serv-wrap red-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/breast-cancer.png') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.breast_cancer') }}</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                            <a href="javascript:void(0);" class="serv-wrap success-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/service-05.svg') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.prostate_cancer') }}</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                            <a href="javascript:void(0);" class="serv-wrap info-bg flex-fill">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/health-care-love.svg') }}" alt="heart-image">
                                </span>
                                <h4>{{ __('messages.cardiac_issues') }}</h4>
                            </a>
                        </div>
                       
                       
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Specialities Section -->
    <section class="specialities-section-one">
        <div class="container">
            {{-- <div class="service-sec-one">
                <div
                    class="row row-cols-7 row-cols-xxl-7 row-cols-xl-4 row-cols-lg-4 rows-cols-md-6 justify-content-center">
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="{{ route('frontend.search', ['doctor_id' => null]) }}" class="serv-wrap blue-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-01.svg') }}" alt="heart-image">
                            </span>
                            <h4>Book Appointment</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="javascript:void(0);" class="serv-wrap green-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-02.svg') }}" alt="heart-image">
                            </span>
                            <h4>Lab Testing Services</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="javascript:void(0);" class="serv-wrap info-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-03.svg') }}" alt="heart-image">
                            </span>
                            <h4>Medicines & Supplies</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="javascript:void(0);" class="serv-wrap red-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-04.svg') }}" alt="heart-image">
                            </span>
                            <h4>Hospitals / Clinics</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="javascript:void(0);" class="serv-wrap success-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-05.svg') }}" alt="heart-image">
                            </span>
                            <h4>Health Care Services</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="{{ url('chat') }}" class="serv-wrap pink-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-06.svg') }}" alt="heart-image">
                            </span>
                            <h4>Talk to Doctor’s</h4>
                        </a>
                    </div>
                    <div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
                        <a href="javascript:void(0);" class="serv-wrap danger-bg flex-fill">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/service-07.svg') }}" alt="heart-image">
                            </span>
                            <h4>Home Care Services</h4>
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6 col-7 aos" data-aos="fade-up">
                    <div class="section-header-one section-header-slider">
                        <h2 class="section-title">{{ __('messages.specialities') }}</h2>
                    </div>
                </div>
                <div class="col-md-6 col-5  aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-1 text-end nav-control"></div>
                </div>
            </div>
            <div class="owl-carousel specialities-slider-one owl-theme aos" data-aos="fade-up">
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-01.svg') }}"
                                    alt="heart-image"></span>
                        </div>
                        <p>{{ __('messages.cardiology') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-02.svg') }}"
                                    alt="brain-image"></span>
                        </div>
                        <p>{{ __('messages.neurology') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-03.svg') }}"
                                    alt="kidney-image"></span>
                        </div>
                        <p>{{ __('messages.urology') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-04.svg') }}"
                                    alt="bone-image"></span>
                        </div>
                        <p>{{ __('messages.orthopedic') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-05.svg') }}"
                                    alt="dentist"></span>
                        </div>
                        <p>{{ __('messages.dentist') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-06.svg') }}"
                                    alt="eye-image"></span>
                        </div>
                        <p>{{ __('messages.ophthalmology') }}</p>
                    </div>
                </div>
                <div class="item">
                    <div class="specialities-item">
                        <div class="specialities-img">
                            <span><img src="{{ URL::asset('/assets/img/specialities/specialities-02.svg') }}"
                                    alt="brain-image"></span>
                        </div>
                        <p>{{ __('messages.neurology') }}</p>
                    </div>
                </div>
            </div>
            <div class="specialities-btn aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn">
                    {{ __('messages.see_all_specialities') }}
                </a>
            </div>
        </div>
    </section>
    <!-- /Specialities Section -->

    <!-- Doctors Section -->
    <section class="doctors-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 aos" data-aos="fade-up">
                    <div class="section-header-one section-header-slider text-center">
                        <h2 class="section-title">{{ __('messages.best_doctors') }}</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel doctor-slider-one owl-theme aos" data-aos="fade-up">

                <!-- Doctor Item -->
                <div class="item">
                    <div class="doctor-profile-widget doc-item">
                        <div class="doc-pro-img">
                            <a href="{{ url('doctor-profile') }}">
                                <div class="doctor-profile-img">
                                    <img src="{{ URL::asset('/assets/img/work-img.png') }}" class="img-fluid"
                                        alt="Ruby Perrin">
                                </div>
                            </a>
                            <div class="doctor-amount">
                                <span>$200</span>
                            </div>
                        </div>
                        <div class="doc-content">
                            <div class="doc-pro-info">
                                <div class="doc-pro-name">
                                    <a href="{{ url('doctor-profile') }}">Dr. Julia Robert</a>
                                    <p>Orthopedic</p>
                                </div>
                                <div class="reviews-ratings">
                                    <p>
                                        <span><i class="fas fa-star"></i> 4.5</span> (35)
                                    </p>
                                </div>
                            </div>
                            <div class="doc-pro-location">
                                <p><i class="feather-map-pin"></i> Newyork, USA</p>
                                <span class="badge badge-success doc-badge"><i
                                        class="fa-solid fa-circle"></i>Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Doctor Item -->

                <!-- Doctor Item -->
                <div class="item">
                    <div class="doctor-profile-widget doc-item">
                        <div class="doc-pro-img">
                            <a href="{{ url('doctor-profile') }}">
                                <div class="doctor-profile-img">
                                    <img src="{{ URL::asset('/assets/img/services-six-1.png') }}" class="img-fluid"
                                        alt="Paul Richard">
                                </div>
                            </a>
                            <div class="doctor-amount">
                                <span>$300</span>
                            </div>
                        </div>
                        <div class="doc-content">
                            <div class="doc-pro-info">
                                <div class="doc-pro-name">
                                    <a href="{{ url('doctor-profile') }}">Dr. John Doe</a>
                                    <p>Dentist</p>
                                </div>
                                <div class="reviews-ratings">
                                    <p>
                                        <span><i class="fas fa-star"></i> 4.3</span> (45)
                                    </p>
                                </div>
                            </div>
                            <div class="doc-pro-location">
                                <p><i class="feather-map-pin"></i> Austin, TX</p>
                                <span class="badge badge-success doc-badge"><i
                                        class="fa-solid fa-circle"></i>Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Doctor Item -->

                <!-- Doctor Item -->
                <div class="item">
                    <div class="doctor-profile-widget doc-item">
                        <div class="doc-pro-img">
                            <a href="{{ url('doctor-profile') }}">
                                <div class="doctor-profile-img">
                                    <img src="{{ URL::asset('/assets/img/doctor-banner1.png') }}" class="img-fluid"
                                        alt="Darren Elder">
                                </div>
                            </a>
                            <div class="doctor-amount">
                                <span>$100</span>
                            </div>
                        </div>
                        <div class="doc-content">
                            <div class="doc-pro-info">
                                <div class="doc-pro-name">
                                    <a href="{{ url('doctor-profile') }}">Dr. Aviles</a>
                                    <p>Neurology</p>
                                </div>
                                <div class="reviews-ratings">
                                    <p>
                                        <span><i class="fas fa-star"></i> 4.0</span> (20)
                                    </p>
                                </div>
                            </div>
                            <div class="doc-pro-location">
                                <p><i class="feather-map-pin"></i> Newyork, USA</p>
                                <span class="badge badge-danger doc-badge"><i
                                        class="fa-solid fa-circle"></i>Unavailable</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Doctor Item -->

                <!-- Doctor Item -->
                <div class="item">
                    <div class="doctor-profile-widget doc-item">
                        <div class="doc-pro-img">
                            <a href="{{ url('doctor-profile') }}">
                                <div class="doctor-profile-img">
                                    <img src="{{ URL::asset('/assets/img/dr-slider.png') }}" class="img-fluid"
                                        alt="Sofia Brient">
                                </div>
                            </a>
                            <div class="doctor-amount">
                                <span>$250</span>
                            </div>
                        </div>
                        <div class="doc-content">
                            <div class="doc-pro-info">
                                <div class="doc-pro-name">
                                    <a href="{{ url('doctor-profile') }}">Dr. Palmore</a>
                                    <p>Immunologist</p>
                                </div>
                                <div class="reviews-ratings">
                                    <p>
                                        <span><i class="fas fa-star"></i> 4.5</span> (35)
                                    </p>
                                </div>
                            </div>
                            <div class="doc-pro-location">
                                <p><i class="feather-map-pin"></i> Waipahu, HI</p>
                                <span class="badge badge-success doc-badge"><i
                                        class="fa-solid fa-circle"></i>Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Doctor Item -->

                <!-- Doctor Item -->
                <div class="item">
                    <div class="doctor-profile-widget doc-item">
                        <div class="doc-pro-img">
                            <a href="{{ url('doctor-profile') }}">
                                <div class="doctor-profile-img">
                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-01.jpg') }}" class="img-fluid"
                                        alt="John Doe">
                                </div>
                            </a>
                            <div class="doctor-amount">
                                <span>$880</span>
                            </div>
                        </div>
                        <div class="doc-content">
                            <div class="doc-pro-info">
                                <div class="doc-pro-name">
                                    <a href="{{ url('doctor-profile') }}">Dr. Paul Richard</a>
                                    <p>Dentist</p>
                                </div>
                                <div class="reviews-ratings">
                                    <p>
                                        <span><i class="fas fa-star"></i> 4.4</span> (50)
                                    </p>
                                </div>
                            </div>
                            <div class="doc-pro-location">
                                <p><i class="feather-map-pin"></i> California, USA</p>
                                <span class="badge badge-success doc-badge"><i
                                        class="fa-solid fa-circle"></i>Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Doctor Item -->

            </div>
        </div>
    </section>
    <!-- /Doctors Section -->

    <!-- Pricing -->
    <section class="pricing-section doc-plan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-header-one">
                        <h2 class="section-title">Pricing Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-sm-12 aos" data-aos="fade-up">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <div class="pricing-header">
                                <div class="pricing-header-info">
                                    <div class="pricing-icon">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/icons/price-icon1.svg') }}"
                                                alt="icon">
                                        </span>
                                    </div>
                                    <div class="pricing-title">
                                        <h4>Basic</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <div class="pricing-amount">
                                    <h2>$99 <span>/monthly</span></h2>
                                    <h6>What’s included</h6>
                                </div>
                                <div class="pricing-list">
                                    <ul>
                                        <li>Profile Creation</li>
                                        <li>Appointment Booking</li>
                                        <li>Notification Alerts</li>
                                        <li>Limited Telemedicine Access</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ url('login-email') }}" class="btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 aos" data-aos="fade-up">
                    <div class="card pricing-card pricing-card-active">
                        <div class="card-body">
                            <div class="pricing-header">
                                <div class="pricing-header-info">
                                    <div class="pricing-icon">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/icons/price-icon2.svg') }}"
                                                alt="icon">
                                        </span>
                                    </div>
                                    <div class="pricing-title">
                                        <h4>Pro</h4>
                                    </div>
                                    <div class="pricing-tag">
                                        <span>Popular</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <div class="pricing-amount">
                                    <h2>$199 <span>/monthly</span></h2>
                                    <h6>What’s included</h6>
                                </div>
                                <div class="pricing-list">
                                    <ul>
                                        <li>Profile Creation</li>
                                        <li>Appointment Booking</li>
                                        <li>Notification Alerts</li>
                                        <li>Extended Telemedicine Access</li>
                                        <li>Exclusive Discounts</li>
                                        <li>Appointment History</li>
                                        <li>Priority Customer Support</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ url('login-email') }}" class="btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 aos" data-aos="fade-up">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <div class="pricing-header">
                                <div class="pricing-header-info">
                                    <div class="pricing-icon">
                                        <span>
                                            <img src="{{ URL::asset('/assets/img/icons/price-icon3.svg') }}"
                                                alt="icon">
                                        </span>
                                    </div>
                                    <div class="pricing-title">
                                        <h4>Enterprise</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <div class="pricing-amount">
                                    <h2>$399 <span>/monthly</span></h2>
                                    <h6>What’s included</h6>
                                </div>
                                <div class="pricing-list">
                                    <ul>
                                        <li>All Basic Plan Features</li>
                                        <li>All Premium Plan Features</li>
                                        <li>Personalized Health Insights</li>
                                        <li>Family Account Management</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{ url('login-email') }}" class="btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pricing -->

    <!-- Work Section -->
    <section class="work-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 work-img-info aos" data-aos="fade-up">
                    <div class="work-img">
                        <img src="{{ URL::asset('/assets/img/work-img.png') }}" class="img-fluid" alt="doctor-image">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 work-details">
                    <div class="section-header-one aos" data-aos="fade-up">
                        <h5>{{ __('messages.how_it_works') }}</h5>
                        <h2 class="section-title">{{ __('messages.steps_title') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                            <div class="work-info">
                                <div class="work-icon">
                                    <span><img src="{{ URL::asset('/assets/img/icons/work-01.svg') }}" alt="search-doctor-icon"></span>
                                </div>
                                <div class="work-content">
                                    <h5>{{ __('messages.search_doctor') }}</h5>
                                    <p>{{ __('messages.search_doctor_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                            <div class="work-info">
                                <div class="work-icon">
                                    <span><img src="{{ URL::asset('/assets/img/icons/work-02.svg') }}" alt="doctor-profile-icon"></span>
                                </div>
                                <div class="work-content">
                                    <h5>{{ __('messages.check_doctor_profile') }}</h5>
                                    <p>{{ __('messages.check_doctor_profile_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                            <div class="work-info">
                                <div class="work-icon">
                                    <span><img src="{{ URL::asset('/assets/img/icons/work-03.svg') }}" alt="calendar-icon"></span>
                                </div>
                                <div class="work-content">
                                    <h5>{{ __('messages.schedule_appointment') }}</h5>
                                    <p>{{ __('messages.schedule_appointment_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
                            <div class="work-info">
                                <div class="work-icon">
                                    <span><img src="{{ URL::asset('/assets/img/icons/work-04.svg') }}" alt="solution-icon"></span>
                                </div>
                                <div class="work-content">
                                    <h5>{{ __('messages.get_solution') }}</h5>
                                    <p>{{ __('messages.get_solution_description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- /Work Section -->

    <!-- Articles Section -->
    <section class="articles-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 aos" data-aos="fade-up">
                    <div class="section-header-one text-center">
                        <h2 class="section-title">Latest Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="articles-grid w-100">
                        <div class="articles-info">
                            <div class="articles-left">
                                <a href="{{ url('frontend/blog-details') }}">
                                    <div class="articles-img">
                                        <img src="{{ URL::asset('/assets/img/blog/blog-1.jpg') }}" class="img-fluid"
                                            alt="John Doe">
                                    </div>
                                </a>
                            </div>
                            <div class="articles-right">
                                <div class="articles-content">
                                    <ul class="articles-list nav">
                                        <li>
                                            <i class="feather-user"></i> John Doe
                                        </li>
                                        <li>
                                            <i class="feather-calendar"></i> 13 Aug, 2023
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="{{ url('frontend/blog-details') }}">Navigating Telehealth: A Guide to Virtual
                                            Healthcare Visits</a>
                                    </h4>
                                    <p>Explore the benefits & challenges of virtual healthcare appointments, along with tips
                                        for making good health.</p>
                                    <a href="{{ url('frontend/blog-details') }}" class="btn">{{ __('messages.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="articles-grid w-100">
                        <div class="articles-info">
                            <div class="articles-left">
                                <a href="{{ url('frontend/blog-details') }}">
                                    <div class="articles-img">
                                        <img src="{{ URL::asset('/assets/img/blog/blog-2.jpg') }}" class="img-fluid"
                                            alt="Darren Elder">
                                    </div>
                                </a>
                            </div>
                            <div class="articles-right">
                                <div class="articles-content">
                                    <ul class="articles-list nav">
                                        <li>
                                            <i class="feather-user"></i> Darren Elder
                                        </li>
                                        <li>
                                            <i class="feather-calendar"></i> 10 Sep, 2023
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="{{ url('frontend/blog-details') }}">Work-Life Harmony: Balancing Career and
                                            Personal Wellness</a>
                                    </h4>
                                    <p>Uncover strategies to achieve a harmonious balance between professional commitments
                                        and personal well-being.</p>
                                    <a href="{{ url('frontend/blog-details') }}" class="btn">{{ __('messages.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="articles-grid w-100">
                        <div class="articles-info">
                            <div class="articles-left">
                                <a href="{{ url('frontend/blog-details') }}">
                                    <div class="articles-img">
                                        <img src="{{ URL::asset('/assets/img/blog/blog-3.png') }}" class="img-fluid"
                                            alt="Ruby Perrin">
                                    </div>
                                </a>
                            </div>
                            <div class="articles-right">
                                <div class="articles-content">
                                    <ul class="articles-list nav">
                                        <li>
                                            <i class="feather-user"></i> Ruby Perrin
                                        </li>
                                        <li>
                                            <i class="feather-calendar"></i> 30 Oct, 2023
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="{{ url('frontend/blog-details') }}">Sleep Solutions: Unveiling the Secrets to a
                                            Restful Night</a>
                                    </h4>
                                    <p>Explore importance of quality sleep & learn tips to improve your sleep, ensuring you
                                        wake up refreshed & ready to face the day.</p>
                                    <a href="{{ url('frontend/blog-details') }}" class="btn">{{ __('messages.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="articles-grid w-100">
                        <div class="articles-info">
                            <div class="articles-left">
                                <a href="{{ url('frontend/blog-details') }}">
                                    <div class="articles-img">
                                        <img src="{{ URL::asset('/assets/img/blog/blog-4.avif') }}" class="img-fluid"
                                            alt="Sofia Brient">
                                    </div>
                                </a>
                            </div>
                            <div class="articles-right">
                                <div class="articles-content">
                                    <ul class="articles-list nav">
                                        <li>
                                            <i class="feather-user"></i> Sofia Brient
                                        </li>
                                        <li>
                                            <i class="feather-calendar"></i> 08 Nov, 2023
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="{{ url('frontend/blog-details') }}">Mental Wellness in a Digital Age: Strategies
                                            for a Healthy Mind Online</a>
                                    </h4>
                                    <p>Delve into the impact of digital life on mental health & discover practical
                                        strategies to maintain mental well-being.</p>
                                    <a href="{{ url('frontend/blog-details') }}" class="btn">{{ __('messages.read_more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Articles Section -->

    <!-- App Section -->
    <section class="app-section pt-0">
        <div class="container">
            <div class="app-bg">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-12">
                        <div class="app-content">
                            <div class="app-header aos" data-aos="fade-up">
                                <h5>{{ __('messages.working_for_better_health') }}</h5>
                                <h2>{{ __('messages.download_the_app') }}</h2>
                            </div>
                            <div class="app-scan aos" data-aos="fade-up">
                                <p>{{ __('messages.scan_qr_to_get_app') }}</p>
                                <img src="{{ URL::asset('/assets/img/scan-img.png') }}" alt="scan-image">
                            </div>
                            <div class="google-imgs aos" data-aos="fade-up">
                                <a href="javascript:void(0);"><img
                                        src="{{ URL::asset('/assets/img/icons/google-play-icon.svg') }}"
                                        alt="img"></a>
                                <a href="javascript:void(0);"><img
                                        src="{{ URL::asset('/assets/img/icons/app-store-icon.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
                        <div class="mobile-img">
                            <img src="{{ URL::asset('/assets/img/mobile-img.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- /App Section -->

    <!-- FAQ Section -->
  
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-one aos" data-aos="fade-up">
                        <h5>{{ __('messages.get_your_answer')}}</h5>
                        <h2 class="section-title">{{ __('messages.frequently_asked_questions')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
                    <div class="faq-img">
                        <img src="{{ URL::asset('/assets/img/faq-img.png') }}" class="img-fluid" alt="img">
                        <div class="faq-patients-count">
                            <div class="faq-smile-img">
                                <img src="{{ URL::asset('/assets/img/icons/smiling-icon.svg') }}" alt="icon">
                            </div>
                            <div class="faq-patients-content">
                                <h4><span class="count-digit">95</span>k+</h4>
                                <p>{{ __('messages.happy_patients')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="faq-info aos" data-aos="fade-up">
                        <div class="accordion" id="faq-details">
                            <!-- FAQ Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ __('messages.how_to_book_appointment')}}
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.how_to_book_answer')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        {{ __('messages.can_request_specific_doctor')}}
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.can_request_answer')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        {{ __('messages.cancel_or_reschedule')}}
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.cancel_or_reschedule_answer')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        {{ __('messages.running_late')}}
                                    </a>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p> {{ __('messages.running_late_answer')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        {{ __('messages.book_for_family')}}
                                    </a>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p> {{ __('messages.book_for_family_answer')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider slick">
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    {{-- <img src="{{ URL::asset('/assets/img/clients/client-01.jpg') }}" class="img-fluid"
                                        alt="John Doe"> --}}
                                </div>
                                <div class="testimonial-content">
                                    <div class="section-header-one section-header section-inner-header testimonial-header">
                                        <h5> {{ __('messages.testimonials')}}</h5>
                                        <h2 class="section-title"> {{ __('messages.what_our_clients_say')}}</h2>
                                    </div>
                                    <div class="testimonial-details">
                                        <p>Surna exceeded my expectations in healthcare. The seamless booking process,
                                            coupled with the expertise of the doctors, made my experience exceptional. Their
                                            commitment to quality care and convenience truly sets them apart. I highly
                                            recommend Surna for anyone seeking reliable and accessible healthcare
                                            services.</p>
                                        <h6><span class="d-block">John Doe</span> New York</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    {{-- <img src="{{ URL::asset('/assets/img/clients/client-03.jpg') }}" class="img-fluid"
                                        alt="Amanda Warren"> --}}
                                </div>
                                <div class="testimonial-content">
                                    <div class="section-header section-inner-header testimonial-header">
                                        <h5>Testimonials</h5>
                                        <h2>What Our Client Says</h2>
                                    </div>
                                    <div class="testimonial-details">
                                        <p>As a busy professional, I don't have time to wait on hold or play phone tag to
                                            schedule doctor appointments. Thanks to Surna, booking appointments has never
                                            been easier! The user-friendly interface allows me to quickly find available
                                            appointment slots that fit my schedule and book them with just a few clicks.
                                            It's a game-changer for anyone looking to streamline their healthcare
                                            management.</p>
                                        <h6><span class="d-block">Andrew Denner</span> Nevada</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    {{-- <img src="{{ URL::asset('/assets/img/clients/client-11.jpg') }}" class="img-fluid"
                                        alt="Betty Carlson"> --}}
                                </div>
                                <div class="testimonial-content">
                                    <div class="section-header section-inner-header testimonial-header">
                                        <h5>Testimonials</h5>
                                        <h2>What Our Client Says</h2>
                                    </div>
                                    <div class="testimonial-details">
                                        <p>As a parent, coordinating doctor appointments for my family can be overwhelming.
                                            Surna has simplified the process and made scheduling appointments a breeze! I
                                            love being able to see all available appointment times in one place and book
                                            appointments for multiple family members with ease. Plus, the automatic
                                            reminders ensure we never miss an appointment. I highly recommend Surna to
                                            other busy parents!</p>
                                        <h6><span class="d-block">Niya Patel</span> New York</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial Section -->

    <!-- Partners Section -->
    
    <!-- /Partners Section -->

    @component('components.scrolltotop')
    @endcomponent
@endsection
