<?php $page = 'pharmacy-search'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Search
        @endslot
        @slot('li_1')
            Search
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <label class="mb-2">Location</label>
                                <input type="text" class="form-control" placeholder="Select Location">
                            </div>
                            <div class="filter-widget">
                                <h4>Categories</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Popular
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Latest
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Ratings
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Availability
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type" checked>
                                        <span class="checkmark"></span> Open 24 Hrs
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Home Delivery
                                    </label>
                                </div>
                            </div>

                            <div class="btn-search">
                                <button type="button" class="btn w-100">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->

                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">

                    <!-- Doctor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="doctor-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img1">
                                        <a href="{{ url('pharmacy-details') }}">
                                            <img src="{{ URL::asset('/assets/img/medical-img1.jpg') }}" class="img-fluid"
                                                alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name mb-2"><a href="{{ url('pharmacy-details') }}">Medlife
                                                Medical</a></h4>
                                        <div class="rating mb-2">
                                            <span class="badge badge-primary">4.0</span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <div class="clini-infos pt-3">

                                                <p class="doc-location mb-2"><i class="fas fa-phone-volume me-1"></i>
                                                    320-795-8815</p>
                                                <p class="doc-location mb-2 text-ellipse"><i
                                                        class="fas fa-map-marker-alt me-1"></i> 96 Red Hawk Road Cyrus, MN
                                                    56323 </p>
                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i>
                                                    Chemists, Surgical Equipment Dealer</p>

                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i> Opens
                                                    at 08.00 AM</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('pharmacy-details') }}">View Details</a>
                                        <a class="apt-btn" href="{{ url('product-all') }}">Browse Products</a>
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
                                    <div class="doctor-img1">
                                        <a href="{{ url('pharmacy-details') }}">
                                            <img src="{{ URL::asset('/assets/img/medical-img2.jpg') }}" class="img-fluid"
                                                alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name mb-2"><a href="{{ url('pharmacy-details') }}">PharmaMed
                                                Medical</a></h4>
                                        <div class="rating mb-2">
                                            <span class="badge badge-primary">4.0</span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <div class="clini-infos pt-3">

                                                <p class="doc-location mb-2"><i class="fas fa-phone-volume me-1"></i>
                                                    913-631-2538</p>
                                                <p class="doc-location mb-2 text-ellipse"><i
                                                        class="fas fa-map-marker-alt me-1"></i> 3830 Poe Lane Kansas City,
                                                    KS 66216 </p>
                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i>
                                                    Chemists, Surgical Equipment Dealer</p>

                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i>
                                                    Opens at 08.00 AM</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">
                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('pharmacy-details') }}">View Details</a>
                                        <a class="apt-btn" href="{{ url('product-all') }}">Browse Products</a>
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
                                    <div class="doctor-img1">
                                        <a href="{{ url('pharmacy-details') }}">
                                            <img src="{{ URL::asset('/assets/img/medical-img3.jpg') }}" class="img-fluid"
                                                alt="User Image">
                                        </a>
                                    </div>
                                    <div class="doc-info-cont">
                                        <h4 class="doc-name mb-2"><a href="{{ url('pharmacy-details') }}">The Pill Club
                                                Medical</a></h4>
                                        <div class="rating mb-2">
                                            <span class="badge badge-primary">4.0</span>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <div class="clini-infos pt-3">

                                                <p class="doc-location mb-2"><i class="fas fa-phone-volume me-1"></i>
                                                    816-270-2336</p>
                                                <p class="doc-location mb-2 text-ellipse"><i
                                                        class="fas fa-map-marker-alt me-1"></i> 3849 Nutter Street
                                                    Ferrelview, MO 64163 </p>
                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i>
                                                    Chemists, Surgical Equipment Dealer</p>

                                                <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i>
                                                    Opens at 08.00 AM</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doc-info-right">

                                    <div class="clinic-booking">
                                        <a class="view-pro-btn" href="{{ url('pharmacy-details') }}">View Details</a>
                                        <a class="apt-btn" href="{{ url('product-all') }}">Browse Products</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Doctor Widget -->

                    <div class="load-more text-center">
                        <a class="btn btn-primary btn-md" href="javascript:void(0);">Load More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
