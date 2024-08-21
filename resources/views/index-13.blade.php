<?php $page = 'index-13'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Home Banner -->
<section class="banner-section banner-sec-fourteen">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content aos" data-aos="fade-up">
                    <div class="banner-head">
                        <h6>Let’s Take Care</h6>
                        <h1>Home Care Services in Your Area</h1>
                        <p>Book an expert caregiver that you can trust. To get started</p>
                    </div>
                    <div class="banner-form-field">
                        <form action="{{url('index-13')}}">
                            <div class="input-box">
                                <div class="input-block">
                                    <div class="icon-badge">
                                        <span><i class="feather-map-pin"></i></span>
                                    </div>
                                    <div class="banner-input-box">
                                        <label class="form-label">Location</label>
                                        <input type="text" class="form-control" placeholder="Newyork, United States">
                                    </div>
                                </div>
                                <div class="input-block">
                                    <div class="icon-badge">
                                        <span><i class="fa-solid fa-users-gear"></i></span>
                                    </div>
                                    <div class="banner-input-box">
                                        <label class="form-label">Services</label>
                                        <input type="text" class="form-control" placeholder="Enter Services">
                                    </div>
                                </div>
                                <div class="input-btn">
                                    <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="watch-video">
                        <a href="#">
                            <span><i class="fa-solid fa-circle-play"></i></span>
                            Watch Video About Us
                        </a>
                    </div>
                </div>		
            </div>
            <div class="col-lg-6">
                <div class="banner-sec-img">
                    <span><img src="{{URL::asset('assets/img/banner-img-13.png')}}" class="img-fluid" alt="Img"></span>
                    <span class="banner-curve aos" data-aos="fade-up" data-aos-delay="500"><img src="{{URL::asset('assets/img/banner-img-curve-13.png')}}" class="img-fluid" alt="Img"></span>
                    <span class="banner-round-bg"><img src="{{URL::asset('assets/img/banner-round-vector-13.png')}}" alt="Img"></span>
                    <span class="lief-img"><img src="{{URL::asset('assets/img/banner-lief-img.png')}}" alt="Img"></span>
                    <span class="banner-curve-two"><img src="{{URL::asset('assets/img/banner-curve-bg.png')}}" alt="Img"></span>
                    <span class="chat-call-btn"><a href="{{url('chat-doctor')}}">Chat and Call Now</a></span>
                    <div class="banner-cal-icon">
                        <span class="calender-border"><img src="{{URL::asset('assets/img/icons/banner-cal-icon.svg')}}" alt="Img"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Home Banner -->

<!-- How it Work -->
<div class="how-it-work-fourteen">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-4">
                <div class="section-work-head" data-aos="fade-up" data-aos-delay="400">
                    <span>Book best caregiver</span>
                    <h2>How it <span>Works & Booking</span></h2>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8">
                <ul class="work-flow-chart">
                    <li data-aos="fade-up" data-aos-delay="500">
                        <img src="{{URL::asset('assets/img/bg/chart-arrow-01.png')}}" alt="Img">
                        <div class="flow-chart-list">
                            <span class="chart-icon"><img src="{{URL::asset('assets/img/icons/flow-chart-icon-01.svg')}}" alt="Img"></span>
                            <h6>Location</h6>
                            <span class="chart-count">01</span>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="600">
                        <img src="{{URL::asset('assets/img/bg/chart-arrow-01.png')}}" alt="Img">
                        <div class="flow-chart-list bg-yelllow">
                            <span class="chart-icon"><img src="{{URL::asset('assets/img/icons/flow-chart-icon-02.svg')}}" alt="Img"></span>
                            <h6>Booking</h6>
                            <span class="chart-count">02</span>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700">
                        <img src="{{URL::asset('assets/img/bg/chart-arrow-01.png')}}" alt="Img">
                        <div class="flow-chart-list">
                            <span class="chart-icon"><img src="{{URL::asset('assets/img/icons/flow-chart-icon-03.svg')}}" alt="Img"></span>
                            <h6>Caregiver</h6>
                            <span class="chart-count">03</span>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="800">
                        <img src="{{URL::asset('assets/img/bg/chart-arrow-02.png')}}" alt="Img">
                        <div class="flow-chart-list bg-yelllow">
                            <span class="chart-icon"><img src="{{URL::asset('assets/img/icons/flow-chart-icon-04.svg')}}" alt="Img"></span>
                            <h6>Takecare</h6>
                            <span class="chart-count">04</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /How it Work -->

