<?php $page = 'index-7'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Home Banner -->
<section class="banner-section-fourteen banner-section-twelve">
    <div class="banner-section-twelve-bg">
        <img src="{{URL::asset('/assets/img/bg/home-12-banner-bg-1.png')}}" alt="design-image">
        <img src="{{URL::asset('/assets/img/bg/home-12-banner-bg-2.png')}}" alt="design-image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content banner-content-fourteen aos" data-aos="fade-up">
                    <h1>We take care of Your Pets</h1>
                    <p>Ensuring the Health & Happiness of your family member throughCompassionate and advanced Veterinary Care</p>
                    <div class="banner-btns-fourteen ">
                        <a href="{{url('booking')}}" class="btn btn-primary">Start a Consult</a>
                        <a href="{{url('booking')}}" class="btn btn-primary ">Schedule a Call</a>
                    </div>
                </div>
                <div class="search-box-fourteen aos" data-aos="fade-up">
                    <form action="{{url('booking-2')}}" class="form-block d-flex">
                        <div class="search-input">
                            <div class="forms-block">
                                <label class="mb-0">Date</label>
                                <input type="text" class="form-control datetimepicker" placeholder="Thu, Mar 24, 2023">
                            </div>
                        </div>
                        <div class="search-input">											
                            <div class="forms-block mb-0">
                                <label class="location-icon">Location</label>
                                <input type="text" class="form-control" placeholder="San Diego Branch">
                            </div>
                        </div>
                        <div class="search-btn">
                            <button class="btn btn-primary" type="submit">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img banner-img-twelve aos" data-aos="fade-up">
                    <img src="{{URL::asset('/assets/img/bg/home-12-banner-1.png')}}" class="img-fluid" alt="dog-image">
                    <img src="{{URL::asset('/assets/img/bg/home-12-banner-2.png')}}" class="img-fluid" alt="cat-image">
                    <div class="banner-banner-img-twelve-bg">
                        <img src="{{URL::asset('/assets/img/bg/dot-1.png')}}" alt="dot-icon">
                        <img src="{{URL::asset('/assets/img/bg/dot-2.png')}}" alt="dot-icon">
                        <img src="{{URL::asset('/assets/img/bg/ring-1.png')}}" alt="ring-icon">
                        <img src="{{URL::asset('/assets/img/bg/ring-2.png')}}" alt="ring-icon">
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <div class="badge-info-bottom">
                    <span><img src="{{URL::asset('/assets/img/icons/animal-feet-icon.svg')}}" alt="Img"></span>
                    <h6>First Annual Checkup Free</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Home Banner -->

