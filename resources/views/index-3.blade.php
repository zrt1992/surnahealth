<?php $page = 'index-3'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
    <section class="doctor-search-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 aos" data-aos="fade-up">
                    <div class="doctor-search">
                        <div class="banner-header">
                            <h2><span>Search Doctor,</span> Make an Appointment</h2>
                            <p>Access to expert physicians and surgeons, advanced technologies and top-quality surgery
                                facilities right here.</p>
                        </div>
                        <div class="doctor-form">
                            <form action="#" class="doctor-search">
                                <div class="input-box-twelve">
                                    <div class="search-input input-block">
                                        <input type="text" class="form-control" placeholder="Location">
                                        <a class="current-loc-icon current_location" href="javascript:void(0);">
                                            <i class="fa-solid fa-location-crosshairs"></i>
                                        </a>
                                    </div>
                                    <div class="search-input input-block">
                                        <select class="select form-control">
                                            <option>Select Department</option>
                                            <option>Cardiology</option>
                                            <option>Neurology</option>
                                            <option>Urology</option>
                                        </select>
                                        <a class="current-loc-icon current_location" href="javascript:void(0);">
                                            <i class="fa-solid fa-user-check"></i>
                                        </a>
                                    </div>
                                    <div class="input-block">
                                        <div class="search-btn-info">
                                            <a href="{{ url('search-2') }}"><i
                                                    class="fa-solid fa-magnifying-glass"></i>Search</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 aos" data-aos="fade-up">
                    <img src="{{ URL::asset('/assets/img/banner/doctor-banner.png') }}" class="img-fluid dr-img"
                        alt="doctor-image">
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Clinic Section -->
    <section class="clinics-section">
        <div class="shapes">
            <img src="{{ URL::asset('/assets/img/shapes/shape-1.png') }}" alt="shape-image" class="img-fluid shape-1">
            <img src="{{ URL::asset('/assets/img/shapes/shape-2.png') }}" alt="shape-image" class="img-fluid shape-2">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Clinic & Specialities</h2>
                        <p>Access to expert physicians and surgeons, advanced technologies and top-quality surgery
                            facilities right here.</p>
                    </div>
                </div>
                <div class="col-md-6 text-end aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-1 text-end nav-control"></div>
                </div>
            </div>
            <div class="owl-carousel clinics owl-theme aos" data-aos="fade-up">
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-1.jpg') }}" alt="clinic-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-01.svg') }}" alt="kidney-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Urology</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-2.jpg') }}" alt="clinic-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-02.svg') }}" alt="bone-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Orthopedic</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-4.jpg') }}" alt="client-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-03.svg') }}" alt="heart-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Cardiologist</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-3.jpg') }}" alt="client-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-04.svg') }}" alt="teeth-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Dentist</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-5.jpg') }}" alt="client-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-05.svg') }}" alt="brain-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Neurology</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-item">
                        <div class="clinics-card">
                            <div class="clinics-img">
                                <img src="{{ URL::asset('/assets/img/clinic/clinic-1.jpg') }}" alt="clinic-image"
                                    class="img-fluid">
                            </div>
                            <div class="clinics-info">
                                <span class="clinic-img">
                                    <img src="{{ URL::asset('/assets/img/category/category-06.svg') }}" alt="heart-image"
                                        class="img-fluid">
                                </span>
                                <a href="#"><span>Cardiologist</span></a>
                            </div>
                        </div>
                        <div class="clinics-icon">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Clinic Section -->

    <!-- Specialities Section -->
    <section class="specialities-section">
        <div class="shapes">
            <img src="{{ URL::asset('/assets/img/shapes/shape-3.png') }}" alt="shape-image" class="img-fluid shape-3">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading bg-area">
                        <h2>Browse by Specialities</h2>
                        <p>Find experienced doctors across all specialties</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/1.png') }}" alt="kidney-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Urology</h4>
                            </a>
                            <p>21 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/2.png') }}" alt="bone-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Orthopedic</h4>
                            </a>
                            <p>30 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/4.png') }}" alt="heart-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Cardiologist</h4>
                            </a>
                            <p>15 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/5.png') }}" alt="brain-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Dentist</h4>
                            </a>
                            <p>35 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/3.png') }}" alt="brain-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Neurology</h4>
                            </a>
                            <p>25 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/6.png') }}" alt="bone-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Pediatrist</h4>
                            </a>
                            <p>10 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/7.png') }}" alt="heart-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Veterinary</h4>
                            </a>
                            <p>20 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 aos" data-aos="fade-up">
                    <div class="specialist-card d-flex">
                        <div class="specialist-img">
                            <img src="{{ URL::asset('/assets/img/category/8.png') }}" alt="kidney-image"
                                class="img-fluid">
                        </div>
                        <div class="specialist-info">
                            <a href="#">
                                <h4>Psychiatrist</h4>
                            </a>
                            <p>12 Doctors</p>
                        </div>
                        <div class="specialist-nav ms-auto">
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Specialities Section -->

    <!-- Best Doctor Section -->
    <section class="our-doctors-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Book Our Best Doctor</h2>
                        <p>Meet our experts & book online</p>
                    </div>
                </div>
                <div class="col-md-6 text-end aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-2 text-end nav-control"></div>
                </div>
            </div>
            <div class="owl-carousel our-doctors owl-theme aos" data-aos="fade-up">
                <div class="item">
                    <div class="our-doctors-card">
                        <div class="doctors-header">
                            <a href="#"><img src="{{ URL::asset('/assets/img/doctors/doctor-01.jpg') }}"
                                    alt="Ruby Perrin" class="img-fluid"></a>
                            <div class="img-overlay">
                                <span>$20 - $50</span>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-ratings">3.5</span>
                            </div>
                            <a href="{{ url('doctor-profile') }}">
                                <h4>Dr. Ruby Perrin</h4>
                            </a>
                            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                            <div class="location d-flex">
                                <p><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                <p class="ms-auto"><i class="fas fa-user-md"></i> 450 Consultations</p>
                            </div>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="btn view-btn" tabindex="0">View
                                        Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-doctors-card">
                        <div class="doctors-header">
                            <a href="#"><img src="{{ URL::asset('/assets/img/doctors/doctor-04.jpg') }}"
                                    alt="Deborah Angel" class="img-fluid"></a>
                            <div class="img-overlay">
                                <span>$30 -$60</span>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-ratings">3.0</span>
                            </div>
                            <a href="{{ url('doctor-profile') }}">
                                <h4>Dr. Lisa Graham</h4>
                            </a>
                            <p>MBBS, MD - Cardialogist</p>
                            <div class="location d-flex">
                                <p><i class="fas fa-map-marker-alt"></i> San Diego, USA</p>
                                <p class="ms-auto"><i class="fas fa-user-md"></i> 120 Consultations</p>
                            </div>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="btn view-btn" tabindex="0">View
                                        Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-doctors-card">
                        <div class="doctors-header">
                            <a href="#"><img src="{{ URL::asset('/assets/img/doctors/doctor-03.jpg') }}"
                                    alt="Sofia Brient" class="img-fluid"></a>
                            <div class="img-overlay">
                                <span>$15 -$30</span>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-ratings">3.0</span>
                            </div>
                            <a href="{{ url('doctor-profile') }}">
                                <h4>Dr. Carrie Soderberg</h4>
                            </a>
                            <p>MBBS, DNB - Neurology</p>
                            <div class="location d-flex">
                                <p><i class="fas fa-map-marker-alt"></i> Dallas, USA</p>
                                <p class="ms-auto"><i class="fas fa-user-md"></i> 300 Consultations</p>
                            </div>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="btn view-btn" tabindex="0">View
                                        Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-doctors-card">
                        <div class="doctors-header">
                            <a href="#"><img src="{{ URL::asset('/assets/img/doctors/doctor-02.jpg') }}"
                                    alt="Darren Elder" class="img-fluid"></a>
                            <div class="img-overlay">
                                <span>$20 - $50</span>
                            </div>
                        </div>
                        <div class="doctors-body">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-ratings">4.0</span>
                            </div>
                            <a href="{{ url('doctor-profile') }}">
                                <h4>Dr. Matthew Ruiz</h4>
                            </a>
                            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                            <div class="location d-flex">
                                <p><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                <p class="ms-auto"><i class="fas fa-user-md"></i> 450 Consultations</p>
                            </div>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{ url('doctor-profile') }}" class="btn view-btn" tabindex="0">View
                                        Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking') }}" class="btn book-btn" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Best Doctor Section -->

    <!-- Clinic Features Section -->
    <section class="clinic-features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Availabe Features in Our Clinic</h2>
                        <p>Meet our Experts & Book Online</p>
                    </div>
                </div>
                <div class="col-md-6 text-end aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-3 text-end nav-control"></div>
                </div>
            </div>
            <div class="owl-carousel clinic-feature owl-theme aos" data-aos="fade-up">
                <div class="item">
                    <div class="clinic-features">
                        <img src="{{ URL::asset('/assets/img/clinic/clinic-6.jpg') }}" alt="clinic-image"
                            class="img-fluid">
                    </div>
                    <div class="clinic-feature-overlay">
                        <a href="#" class="img-overlay">Operation</a>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-features">
                        <img src="{{ URL::asset('/assets/img/clinic/clinic-7.jpg') }}" alt="clinic-image"
                            class="img-fluid">
                    </div>
                    <div class="clinic-feature-overlay">
                        <a href="#" class="img-overlay">Medical</a>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-features">
                        <img src="{{ URL::asset('/assets/img/clinic/clinic-8.jpg') }}" alt="clinic-image"
                            class="img-fluid">
                    </div>
                    <div class="clinic-feature-overlay">
                        <a href="#" class="img-overlay">Patient Ward</a>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-features">
                        <img src="{{ URL::asset('/assets/img/clinic/clinic-9.jpg') }}" alt="clinic-image"
                            class="img-fluid">
                    </div>
                    <div class="clinic-feature-overlay">
                        <a href="#" class="img-overlay">Test Room</a>
                    </div>
                </div>
                <div class="item">
                    <div class="clinic-features">
                        <img src="{{ URL::asset('/assets/img/clinic/clinic-10.jpg') }}" alt="clinic-image"
                            class="img-fluid">
                    </div>
                    <div class="clinic-feature-overlay">
                        <a href="#" class="img-overlay">ICU</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Clinic Features Section -->

    <!-- Blog Section -->
    <section class="our-blog-section blogs-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>Blogs and News</h2>
                        <p>Read Professional Articles and Latest Articles</p>
                    </div>
                </div>
                <div class="col-md-6 text-end aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-4 text-end nav-control"></div>
                </div>
            </div>
            <div class="owl-carousel blogs owl-theme aos" data-aos="fade-up">
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-26.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-11.jpg') }}" alt="Ruby Perrin"
                                    class="img-fluid">
                                <span class="blogs-writter">Ruby Perrin</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Urology</span>
                            <h4><a href="{{ url('blog-details') }}">Revolutionizing Healthcare: The Rise of Online Doctor
                                    Booking</a></h4>
                            <p>Explore how online doctor booking is revolutionize access to healthcare efficiency.
                            </p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 03 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-27.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-12.jpg') }}" alt="Ruby Perrin"
                                    class="img-fluid">
                                <span class="blogs-writter">Lynette Williams</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Neurology</span>
                            <h4><a href="{{ url('blog-details') }}">Neurology and Technology: A New Frontier in Brain
                                    Health</a></h4>
                            <p>Discover the intersection of technology and neurology, transforming treatments.
                            </p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 10 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-28.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-03.jpg') }}" alt="Ruby Perrin"
                                    class="img-fluid">
                                <span class="blogs-writter">Mathew Rulz</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Orthopedic</span>
                            <h4><a href="{{ url('blog-details') }}">Beating Strong: The Digital Revolution in Cardiac
                                    Care</a></h4>
                            <p>Discover how digital advancements are transforming cardiac care, making heart health.
                            </p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 15 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-29.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-09.jpg') }}" alt="Sofia Brient"
                                    class="img-fluid">
                                <span class="blogs-writter">Sofia Brient</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Ophthalmology</span>
                            <h4><a href="{{ url('blog-details') }}">Understanding and Preventing Glaucoma: A Detailed
                                    Guide</a></h4>
                            <p>Glaucoma is a leading cause of blindness worldwide, yet many do not realize they have it</p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 18 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-30.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-02.jpg') }}" alt="Olga Barlow"
                                    class="img-fluid">
                                <span class="blogs-writter">Olga Barlow</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Dental Care</span>
                            <h4><a href="{{ url('blog-details') }}">5 Essential Tips for Maintaining Optimal Oral
                                    Health</a></h4>
                            <p>Learn the top five daily practices to keep your teeth and gums healthy. </p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 18 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="our-blogs">
                        <div class="blogs-img">
                            <a href="{{ url('blog-details') }}"><img
                                    src="{{ URL::asset('/assets/img/blog/blog-31.jpg') }}" alt="blog-image"
                                    class="img-fluid"></a>
                            <div class="blogs-overlay d-flex">
                                <img src="{{ URL::asset('/assets/img/clients/client-04.jpg') }}" alt="Linda Tobin"
                                    class="img-fluid">
                                <span class="blogs-writter">Linda Tobin</span>
                            </div>
                        </div>
                        <div class="blogs-info">
                            <span class="blog-slug">Veterinary</span>
                            <h4><a href="{{ url('blog-details') }}">Pet Emergencies: How to Recognize and React</a></h4>
                            <p>This critical guide covers the most common emergencies seen in pets, including choking.</p>
                            <div class="blogs-nav d-flex align-items-center justify-content-between">
                                <span class="blogs-time"><i class="fa-regular fa-calendar-days"></i> 24 Apr 2024</span>
                                <a href="{{ url('blog-details') }}" class="blogs-btn">Read More</a>
                            </div>
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
