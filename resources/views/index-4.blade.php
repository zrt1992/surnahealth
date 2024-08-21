<?php $page = 'index-4'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="section-search-3">
        <div class="container">
            <div class="banner-info">
                <div class="row align-items-center">
                    <div class="col-lg-4 aos" data-aos="fade-up">
                        <div class="header-banner">
                            <h2>Search Doctor, <br> <span class="header-highlight">Make an Appointment</span></h2>
                            <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 aos" data-aos="fade-up">
                        <div class="doctor-search">
                            <div class="doctor-form">
                                <form action="#" class="doctor-search-form trans">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-custom">
                                                    <input type="text" class="form-control" value=""
                                                        placeholder="Search Location">
                                                    <i class="far fa-compass"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-custom">
                                                    <input type="text" class="form-control" value=""
                                                        placeholder="Gender">
                                                    <i class="far fa-smile"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <div class="form-custom">
                                                    <input type="text" class="form-control" value=""
                                                        placeholder="Department">
                                                    <i class="fas fa-user-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="{{ url('search') }}" class="btn banner-btn">MAKE APPOINTMENT</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- category select-->
    <section class="doctor-category">
        <div class="container">
            <div class="row">
                <div class="col-md-4 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section">
                            <div class="cat-icon">
                                <i class="fas fa-procedures"></i>
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>Visit a Doctor</h3>
                            <p>250 + Doctors</p>
                            <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section two">
                            <div class="cat-icon">
                                <i class="fas fa-plus-square"></i>
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>Find a Pharmacy</h3>
                            <p>2560 + Pharmacy</p>
                            <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section three">
                            <div class="cat-icon">
                                <i class="fas fa-city"></i>
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>Find a Lab</h3>
                            <p>250 + Testing Labs</p>
                            <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /category select-->

    <!-- Clinic Section -->
    <section class="clinic-specialities">
        <div class="container">
            <div class="section-header-three text-center aos" data-aos="fade-up">
                <h2>Clinic & Specialities</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec.png') }}" alt="brain-image">
                            <h4>Orthopedic</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i> </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-01.png') }}" alt="puppet-lab" />
                            <h4>Laboratry</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-02.png') }}" alt="brain-image">
                            <h4>Neurology</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-03.png') }}" alt="heart-image" />
                            <h4>Cardiology</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-04.png') }}" alt="MRI scan image" />
                            <h4>MRI Scans</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-05.png') }}" alt="stethoscope-image" />
                            <h4>Primary Checkup</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-06.png') }}" alt="hospital-equipment" />
                            <h4>Testing</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="special-box text-center">
                        <div class="special-body">
                            <img src="{{ URL::asset('/assets/img/shapes/spec-07.png') }}" alt="teeth-image" />
                            <h4>Dentist</h4>
                            <a href="{{ url('booking') }}" class="spc-book">Book now <i class="fas fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="row row-sm special-footer">
                            <div class="col-6 text-start">
                                <a href="javascript:;" class="doc-count">124 <span>Doctors</span></a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;" class="clin-count">24 <span>Clinics</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-more text-center aos" data-aos="fade-up">
                <a href="{{ url('doctor-profile') }}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </section>
    <!-- /Clinic Section -->

    <!-- browse speciality-->
    <section class="browse-section">
        <div class="container">
            <div class="section-header-three text-center aos" data-aos="fade-up">
                <h2>Browse by Specialities</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-01.png') }}" alt="teeth-image" />
                            </div>
                            <h4>Urology</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-02.png') }}" alt="bone image" />
                            </div>
                            <h4>Neurology</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-03.png') }}" alt="brain-image" />
                            </div>
                            <h4>Orthopedic</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-04.png') }}" alt="heart-image" />
                            </div>
                            <h4>Cardiologist</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-01.png') }}" alt="teeth-image" />
                            </div>
                            <h4>Dentist</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-05.png') }}" alt="heart-image" />
                            </div>
                            <h4>Heart surgery</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-01.png') }}" alt="teeth-image" />
                            </div>
                            <h4>Urology</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-02.png') }}" alt="bone image" />
                            </div>
                            <h4>Neurology</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-03.png') }}" alt="brain-image" />
                            </div>
                            <h4>Orthopedic</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-04.png') }}" alt="heart-image" />
                            </div>
                            <h4>Cardiologist</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-01.png') }}" alt="teeth-image" />
                            </div>
                            <h4>Dentist</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ URL::asset('/assets/img/shapes/bro-05.png') }}" alt="heart-image" />
                            </div>
                            <h4>Heart surgery</h4>
                            <p>124 <span>Doctors</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-more text-center aos" data-aos="fade-up">
                <a href="{{ url('doctor-profile') }}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </section>
    <!-- /browse speciality-->

    <!-- Doctor Section-->
    <section class="doctor-divison">
        <div class="d-flex">
            <div class="doc-background aos" data-aos="fade-up">
                <h3>ARE YOU A DOCTOR?</h3>
                <p>The service allows you to get maximum visibility online and to manage appointments and contacts
                    coming from the site, in a simple and fast way.</p>
                <a href="{{ url('booking') }}" class="doc-bok-btn">Book Now</a>
            </div>
            <div class="pat-background aos" data-aos="fade-up">
                <h3>ARE YOU A PATIENT?</h3>
                <p>The service allows you to get maximum visibility online and to manage appointments and contacts
                    coming from the site, in a simple and fast way.</p>
                <a href="{{ url('booking') }}" class="doc-bok-btn">Book Now</a>
            </div>
        </div>
    </section>
    <!-- /Doctor Section-->

    <!-- Book Doctors-->
    <section class="book-section">
        <div class="container">
            <div class="section-header-three text-center aos" data-aos="fade-up">
                <h2>Book Our Best Doctor</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                    <div class="book-best-doctors">
                        <div class="book-header">
                            <a href="{{ url('doctor-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/doctors/doctor-01.jpg') }}" alt="Ruby Perrin"
                                    class="img-fluid"></a>
                            <div class="img-overlay">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="inner-section">
                                <span class="float-start">PSICOLOGIST</span>
                                <div class="rating text-end">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.5</span>
                                </div>
                                <a href="{{ url('doctor-profile') }}">
                                    <h4>Dr. Ruby Perrin</h4>
                                </a>
                                <p>MBBS, MD - General Medicine, DNB - Cardiology</p>
                            </div>
                            <div class="row row-sm loc-details">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/map-plus.png') }}"
                                                alt="map-plus image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Location</span>
                                            <span class="data-info">Newyork, USA</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/alarm.png') }}"
                                                alt="alarm image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Available on</span>
                                            <span class="data-info">Fri, 28 July</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/consult.png') }}"
                                                alt="patients image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Consulting</span>
                                            <span class="data-info">500+ Patients</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/exper.png') }}"
                                                alt="male-icon" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">EXPERIENCE</span>
                                            <span class="data-info">25+ Years</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm align-items-center p-3">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="amt-txt" tabindex="0">$50 - $100</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                    <div class="book-best-doctors">
                        <div class="book-header">
                            <a href="{{ url('doctor-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/doctors/doctor-02.jpg') }}" alt="Darren Elder"
                                    class="img-fluid"></a>
                            <div class="img-overlay">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="inner-section">
                                <span class="float-start">PSICOLOGIST</span>
                                <div class="rating text-end">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.5</span>
                                </div>
                                <a href="{{ url('doctor-profile') }}">
                                    <h4>Dr. Darren Elder</h4>
                                </a>
                                <p>MBBS, MD - General Medicine, DNB - Cardiology</p>
                            </div>
                            <div class="row row-sm loc-details">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/map-plus.png') }}"
                                                alt="map-plus image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Location</span>
                                            <span class="data-info">Newyork, USA</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/alarm.png') }}"
                                                alt="alarm image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Available on</span>
                                            <span class="data-info">Fri, 21 July</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/consult.png') }}"
                                                alt="patients image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Consulting</span>
                                            <span class="data-info">500+ Patients</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/exper.png') }}"
                                                alt="male-icon" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">EXPERIENCE</span>
                                            <span class="data-info">25+ Years</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm align-items-center p-3">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="amt-txt" tabindex="0">$50 - $100</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                    <div class="book-best-doctors">
                        <div class="book-header">
                            <a href="{{ url('doctor-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/doctors/doctor-03.jpg') }}" alt="Deborah Angel"
                                    class="img-fluid"></a>
                            <div class="img-overlay">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="inner-section">
                                <span class="float-start">PSICOLOGIST</span>
                                <div class="rating text-end">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.5</span>
                                </div>
                                <a href="{{ url('doctor-profile') }}">
                                    <h4>Dr. Deborah Angel</h4>
                                </a>
                                <p>MBBS, MD - General Medicine, DNB - Cardiology</p>
                            </div>
                            <div class="row row-sm loc-details">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/map-plus.png') }}"
                                                alt="map-plus image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Location</span>
                                            <span class="data-info">Newyork, USA</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/alarm.png') }}"
                                                alt="alaram image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Available on</span>
                                            <span class="data-info">Sat, 22 July</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/consult.png') }}"
                                                alt="patients image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Consulting</span>
                                            <span class="data-info">500+ Patients</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/exper.png') }}"
                                                alt="male-icon" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">EXPERIENCE</span>
                                            <span class="data-info">25+ Years</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm align-items-center p-3">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="amt-txt" tabindex="0">$50 - $100</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                    <div class="book-best-doctors">
                        <div class="book-header">
                            <a href="{{ url('doctor-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/doctors/doctor-04.jpg') }}" alt="Sofia Brient"
                                    class="img-fluid"></a>
                            <div class="img-overlay">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="inner-section">
                                <span class="float-start">PSICOLOGIST</span>
                                <div class="rating text-end">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-ratings">3.5</span>
                                </div>
                                <a href="{{ url('doctor-profile') }}">
                                    <h4>Dr. Sofia Brient</h4>
                                </a>
                                <p>MBBS, MD - General Medicine, DNB - Cardiology</p>
                            </div>
                            <div class="row row-sm loc-details">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/map-plus.png') }}"
                                                alt="map-plus image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Location</span>
                                            <span class="data-info">Newyork, USA</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/alarm.png') }}"
                                                alt="alaram image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Available on</span>
                                            <span class="data-info">Tue, 25 July</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/consult.png') }}"
                                                alt="patients image" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">Consulting</span>
                                            <span class="data-info">500+ Patients</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/shapes/exper.png') }}"
                                                alt="male-icon" />
                                        </a>
                                        <a href="javascript:void(0);">
                                            <span class="available-info">EXPERIENCE</span>
                                            <span class="data-info">25+ Years</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm align-items-center p-3">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="amt-txt" tabindex="0">$50 - $100</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-more text-center aos" data-aos="fade-up">
                <a href="{{ url('doctor-profile') }}" class="btn btn-primary">View More</a>
            </div>
        </div>
    </section>
    <!-- /Book Doctors-->

    <!-- Blogs -->
    <section class="latest-blog">
        <div class="container">
            <div class="section-header-three text-center aos" data-aos="fade-up">
                <h2>Our Latest Blogs</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 aos" data-aos="fade-up">
                    <div class="blog-wrap">
                        <div class="image-holder">
                            <a href="{{ url('blog-details') }}">
                                <img class="img-fluid" src="{{ URL::asset('/assets/img/shapes/blog-img01.jpg') }}"
                                    alt="Post Image">
                            </a>
                        </div>
                        <div class="blog-wrap-body">
                            <h3><a href="{{ url('blog-details') }}">In this hospital there are special surgeons</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et..</p>
                            <div class="blog-footer">
                                <div class="row row-sm align-items-center position-relative">
                                    <div class="col-6 text-start">
                                        <a href="{{ url('blog-details') }}" class="read-txt" tabindex="0">View Blog <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="javascript:void(0);" class="cal-txt" tabindex="0"><i
                                                class="far fa-calendar-alt"></i> Jul 08, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 aos" data-aos="fade-up">
                    <div class="blog-wrap">
                        <div class="image-holder">
                            <a href="{{ url('blog-details') }}">
                                <img class="img-fluid" src="{{ URL::asset('/assets/img/shapes/blog-img02.jpg') }}"
                                    alt="Post Image">
                            </a>
                        </div>
                        <div class="blog-wrap-body">
                            <h3><a href="{{ url('blog-details') }}">World AIDS Day, designated on 1 December</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et..</p>
                            <div class="blog-footer">
                                <div class="row row-sm align-items-center position-relative">
                                    <div class="col-6 text-start">
                                        <a href="{{ url('blog-details') }}" class="read-txt" tabindex="0">View Blog <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="javascript:void(0);" class="cal-txt" tabindex="0"><i
                                                class="far fa-calendar-alt"></i> Jul 03, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 aos" data-aos="fade-up">
                    <div class="blog-wrap">
                        <div class="image-holder">
                            <a href="{{ url('blog-details') }}">
                                <img class="img-fluid" src="{{ URL::asset('/assets/img/shapes/blog-img03.jpg') }}"
                                    alt="Post Image">
                            </a>
                        </div>
                        <div class="blog-wrap-body">
                            <h3><a href="{{ url('blog-details') }}">More then 80 clinical trials launch to test
                                    coronavirus</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et..</p>
                            <div class="blog-footer">
                                <div class="row row-sm align-items-center position-relative">
                                    <div class="col-6 text-start">
                                        <a href="{{ url('blog-details') }}" class="read-txt" tabindex="0">View Blog <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="javascript:void(0);" class="cal-txt" tabindex="0"><i
                                                class="far fa-calendar-alt"></i> Jul 05, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blogs -->
    @component('components.scrolltotop')
    @endcomponent
@endsection