<!-- Service Section -->
<section class="service-sec-fourteen">
    <div class="section-bg">
        <img src="{{URL::asset('assets/img/bg/sercice-sec-bg.png')}}" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-fourteen">
            <h2>Our <span> Services</span></h2>
            <p>More the quantity, higher the discount. Hurry, Buy Now!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12 d-flex">
                <div class="service-type-cards w-100">
                    <div class="service-types" data-aos="fade-down">
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-01.jpg')}}" alt="Img"></a>
                        </div>
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Nurse at Home</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="service-types" data-aos="fade-down">
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-02.jpg')}}" alt="Img"></a>
                        </div>
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Mobility Assistance</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="service-types" data-aos="fade-down">
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-03.jpg')}}" alt="Img"></a>
                        </div>
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Physiotherapy</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="service-types" data-aos="fade-down">
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-04.jpg')}}" alt="Img"></a>
                        </div>
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Medical Equipment</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                    <div class="service-types" data-aos="fade-down">
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-05.jpg')}}" alt="Img"></a>
                        </div>
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Trained Attendants</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="services-img-col w-100">
                    <div class="sec-img-center">
                        <img src="{{URL::asset('assets/img/service/service-img.jpg')}}" alt="Img">
                    </div>
                    <div class="img-center img-center-one" data-aos="fade-down" data-aos-delay="500">
                        <img src="{{URL::asset('assets/img/service/service-img-01.jpg')}}" alt="Img">
                    </div>
                    <div class="img-center img-center-two" data-aos="fade-up" data-aos-delay="800">
                        <img src="{{URL::asset('assets/img/service/service-img-02.jpg')}}" alt="Img">
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-12 d-flex">
                <div class="service-type-cards w-100">
                    <div class="service-types service-type-right" data-aos="fade-down">
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Lab Tests</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-06.jpg')}}" alt="Img"></a>
                        </div>
                    </div>
                    <div class="service-types service-type-right" data-aos="fade-down">
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Doctor Consultation</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-07.jpg')}}" alt="Img"></a>
                        </div>
                    </div>
                    <div class="service-types service-type-right" data-aos="fade-down">
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Mother & Baby Care</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-08.jpg')}}" alt="Img"></a>
                        </div>
                    </div>
                    <div class="service-types service-type-right" data-aos="fade-down">
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Vaccination</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-09.jpg')}}" alt="Img"></a>
                        </div>
                    </div>
                    <div class="service-types service-type-right" data-aos="fade-down">
                        <div class="service-content">
                            <h4><a href="{{url('search-2')}}">Tele Consultation</a></h4>
                            <a href="{{url('search-2')}}" class="explore-link">Explore<i class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="doctor-image">
                            <a href="{{url('search-2')}}"><img src="{{URL::asset('assets/img/service/service-doctor-10.jpg')}}" alt="Img"></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- /Service Section -->

<!-- Top Nurses Section -->
<section class="neraby-nurses-sec top-nurse-sec">
    <div class="container">
        <div class="section-head-fourteen" data-aos="fade-up">
            <h2>Top <span> Nurses </span></h2>
            <p>Our Qualified Nurses</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="top-nurse-profile-slider owl-carousel">
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-04.jpg')}}" alt="Img"></a>
                            <span class="badge">7+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Carolyn</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>94%</span>1756 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>600 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$120<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-05.jpg')}}" alt="Img"></a>
                            <span class="badge">10+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Jasmine Madeleine</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-02.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>98%</span>1856 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>700 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$100<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-06.jpg')}}" alt="Img"></a>
                            <span class="badge">15+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Samantha Tracey</a></h5>
                                    <span>United Kingdom</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>95%</span>1156 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>500 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$150<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-01.jpg')}}" alt="Img"></a>
                            <span class="badge">7+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Elizabeth Penelope</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>98%</span>1856 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>700 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$140<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-02.jpg')}}" alt="Img"></a>
                            <span class="badge">5+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Dorothy Joanne</a></h5>
                                    <span>United Kingdom</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>97%</span>2589 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>2.5 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$160<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-03.jpg')}}" alt="Img"></a>
                            <span class="badge">8+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                            <span class="calender-icon img-top-item">
                                <a href="javascript:void(0)">
                                    <i class="feather-calendar"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Rachel Sophie</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>91%</span>5478 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>900 m</span>
                            </div>
                            <div class="nurse-book">
                                <div class="nurse-fees">
                                    <h5>$120<span>/ day</span></h5>
                                </div>
                                <div class="book-btns">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav-button">
                    <div class="owl-nav top-nurse-slide-nav nav-control"></div>
                    <a href="{{url('doctor-profile')}}" class="view-all">View All Top Nurses</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Top Nurses Section -->