<!-- services Section -->
<section class="services-section-fourteen">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/veterinary-pg-sec-icon-3.png')}}" alt="paw-image" >
        <img src="{{URL::asset('/assets/img/bg/veterinary-pg-sec-icon-2.png')}}" alt="paw-image" >
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 aos" data-aos="fade-up">
                <div class="section-header-fourteen service-inner-fourteen">
                    <div class="service-inner-fourteen">
                    </div>
                    <h2>What can We do </h2>
                    <p>Veterinary care encompasses a wide range of services aimed at promoting the health and well-being of animals.</p>
                </div>
                
            </div>
            
        </div>
        <div class="row row-gap justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-12 aos" data-aos="fade-up">
                <div class="our-services-list w-100">
                    <div class="service-icon">
                        <img src="{{URL::asset('/assets/img/icons/injection.svg')}}" alt="injection-icon">
                    </div>
                    <h4>Vaccination</h4>
                    <p>Administration of vaccines to protect animals against common infectious diseases.</p>
                    <a href="#" class="more-btn overlay-btns d-inline-flex align-items-center">Learn More<i class="fa-solid fa-circle-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 aos" data-aos="fade-up">
                <div class="our-services-list w-100">
                    <div class="service-icon">
                        <img src="{{URL::asset('/assets/img/icons/bottel.svg')}}" alt="bottel-icon">
                    </div>
                    <h4>Parasite Control</h4>
                    <p>Prescription and administration of parasite prevention products to protect animals from fleas.</p>
                    <a href="#" class="more-btn overlay-btns d-inline-flex align-items-center">Learn More<i class="fa-solid fa-circle-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 aos" data-aos="fade-up">
                <div class="our-services-list w-100">
                    <div class="service-icon">
                        <img src="{{URL::asset('/assets/img/icons/bath-tub.svg')}}" alt="pet-grooming-icon">
                    </div>
                    <h4>Pet Grooming</h4>
                    <p>Dental examinations to assess oral health, teeth cleaning, and treatment of dental problems.</p>
                    <a href="#" class="more-btn overlay-btns d-inline-flex align-items-center">Learn More<i class="fa-solid fa-circle-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 aos" data-aos="fade-up">
                <div class="our-services-list w-100">
                    <div class="service-icon">
                        <img src="{{URL::asset('/assets/img/icons/pet-doctor.svg')}}" alt="stethoscope-icon">
                    </div>
                    <h4>Diagnostic Testing</h4>
                    <p>Laboratory tests including blood tests, urinalysis, fecal analysis, and imaging (X-rays, ultrasound).</p>
                    <a href="#" class="more-btn overlay-btns d-inline-flex align-items-center">Learn More<i class="fa-solid fa-circle-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee-title">
        <h3>We are Experts in Taking Care of your Pet for over 30 years and still going on...</h3>
    </div>
    <div class="container">
        <div class="best-quality-sec">
            <div class="row">
                <div class="col-lg-5">
                    <div class="img-col">
                        <img src="{{URL::asset('/assets/img/bg/best-quality-sec-img.png')}}" class="img-fluid" alt="Img">
                    </div>
                </div>
                <div class="col-lg-7 aos" data-aos="fade-up">
                    <div class="quality-service-info">
                        <div class="section-header-fourteen service-inner-fourteen">
                            <h2>Our mission is to provide the best quality services to your Pets </h2>
                            <p>Treating animals and we are always excited to add to our ever-expanding family. We thank you for consider us and we look forward to hearing from you soon.</p>
                        </div>
                        <ul class="pets-service-list">
                            <li>
                                <h3 class="text-blue"><span class="counter animated fadeInDownBig">3564</span>+</h3>
                                <p>The number of pets successfully treated in our vet clinic</p>
                            </li>
                            <li>
                                <h3 class="text-yellow"><span class="counter animated fadeInDownBig">1654</span>+</h3>
                                <p>Happy global customers who trusted us with ease</p>
                            </li>
                        </ul>
                        <a href="{{url('search-2')}}" class="learn-more-btn btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /services Section -->

<!-- Finent-Veterinary -->
<section class="finent-veterinary-sec">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/small-paw-2.png')}}" alt="paw-image">
        <img src="{{URL::asset('/assets/img/bg/care-sec-bg-1.png')}}" alt="paw-image">
        <img src="{{URL::asset('/assets/img/bg/small-paw-2.png')}}" alt="paw-image">
    </div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="veterinary-care-info">
                    <div class="section-header-fourteen service-inner-fourteen" data-aos="fade-up">
                        <h2>The Finest Veterinary Care</h2>
                        <p>Veterinary care encompasses a wide range of services aimed at promoting the health and well-being of animals.</p>
                    </div>
                    <ul class="care-list aos" data-aos="fade-up">
                        <li>
                            <span>1</span>
                            <div class="care-list-info">
                                <h5>Experienced & Trained Staff</h5>
                                <p>Ongoing training, professional development, and a commitment to excellence are key components of a successful veterinary practice.</p>
                            </div>
                        </li>
                        <li>
                            <span class="active">2</span>
                            <div class="care-list-info">
                                <h5>Competent Medical Pet Care</h5>
                                <p>Ongoing training, professional development, and a commitment to excellence are key components of a successful veterinary practice.</p>
                            </div>
                        </li>
                        <li>
                            <span>3</span>
                            <div class="care-list-info">
                                <h5>Thoughtful Guidance & Advice</h5>
                                <p>Ongoing training, professional development, and a commitment to excellence are key components of a successful veterinary practice.</p>
                            </div>
                        </li>
                        <li>
                            <span>4</span>
                            <div class="care-list-info">
                                <h5>On-Site Pharmacy And Shop</h5>
                                <p>Ongoing training, professional development, and a commitment to excellence are key components of a successful veterinary practice.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-col-img">
                    <img src="{{URL::asset('/assets/img/bg/dog-img.png')}}" class="img-fluid" alt="Img">
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- /Finent-Veterinary -->

