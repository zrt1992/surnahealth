<?php $page = 'search-2'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Search Doctors
        @endslot
        @slot('li_1')
            Search Doctors
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="doctor-content content">
        <div class="container">
            <!-- Doctor Search List -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 map-view">
                    <div class="row">
                        <div class="col-lg-3  theiaStickySidebar">
                            <div class="filter-contents">
                                <div class="filter-header">
                                    <h4 class="filter-title">Filter</h4>
                                </div>
                                <div class="filter-details">
                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapseone" data-bs-toggle="collapse">Gender</a>
                                        </h4>
                                        <div id="collapseone" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="gender">
                                                            <span class="checkmark"></span>
                                                            Male Gender
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="gender">
                                                            <span class="checkmark"></span>
                                                            Female Gender
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapsetwo" data-bs-toggle="collapse">Availability</a>
                                        </h4>
                                        <div id="collapsetwo" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="availability">
                                                            <span class="checkmark"></span>
                                                            Available Today
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="availability">
                                                            <span class="checkmark"></span>
                                                            Available Tomorrow
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="availability">
                                                            <span class="checkmark"></span>
                                                            Available in Next 7 Days
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="availability">
                                                            <span class="checkmark"></span>
                                                            Available in Next 30 Days
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapsethree" data-bs-toggle="collapse">Consultation Fee</a>
                                        </h4>
                                        <div id="collapsethree" class="collapse show">
                                            <div class="filter-collapse">
                                                <div class="filter-content filter-content-slider">
                                                    <p>$10 <span>$10000</span></p>
                                                    <div class="slider-wrapper">
                                                        <div id="price-range"></div>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <h6>Price:
                                                            <span>
                                                                $<span id="pricerangemin"></span>
                                                                - $<span id="pricerangemax"></span>
                                                            </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapsefour" data-bs-toggle="collapse">Speciality</a>
                                        </h4>
                                        <div id="collapsefour" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="speciality">
                                                            <span class="checkmark"></span>
                                                            Urology
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="speciality">
                                                            <span class="checkmark"></span>
                                                            Ophthalmology
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="speciality">
                                                            <span class="checkmark"></span>
                                                            Cardiology
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapsefive" data-bs-toggle="collapse">Experience</a>
                                        </h4>
                                        <div id="collapsefive" class=" collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="experience">
                                                            <span class="checkmark"></span>
                                                            1-5 Years
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="experience">
                                                            <span class="checkmark"></span>
                                                            5+ Years
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapsesix" data-bs-toggle="collapse">Online Consultation</a>
                                        </h4>
                                        <div id="collapsesix" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <i class="feather-video online-icon"></i> Video Call
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <i class="feather-mic online-icon"></i> Audio Call
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <i class="feather-message-square online-icon"></i> Chat
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <i class="feather-users online-icon"></i> Instant Consulting
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapseseven" data-bs-toggle="collapse">By Rating</a>
                                        </h4>
                                        <div id="collapseseven" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check rating_custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <span class="rating-count">(40)</span>
                                                            </div>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check rating_custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="rating-count">(35)</span>
                                                            </div>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check rating_custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="rating-count">(20)</span>
                                                            </div>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check rating_custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="rating-count">(10)</span>
                                                            </div>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check rating_custom_check d-inline-flex">
                                                            <input type="checkbox" name="online">
                                                            <span class="checkmark"></span>
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="rating-count">(05)</span>
                                                            </div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Grid -->
                                    <div class="filter-grid">
                                        <h4>
                                            <a href="#collapseeight" data-bs-toggle="collapse">Languages</a>
                                        </h4>
                                        <div id="collapseeight" class="collapse show">
                                            <div class="filter-collapse">
                                                <ul>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="language">
                                                            <span class="checkmark"></span>
                                                            English
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="language">
                                                            <span class="checkmark"></span>
                                                            French
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="language">
                                                            <span class="checkmark"></span>
                                                            Spanish
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="language">
                                                            <span class="checkmark"></span>
                                                            German
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Grid -->

                                    <!-- Filter Btn -->
                                    <div class="filter-btn apply-btn">
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="javascript:void(0);" class="btn btn-primary">Apply</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Filter Btn -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="doctor-filter-info">
                                <div class="doctor-filter-inner">
                                    <div>
                                        <div class="doctors-found">
                                            <p><span>100 Doctors found for:</span> Dentist in San francisco, California</p>
                                        </div>
                                        <div class="doctor-filter-availability">
                                            <p>Availability</p>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_6" class="check">
                                                <label for="status_6" class="checktoggle">checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctor-filter-option">
                                        <div class="doctor-filter-sort">
                                            <p>Sort</p>
                                            <div class="doctor-filter-select">
                                                <select class="select">
                                                    <option>A to Z</option>
                                                    <option>B to Z</option>
                                                    <option>C to Z</option>
                                                    <option>D to Z</option>
                                                    <option>E to Z</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="doctor-filter-sort">
                                            <p class="filter-today d-flex align-items-center">
                                                <i class="feather-calendar"></i> Today 10 Aug to 20 Aug
                                            </p>
                                        </div>
                                        <div class="doctor-filter-sort">
                                            <ul class="nav">
                                                <li>
                                                    <a href="javascript:void(0);" id="map-list">
                                                        <i class="feather-map-pin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('doctor-search-grid') }}">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('search-2') }}" class="active">
                                                        <i class="feather-list"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card doctor-card">
                                <div class="card-body">
                                    <div class="doctor-widget-one">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <a href="{{ url('doctor-profile') }}">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-13.jpg') }}"
                                                        class="img-fluid" alt="John Doe">
                                                </a>
                                                <div class="favourite-btn">
                                                    <a href="javascript:void(0)" class="favourite-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">
                                                    <a href="{{ url('doctor-profile') }}">Dr.John Doe</a>
                                                    <i class="fas fa-circle-check"></i>
                                                </h4>
                                                <p class="doc-speciality">MBBS, Dentist</p>
                                                <div class="clinic-details">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i>
                                                        <span>0.9</span> mi - Newyork, USA <a
                                                            href="javascript:void(0);">Get Direction</a>
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-award"></i> <span>20</span> Years of Experience
                                                    </p>
                                                </div>
                                                <div class="reviews-ratings">
                                                    <p>
                                                        <span><i class="fas fa-star"></i> 4.5</span> (35 Reviews)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li>
                                                        <i class="feather-clock available-icon"></i>
                                                        <span class="available-date available-today">Available Today</span>
                                                    </li>
                                                    <li><i class="feather-thumbs-up available-icon"></i> 98% <span
                                                            class="votes">(252 Votes)</span></li>
                                                    <li><i class="feather-dollar-sign available-icon"></i> $1500 <i
                                                            class="feather-info available-info-icon"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking book-appoint">
                                                <a class="btn btn-primary" href="{{ url('booking') }}">Book
                                                    Appointment</a>
                                                <a class="btn btn-primary-light" href="{{ url('booking-2') }}">Book Online
                                                    Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card doctor-card">
                                <div class="card-body">
                                    <div class="doctor-widget-one">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <a href="{{ url('doctor-profile') }}">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-14.jpg') }}"
                                                        class="img-fluid" alt="Darren Elder">
                                                </a>
                                                <div class="favourite-btn">
                                                    <a href="javascript:void(0)" class="favourite-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">
                                                    <a href="{{ url('doctor-profile') }}">Dr. Darren Elder</a>
                                                    <i class="fas fa-circle-check"></i>
                                                </h4>
                                                <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                                <div class="clinic-details">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i>
                                                        1.1 mi - Georgia, USA <a href="javascript:void(0);">Get
                                                            Direction</a>
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-award"></i> 15 Years of Experience
                                                    </p>
                                                </div>
                                                <div class="reviews-ratings">
                                                    <p>
                                                        <span><i class="fas fa-star"></i> 4.3</span> (22 Reviews)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li>
                                                        <i class="feather-clock available-icon"></i>
                                                        <span class="available-date available-tomorrow">Available
                                                            Tomorrow</span>
                                                    </li>
                                                    <li><i class="feather-thumbs-up available-icon"></i> 90% <span
                                                            class="votes">(380 Votes)</span></li>
                                                    <li><i class="feather-dollar-sign available-icon"></i> $2800 <i
                                                            class="feather-info available-info-icon"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking book-appoint">
                                                <a class="btn btn-primary" href="{{ url('booking') }}">Book
                                                    Appointment</a>
                                                <a class="btn btn-primary-light" href="{{ url('booking-2') }}">Book
                                                    Online Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card doctor-card">
                                <div class="card-body">
                                    <div class="doctor-widget-one">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <a href="{{ url('doctor-profile') }}">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-15.jpg') }}"
                                                        class="img-fluid" alt="Sofia Brient">
                                                </a>
                                                <div class="favourite-btn">
                                                    <a href="javascript:void(0)" class="favourite-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">
                                                    <a href="{{ url('doctor-profile') }}">Dr. Sofia Brient</a>
                                                    <i class="fas fa-circle-check"></i>
                                                </h4>
                                                <p class="doc-speciality">MBBS, Dentist</p>
                                                <div class="clinic-details">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i>
                                                        <span>0.9</span> mi - Newyork, USA <a
                                                            href="javascript:void(0);">Get Direction</a>
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-award"></i> <span>20</span> Years of Experience
                                                    </p>
                                                </div>
                                                <div class="reviews-ratings">
                                                    <p>
                                                        <span><i class="fas fa-star"></i> 4.5</span> (35 Reviews)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li>
                                                        <i class="feather-clock available-icon"></i>
                                                        <span class="available-date available-today">Available Today</span>
                                                    </li>
                                                    <li><i class="feather-thumbs-up available-icon"></i> 98% <span
                                                            class="votes">(252 Votes)</span></li>
                                                    <li><i class="feather-dollar-sign available-icon"></i> $1500 <i
                                                            class="feather-info available-info-icon"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking book-appoint">
                                                <a class="btn btn-primary" href="{{ url('booking') }}">Book
                                                    Appointment</a>
                                                <a class="btn btn-primary-light" href="{{ url('booking-2') }}">Book
                                                    Online Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card doctor-card">
                                <div class="card-body">
                                    <div class="doctor-widget-one">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <a href="{{ url('doctor-profile') }}">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-16.jpg') }}"
                                                        class="img-fluid" alt="Johny Rita">
                                                </a>
                                                <div class="favourite-btn">
                                                    <a href="javascript:void(0)" class="favourite-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">
                                                    <a href="{{ url('doctor-profile') }}">Dr. Johny Rita</a>
                                                    <i class="fas fa-circle-check"></i>
                                                </h4>
                                                <p class="doc-speciality">MBBS, Dentist</p>
                                                <div class="clinic-details">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i>
                                                        <span>0.9</span> mi - Newyork, USA <a
                                                            href="javascript:void(0);">Get Direction</a>
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-award"></i> <span>20</span> Years of Experience
                                                    </p>
                                                </div>
                                                <div class="reviews-ratings">
                                                    <p>
                                                        <span><i class="fas fa-star"></i> 4.5</span> (35 Reviews)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li>
                                                        <i class="feather-clock available-icon"></i>
                                                        <span class="available-date available-today">Available Today</span>
                                                    </li>
                                                    <li><i class="feather-thumbs-up available-icon"></i> 98% <span
                                                            class="votes">(252 Votes)</span></li>
                                                    <li><i class="feather-dollar-sign available-icon"></i> $1500 <i
                                                            class="feather-info available-info-icon"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking book-appoint">
                                                <a class="btn btn-primary" href="{{ url('booking') }}">Book
                                                    Appointment</a>
                                                <a class="btn btn-primary-light" href="{{ url('booking-2') }}">Book
                                                    Online Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card doctor-card">
                                <div class="card-body">
                                    <div class="doctor-widget-one">
                                        <div class="doc-info-left">
                                            <div class="doctor-img">
                                                <a href="{{ url('doctor-profile') }}">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-17.jpg') }}"
                                                        class="img-fluid" alt="Deborah Angel">
                                                </a>
                                                <div class="favourite-btn">
                                                    <a href="javascript:void(0)" class="favourite-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="doc-info-cont">
                                                <h4 class="doc-name">
                                                    <a href="{{ url('doctor-profile') }}">Dr. Deborah Angel</a>
                                                    <i class="fas fa-circle-check"></i>
                                                </h4>
                                                <p class="doc-speciality">MBBS, Dentist</p>
                                                <div class="clinic-details">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i>
                                                        <span>0.9</span> mi - Newyork, USA <a
                                                            href="javascript:void(0);">Get Direction</a>
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-award"></i> <span>20</span> Years of Experience
                                                    </p>
                                                </div>
                                                <div class="reviews-ratings">
                                                    <p>
                                                        <span><i class="fas fa-star"></i> 4.5</span> (35 Reviews)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="doc-info-right">
                                            <div class="clini-infos">
                                                <ul>
                                                    <li>
                                                        <i class="feather-clock available-icon"></i>
                                                        <span class="available-date available-today">Available Today</span>
                                                    </li>
                                                    <li><i class="feather-thumbs-up available-icon"></i> 98% <span
                                                            class="votes">(252 Votes)</span></li>
                                                    <li><i class="feather-dollar-sign available-icon"></i> $1500 <i
                                                            class="feather-info available-info-icon"></i></li>
                                                </ul>
                                            </div>
                                            <div class="clinic-booking book-appoint">
                                                <a class="btn btn-primary" href="{{ url('booking') }}">Book
                                                    Appointment</a>
                                                <a class="btn btn-primary-light" href="{{ url('booking-2') }}">Book
                                                    Online Consultation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="blog-pagination rev-page">
                                        <nav>
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link page-prev" href="javascript:;" tabindex="-1"><i
                                                            class="feather-chevrons-left me-1"></i> PREV</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:;">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:;">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:;">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:;">10</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link page-next" href="javascript:;">NEXT <i
                                                            class="feather-chevrons-right ms-1"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 theiaStickySidebar map-right">
                    <div id="map" class="map-listing"></div>
                </div>
            </div>
            <!-- /Doctor Search List -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