<!-- Our Best Work Section -->
<section class="our-best-work-sec">
    <div class="container">
        <div class="section-head-fourteen" data-aos="fade-down">
            <h2>See Our Best Work</h2>
            <p>More the quantity, higher the discount. hurry, buy now!</p>
        </div>
        <div class="treatment-video-main">
            <div class="row">
                <div class="col-lg-12">
                    <div class="best-work-video" data-aos="fade-up">
                        <div class="slider work-video-img">
                            <div class="treatment-video">
                                <div class="video-img">
                                    <img src="{{URL::asset('assets/img/slider/video-slider-img-01.jpg')}}" alt="Slider">
                                    <div class="video-player">
                                        <video class="doctor-treatment-video" loop>
                                            <source src="https://media.istockphoto.com/id/1026837780/video/female-doctor-discusses-diagnosis-with-senior-male-patient.mp4?s=mp4-640x640-is&k=20&c=xuEa4-MNFJQTG0rsrImvNp_JSes0bA-ugZEFFVRse9Q=" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <span class="play-btn-video"><i class="feather-play"></i></span>
                                    <span class="pause-btn-video"><i class="feather-pause"></i></span>
                                </a>
                            </div>
                            <div class="treatment-video">
                                <div class="video-img">
                                    <img src="{{URL::asset('assets/img/slider/video-slider-img-02.jpg')}}" alt="Slider">
                                    <div class="video-player">
                                        <video class="doctor-treatment-video" loop>
                                            <source src="https://media.istockphoto.com/id/1026837780/video/female-doctor-discusses-diagnosis-with-senior-male-patient.mp4?s=mp4-640x640-is&k=20&c=xuEa4-MNFJQTG0rsrImvNp_JSes0bA-ugZEFFVRse9Q=" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <span class="play-btn-video"><i class="feather-play"></i></span>
                                    <span class="pause-btn-video"><i class="feather-pause"></i></span>
                                </a>
                            </div>
                            <div class="treatment-video">
                                <div class="video-img">
                                    <img src="{{URL::asset('assets/img/slider/video-slider-img-03.jpg')}}" alt="Slider">
                                    <div class="video-player">
                                        <video class="doctor-treatment-video" loop>
                                            <source src="https://media.istockphoto.com/id/1026837780/video/female-doctor-discusses-diagnosis-with-senior-male-patient.mp4?s=mp4-640x640-is&k=20&c=xuEa4-MNFJQTG0rsrImvNp_JSes0bA-ugZEFFVRse9Q=" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <span class="play-btn-video"><i class="feather-play"></i></span>
                                    <span class="pause-btn-video"><i class="feather-pause"></i></span>
                                </a>
                            </div>
                            <div class="treatment-video">
                                <div class="video-img">
                                    <img src="{{URL::asset('assets/img/slider/video-slider-img-04.jpg')}}" alt="Slider">
                                    <div class="video-player">
                                        <video class="doctor-treatment-video" loop>
                                            <source src="https://media.istockphoto.com/id/1026837780/video/female-doctor-discusses-diagnosis-with-senior-male-patient.mp4?s=mp4-640x640-is&k=20&c=xuEa4-MNFJQTG0rsrImvNp_JSes0bA-ugZEFFVRse9Q=" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <span class="play-btn-video"><i class="feather-play"></i></span>
                                    <span class="pause-btn-video"><i class="feather-pause"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="slider slider-thumbnails-img">
                            <div class="slider-small-thumb">
                                <div class="small-slide-img"><img src="{{URL::asset('assets/img/slider/video-slider-thumb-01.jpg')}}" alt="product image"></div>
                                <a href="javascript:void(0);" class="play-btn-small"><i class="feather-play"></i></a>
                            </div>
                            <div class="slider-small-thumb">
                                <div class="small-slide-img"><img src="{{URL::asset('assets/img/slider/video-slider-thumb-02.jpg')}}" alt="product image"></div>
                                <a href="javascript:void(0);" class="play-btn-small"><i class="feather-play"></i></a>
                            </div>
                            <div class="slider-small-thumb">
                                <div class="small-slide-img"><img src="{{URL::asset('assets/img/slider/video-slider-thumb-03.jpg')}}" alt="product image"></div>
                                <a href="javascript:void(0);" class="play-btn-small"><i class="feather-play"></i></a>
                            </div>
                            <div class="slider-small-thumb">
                                <div class="small-slide-img"><img src="{{URL::asset('assets/img/slider/video-slider-thumb-03.jpg')}}" alt="product image"></div>
                                <a href="javascript:void(0);" class="play-btn-small"><i class="feather-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- /Our Best Work Section -->