<!-- Our Doctors -->
<div class="blog-section-fourteen our-doctor-twelve">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/expert-sec-bg-01.png')}}" alt="paw-image" >
        <img src="{{URL::asset('/assets/img/bg/expert-sec-bg-02.png')}}" alt="paw-image" >
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header-fourteen service-inner-fourteen">
                    <h2>Meet Our Experts</h2>
                    <p>We have over 30 years of experience treating animals and we are always excited to add to our ever-expanding family.</p>
                </div>
            </div>	
            <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('doctor-profile')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/doctors/veterinary-doctor-07.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="doc-info">
                                <h4 class="blog-inner-right-fourt-care">
                                    <a href="{{url('doctor-profile')}}" >Dr. Keith Warner</a>
                                    <span>Cheif Surgeon</span>
                                </h4>
                                <div class="card-cal-icon">
                                    <a href="{{url('booking-2')}}"><i class="fa-solid fa-calendar-days"></i></a>
                                </div>
                            </div>									
                        </div>
                    </div>
                </div>																					
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('doctor-profile')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/doctors/veterinary-doctor-08.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="doc-info">
                                <h4 class="blog-inner-right-fourt-care">
                                    <a href="{{url('doctor-profile')}}" >Dr. Karl Woods</a>
                                    <span>Vacinator</span>
                                </h4>
                                <div class="card-cal-icon">
                                    <a href="{{url('booking-2')}}"><i class="fa-solid fa-calendar-days"></i></a>
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('doctor-profile')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/doctors/veterinary-doctor-05.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="doc-info">
                                <h4 class="blog-inner-right-fourt-care">
                                    <a href="{{url('doctor-profile')}}" >Dr. Worthington</a>
                                    <span>Grooming Specialist</span>
                                </h4>
                                <div class="card-cal-icon">
                                    <a href="{{url('booking-2')}}"><i class="fa-solid fa-calendar-days"></i></a>
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('doctor-profile')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/doctors/veterinary-doctor-06.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="doc-info">
                                <h4 class="blog-inner-right-fourt-care">
                                    <a href="{{url('doctor-profile')}}" >Dr. Brandy Dixon</a>
                                    <span>Vacinator</span>
                                </h4>
                                <div class="card-cal-icon">
                                    <a href="{{url('booking-2')}}"><i class="fa-solid fa-calendar-days"></i></a>
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
            </div>						
        </div>
        
        <div class="blog-btn-sec text-center aos aos-init aos-animate" data-aos="fade-up">
            <a href="{{url('search')}}" class="btn btn-primary btn-view">View all Doctors</a>
        </div>
    </div>
</div>
<!-- /Our Doctors -->

