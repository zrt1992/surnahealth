<?php $page = 'index-14'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="banner-section banner-sec-fourteen dentist-banner-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content aos" data-aos="fade-up">
                        <div class="banner-head">
                            <h1>We Care about Your <span> Dental Health</span></h1>
                            <p>If you are in need of high-quality, professional and friendly dental care, look no further
                                than our clinic.</p>
                        </div>
                        <div class="dentist-banner-btn">
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-check"><i class="fa fa-plus-circle me-2"></i>Free
                                        Check-up</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-mobile me-2"></i>Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="search-box-fourteen aos aos-init aos-animate" data-aos="fade-up">
                            <form action="{{ url('booking-2') }}" class="form-block d-flex">
                                <div class="search-input">
                                    <div class="forms-block">
                                        <label class="mb-0">Date</label>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="Thu, Mar 24, 2023">
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="forms-block mb-0">
                                        <label class="location-icon">Location</label>
                                        <div class="searchinputs dropdown-toggle" id="dropdownMenuClickable"
                                            data-bs-toggle="dropdown" data-bs-auto-close="false">
                                            <input type="text" class="form-control" placeholder="San Diego Branch">
                                        </div>
                                        <div class="dropdown-menu location-dropdown"
                                            aria-labelledby="dropdownMenuClickable">
                                            <ul class="location-auto-complete">
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        CompassionCare Health Clinic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        Caring Touch Wellness Center
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        Comfort Haven Clinic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        Compassionate Caregivers Clinic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        Core Health & Wellness Center
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span><i class="fa-solid fa-hospital"></i></span>
                                                        Cityscape Medical Center
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn btn-primary" type="submit">Book Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Service Section -->
    <section class="why-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clinic-partner-sec mt-0">
                        <div class="section-header text-center aos" data-aos="fade-down">
                            <h5>Our Clinics Partners</h5>
                        </div>
                        <div class="partners-info">
                            <ul class="owl-carousel partners-sliders d-flex">
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-1.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-2.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-3.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-4.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-5.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-6.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-4.svg') }}"
                                            alt="partners">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-header text-center aos" data-aos="fade-down">
                <h2>Why We Are <span>Different</span></h2>
                <p>We are a private health care dedicated to providing quality dental care in cosmetic, restorative, and
                    general dentistry.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="expert-wrap flex-fill aos" data-aos="fade-down">
                        <div class="expert-img">
                            <img src="{{ URL::asset('/assets/img/service/dentist-01.jpg') }}" alt="Img">
                        </div>
                        <div class="expert-content">
                            <h4>Experienced dentists</h4>
                            <p>The goal of our clinic is to provide friendly, caring dentistry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="expert-wrap flex-fill aos" data-aos="fade-down">
                        <div class="expert-img">
                            <img src="{{ URL::asset('/assets/img/service/dentist-02.jpg') }}" alt="Img">
                        </div>
                        <div class="expert-content">
                            <h4>Friendly atmosphere</h4>
                            <p>The goal of our clinic is to provide friendly, caring dentistry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="expert-wrap flex-fill aos" data-aos="fade-down">
                        <div class="expert-img">
                            <img src="{{ URL::asset('/assets/img/service/dentist-03.jpg') }}" alt="Img">
                        </div>
                        <div class="expert-content">
                            <h4>Best latest technology</h4>
                            <p>The goal of our clinic is to provide friendly, caring dentistry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="expert-wrap flex-fill aos" data-aos="fade-down">
                        <div class="expert-img">
                            <img src="{{ URL::asset('/assets/img/service/dentist-04.jpg') }}" alt="Img">
                        </div>
                        <div class="expert-content">
                            <h4>Affordable prices</h4>
                            <p>The goal of our clinic is to provide friendly, caring dentistry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Treatments Section -->
    <section class="impression-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="impression-img aos" data-aos="fade-down">
                        <div class="impress-img">
                            <img src="{{ URL::asset('/assets/img/dentist-01.jpg') }}" class="img-fluid" alt="Img">
                        </div>
                        <div class="impress-img2">
                            <img src="{{ URL::asset('/assets/img/dentist-02.jpg') }}" class="img-fluid" alt="Img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impression-content aos" data-aos="fade-down">
                        <div class="section-header">
                            <h2>First Impressions Begin with <span>Smile</span></h2>
                            <p>The goal of our clinic is to provide friendly, caring dentistry and the highest level of
                                general, cosmetic, and specialist dental treatments. With dental practices throughout the
                                world, we are growing our clinic with just one goal in mind – to offer affordable, high
                                quality dental care around the world.</p>
                        </div>
                        <div class="impress-list">
                            <div class="impress-wrap">
                                <h6>Free Dental Checkup</h6>
                            </div>
                            <div class="impress-wrap">
                                <h6>Professional Doctors</h6>
                            </div>
                            <div class="impress-wrap">
                                <h6>Emergency Care on consultation</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="treatment-sec">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-header">
                            <h2>What <span>Dental Treatments</span> Do We Offer?</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="owl-nav slide-nav slide-nav-02 text-end"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="ol-md-12">
                        <div class="owl-carousel treatment-slider">
                            <div class="treatment-item aos" data-aos="fade-down">
                                <div class="treatment-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/service/treatment-01.jpg') }}"
                                            alt="Img">
                                    </a>
                                </div>
                                <div class="treatment-content">
                                    <h4><a href="javascript:void(0);">Emergency Care</a></h4>
                                    <p>Toothache can be caused by various problems. An examination can help to determine it.
                                    </p>
                                    <a href="javascript:void(0);" class="btn btn-gray">Learn more</a>
                                </div>
                            </div>
                            <div class="treatment-item aos" data-aos="fade-down">
                                <div class="treatment-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/service/treatment-02.jpg') }}"
                                            alt="Img">
                                    </a>
                                </div>
                                <div class="treatment-content">
                                    <h4><a href="javascript:void(0);">Restorative Dentistry</a></h4>
                                    <p>We can restore your smile, as well as speaking & eating ability with advanced
                                        prosthetics.</p>
                                    <a href="javascript:void(0);" class="btn btn-gray">Learn more</a>
                                </div>
                            </div>
                            <div class="treatment-item aos" data-aos="fade-down">
                                <div class="treatment-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/service/treatment-03.jpg') }}"
                                            alt="Img">
                                    </a>
                                </div>
                                <div class="treatment-content">
                                    <h4><a href="javascript:void(0);">Dental Cleanings</a></h4>
                                    <p>Professional dental cleanings help remove plaque and tartar buildup from your teeth
                                        and gums, </p>
                                    <a href="javascript:void(0);" class="btn btn-gray">Learn more</a>
                                </div>
                            </div>
                            <div class="treatment-item aos" data-aos="fade-down">
                                <div class="treatment-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/service/treatment-04.jpg') }}"
                                            alt="Img">
                                    </a>
                                </div>
                                <div class="treatment-content">
                                    <h4><a href="javascript:void(0);">Dental Implants</a></h4>
                                    <p>Dental implants are a permanent solution for replacing missing teeth, providing a
                                        strong. </p>
                                    <a href="javascript:void(0);" class="btn btn-gray">Learn more</a>
                                </div>
                            </div>
                            <div class="treatment-item aos" data-aos="fade-down">
                                <div class="treatment-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/service/treatment-05.jpg') }}"
                                            alt="Img">
                                    </a>
                                </div>
                                <div class="treatment-content">
                                    <h4><a href="javascript:void(0);">Traditional Braces</a></h4>
                                    <p>We offer traditional metal braces to straighten misaligned teeth and correct bite
                                        issues.</p>
                                    <a href="javascript:void(0);" class="btn btn-gray">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Treatments Section -->

    <!-- Expert Section -->
    <section class="experts-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="section-header">
                        <h2>Our <span>Experts</span></h2>
                        <p>We are a private health care dedicated to providing quality dental care in cosmetic, restorative,
                            and general dentistry.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="owl-nav slide-nav slide-nav-01 text-end"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="expert-slider owl-carousel">
                        <div class="expert-profile aos" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-01.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Warner</a></h5>
                                <p>Prosthodontist</p>
                            </div>
                        </div>
                        <div class="expert-profile" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-02.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Keith</a></h5>
                                <p>Endodontist</p>
                            </div>
                        </div>
                        <div class="expert-profile" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-03.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Brandy</a></h5>
                                <p>Complex Extractions</p>
                            </div>
                        </div>
                        <div class="expert-profile" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-04.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Dixon</a></h5>
                                <p>Periodontist</p>
                            </div>
                        </div>
                        <div class="expert-profile" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-05.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Adiran</a></h5>
                                <p>Endodontist</p>
                            </div>
                        </div>
                        <div class="expert-profile" data-aos="fade-down">
                            <div class="expert-img">
                                <a href="{{ url('doctor-profile') }}"><img
                                        src="{{ URL::asset('/assets/img/doctors/dentist-doctor-06.jpg') }}"
                                        alt="Img"></a>
                            </div>
                            <div class="expert-info">
                                <h5><a href="{{ url('doctor-profile') }}">Dr. Bruce evana</a></h5>
                                <p>Prosthodontist</p>
                            </div>
                        </div>
                    </div>
                    <div class="view-button text-center">
                        <a href="{{ url('doctor-profile') }}" class="btn btn-viewall">View All Doctors</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="counter-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 aos" data-aos="fade-down">
                        <div class="count-wrap">
                            <h2><span class="counter">300</span><span class="count-icon">+</span></h2>
                            <p>Clinics</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 aos" data-aos="fade-down">
                        <div class="count-wrap">
                            <h2><span class="counter">22</span><span class="count-icon">+</span></h2>
                            <p>Countries</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 aos" data-aos="fade-down">
                        <div class="count-wrap">
                            <h2><span class="counter">45</span><span class="count-icon">+</span></h2>
                            <p>Years of Service</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 aos" data-aos="fade-down">
                        <div class="count-wrap">
                            <h2><span class="counter">105</span><span class="count-icon">+</span></h2>
                            <p>Experienced Doctors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Expert Section -->

    <!-- Testimonial Section -->
    <section class="question-section dentist-home-testi">
        <div class="section-bg">
            <img src="{{ URL::asset('/assets/img/bg/testi-left-bg.png') }}" class="testi-bg-left" alt="Img">
            <img src="{{ URL::asset('/assets/img/bg/testi-right-bg.png') }}" class="testi-bg-right" alt="Img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center aos" data-aos="fade-down">
                        <h2>What Our <span>Happy Customers</span> Says</h2>
                    </div>
                    <div class="customer-slider owl-carousel">
                        <div class="customer-wrap">
                            <div class="customer-infos">
                                <img src="{{ URL::asset('/assets/img/clients/client-13.jpg') }}" alt="Img">
                                <h6>Rio Hasslee</h6>
                                <p>Newyork, USA</p>
                            </div>
                            <p>They're patient, gentle, and great at explaining things in a way that kids can understand. My
                                children actually look forward to their dental appointments now.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-wrap">
                            <div class="customer-infos">
                                <img src="{{ URL::asset('/assets/img/clients/client-11.jpg') }}" alt="Img">
                                <h6>Jenifer Robinson</h6>
                                <p>Texas, USA</p>
                            </div>
                            <p>My journey towards parenthood became a seamless and informed experience. The comprehensive
                                resources, expert advice, and supportive.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-wrap">
                            <div class="customer-infos">
                                <img src="{{ URL::asset('/assets/img/clients/client-14.jpg') }}" alt="Img">
                                <h6>Brandy</h6>
                                <p>illinios, USA</p>
                            </div>
                            <p>The staff are always friendly and professional, and the clinic is clean and modern. From
                                routine cleanings to more extensive procedures, the dentists.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-wrap">
                            <div class="customer-infos">
                                <img src="{{ URL::asset('/assets/img/clients/client-15.jpg') }}" alt="Img">
                                <h6>Dixon</h6>
                                <p>Texas, USA</p>
                            </div>
                            <p>My journey towards parenthood became a seamless and informed experience. The comprehensive
                                resources, expert advice, and supportive.</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="view-button text-center aos" data-aos="fade-down">
                        <div class="owl-nav slide-nav customer-nav nav-control"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonial Section -->

    <!-- Blog Section -->
    <section class="question-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center aos" data-aos="fade-down">
                        <h2>Frequently Asked <span>Questions</span></h2>
                        <p>FAQs help provide important information to clients and address common queries they may have about
                            the veterinary clinic's services, policies, and procedures.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="faq-imgs aos" data-aos="fade-down">
                        <img src="{{ URL::asset('/assets/img/faq-img-3.png') }}" class="img-fluid" alt="Img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion faq-info" id="faq-details">

                        <!-- FAQ Item -->
                        <div class="accordion-item aos" data-aos="fade-down">
                            <h2 class="accordion-header" id="headingOne">
                                <a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I book an appointment with a doctor?
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faq-details">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>Yes, simply visit our website and log in or create an account. Search for a
                                            doctor based on specialization, location, or availability & confirm your
                                            booking.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ Item -->

                        <!-- FAQ Item -->
                        <div class="accordion-item aos" data-aos="fade-down">
                            <h2 class="accordion-header" id="headingTwo">
                                <a href="javascript:void(0);" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Can I request a specific doctor when booking my appointment?
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faq-details">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>Yes, you can usually request a specific doctor when booking your appointment,
                                            though availability may vary based on their schedule.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ Item -->

                        <!-- FAQ Item -->
                        <div class="accordion-item aos" data-aos="fade-down">
                            <h2 class="accordion-header" id="headingThree">
                                <a href="javascript:void(0);" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What should I do if I need to cancel or reschedule my appointment?
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faq-details">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>If you need to cancel or reschedule your appointment, contact the doctor as soon
                                            as possible to inform them and to reschedule for another available time slot.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ Item -->

                        <!-- FAQ Item -->
                        <div class="accordion-item aos" data-aos="fade-down">
                            <h2 class="accordion-header" id="headingFour">
                                <a href="javascript:void(0);" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    What if I'm running late for my appointment?
                                </a>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faq-details">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>If you know you will be late, it's courteous to call the doctor's office and
                                            inform them. Depending on their policy and schedule, they may be able to
                                            accommodate you or reschedule your appointment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ Item -->

                        <!-- FAQ Item -->
                        <div class="accordion-item aos" data-aos="fade-down">
                            <h2 class="accordion-header" id="headingFive">
                                <a href="javascript:void(0);" class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Can I book appointments for family members or dependents?
                                </a>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faq-details">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>Yes, in many cases, you can book appointments for family members or dependents.
                                            However, you may need to provide their personal information and consent to do
                                            so.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /FAQ Item -->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" dentist-blog aos" data-aos="fade-down">
                        <div class="section-header text-center">
                            <h2>Surna <span>Recent Blogs</span></h2>
                            <p>Checkout our Latest blogs by our Experts by Month on Month</p>
                        </div>
                        <div class="dentist-slider owl-carousel">
                            <div class="blog grid-blog aos" data-aos="fade-down">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/dentist-blog-01.jpg') }}"
                                            alt="Post Image"></a>
                                    <span class="day-badge"><i class="feather-calendar"></i>15 Feb 2024</span>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                        alt="Post Author">
                                                    <span>Dr. Pamila Certis</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Must know best dog food
                                            Best teeth strength Food in India</a></h3>
                                    <p>In the diverse landscape of India, teeth options have variety of dietary needs..</p>
                                    <a href="{{ url('blog-details') }}" class="view-link">Continue Reading<i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="blog grid-blog aos" data-aos="fade-down">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/dentist-blog-02.jpg') }}"
                                            alt="Post Image"></a>
                                    <span class="day-badge"><i class="feather-calendar"></i>18 Jan 2024</span>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                        alt="Post Author">
                                                    <span>Dr. Ronald Jacobs</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">How to Care for teeth in
                                            the Cavity</a></h3>
                                    <p>During winter, it's crucial to provide proper care for teeth by ensuring they have a
                                        warm...</p>
                                    <a href="{{ url('blog-details') }}" class="view-link">Continue Reading<i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="blog grid-blog aos" data-aos="fade-down">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/dentist-blog-03.jpg') }}"
                                            alt="Post Image"></a>
                                    <span class="day-badge"><i class="feather-calendar"></i>25 Jan 2024</span>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                        alt="Post Author">
                                                    <span>Dr. Marie Wells</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Why do teeth aches while
                                            winter?</a></h3>
                                    <p>During winter, it's crucial to provide proper care for rabbits by ensuring they have
                                        a warm...</p>
                                    <a href="{{ url('blog-details') }}" class="view-link">Continue Reading<i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="blog grid-blog aos" data-aos="fade-down">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/dentist-blog-02.jpg') }}"
                                            alt="Post Image"></a>
                                    <span class="day-badge"><i class="feather-calendar"></i>18 Feb 2024</span>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                        alt="Post Author">
                                                    <span>Dr. Pamila Certis</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Must know best dog food
                                            Best teeth strength Food in India</a></h3>
                                    <p>In the diverse landscape of India, teeth options have variety of dietary needs..</p>
                                    <a href="{{ url('blog-details') }}" class="view-link">Continue Reading<i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="view-button text-center aos" data-aos="fade-down">
                            <div class="owl-nav slide-nav blog-nav nav-control"></div>
                        </div>
                    </div>

                    <div class="visit-wrap aos" data-aos="fade-down">
                        <div class="visit-content">
                            <h2>Get 10% Off Your First Visit</h2>
                            <a href="{{ url('booking') }}" class="btn btn-gray">Book an Appointment</a>
                        </div>
                        <div class="first-visit">
                            <img src="{{ URL::asset('/assets/img/first-visit.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->




    @component('components.scrolltotop')
    @endcomponent
@endsection