<!-- Nearby Nurse Section -->
<section class="neraby-nurses-sec">
    <div class="container">
        <div class="section-head-fourteen" data-aos="fade-up">
            <h2>Nearby <span> Nurses </span></h2>
            <p>Meet your nearby nurses</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nurse-profile-slider owl-carousel">
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-01.jpg')}}" alt="Img"></a>
                            <span class="badge">7+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Elizabeth Penelope</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>98%</span>1856 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>700 m</span>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-02.jpg')}}" alt="Img"></a>
                            <span class="badge">5+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Dorothy Joanne</a></h5>
                                    <span>United Kingdom</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>97%</span>2589 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>2.5 m</span>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-03.jpg')}}" alt="Img"></a>
                            <span class="badge">8+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Rachel Sophie</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>91%</span>5478 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>900 m</span>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-04.jpg')}}" alt="Img"></a>
                            <span class="badge">7+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Carolyn</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>94%</span>1756 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>600 m</span>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-05.jpg')}}" alt="Img"></a>
                            <span class="badge">10+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Jasmine Madeleine</a></h5>
                                    <span>United States</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>98%</span>1856 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>700 m</span>
                            </div>
                        </div>
                    </div>
                    <div class="nurse-profile nurse-card" data-aos="fade-down">
                        <div class="nurse-img">
                            <a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/nurses/nurse-06.jpg')}}" alt="Img"></a>
                            <span class="badge">15+ Years Experience</span>
                            <span class="fav-item img-top-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </span>
                        </div>
                        <div class="nurse-pofile-info">
                            <div class="d-flex justify-content-between nurse-content">
                                <div class="nurse-name">
                                    <h5><a href="{{url('doctor-profile')}}">Samantha Tracey</a></h5>
                                    <span>United Kingdom</span>
                                </div>
                                <span><img src="{{URL::asset('assets/img/icons/nurse-slide-badge-01.svg')}}" alt="Img"></span>
                            </div>
                            <div class="nurse-details">
                                <h6><span><i class="feather-thumbs-up"></i>95%</span>1156 Patients</h6>
                                <span class="distance"><i class="feather-map-pin"></i>500 m</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav-button">
                    <div class="owl-nav nurse-slide-nav nav-control"></div>
                    <a href="{{url('doctor-profile')}}" class="view-all">View All Top Nurses</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Nearby Nurse Section -->