<!-- Pricing -->
<section class="home-twelve-pricing">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/price-sec-bg-01.png')}}" alt="paw-image">
        <img src="{{URL::asset('/assets/img/bg/price-sec-paw-01.png')}}" alt="paw-image">
        <img src="{{URL::asset('/assets/img/bg/price-sec-paw-02.png')}}" alt="paw-image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 aos" data-aos="fade-up">
                <div class="section-header-fourteen service-inner-fourteen">
                    <h2>Pricing Packages</h2>
                    <p>Veterinary care encompasses a wide range of services aimed at promoting the health and well-being of animals.</p>
                </div>
            </div>
        </div>
        <div class="pricing-tab-panel text-center">
            <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</button>
                </li>	
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false" tabindex="-1">yearly</button>
                </li>
            </ul>
            <div class="tab-content pt-0">
                <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                    <div class="row row-gap justify-content-center align-items-end">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve">
                                <div class="price-content">
                                    <div class="card-title">
                                        <h3>Basic</h3>
                                        <span>The most basic plan</span>
                                    </div>
                                    <div class="price">
                                        <h2>$19</h2>
                                        <span>Monthly</span>
                                        <p>This Plan excludes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>15 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>6 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve active">
                                <div class="price-content">
                                    <div class="popular-head">
                                        <span class="d-flex align-items-center"><i class="fa-solid fa-dog me-2"></i>Most Popular</span>
                                    </div>
                                    <div class="card-title">
                                        <h3>Premium</h3>
                                        <span>Exclusive For pet owners</span>
                                    </div>
                                    <div class="price">
                                        <h2>$29</h2>
                                        <span>Monthly</span>
                                        <p>This plan includes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>5 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>2 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>3 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>5 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve">
                                <div class="price-content">
                                    <div class="card-title">
                                        <h3>Exclusive</h3>
                                        <span>The most profitable plan</span>
                                    </div>
                                    <div class="price">
                                        <h2>$59</h2>
                                        <span>Monthly</span>
                                        <p>This plan includes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>15 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>6 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                    <div class="row row-gap justify-content-center align-items-end">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve">
                                <div class="price-content">
                                    <div class="card-title">
                                        <h3>Basic</h3>
                                        <span>The most basic plan</span>
                                    </div>
                                    <div class="price">
                                        <h2>$19</h2>
                                        <span>Yearly</span>
                                        <p>This Plan excludes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>15 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>6 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve active">
                                <div class="price-content">
                                    <div class="popular-head">
                                        <span class="d-flex align-items-center"><i class="fa-solid fa-dog me-2"></i>Most Popular</span>
                                    </div>
                                    <div class="card-title">
                                        <h3>Premium</h3>
                                        <span>Exclusive For pet owners</span>
                                    </div>
                                    <div class="price">
                                        <h2>$29</h2>
                                        <span>Yearly</span>
                                        <p>This plan includes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>5 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>2 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>3 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>5 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="price-card-twelve">
                                <div class="price-content">
                                    <div class="card-title">
                                        <h3>Exclusive</h3>
                                        <span>The most profitable plan</span>
                                    </div>
                                    <div class="price">
                                        <h2>$59</h2>
                                        <span>Yearly</span>
                                        <p>This plan includes online consultation options for the user</p>
                                    </div>
                                    <div class="pack-details">
                                        <ul>
                                            <li>
                                                <i class="feather-check-circle"></i>30 day Services
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>15 Pet Shower
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>6 Hair fall Pack
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Vaccination
                                            </li>
                                            <li>
                                                <i class="feather-check-circle"></i>10 Basic Checkup
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-btn w-100">
                                        <a href="{{url('pricing')}}" class="btn w-100">Join the Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- /Pricing -->

