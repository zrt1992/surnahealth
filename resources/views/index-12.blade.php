<?php $page = 'index-12'; ?>
@extends('layout.mainlayout')
@section('content')
   <!-- Home Banner -->
   <section class="banner-sec-twelve">
    <div class="section-small-imgs">
        <img src="{{URL::asset('/assets/img/icons/section-small-icon-01.svg')}}" class="small-icon-one" alt="Img">
        <img src="{{URL::asset('/assets/img/icons/section-small-icon-02.svg')}}" class="small-icon-two" alt="Img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="banner-content-twelve">
                    <div class="banner-title-twelve aos" data-aos="fade-up" data-aos-delay="400">
                        <h1>Now Book Lab Tests <br> at Home</h1>
                        <p>Comprehensive Lab Testing for Informed Well-being</p>
                    </div>
                    <form action="{{url('search')}}">
                        <div class="input-box-twelve">
                            <div class="input-block">
                                <select class="select form-control">
                                    <option>Select Speciality</option>
                                    <option>Cardiology</option>
                                    <option>Neurology</option>
                                    <option>Urology</option>
                                </select>
                            </div>
                            <div class="input-block">
                                <select class="select form-control">
                                    <option>Choose City</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                </select>
                            </div>
                            <div class="input-block">
                                <div class="search-btn-twelve">
                                    <a href="{{url('search-2')}}">Search Now</a>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="banner-counter">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-twelve bg-purple-color" data-aos="fade-up" data-aos-delay="400">
                                    <span class="hexagon"></span>
                                    <h3><span  class="counter">985</span>+</h3>
                                    <h5>Collection points</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-twelve bg-violet-color" data-aos="fade-up" data-aos-delay="500">
                                    <span class="hexagon"></span>
                                    <h3><span  class="counter">1</span>M+</h3>
                                    <h5>Reports Delivered</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-twelve bg-blue-color" data-aos="fade-up" data-aos-delay="600">
                                    <span class="hexagon"></span>
                                    <h3><span  class="counter">150</span>+</h3>
                                    <h5>Expert Specialists</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all-lab" data-aos="fade-up">
                        <span><img src="{{URL::asset('/assets/img/icons/lab-view-icon.svg')}}" alt="Img"></span>
                        <h5>View all Offers on Lab tests !!!</h5>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-10">
                <div class="swiper swiper-slider-banner">
                    <div class="swiper-wrapper aos" data-aos="fade-up" data-aos-delay="400">

                        <!-- Swiper Slide -->
                        <div class="swiper-slide">
                            <div class="img-swiper">
                                <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/slider/swiper-slide-img-01.jpg')}}" class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="swiper-content-card">
                                <h4><a href="{{url('consultation')}}">Asthma Apply</a></h4>
                                <span class="badge">Includes 90 Parameters</span>
                                <div class="cost-pay">
                                    <h5>$350.25<span>$699.00</span></h5>
                                    <a href="{{url('booking-2')}}" class="slider-buy-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- /Swiper Slide -->

                        <!-- Swiper Slide -->
                        <div class="swiper-slide">
                            <div class="img-swiper">
                                <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/slider/swiper-slide-img-02.jpg')}}" class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="swiper-content-card">
                                <h4><a href="{{url('consultation')}}">Asthma Apply</a></h4>
                                <span class="badge">Includes 70 Parameters</span>
                                <div class="cost-pay">
                                    <h5>$250.25<span>$499.00</span></h5>
                                    <a href="{{url('booking-2')}}" class="slider-buy-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- /Swiper Slide -->

                        <!-- Swiper Slide -->
                        <div class="swiper-slide">
                            <div class="img-swiper">
                                <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/slider/swiper-slide-img-03.jpg')}}" class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="swiper-content-card">
                                <h4><a href="{{url('consultation')}}">Asthma Apply</a></h4>
                                <span class="badge">Includes 80 Parameters</span>
                                <div class="cost-pay">
                                    <h5>$150.25<span>$199.00</span></h5>
                                    <a href="{{url('booking-2')}}" class="slider-buy-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- /Swiper Slide -->

                    </div>
                    <div class="testimonial-bottom-nav">
                        <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i></div>
                        <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Home Banner -->

