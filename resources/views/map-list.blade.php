<?php $page = 'map-list'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-12 order-md-last order-sm-last order-last map-left">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6 col">
                            <h4>2245 Doctors found</h4>
                        </div>

                        <div class="col-md-6 col-auto">
                            <div class="view-icons">
                                <a href="{{ url('map-grid') }}" class="grid-view"><i class="fas fa-th-large"></i></a>
                                <a href="{{ url('map-list') }}" class="list-view active"><i class="fas fa-bars"></i></a>
                            </div>
                            <div class="sort-by d-sm-block d-none">
                                <span class="sortby-fliter">
                                    <select class="form-select">
                                        <option>Sort by</option>
                                        <option class="sorting">Rating</option>
                                        <option class="sorting">Popular</option>
                                        <option class="sorting">Latest</option>
                                        <option class="sorting">Free</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Ruby Perrin</a></h4>
                                        <p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                        <h5 class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 98%</li>
                                            <li><i class="far fa-comment"></i> 17 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Darren Elder</a>
                                        </h4>
                                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <h5 class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                                class="img-fluid" alt="Speciality">Dentist</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Deborah Angel</a>
                                        </h4>
                                        <p class="doc-speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-04.png') }}"
                                                class="img-fluid" alt="Speciality">Cardiology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(27)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 99%</li>
                                            <li><i class="far fa-comment"></i> 35 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $100 - $400 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Sofia Brient</a>
                                        </h4>
                                        <p class="doc-speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-01.png') }}"
                                                class="img-fluid" alt="Speciality">Urology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Louisiana, USA
                                            </p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 97%</li>
                                            <li><i class="far fa-comment"></i> 4 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $150 - $250 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name"><a href="{{ url('doctor-profile') }}">Dr. Katharine
                                                Berthold</a></h4>
                                        <p class="doc-speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                                        <p class="doc-department"><img
                                                src="{{ URL::asset('/assets/img/specialities/specialities-03.png') }}"
                                                class="img-fluid" alt="Speciality">Orthopaedics</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(52)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
                                            <ul class="clinic-gallery">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-02.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-03.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                        data-fancybox="gallery">
                                                        <img src="{{ URL::asset('/assets/img/features/feature-04.jpg') }}"
                                                            alt="Feature">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clinic-services">
                                            <span>Dental Fillings</span>
                                            <span> Whitneing</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-thumbs-up"></i> 100%</li>
                                            <li><i class="far fa-comment"></i> 52 Feedback</li>
                                            <li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
                                            <li><i class="far fa-money-bill-alt"></i> $100 - $500 <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('doctor-profile') }}">View Profile</a>
                                        <a class="apt-btn" href="{{ url('booking') }}">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
                <!-- /content-left-->
                <div class="col-xl-5 col-lg-12 map-right grid-list-map">
                    <div id="map" class="map-listing"></div>
                    <!-- map-->
                </div>
                <!-- /map-right-->
            </div>
            <!-- /row-->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