<!-- Feedback -->
<section class="clients-section-fourteen">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/small-paw-2.png')}}" alt="paw-image" >
        <img src="{{URL::asset('/assets/img/bg/small-paw-2.png')}}" alt="paw-image" >
        <img src="{{URL::asset('/assets/img/bg/small-paw-3.png')}}" alt="paw-image" >
        <img src="{{URL::asset('/assets/img/bg/care-sec-bg-1.png')}}" alt="paw-image">
    </div>
    <div class="container">
        <div class="badge-title">
            <span class="badge badge-bg-warning"><i class="fa-solid fa-circle me-2"></i>Testimonials<i class="fa-solid fa-circle ms-2"></i></span>
        </div>
        <div class="testi-title-head">
            <h2>Hear Reviews From Our Amazing Clients</h2>
            <p>Veterinary care encompasses a wide range of services aimed at promoting the health and well-being of animals.</p>
            <div class="rate-star">
                <h5>Average Ratings</h5>
                <div>
                    <span>4.9</span>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="review-thumb">
                    <img src="{{URL::asset('/assets/img/icons/review-thumb.svg')}}" alt="Img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel feedback-review-slider owl-theme aos" data-aos="fade-up">
                    <div class="card feedback-card">
                        <div class="d-flex feedback-card-img-left">
                            <div class="client-inner-main">
                                <img src="{{URL::asset('/assets/img/reviews/review-img-02.png')}}" alt="image" class="img-fluid w-auto">
                            </div>
                            <div class="card-body feedback-card-body">
                                <div class="feedback-inner-main">
                                    <div class="rating rating-fourteen">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p>
                                        "I can't thank enough for the exceptional care they provided to my beloved dog, Max. 
                                        From the moment we walked in, the staff made us feel like family. Dr. Smith's expertise 
                                        and compassion were evident as he diagnosed and treated Max's illness. The entire team went 
                                        above and beyond to ensure Max's comfort and recovery. I highly recommend
                                        to anyone seeking top-notch veterinary care for their furry family members."
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="feedback-card-user-info">
                                            <h5><a href="#">Andrea</a><span>United States</span></h5>
                                        </div>
                                        <div class="quatation-img">
                                            <img src="{{URL::asset('/assets/img/icons/quatation-img.svg')}}" class="w-auto" alt="Img">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card feedback-card">
                        <div class="d-flex feedback-card-img-left">
                            <div class="client-inner-main">
                                <img src="{{URL::asset('/assets/img/reviews/review-img-03.png')}}" alt="image" class="img-fluid w-auto">
                            </div>
                            <div class="card-body feedback-card-body">
                                <div class="feedback-inner-main">
                                    <div class="rating rating-fourteen">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p>
                                        "I can't thank enough for the exceptional care they provided to my beloved dog, Max. 
                                        From the moment we walked in, the staff made us feel like family. Dr. Smith's expertise 
                                        and compassion were evident as he diagnosed and treated Max's illness. The entire team went 
                                        above and beyond to ensure Max's comfort and recovery. I highly recommend
                                        to anyone seeking top-notch veterinary care for their furry family members."
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="feedback-card-user-info">
                                            <h5><a href="#">Marie Wells</a><span>United States</span></h5>
                                        </div>
                                        <div class="quatation-img">
                                            <img src="{{URL::asset('/assets/img/icons/quatation-img.svg')}}" class="w-auto" alt="Img">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Feedback -->

<!-- Choose us -->
<section class="choose-us-fourteen">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header-fourteen text-center">
                    <h2>Frequently Asked Questions</h2>
                    <p>FAQs help provide important information to clients and address common queries they may have about the veterinary clinic's services, policies, and procedures.</p>
                </div>
            </div>
        </div>
        <div class="row">
        
            <div class="col-lg-6">
                <div class="choose-us-right-main">
                    <img src="{{URL::asset('/assets/img/bg/home-12-why-us.png')}}" alt="image" class="img-fluid">
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="why-us-content">
                    <div class="us-faq aos" data-aos="fade-up" data-aos-delay="200">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I book an appointment with a doctor?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse shade show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h6>Yes, simply visit our website and log in or create an account. Search for a doctor based on specialization, location, or availability & confirm your booking.</h6>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I request a specific doctor when booking my appointment?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse shade" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h6>Yes, you can usually request a specific doctor when booking your appointment, though availability may vary based on their schedule.</h6>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What should I do if I need to cancel or reschedule my appointment?
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse shade" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h6>If you need to cancel or reschedule your appointment, contact the doctor as soon as possible to inform them and to reschedule for another available time slot.</h6>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What if I'm running late for my appointment?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse shade" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>If you know you will be late, it's courteous to call the doctor's office and inform them. Depending on their policy and schedule, they may be able to accommodate you or reschedule your appointment.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Can I book appointments for family members or dependents?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse shade" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>Yes, in many cases, you can book appointments for family members or dependents. However, you may need to provide their personal information and consent to do so.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Choose us -->