<!-- Blog Section -->
<section class="our-blog-fourteen">
    <div class="section-bg">
        <img src="{{URL::asset('assets/img/bg/blog-bg-14.png')}}" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-fourteen">
            <h2>Our <span> Blog </span></h2>
            <p>Our latest articles</p>
        </div>
                        <div class="blog-slide-fourteen owl-carousel">
                            <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="500">
                                <div class="blog-grig-img">
                                    <a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/blog/blog-18.jpg')}}" alt="Img"></a>
                                </div>
                                <div class="blog-grid-content">
                                    <div class="grid-head">
                                        <span class="badge badge-blue">Health and Safety</span>
                                        <span>01 May 2024</span>
                                    </div>
                                    <h4><a href="{{url('blog-details')}}">Adapting Homes for Aging Gracefully: Design Tips for Old Age Comfort</a></h4>
                                    <p>Explore practical design tips to make living spaces in old age homes adaptable and comfortable, enhancing the quality of life for seniors. Learn about accessibility, safety features, and creating a warm environment.</p>
                                    <div class="grid-footer">
                                        <span><i class="feather-eye"></i>1k views</span>
                                        <a href="{{url('blog-details')}}">Read More<i class="feather-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="600">
                                <div class="blog-grig-img">
                                    <a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/blog/blog-19.jpg')}}" alt="Img"></a>
                                </div>
                                <div class="blog-grid-content">
                                    <div class="grid-head">
                                        <span class="badge badge-pink">Caregiving</span>
                                        <span>06 May 2024</span>
                                    </div>
                                    <h4><a href="{{url('blog-details')}}">Navigating the Transition: A Guide to Choosing the Right Old Age Home</a></h4>
                                    <p>Explore factors to consider when selecting age home, ensuring a seamless transition for your loved ones. Gain insights into facility options, care services, and creating a supportive environment.</p>
                                    <div class="grid-footer">
                                        <span><i class="feather-eye"></i>850 views</span>
                                        <a href="{{url('blog-details')}}">Read More<i class="feather-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="700">
                                <div class="blog-grig-img">
                                    <a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/blog/blog-20.jpg')}}" alt="Img"></a>
                                </div>
                                <div class="blog-grid-content">
                                    <div class="grid-head">
                                        <span class="badge badge-info">Physiotherapy</span>
                                        <span>10 May 2024</span>
                                    </div>
                                    <h4><a href="{{url('blog-details')}}">Empowering Aging Bodies: The Impact of Physiotherapy in Old Age Home Wellness</a></h4>
                                    <p>Discover the transformative effects of physiotherapy in home care, focusing on tailored interventions that address mobility challenges, pain management, and overall physical health for elderly residents.</p>
                                    <div class="grid-footer">
                                        <span><i class="feather-eye"></i>4.5k views</span>
                                        <a href="{{url('blog-details')}}">Read More<i class="feather-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="800">
                                <div class="blog-grig-img">
                                    <a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/blog/blog-18.jpg')}}" alt="Img"></a>
                                </div>
                                <div class="blog-grid-content">
                                    <div class="grid-head">
                                        <span class="badge badge-pink">Health and Safety</span>
                                        <span>01 May 2024</span>
                                    </div>
                                    <h4><a href="{{url('blog-details')}}">Adapting Homes for Aging Gracefully: Design Tips for Old Age Comfort</a></h4>
                                    <p>Explore practical design tips to make living spaces in old age homes adaptable and comfortable, enhancing the quality of life for seniors. Learn about accessibility, safety features, and creating a warm environment.</p>
                                    <div class="grid-footer">
                                        <span><i class="feather-eye"></i>1k views</span>
                                        <a href="{{url('blog-details')}}">Read More<i class="feather-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="owl-nav-button">
                <div class="owl-nav blog-slide-nav nav-control"></div>
                <a href="{{url('blog-grid')}}" class="view-all">View All Blogs</a>
            </div>
    </div>
</section>
<!-- /Blog Section -->