<!-- Popular Test Section -->
<section class="popular-test-section">
    <div class="section-small-imgs">
        <img src="{{URL::asset('/assets/img/bg/section-bg-01.jpg')}}" class="bg-img-one" alt="Img">
        <img src="{{URL::asset('/assets/img/bg/section-bg-02.png')}}" class="bg-img-two" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-twelve">
            <h2>Popular Tests</h2>
            <p>Discover Our Popular Lab Tests, Unlock Key Health Insights with Trusted Diagnostic Services.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="popular-test-slider owl-carousel">
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon"><img src="{{URL::asset('/assets/img/icons/test-icon-01.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Diabeties</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon liver"><img src="{{URL::asset('/assets/img/icons/test-icon-02.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Liver</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon kidney"><img src="{{URL::asset('/assets/img/icons/test-icon-03.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Kidney</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon fever"><img src="{{URL::asset('/assets/img/icons/test-icon-04.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Fever</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon"><img src="{{URL::asset('/assets/img/icons/test-icon-01.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Diabeties</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon liver"><img src="{{URL::asset('/assets/img/icons/test-icon-02.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Liver</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon kidney"><img src="{{URL::asset('/assets/img/icons/test-icon-03.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Kidney</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card" data-aos="fade-up">
                        <span class="hexagon fever"><img src="{{URL::asset('/assets/img/icons/test-icon-04.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Fever</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card">
                        <span class="hexagon"><img src="{{URL::asset('/assets/img/icons/test-icon-01.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Diabeties</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card">
                        <span class="hexagon liver"><img src="{{URL::asset('/assets/img/icons/test-icon-02.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Liver</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card">
                        <span class="hexagon kidney"><img src="{{URL::asset('/assets/img/icons/test-icon-03.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Kidney</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                    <div class="test-slider-card">
                        <span class="hexagon fever"><img src="{{URL::asset('/assets/img/icons/test-icon-04.svg')}}" alt="Img"></span>
                        <h4><a href="{{url('consultation')}}">Fever</a></h4>
                        <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                        <a href="{{url('consultation')}}" class="read-more-test">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="medical-emergency-booking">
            <div class="doctor-consulting-slider owl-carousel">
                <div class="medical-emergency-card">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="slider-img">
                                <img src="{{URL::asset('/assets/img/bg/slider-bg-img.png')}}" class="img-fluid" alt="Img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="slider-content aos" data-aos="fade-up" data-aos-delay="600">
                                <h3>Chest Pain?</h3>
                                <span>Check if you are risk at a Heart Attack</span>
                                <p>Get a test report in an Hour & care your heart at our
                                    Specialist Advice
                                </p>
                                <a href="{{url('booking-2')}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medical-emergency-card">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="slider-img">
                                <img src="{{URL::asset('/assets/img/bg/slider-bg-img.png')}}" class="img-fluid" alt="Img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="slider-content">
                                <h3>Chest Pain?</h3>
                                <span>Check if you are risk at a Heart Attack</span>
                                <p>Get a test report in an Hour & care your heart at our
                                    Specialist Advice</p>
                                    <a href="{{url('booking-2')}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="medical-descriptions">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="description-item">
                        <span><img src="{{URL::asset('/assets/img/icons/medical-icon-01.svg')}}" alt="Img"></span>
                        <h4><a href="javascript:void(0);">Health Packages</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="description-item">
                        <span><img src="{{URL::asset('/assets/img/icons/medical-icon-02.svg')}}" alt="Img"></span>
                        <h4><a href="javascript:void(0);">All Tests</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="description-item">
                        <span><img src="{{URL::asset('/assets/img/icons/medical-icon-03.svg')}}" alt="Img"></span>
                        <h4><a href="javascript:void(0);">Book a Call</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="900">
                    <div class="description-item">
                        <span><img src="{{URL::asset('/assets/img/icons/medical-icon-04.svg')}}" alt="Img"></span>
                        <h4><a href="javascript:void(0);">Upload Prescription</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /Popular Test Section -->

<!-- Lab Service Section -->
<section class="lab-service-section">
    <div class="sec-bg">
        <img src="{{URL::asset('/assets/img/icons/section-small-icon-02.svg')}}" class="small-icon-two" alt="Img">
    </div>
    <div class="container">
        <div class="lab-services">
            <div class="row">
                <div class="col-lg-6 d-flex">
                </div>
                <div class="col-lg-6 d-flex">
                    <div class="servive-provider-content">
                        <div class="lab-service-title" data-aos="fade-up" data-aos-delay="600">
                            <h2>Versatile Laboratory Service Provider</h2>
                            <h5>Your full service lab for clinical trials. Our mission is to ensure the generation of accurate and precise findings</h5>
                            <p>One of the most popular services Surna offers is diagnostic testing. People need to book pathological tests for many reasons. But before booking, they wonder if the diagnostic centre can be trusted to produce accurate results...</p>
                        </div>
                        <div class="lab-service-features">
                            <ul>
                                <li data-aos="fade-down" data-aos-delay="400">
                                    <span>
                                        <img src="{{URL::asset('/assets/img/icons/lab-service-icon-01.svg')}}" alt="Img">
                                    </span>
                                    <h6>The Surna - Easy Way To Book Lab Tests Online</h6>
                                </li>
                                <li data-aos="fade-down" data-aos-delay="500">
                                    <span>
                                        <img src="{{URL::asset('/assets/img/icons/lab-service-icon-02.svg')}}" alt="Img">
                                    </span>
                                    <h6>Lab Test Booking Made Simple</h6>
                                </li>
                                <li data-aos="fade-down" data-aos-delay="600">
                                    <span>
                                        <img src="{{URL::asset('/assets/img/icons/lab-service-icon-03.svg')}}" alt="Img">
                                    </span>
                                    <h6>World class Laboratory support</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="sec-btn">
                            <a href="{{url('voice-call')}}" class="btn btn-primary">Talk With Expert</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /Lab Service Section -->

<!-- Feature Packages Section -->
<section class="features-section-sixteen">
    <div class="container">
        <div class="section-head-twelve">
            <h2>Featured Packages</h2>
            <p> Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel feature-package-slider">
                    <div class="feature-package-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-package-type">
                            <h3>Women's Health Check-up</h3>
                            <div class="package-cost">
                                <h6>15 Test Included</h6>
                                <h5>$150.25 <span> $199.00</span></h5>
                            </div>
                            <a href="{{url('booking-2')}}" class="package-book-btn">Book Now</a>
                        </div>
                        <div class="package-img">
                            <img src="{{URL::asset('/assets/img/features/package-card-img-03.svg')}}" class="package-img-user" alt="Img">
                            <img src="{{URL::asset('/assets/img/bg/package-card-bg-01.png')}}" class="package-img-bg" alt="Img">
                        </div>
                    </div>
                    <div class="feature-package-card family-pack" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-package-type">
                            <h3>Family Package for 3 Members</h3>
                            <div class="package-cost">
                                <h6>15 Test Included - 55% off</h6>
                                <h5>$870.25 <span> $999.00</span></h5>
                            </div>
                            <a href="{{url('booking-2')}}" class="package-book-btn">Book Now</a>
                        </div>
                        <div class="package-img">
                            <img src="{{URL::asset('/assets/img/features/package-card-img-02.svg')}}" class="package-img-user" alt="Img">
                            <img src="{{URL::asset('/assets/img/bg/package-card-bg-03.png')}}" class="package-img-bg" alt="Img">
                        </div>
                    </div>
                    <div class="feature-package-card mens-health" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature-package-type">
                            <h3>Men's Health Check-up</h3>
                            <div class="package-cost">
                                <h6>15 Test Included - 55% off</h6>
                                <h5>$130.25 <span> $199.00</span></h5>
                            </div>
                            <a href="{{url('booking-2')}}" class="package-book-btn">Book Now</a>
                        </div>
                        <div class="package-img">
                            <img src="{{URL::asset('/assets/img/features/package-card-img-01.svg')}}" class="package-img-user" alt="Img">
                            <img src="{{URL::asset('/assets/img/bg/package-card-bg-02.png')}}" class="package-img-bg" alt="Img">
                        </div>
                    </div>
                    <div class="feature-package-card family-pack" data-aos="fade-up" data-aos-delay="800">
                        <div class="feature-package-type">
                            <h3>Family Package for 3 Members</h3>
                            <div class="package-cost">
                                <h6>15 Test Included - 55% off</h6>
                                <h5>$870.25 <span> $999.00</span></h5>
                            </div>
                            <a href="{{url('booking-2')}}" class="package-book-btn">Book Now</a>
                        </div>
                        <div class="package-img">
                            <img src="{{URL::asset('/assets/img/features/package-card-img-02.svg')}}" class="package-img-user" alt="Img">
                            <img src="{{URL::asset('/assets/img/bg/package-card-bg-03.png')}}" class="package-img-bg" alt="Img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Feature Packages Section -->

<!-- Best Packages Section -->
<section class="best-packages-section">
    <div class="section-bg">
        <img src="{{URL::asset('/assets/img/bg/section-bg-03.png')}}" class="best-pack-bg-one" alt="Img">
        <img src="{{URL::asset('/assets/img/bg/section-bg-04.png')}}" class="best-pack-bg-two" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-twelve">
            <h2>Best Packages</h2>
            <p> Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
        </div>
        <ul class="nav nav-pills inner-tab" id="pills-tab2" role="tablist" data-aos="fade-up" data-aos-delay="500">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false">All Packages</button>
                </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-family-tab" data-bs-toggle="pill" data-bs-target="#pills-family" type="button" role="tab" aria-controls="pills-family" aria-selected="true">Family Care</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-adult-tab" data-bs-toggle="pill" data-bs-target="#pills-adult" type="button" role="tab" aria-controls="pills-adult" aria-selected="false">Adult Care</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-accident-tab" data-bs-toggle="pill" data-bs-target="#pills-accident" type="button" role="tab" aria-controls="pills-accident" aria-selected="false">Accident Care</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-fitness-tab" data-bs-toggle="pill" data-bs-target="#pills-fitness" type="button" role="tab" aria-controls="pills-fitness" aria-selected="false">Fitness Care</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-explore-tab" data-bs-toggle="pill" data-bs-target="#pills-explore" type="button" role="tab" aria-controls="pills-explore" aria-selected="false">Explore More</button>
            </li>
        </ul>
        <div class="tab-content pt-0 dashboard-tab">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-adult" role="tabpanel" aria-labelledby="pills-adult-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-accident" role="tabpanel" aria-labelledby="pills-accident-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-fitness" role="tabpanel" aria-labelledby="pills-fitness-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-explore" role="tabpanel" aria-labelledby="pills-explore-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="best-package-slider owl-carousel">
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/sticker-icon.svg')}}" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-01.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Full Body Checkup</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="package-card-top">
                                    <div class="card-img-right">
                                        <img src="{{URL::asset('/assets/img/icons/medal-icon.svg')}}" class="medal-icon" alt="Img">
                                    </div>
                                    <div class="package-icon">
                                        <img src="{{URL::asset('/assets/img/icons/package-icon-02.svg')}}" alt="Img">
                                    </div>
                                    <h3><a href="{{url('consultation')}}">Asthma Apply</a></h3>
                                    <p>A diabetic foot exam can help find problems that can lead to serious infection and ...</p>
                                    <ul class="feature-badge">
                                        <li>Includes 90 Parameters</li>
                                        <li>Includes 20 tests </li>
                                    </ul>
                                    <div class="package-footer d-flex justify-content-between align-items-center">
                                        <div class="package-cost">
                                            <h5>$150.25 <span> $199.00</span></h5>
                                        </div>
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-differ overlay-card" data-aos="fade-up" data-aos-delay="700">
                                    <h3><a href="{{url('consultation')}}">Urine Analysis</a></h3>
                                    <p>Allergy testing can be useful at different stages of life, like discovering that a family member...</p>
                                    <ul class="features-list">
                                        <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                        <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                    </ul>
                                    <div class="package-footer">
                                        <div class="package-btn">
                                            <a href="{{url('booking-2')}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-work">
            <div class="section-head-twelve">
                <h2>How It Works</h2>
                <p> Uncover the Seamless Process for Easy Navigation and Health Solutions.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="work-box">
                        <div class="work-icon">
                            <img src="{{URL::asset('/assets/img/icons/work-icon-07.svg')}}" alt="Img">
                        </div>
                        <h4>1. Request your test kit</h4>
                            <p>Take the first step to better health – request your test kit. Simple, convenient, and tailored to empower your wellness journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
                    <div class="work-box bg-green">
                        <div class="work-icon">
                            <img src="{{URL::asset('/assets/img/icons/work-icon-06.svg')}}" alt="Img">
                        </div>
                        <h4>2. Collect Your Sample</h4>
                            <p> Collect your sample at your convenience with our easy-to-follow instructions. Streamlined and hassle-free, empowering your health from the comfort of home</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="800">
                    <div class="work-box bg-pink">
                        <div class="work-icon">
                            <img src="{{URL::asset('/assets/img/icons/work-icon-05.svg')}}" alt="Img">
                        </div>
                        <h4>3. Receive results in days</h4>
                            <p>Expect your test results within days, ensuring a prompt and efficient turnaround. Stay informed and take control of your health journey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Best Packages Section -->

<!-- Booking Lab Test -->
<section class="booking-lab-test-sec">
    <div class="section-bg">
        <img src="{{URL::asset('/assets/img/icons/book-lab-bg-01.svg')}}" class="best-pack-bg-one" alt="Img">
        <img src="{{URL::asset('/assets/img/icons/book-lab-bg-02.svg')}}" class="best-pack-bg-two" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-twelve">
            <h2>Recent Booked Lab test</h2>
            <p> Uncover the Seamless Process for Easy Navigation and Health Solutions.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="booking-lab-test-slider owl-carousel">
                    <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="500">
                        <div class="booking-lab-img">
                            <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/blog/book-lab-01.jpg')}}" class="img-fluid" alt="Img"></a>
                        </div>
                        <div class="ribbon-right"><span class="lab-text-ribbon">25% Offer</span></div>
                        <div class="booking-lab-content">
                            <ul class="feature-badge">
                                <li>Includes 90 Parameters</li>
                                <li>Includes 20 tests </li>
                            </ul>
                            <h4><a href="{{url('consultation')}}">Pregnancy Test</a></h4>
                            <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1499.25 <span> 1999.00</span></h5>
                                </div>
                                <div class="package-btn">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="600">
                        <div class="booking-lab-img">
                            <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/blog/book-lab-02.jpg')}}" class="img-fluid" alt="Img"></a>
                        </div>
                        <div class="booking-lab-content">
                            <ul class="feature-badge">
                                <li>Includes 90 Parameters</li>
                                <li>Includes 20 tests </li>
                            </ul>
                            <h4><a href="{{url('consultation')}}">Thyroid</a></h4>
                            <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1299.25 <span> 1499.00</span></h5>
                                </div>
                                <div class="package-btn">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="700">
                        <div class="booking-lab-img">
                            <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/blog/book-lab-03.jpg')}}" class="img-fluid" alt="Img"></a>
                        </div>
                        <div class="booking-lab-content">
                            <ul class="feature-badge">
                                <li>Includes 90 Parameters</li>
                                <li>Includes 20 tests </li>
                            </ul>
                            <h4><a href="{{url('consultation')}}">Diabetes Test</a></h4>
                            <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1199.25 <span> 1299.00</span></h5>
                                </div>
                                <div class="package-btn">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="800">
                        <div class="booking-lab-img">
                            <a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/blog/book-lab-02.jpg')}}" class="img-fluid" alt="Img"></a>
                        </div>
                        <div class="booking-lab-content">
                            <ul class="feature-badge">
                                <li>Includes 90 Parameters</li>
                                <li>Includes 20 tests </li>
                            </ul>
                            <h4><a href="{{url('consultation')}}">Thyroid</a></h4>
                            <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1299.25 <span> 1499.00</span></h5>
                                </div>
                                <div class="package-btn">
                                    <a href="{{url('booking-2')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Booking Lab Test -->

<!-- Popular Choice -->
<section class="populr-choice-sec">
    <div class="container">
        <div class="section-head-twelve" data-aos="fade-up" data-aos-delay="500">
            <h2>Popular Choices</h2>
            <p>Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
        </div>
        <div class="choice-slider-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-choice-slider owl-carousel">
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="500">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Advanced Renal Package</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 268 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 08 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1500.25 <span> 1789.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>60% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="600">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Vitamin D & B12 Combo</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 785 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 15 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>789.25 <span> 1600.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>30% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Cancer Screening - Male</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 658 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 20 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>5879.25 <span> 9990.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>20% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="800">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Winter Care Health Ch...</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 268 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 10 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1499.25 <span> 1999.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>40% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="900">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Advanced Renal Package</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 268 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 08 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>1500.25 <span> 1789.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>60% OFF</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="1000">
                            <div class="choice-head">
                                <h4><a href="javascript:void(0);">Vitamin D & B12 Combo</a></h4>
                                <h6><span><img src="{{URL::asset('/assets/img/icons/gem.svg')}}" alt="Img"></span>Booked 785 times</h6>
                            </div>
                            <ul class="feature-badge">
                                <li>Includes 15 tests </li>
                            </ul>
                            <div class="package-footer d-flex justify-content-between align-items-center">
                                <div class="package-cost">
                                    <h5>789.25 <span> 1600.00</span></h5>
                                </div>
                                <div class="offer-price">
                                    <span>30% OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-lab-phno">
                <span>Want to Book a Lab Visit, <a href="#"> Call – +1 234 567 90</a></span>
            </div>
        </div>

    </div>
</section>
<!-- /Popular Choice -->

<!-- Faq Sec -->
<section class="faq-sec-twelve">
    <div class="section-bg">
        <img src="{{URL::asset('/assets/img/icons/faq-sec-bg-icon.svg')}}" class="faq-bg-one" alt="Img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="faq-sec-col w-100">
                    <div class="section-head-twelve">
                        <h2>Frequently Asked Qusetions </h2>
                        <p>Know the Questions from our Customers</p>
                    </div>
                    <div class="faq-main-cards" id="accordionExample">
                        <div class="faq-card aos" data-aos="fade-up">
                            <div class="faq-title">
                                <a data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">
                                    <span>What is an otolaryngologist?</span>
                                    <div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <div class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">
                                    <span>What is an otolaryngologist?</span>
                                    <div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <div class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">
                                    <span>What is an otolaryngologist?</span>
                                    <div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="faq-card aos" data-aos="fade-up">
                            <div class="faq-title">
                                <a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">
                                    <span>What is an otolaryngologist?</span>
                                    <div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
                                        <p>An otolaryngologist is a doctor who specializes in the diagnosis and treatment of ear, nose and throat diseases as well as related structures of the head and neck. Otolaryngologists are also referred to as ENT doctors or physicians. For more information</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 faq-absolute-col d-felx">
                <div class="faq-sec-bg-img w-100">
                    <img src="{{URL::asset('/assets/img/faq-sec-img.jpg')}}" class="img-fluid" alt="Img">
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- /Faq Sec-->

<!-- Pricing Sec -->
<section class="pricing-sec-twelve">
    <div class="container">
        <div class="section-head-twelve">
            <div class="title-head-twelve">
                <h2>Our Pricing </h2>
                <p> Choose the package that best suit you</p>
            </div>
            <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="true">yearly</button>
                </li>
            </ul>
        </div>
        <div class="tab-content pt-0 dashboard-tab">
            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 aos"  data-aos="flip-left" data-aos-delay="400">
                        <div class="pricing-card-twelve">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-06.svg')}}" alt="Img"></span>
                                <h5>Free</h5>
                            </div>
                            <div class="cost-price">
                                <span>$0</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>500 Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>50 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>20 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 aos"  data-aos="flip-left" data-aos-delay="600">
                        <div class="pricing-card-twelve active">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-05.svg')}}" alt="Img"></span>
                                <h5>Essential</h5>
                                <div class="sticker-ribbon"><img src="{{URL::asset('/assets/img/icons/price-sticker-ribbon.svg')}}" alt="Img"></div>
                            </div>
                            <div class="cost-price">
                                <span>$50</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>500 Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>80 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>25 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 aos"  data-aos="flip-left" data-aos-delay="800">
                        <div class="pricing-card-twelve">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-04.svg')}}" alt="Img"></span>
                                <h5>Team</h5>
                            </div>
                            <div class="cost-price">
                                <span>$200</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>Unlimited Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>100 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>30 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card-twelve">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-06.svg')}}" alt="Img"></span>
                                <h5>Free</h5>
                            </div>
                            <div class="cost-price">
                                <span>$0</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>500 Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>50 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>20 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card-twelve active">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-05.svg')}}" alt="Img"></span>
                                <h5>Essential</h5>
                                <div class="sticker-ribbon"><img src="{{URL::asset('/assets/img/icons/price-sticker-ribbon.svg')}}" alt="Img"></div>
                            </div>
                            <div class="cost-price">
                                <span>$50</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>500 Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>80 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>25 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card-twelve">
                            <div class="icon-price">
                                <span><img src="{{URL::asset('/assets/img/icons/price-icon-04.svg')}}" alt="Img"></span>
                                <h5>Team</h5>
                            </div>
                            <div class="cost-price">
                                <span>$200</span>
                                <h6>per month</h6>
                            </div>
                            <ul class="price-feature-first">
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>Unlimited Conversations p/m</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>100 Websites</li>
                                <li><span><img src="{{URL::asset('/assets/img/icons/heart-pulse.svg')}}" alt="Img"></span>30 GB Data Storage</li>
                            </ul>
                            <ul class="price-features-second">
                                <li><span><i class="feather-plus"></i></span>Everything Off </li>
                                <li><span><i class="feather-plus"></i></span>Chat Widget</li>
                                <li><span><i class="feather-plus"></i></span>Real Time Support</li>
                            </ul>
                            <div class="booking-button text-center">
                                <a href="{{url('booking')}}" class="btn btn-primary w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="various-logo-sec">
            <div class="row">
                <div class="col-md-12">
                    <div class="various-logo-slider owl-carousel">
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo.png')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo.png')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-02.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-03.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-04.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-05.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-06.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-05.svg')}}" alt="Img">
                        </div>
                        <div class="logo-img-slide">
                            <img src="{{URL::asset('/assets/img/icons/various-logo-03.svg')}}" alt="Img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Sec -->

<!-- Patient About us -->
<section class="about-us-section-fifteen client-review-twelve">
    <div class="sec-bg">
        <img src="{{URL::asset('/assets/img/bg/blue-vector-bg-01.png')}}" class="blue-shadow-one" alt="Img">
        <img src="{{URL::asset('/assets/img/bg/blue-vector-bg-02.png')}}" class="blue-shadow-two" alt="Img">
    </div>
    <div class="container">
        <div class="section-head-twelve">
            <h2>Popular Choices </h2>
            <p> Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="aboutus-img-main">
                    <img src="{{URL::asset('/assets/img/aboutus-fift-1.jpg')}}" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <div class="slider vertical-slider">
                    <div class="aboutus-fifteen-main">
                        <div class="aboutus-profile-left">
                            <div class="aboutus-image">
                                <img src="{{URL::asset('/assets/img/clients/client-01.jpg')}}" alt="Client" class="img-fluid">
                            </div>
                            <div class="aboutus-contents">
                                <h6>Madeleine Jennifer</h6>
                                <span>Chennai, Tamilnadu</span>
                            </div>
                        </div>
                        <p> The team's commitment to finding the best solutions has had a positive impact on my life</p>
                    </div>
                    <div class="aboutus-fifteen-main">
                        <div class="aboutus-profile-left">
                            <div class="aboutus-image">
                                <img src="{{URL::asset('/assets/img/clients/client-01.jpg')}}" alt="Client" class="img-fluid">
                            </div>
                            <div class="aboutus-contents">
                                <h6>Madeleine Jennifer</h6>
                                <span>Chennai, Tamilnadu</span>
                            </div>
                        </div>
                        <p>After struggling with chronic sinus problems, I found relief at Surna.
                            The ENT specialists here are not only highly skilled but also genuinely caring.
                            They took the time to understand my concerns, provided a detailed diagnosis,
                            and guided me through a treatment plan that has greatly improved my quality of life.</p>
                    </div>
                    <div class="aboutus-fifteen-main">
                        <div class="aboutus-profile-left">
                            <div class="aboutus-image">
                                <img src="{{URL::asset('/assets/img/clients/client-02.jpg')}}" alt="Client" class="img-fluid">
                            </div>
                            <div class="aboutus-contents">
                                <h6>Madeleine Jennifer</h6>
                                <span>Chennai, Tamilnadu</span>
                            </div>
                        </div>
                        <p>The staff was friendly and attentive, and Doctor performed the procedure with precision and care.</p>
                    </div>
                    <div class="aboutus-fifteen-main">
                        <div class="aboutus-profile-left">
                            <div class="aboutus-image">
                                <img src="{{URL::asset('/assets/img/clients/client-03.jpg')}}" alt="Client" class="img-fluid">
                            </div>
                            <div class="aboutus-contents">
                                <h6>Madeleine Jennifer</h6>
                                <span>Chennai, Tamilnadu</span>
                            </div>
                        </div>
                        <p>After struggling with chronic sinus problems, I found relief at Surna.
                            The ENT specialists here are not only highly skilled but also genuinely caring.
                            They took the time to understand my concerns, provided a detailed diagnosis,
                            and guided me through a treatment plan that has greatly improved my quality of life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Patient About us -->

<!-- App Section -->
<section class="app-section app-sec-twelve">
    <div class="container">
        <div class="app-twelve">
            <div class="app-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
                        <div class="mobile-img">
                            <img src="{{URL::asset('/assets/img/mobile-img.png')}}" class="img-fluid" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="app-content">
                            <div class="app-header aos" data-aos="fade-up">
                                <h5>Working for Your Better Health.</h5>
                                <h2>Download the Surna App today!</h2>
                            </div>
                            <div class="app-scan aos" data-aos="fade-up">
                                <p>Scan the QR code to get the app now</p>
                                <img src="{{URL::asset('/assets/img/scan-img.png')}}" alt="scan-image">
                            </div>
                            <div class="google-imgs aos" data-aos="fade-up">
                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/google-play.png')}}" alt="img"></a>
                                <a href="javascript:void(0);"><img src="{{URL::asset('/assets/img/app-store.png')}}" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /App Section -->

    @component('components.scrolltotop')
    @endcomponent
@endsection
