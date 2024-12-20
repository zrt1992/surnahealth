<?php $page = 'index-11'; ?>
@extends('layout.mainlayout')
@section('content')
	<!-- Home Banner -->
    <section class="banner-section-sixteen">
        <div class="banner-slidersurgery">
            <div class="owl-carousel banner-sliderssurgery owl-theme">
                <div class="item item-slidersurgery">
                    <img src="{{URL::asset('/assets/img/cosmetic-banner-img.png')}}" class="img-fluid" alt="Img">
                </div>
                <div class="item item-slidersurgery">
                    <img src="{{URL::asset('/assets/img/cosmetic-banner-img1.png')}}" class="img-fluid" alt="Img">
                </div>
                <div class="item item-slidersurgery">
                    <img src="{{URL::asset('/assets/img/cosmetic-banner-img2.png')}}" class="img-fluid" alt="Img">
                </div>
                <div class="item item-slidersurgery">
                    <img src="{{URL::asset('/assets/img/cosmetic-banner-img3.png')}}" class="img-fluid" alt="Img">
                </div>
                <div class="item item-slidersurgery">
                    <img src="{{URL::asset('/assets/img/cosmetic-banner-img4.png')}}" class="img-fluid" alt="Img">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="costomic-banner-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content banner-content-sixteen aos" data-aos="fade-up">
                            <h1>Perfect Face Surgery For Everyone</h1>
                            <p>
                                We enhance your natural beauty, boost your confidence & provide a 
                                positive and personalized experience throughout your cosmetic surgery journey.
                            </p>
                            <div class="banner-btns-sixteen">
                                <a href="{{url('booking-2')}}" class="btn btn-primary me-2">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- services Section -->
    <section class="services-section-sixteen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-sixteen text-center">
                        <p>Recapture the beauty of self-confidence</p>
                        <h2>Discover a New you</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel discover-slider owl-theme">
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-5.svg')}}" alt="Body">
                    </div>
                    <a href="javascript:void(0);">Body</a>
                    <p>Tailored Body Surgery Solutions for Timeless Beauty</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-4.svg')}}" alt="Face">
                    </div>
                    <a href="javascript:void(0);">Nose</a>
                    <p>Elevate Confidence with Precision Nose Surgery</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-3.svg')}}" alt="Breast">
                    </div>
                    <a href="javascript:void(0);">Breast</a>
                    <p>Customized Breast Surgery for Timeless Elegance.</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-2.svg')}}" alt="Nose">
                    </div>
                    <a href="javascript:void(0);">Face</a>
                    <p> Face Surgery Tailored to Your Unique Beauty.</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-1.svg')}}" alt="Fillers">
                    </div>
                    <a href="javascript:void(0);">Fillers</a>
                    <p>Expertly Crafted Fillers  Surgery for Natural Radiance</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-2.svg')}}" alt="Breast">
                    </div>
                    <a href="javascript:void(0);">Face</a>
                    <p>Face Surgery Tailored to Your Unique Beauty.</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-5.svg')}}" alt="Face">
                    </div>
                    <a href="javascript:void(0);">Body</a>
                    <p>Tailored Body Surgery Solutions for Timeless Beauty</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-4.svg')}}" alt="Breast">
                    </div>
                    <a href="javascript:void(0);">Nose</a>
                    <p>Elevate Confidence with Precision Nose Surgery</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-1.svg')}}" alt="Nose">
                    </div>
                    <a href="javascript:void(0);">Fillers</a>
                    <p>Expertly Crafted Fillers  Surgery for Natural Radiance</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-3.svg')}}" alt="Face">
                    </div>
                    <a href="javascript:void(0);">Breast</a>
                    <p>Customized Breast Surgery for Timeless Elegance.</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
                <div class="discover-you-main">
                    <div class="discover-you-image">	
                        <img src="{{URL::asset('/assets/img/icons/discover-5.svg')}}" alt="Nose">
                    </div>
                    <a href="javascript:void(0);">Body</a>
                    <p>Tailored Body Surgery Solutions for Timeless Beauty</p>
                    <a href="javascript:void(0);" class="discov-innner">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="service-sixteen-icon">
            <img src="{{URL::asset('/assets/img/service-sixteen-icon.png')}}" class="bg-img-top" alt="Section bg">
            <img src="{{URL::asset('/assets/img/bg/vector-bg-03.png')}}" class="bg-img-bottom" alt="Section bg">
        </div>
    </section>
    <!-- /services Section -->

    <!-- Treatment Section -->
        <div class="treatment-section-sixteen">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-sixteen text-center">
                            <p>TREATMENT OFFERED BY US</p>
                            <h2>Choose a treatment</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel treatment-sixteen-slider owl-theme">
                    <div class="item item-sixteen">
                        <div class="doctor-profile-widget">
                            <div class="doc-pro-img">
                                <a href="{{url('doctor-profile')}}">
                                    <div class="doctor-profile-img">
                                        <img src="{{URL::asset('/assets/img/service/treatment-1.jpg')}}" class="img-fluid" alt="Treatment">
                                    </div>
                                </a>
                                <div class="doctor-amount">
                                    <span>Face Lift</span>
                                </div>
                            </div>
                            <div class="doc-content">
                                <div class="doc-pro-info">
                                    <div class="doc-pro-name">
                                        <a href="{{url('doctor-profile')}}" class="img-avatar"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-07.jpg')}}" alt="Img"></a>
                                        <h5><a href="{{url('doctor-profile')}}">Dr. Barbara</a><span>Aesthetic Surgery</span></h5>
                                    </div>
                                </div>
                                <div class="doc-pro-location">
                                    <p><i class="feather-map-pin"></i>Kansas City, MO</p>
                                </div>
                                <a href="{{url('booking')}}" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-sixteen">
                        <div class="doctor-profile-widget">
                            <div class="doc-pro-img">
                                <a href="{{url('doctor-profile')}}">
                                    <div class="doctor-profile-img">
                                        <img src="{{URL::asset('/assets/img/service/treatment-2.jpg')}}" class="img-fluid" alt="Treatment">
                                    </div>
                                </a>
                                <div class="doctor-amount">
                                    <span>Implant</span>
                                </div>
                            </div>
                            <div class="doc-content">
                                <div class="doc-pro-info">
                                    <div class="doc-pro-name">
                                        <a href="{{url('doctor-profile')}}" class="img-avatar"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-08.jpg')}}" alt="Img"></a>
                                        <h5><a href="{{url('doctor-profile')}}">Dr. Williams</a><span>Implant Surgery</span></h5>
                                    </div>
                                </div>
                                <div class="doc-pro-location">
                                    <p><i class="feather-map-pin"></i>Gloster, MS</p>
                                </div>
                                <a href="{{url('booking')}}" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-sixteen">
                        <div class="doctor-profile-widget">
                            <div class="doc-pro-img">
                                <a href="{{url('doctor-profile')}}">
                                    <div class="doctor-profile-img">
                                        <img src="{{URL::asset('/assets/img/service/treatment-3.jpg')}}" class="img-fluid" alt="Treatment">
                                    </div>
                                </a>
                                <div class="doctor-amount">
                                    <span>Blearoplasty</span>
                                </div>
                            </div>
                            <div class="doc-content">
                                <div class="doc-pro-info">
                                    <div class="doc-pro-name">
                                        <a href="{{url('doctor-profile')}}" class="img-avatar"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-09.jpg')}}" alt="Img"></a>
                                        <h5><a href="{{url('doctor-profile')}}">Dr. Daniel</a><span>Breast Surgery</span></h5>
                                    </div>
                                </div>
                                <div class="doc-pro-location">
                                    <p><i class="feather-map-pin"></i>Raleigh, NC</p>
                                </div>
                                <a href="{{url('booking')}}" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-sixteen">
                        <div class="doctor-profile-widget">
                            <div class="doc-pro-img">
                                <a href="{{url('doctor-profile')}}">
                                    <div class="doctor-profile-img">
                                        <img src="{{URL::asset('/assets/img/service/treatment-4.jpg')}}" class="img-fluid" alt="Treatment">
                                    </div>
                                </a>
                                <div class="doctor-amount">
                                    <span>Tummy Tuck</span>
                                </div>
                            </div>
                            <div class="doc-content">
                                <div class="doc-pro-info">
                                    <div class="doc-pro-name">
                                        <a href="{{url('doctor-profile')}}" class="img-avatar"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-10.jpg')}}" alt="Img"></a>
                                        <h5><a href="{{url('doctor-profile')}}">Dr. Fareeehna Davis</a><span>Aesthetic Surgery</span></h5>
                                    </div>
                                </div>
                                <div class="doc-pro-location">
                                    <p><i class="feather-map-pin"></i>Salt Lake City, UT</p>
                                </div>
                                <a href="{{url('booking')}}" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-sixteen">
                        <div class="doctor-profile-widget">
                            <div class="doc-pro-img">
                                <a href="{{url('doctor-profile')}}">
                                    <div class="doctor-profile-img">
                                        <img src="{{URL::asset('/assets/img/service/treatment-2.jpg')}}" class="img-fluid" alt="Treatment">
                                    </div>
                                </a>
                                <div class="doctor-amount">
                                    <span>Blearoplasty</span>
                                </div>
                            </div>
                            <div class="doc-content">
                                <div class="doc-pro-info">
                                    <div class="doc-pro-name">
                                        <a href="{{url('doctor-profile')}}" class="img-avatar"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-06.jpg')}}" alt="Img"></a>
                                        <h5><a href="{{url('doctor-profile')}}">Dr. Barbara</a><span>Aesthetic Surgery</span></h5>
                                    </div>
                                </div>
                                <div class="doc-pro-location">
                                    <p><i class="feather-map-pin"></i>Kansas City, MO</p>
                                </div>
                                <a href="{{url('booking')}}" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-sixteen-icontwo">
                <img src="{{URL::asset('/assets/img/service-sixteen-icon.png')}}" alt="Section bg">
            </div>
        </div>
    <!-- /Treatment Section -->

    <!-- Services Section -->
        <div class="features-section-sixteen">
            <div class="bg-img">
                <img src="{{URL::asset('/assets/img/bg/vector-bg-05.png')}}" class="sec-vector" alt="Img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-sixteen text-center">
                            <p>OUr services</p>
                            <h2>Featured Services</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel features-slider-sixteen owl-theme">
                    <div class="feature-sixteen-main">
                        <div class="feature-six-img">
                            <img src="{{URL::asset('/assets/img/feature-service-1.jpg')}}" alt="Feature" class="img-fluid">
                            <div class="feature-content-six">
                                <div class="feature-content-one">
                                    <h5>Mommy Makeover</h5>
                                    <span><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="feature-content-two">
                                    <p>Facial procedures are popular because of their ability to give patients a youthful appearance, 
                                        reduce the signs of aging and by improving existing features for more aesthetically pleasing results. 
                                        These methods are in two separate categories and are commonly known as facial rejuvenation and facial contouring. 
                                        Facial rejuvenation consists of facelift, eyelid lift, neck lift and brow lift.</p>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-sixteen-main">
                        <div class="feature-six-img">
                            <img src="{{URL::asset('/assets/img/feature-service-3.jpg')}}" alt="Feature" class="img-fluid">
                            <div class="feature-content-six">
                                <div class="feature-content-one">
                                    <h5>Face Makeover</h5>
                                    <span><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="feature-content-two">
                                    <p>Facial procedures are popular because of their ability to give patients a youthful appearance, 
                                        reduce the signs of aging and by improving existing features for more aesthetically pleasing results. 
                                        These methods are in two separate categories and are commonly known as facial rejuvenation and facial contouring. 
                                        Facial rejuvenation consists of facelift, eyelid lift, neck lift and brow lift.</p>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-sixteen-main">
                        <div class="feature-six-img">
                            <img src="{{URL::asset('/assets/img/feature-service-2.jpg')}}" alt="Feature" class="img-fluid">
                            <div class="feature-content-six">
                                <div class="feature-content-one">
                                    <h5>BodyTite</h5>
                                    <span><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="feature-content-two">
                                    <p>Facial procedures are popular because of their ability to give patients a youthful appearance, 
                                        reduce the signs of aging and by improving existing features for more aesthetically pleasing results. 
                                        These methods are in two separate categories and are commonly known as facial rejuvenation and facial contouring. 
                                        Facial rejuvenation consists of facelift, eyelid lift, neck lift and brow lift.</p>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-sixteen-main">
                        <div class="feature-six-img">
                            <img src="{{URL::asset('/assets/img/feature-service-3.jpg')}}" alt="Feature" class="img-fluid">
                            <div class="feature-content-six">
                                <div class="feature-content-one">
                                    <h5>BodyTite</h5>
                                    <span><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="feature-content-two">
                                    <p>Facial procedures are popular because of their ability to give patients a youthful appearance, 
                                        reduce the signs of aging and by improving existing features for more aesthetically pleasing results. 
                                        These methods are in two separate categories and are commonly known as facial rejuvenation and facial contouring. 
                                        Facial rejuvenation consists of facelift, eyelid lift, neck lift and brow lift.</p>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-sixteen-main">
                        <div class="feature-six-img">
                            <img src="{{URL::asset('/assets/img/feature-service-1.jpg')}}" alt="Feature" class="img-fluid">
                            <div class="feature-content-six">
                                <div class="feature-content-one">
                                    <h5>BodyTite</h5>
                                    <span><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="feature-content-two">
                                    <p>Facial procedures are popular because of their ability to give patients a youthful appearance, 
                                        reduce the signs of aging and by improving existing features for more aesthetically pleasing results. 
                                        These methods are in two separate categories and are commonly known as facial rejuvenation and facial contouring. 
                                        Facial rejuvenation consists of facelift, eyelid lift, neck lift and brow lift.</p>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Services Section -->

    <!-- Facts Services -->
        <div class="facts-section-sixteen">
            <div class="bg-img">
                <img src="{{URL::asset('/assets/img/bg/vector-bg-06.png')}}" class="sec-vector" alt="Img">
            </div>
            <div class="container">
                <div class="facts-section-all">
                    <div class="facts-main-sixteen">
                        <span>OTHER TREATMENT</span>
                        <h2>Facts You Need To Know Ahead</h2>
                        <p>
                            Curated by board-certified surgeons, we offers expert insights into 
                            the latest trends, innovations, and advancements in cosmetic surgery, empowering 
                            users with accurate and up-to-date knowledge. Featuring real-life experiences, 
                            our  patient success stories, impact of cosmetic surgery on individuals' lives.
                        </p>
                        <a href="{{url('booking')}}">Read More<i class="fa-solid fa-chevron-right ms-2"></i></a>
                        <div class="bg-img">
                            <img src="{{URL::asset('/assets/img/bg/vector-bg-04.png')}}" alt="Img">
                        </div>
                    </div>
                    <div class="facts-content-all">
                        <ul>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-4.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>Consequences<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-5.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>Privacy policy<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-3.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>Surgery preparation<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-2.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>Age limit<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-1.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>After Surgery<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="{{URL::asset('/assets/img/icons/facts-5.svg')}}" alt="Facts">
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5>Consequences<i class="fa-solid fa-angle-right ms-2"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <p>
                                        Gain insights into realistic expectations by , which aims to provide a 
                                        balanced perspective on potential risks &  benefits to empower informed decision-making.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Facts Services -->

    <!-- Experts Team -->
    <section class="experts-section-sixteen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-sixteen section-header-sixteentwo text-center">
                        <p>Our Team</p>
                        <h2>Our experts team</h2>
                    </div>
                </div>
            </div>
            <div class="slider slider-sixteen aos" data-aos="zoom-in-up">
                <div class="owl-carousel custome_slides" id="slide-experts">
                    <div class="test_imgs">
                        <div class="main-reviewimages">
                           <img src="{{URL::asset('/assets/img/experts-2.jpg')}}" alt="Leslie Alexander" class="img-fluid">
                       </div>
                       <div class="testimonal-contents">
                        <h5>Eric Hansley</h5>
                        <span>MBBS, MS - Surgeon</span>
                       </div>
                    </div>
                    <div class="test_imgs">
                        <div class="main-reviewimages">
                           <img src="{{URL::asset('/assets/img/experts-3.jpg')}}" alt="Leslie Alexander" class="img-fluid">
                       </div>
                       <div class="testimonal-contents">
                        <h5>Leslie Alexander</h5>
                        <span>Aesthetic Surgery</span>
                       </div>
                    </div>
                    <div class="test_imgs">
                        <div class="main-reviewimages">
                           <img src="{{URL::asset('/assets/img/experts-2.jpg')}}" alt="James George" class="img-fluid">
                       </div>
                       <div class="testimonal-contents">
                        <h5>James George</h5>
                        <span>Aesthetic Surgery</span>
                       </div>
                    </div>
                    <div class="test_imgs">
                        <div class="main-reviewimages">
                           <img src="{{URL::asset('/assets/img/experts-3.jpg')}}" alt="Leslie Alexander" class="img-fluid">
                       </div>
                       <div class="testimonal-contents">
                        <h5>Eric Hansley</h5>
                        <span>MBBS, MS - Surgeon</span>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- /Experts Team -->

    <!-- Pricing Plan -->
    <div class="pricing-section-sixteen">
        <div class="bg-img">
            <img src="{{URL::asset('/assets/img/bg/vector-bg-06.png')}}" class="sec-vector" alt="Img">
            <img src="{{URL::asset('/assets/img/bg/vector-bg-06.png')}}" class="sec-vector-two" alt="Img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-sixteen text-center">
                        <p>Choose our best plan</p>
                        <h2>Pricing Plan</h2>
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
                                            <img src="{{URL::asset('/assets/img/icons/price-icon1.svg')}}" alt="icon">
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
                                    <a href="{{url('pricing')}}" class="btn">Choose Plan</a>
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
                                            <img src="{{URL::asset('/assets/img/icons/price-icon2.svg')}}" alt="icon">
                                        </span>
                                    </div>
                                    <div class="pricing-title">
                                        <h4>Premium</h4>
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
                                    <a href="{{url('pricing')}}" class="btn">Choose Plan</a>
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
                                            <img src="{{URL::asset('/assets/img/icons/price-icon3.svg')}}" alt="icon">
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
                                        <li>All Basic plan features</li>
                                        <li>All Premium plan features</li>
                                        <li>Personalized Health Insights</li>
                                        <li>Family Account Management</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{url('pricing')}}" class="btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pricing Plan -->

    <!-- Testimonal Section -->
    <div class="testimonal-section-sixteen">
        <div class="bg-img">
            <img src="{{URL::asset('/assets/img/bg/vector-bg-06.png')}}" class="sec-vector" alt="Img">
            <img src="{{URL::asset('/assets/img/bg/vector-bg-06.png')}}" class="sec-vector-two" alt="Img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header-sixteen text-center">
                        <p>what our Patients say?</p>
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="testi-img">
                        <img src="{{URL::asset('/assets/img/testimonial-2.jpg')}}" alt="Testimonial" class="img-fluid">
                        <span class="testi-icon"><i class="fa-solid fa-quote-left"></i></span>
                        <span class="rounded-img"><img src="{{URL::asset('/assets/img/bg/rounded-circle-01.png')}}" alt="Img"></span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="owl-carousel patient-review-slider">
                        <div class="testimonial-wrap">
                            <h4>Exceptional Care from Start to Finish</h4>
                            <p>
                                I recently had liposuction done at Surna, and the care I received was exceptional
                                from start to finish. The staff was friendly, and the surgeons were not only skilled 
                                but also compassionate. They addressed all my concerns, provided detailed pre and post-op 
                                instructions, and the results are truly 
                                remarkable. I highly recommend Surna for anyone considering cosmetic procedures.
                            </p>
                            <div class="testimonial-user">
                                <h6>Elizabeth Forsyth</h6>
                                <p>Las Vegas, USA</p>
                            </div>
                        </div>
                        <div class="testimonial-wrap">
                            <h4>Exceptional Care from Start to Finish</h4>
                            <p>
                                I recently had liposuction done at Surna, and the care I received was exceptional
                                from start to finish. The staff was friendly, and the surgeons were not only skilled 
                                but also compassionate. They addressed all my concerns, provided detailed pre and post-op 
                                instructions, and the results are truly 
                                remarkable. I highly recommend Surna for anyone considering cosmetic procedures.
                            </p>
                            <div class="testimonial-user">
                                <h6>Elizabeth Forsyth</h6>
                                <p>Las Vegas, USA</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonal Section -->
    
    <!-- Feedback -->
    <section class="feedback-section-sixteen">
        <div class="container">
            <div class="feedback-schedule-all">
                <span class="rounded-img"><img src="{{URL::asset('/assets/img/bg/rounded-circle-02.png')}}" alt="Img"></span>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="feedback-fifteen-content text-center">
                            <h3>Focus On Your Own Body Shape</h3>
                            <p>It's easy to list, simple to manage and, best of all, free to list!</p>
                            <div class="feedback-btns justify-content-center">
                                <a href="{{url('doctor/doctor-appointments')}}" class="btn btn-primary">Make An Appointment</a>
                                <a href="{{url('booking-2')}}" class="btn btn-primarytwo"><i class="feather-plus me-2"></i>Get Free Check-up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feedback -->


 @component('components.scrolltotop')
    @endcomponent
@endsection