<!-- Pricing Section -->
<section class="pricing-plane-sec">
    <div class="container">
        <div class="section-head-fourteen">
            <h2>Pricing <span> Plan </span></h2>
            <p>No extra charges, no surprise fees</p>
        </div>
        <div class="price-sec-main">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="price-plane-card">
                        <div class="price-head">
                            <h4>Basic</h4>
                            <h3>$99 <span>/monthly</span></h3>
                        </div>
                        <div class="plane-includes">
                            <h5>What’s included</h5>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>Emergency support</li>
                                <li><i class="fa-solid fa-circle-check"></i>In-person care manager visits</li>
                                <li><i class="fa-solid fa-circle-check"></i>Healthcare support</li>
                                <li><i class="fa-solid fa-circle-check"></i>Home Care (as needed)</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Safety & Security</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Engagement assistance</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Physiotherapy/ counselor </li>
                            </ul>
                        </div>
                        <div class="plane-btn">
                            <a href="{{url('login-email')}}" class="btn btn-primary w-100">Choose Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="price-plane-card active">
                        <div class="price-head">
                            <h4>Premium</h4>
                            <h3>$120 <span>/monthly</span></h3>
                        </div>
                        <div class="plane-includes">
                            <h5>What’s included</h5>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>Emergency support</li>
                                <li><i class="fa-solid fa-circle-check"></i>In-person care manager visits</li>
                                <li><i class="fa-solid fa-circle-check"></i>Healthcare support</li>
                                <li><i class="fa-solid fa-circle-check"></i>Home Care (as needed)</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Safety & Security</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Engagement assistance</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Physiotherapy/ counselor </li>
                            </ul>
                        </div>
                        <div class="plane-btn">
                            <a href="{{url('login-email')}}" class="btn btn-primary w-100">Choose Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="price-plane-card">
                        <div class="price-head">
                            <h4>Enterprise</h4>
                            <h3>$199 <span>/monthly</span></h3>
                        </div>
                        <div class="plane-includes">
                            <h5>What’s included</h5>
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i>Emergency support</li>
                                <li><i class="fa-solid fa-circle-check"></i>In-person care manager visits</li>
                                <li><i class="fa-solid fa-circle-check"></i>Healthcare support</li>
                                <li><i class="fa-solid fa-circle-check"></i>Home Care (as needed)</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Safety & Security</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Engagement assistance</li>
                                <li><i class="fa-solid fa-circle-xmark"></i>Physiotherapy/ counselor </li>
                            </ul>
                        </div>
                        <div class="plane-btn">
                            <a href="{{url('login-email')}}" class="btn btn-primary w-100">Choose Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Pricing Section -->

<!-- Faq Section -->
<section class="faq-sec-fourteen">
    <div class="container">
        <div class="section-head-fourteen">
            <h2>Have any <span> Questions? </span></h2>
            <p>No extra charges, no surprise fees</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="faq-main-cards" id="accordionExample">
                    <div class="faq-card aos" data-aos="fade-down">
                        <div class="faq-title">
                            <a data-bs-toggle="collapse" href="#faqOne" aria-expanded="false"> 
                                <span>Q</span>
                                <div class="faq-content">
                                    <h6>Is assisted living for me?</h6>
                                    <div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
                                        <p>Despite your best efforts to provide elder care at home, you may find that the level of care required is simply too demanding. With increase in dependency, you may find that you’re unable to provide assistance yourself or through at-home caregivers. In such a situation, an assisted living facility is the best option. A team of skilled and experienced caregivers are better suited to be able to take care of your loved ones’ every need.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                            
                    </div>
                    <div class="faq-card aos" data-aos="fade-down">																																
                        <div class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">
                                <span>Q</span>
                                <div class="faq-content">
                                    <h6>Can you treat my relation with dementia & help with recovery?</h6>
                                    <div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </div>
                                
                            </a>
                        </div>
                    </div>
                    <div class="faq-card aos" data-aos="fade-down">
                        <div class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">
                                <span>Q</span>
                                <div class="faq-content">
                                    <h6>Is there a doctor on the premises?</h6>
                                    <div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </div>
                                
                            </a>
                        </div>
                    </div>	
                    <div class="faq-card aos" data-aos="fade-down">
                        <div class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">
                                <span>Q</span>
                                <div class="faq-content">
                                    <h6>How can we pay for long-term care?</h6>
                                    <div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="faq-card aos" data-aos="fade-down">
                        <div class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">
                                <span>Q</span>
                                <div class="faq-content">
                                    <h6>What is Respite Care?</h6>
                                    <div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="faq-sec-imgs">
                    <span class="faq-img-one"><img src="{{URL::asset('assets/img/faq-sec-img-01.png')}}" alt="Img"></span>
                    <span class="faq-img-two"><img src="{{URL::asset('assets/img/faq-sec-img-02.png')}}" alt="Img"></span>
                    <span class="faq-img-three"><img src="{{URL::asset('assets/img/faq-sec-img-03.png')}}" alt="Img"></span>
                    <span class="faq-img-four"><img src="{{URL::asset('assets/img/faq-sec-img-04.png')}}" alt="Img"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Faq Section -->

       @component('components.scrolltotop')
    @endcomponent
@endsection