<!-- blog section -->
<div class="blog-section-fourteen">
    <div class="floating-bg">
        <img src="{{URL::asset('/assets/img/bg/price-sec-bg-01.png')}}" alt="paw-image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header-fourteen service-inner-fourteen">
                    <h2>Doccure recent Blogs</h2>
                    <p>Checkout our Latest blogs by our Experts by Month on Month to know more about Petss</p>
                </div>
            </div>	
            <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all veterinary-blog-card">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('blog-details')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/blog/veterinary-blog-01.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="blog-inner-doc">
                                <img src="{{URL::asset('/assets/img/doctors/doctor-thumb-18.jpg')}}" alt="Pamila Certis" class="me-2">
                                <span><a href="{{url('doctor-profile')}}">Dr. Pamila Certis</a></span>
                            </div>
                            <a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">Must know best dog food Best Dog Food in India</a>
                            <p>In the diverse landscape of India, dog food options have variety of dietary needs..</p>
                            <a href="{{url('blog-details')}}" class="read-cap-text">Continue Reading<i class="fa-solid fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>		
            <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all veterinary-blog-card">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('blog-details')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/blog/veterinary-blog-02.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="blog-inner-doc">
                                <img src="{{URL::asset('/assets/img/doctors/doctor-thumb-17.jpg')}}" alt="Pamila Certis" class="me-2">
                                <span><a href="{{url('doctor-profile')}}">Dr. Ronald Jacobs</a></span>
                            </div>
                            <a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">How to Care for Rabbits in the Winter</a>
                            <p>During winter, it's crucial to provide proper care for rabbits by ensuring they have a warm...</p>
                            <a href="{{url('blog-details')}}" class="read-cap-text">Continue Reading<i class="fa-solid fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="col-lg-4 col-md-6 aos" data-aos="fade-up">
                <div class="card blog-inner-fourt-all veterinary-blog-card">
                    <div class="card-body blog-inner-fourt-main">
                        <div class="blog-inner-right-fourt">
                            <a href="{{url('blog-details')}}">
                                <div class="blog-inner-right-img">
                                    <img src="{{URL::asset('/assets/img/blog/veterinary-blog-03.jpg')}}" alt="image" class="img-fluid ">
                                </div>
                            </a>
                            <div class="blog-inner-doc">
                                <img src="{{URL::asset('/assets/img/doctors/doctor-thumb-16.jpg')}}" alt="Pamila Certis" class="me-2">
                                <span><a href="{{url('doctor-profile')}}">Dr. Marie Wells</a></span>
                            </div>
                            <a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">Why do cat scratches while winter?</a>
                            <p>During winter, it's crucial to provide proper care for rabbits by ensuring they have a warm...</p>
                            <a href="{{url('blog-details')}}" class="read-cap-text">Continue Reading<i class="fa-solid fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>	
            <div class="col-md-12">
                <div class="various-logo-slider owl-carousel">
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-01.svg')}}" alt="Img"></span>
                    </div>
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-02.svg')}}" alt="Img"></span>
                    </div>
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-03.svg')}}" alt="Img"></span>
                    </div>
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-04.svg')}}" alt="Img"></span>
                    </div>
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-05.svg')}}" alt="Img"></span>
                    </div>
                    <div class="plugin-logo-img">
                        <span><img src="{{URL::asset('/assets/img/icons/slider-plugin-icon-06.svg')}}" alt="Img"></span>
                    </div>
                </div>
            </div>	
        </div>

    </div>
</div>
<!-- /blog section -->

        @component('components.scrolltotop')
    @endcomponent
@endsection
