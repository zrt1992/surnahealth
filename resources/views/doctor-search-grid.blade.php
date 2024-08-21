<?php $page = 'doctor-search-grid'; ?>
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
                                                <ul class="fill-more" id="fill-more">
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
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="speciality">
                                                            <span class="checkmark"></span>
                                                            Urology
                                                        </label>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0);" class="more-view" id="more-view">View More <i
                                                        class="feather-chevrons-right ms-1"></i></a>
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
                                                <ul class="fill-more" id="fill-more1">
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
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="experience">
                                                            <span class="checkmark"></span>
                                                            6+ Years
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom_check d-inline-flex">
                                                            <input type="checkbox" name="experience">
                                                            <span class="checkmark"></span>
                                                            7+ Years
                                                        </label>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0);" class="more-view" id="more-view1">View More
                                                    <i class="feather-chevrons-right ms-1"></i></a>
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
                                                <ul class="fill-more" id="fill-more2">
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
                                                <a href="javascript:void(0);" class="more-view" id="more-view2">View More
                                                    <i class="feather-chevrons-right ms-1"></i></a>
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
                                                    <a href="{{ url('doctor-search-grid') }}" class="active">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('search-2') }}">
                                                        <i class="feather-list"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-13.jpg') }}"
                                                        class="img-fluid" alt="John Doe">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr.John Doe</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1100.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>15</span> Years of Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-14.jpg') }}"
                                                        class="img-fluid" alt="Darren Elder">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Darren Elder</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Urology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1200.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New Jercy, USA</p>
                                                <p><i class="feather-award"></i> <span>12</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-15.jpg') }}"
                                                        class="img-fluid" alt="Sofia Brient">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Sofia Brient</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Oral Surgery</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1300.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-16.jpg') }}"
                                                        class="img-fluid" alt="Johny Rita">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Johny Rita</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1000.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>8</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-17.jpg') }}"
                                                        class="img-fluid" alt="Deborah Angel">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Deborah Angel</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Neurology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$900.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-18.jpg') }}"
                                                        class="img-fluid" alt="Ruby Perrin">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1500.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-15.jpg') }}"
                                                        class="img-fluid" alt="Ruby Perrin">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1500.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-15.jpg') }}"
                                                        class="img-fluid" alt="Ruby Perrin">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1500.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="doctor-profile-widget doc-grid">
                                        <div class="doc-pro-img">
                                            <a href="{{ url('doctor-profile') }}">
                                                <div class="doctor-profile-img">
                                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-15.jpg') }}"
                                                        class="img-fluid" alt="Ruby Perrin">
                                                </div>
                                            </a>
                                            <div class="reviews-ratings">
                                                <p>
                                                    <span><i class="fas fa-star"></i> 4.5</span>
                                                </p>
                                            </div>
                                            <div class="favourite-btn">
                                                <a href="javascript:void(0)" class="favourite-icon">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="doc-content">
                                            <div class="doc-pro-info">
                                                <div class="doc-pro-name">
                                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a><i
                                                            class="fas fa-circle-check"></i></h4>
                                                    <p>Cardiology</p>
                                                </div>
                                                <div class="review-price">
                                                    <p>$1500.00<span>/hr</span></p>
                                                </div>
                                            </div>
                                            <div class="doc-pro-location">
                                                <p><i class="feather-map-pin"></i> <span>0.9</span> mi - New York, USA</p>
                                                <p><i class="feather-award"></i> <span>20</span> Years of ExperienceA</p>
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
