<?php $page = 'pharmacy-index'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Pharmacy Banner -->
    <section class="section pharmacy-banner">
        <div class="pharmacy-shapes">
            <div class="pharmacy-shape-left">
                <img src="{{ URL::asset('/assets/img/shapes/shape-5.png') }}" class="aos" data-aos="zoom-in" alt="">
                <img src="{{ URL::asset('/assets/img/shapes/shape-6.png') }}" class="shape-six aos" data-aos="zoom-in"
                    alt="">
            </div>
            <div class="pharmacy-shape-right">
                <img src="{{ URL::asset('/assets/img/shapes/shape-8.png') }}" class="shape-eight aos" data-aos="fade-down"
                    alt="">
                <img src="{{ URL::asset('/assets/img/shapes/shape-7.png') }}" class="shape-seven aos" data-aos="fade-down"
                    alt="">
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="pharmacy-content aos" data-aos="fade-up">
                        <h1>From the Leading Online Pharmacy </h1>
                        <h4>& Healthcare Platform Company</h4>
                        <p>Essentials Nutrition & Supplements from all over the suppliers around the World</p>
                    </div>
                    <div class="pharmacy-btn aos" data-aos="fade-up">
                        <a href="{{ url('pharmacy-search') }}" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
                    <div class="pharmacy-banner-img">
                        <img src="{{ URL::asset('/assets/img/pharmacy-img.png') }}" class="img-fluid" alt="Pharmacy Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pharmacy Banner -->

    <!-- Welcome Section -->
    <section class="section welcome-section">
        <div class="container">
            <div class="welcome-grid aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="welcome-info">
                            <div class="welcome-icon">
                                <img src="{{ URL::asset('/assets/img/welcome-icon.png') }}" alt="Welcome Icon">
                            </div>
                            <div class="welcome-content">
                                <h5>Welcome to Surna health</h5>
                                <p>Download the app get free medicine & 50% off on your first order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="welcome-btn">
                            <a href="javascript:void(0);" class="btn">Download App</a>
                        </div>
                        <div class="welcome-shapes">
                            <div class="welcome-shape-top">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-9.png') }}" alt="Shape Img">
                            </div>
                            <div class="welcome-shape-bottom">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-10.png') }}" alt="Shape Img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="shop-card suppliment-card">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="shop-content">
                                    <h5>10% Cashback on Dietary <span>Suppliments</span></h5>
                                    <p>Code: CARE12</p>
                                    <a href="{{ url('product-all') }}" class="btn">Shop Now</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="shop-img">
                                    <img src="{{ URL::asset('/assets/img/products/product-16.png') }}" alt="Product Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="shop-card freshner-card">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="shop-content">
                                    <h5><span>Say yes</span> to New Throat Freshner</h5>
                                    <h6>Refresh your day the fruity way</h6>
                                    <a href="{{ url('product-all') }}" class="btn">Shop Now</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-img">
                                    <img src="{{ URL::asset('/assets/img/products/product-17.png') }}" alt="Product Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="shop-card product-worth-card">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="shop-content">
                                    <h5>Get a Product Worth <span>1000</span> in a Pack</h5>
                                    <p>Code: CARE12</p>
                                    <a href="{{ url('product-all') }}" class="btn">Shop Now</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="shop-img">
                                    <img src="{{ URL::asset('/assets/img/products/product-18.png') }}" alt="Product Img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Welcome Section -->

    <!-- Deals Section -->
    <section class="section deals-section">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Great deals on top picks</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('product-all') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deals-list">
                <ul class="nav">
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-01.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Diabetes</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-02.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Cardiac Care</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-03.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Stomach Care</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-04.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Ayurvedic</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-05.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Homeopathy</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-06.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Fitness</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-07.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Mom & Baby</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="deals-grid aos" data-aos="fade-up">
                            <div class="deals-box">
                                <img src="{{ URL::asset('/assets/img/deals/deals-08.png') }}" alt="Deals Img">
                            </div>
                            <div class="deals-content">
                                <a href="{{ url('product-all') }}">Devices</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Deals Section -->

    <!-- Categories Section -->
    <section class="section categorie-section">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pharmacy-title mb-0">
                            <h4>Shop Popular Categories</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categorie-info">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-01.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Ayush</a>
                                </h5>
                                <p>400 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-02.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Covid Essentials</a>
                                </h5>
                                <p>924 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-03.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Devices</a>
                                </h5>
                                <p>450 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-04.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Glucometers</a>
                                </h5>
                                <p>580 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-05.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Eye Glasses</a>
                                </h5>
                                <p>620 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-06.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Weight</a>
                                </h5>
                                <p>740 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-07.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Women's Care</a>
                                </h5>
                                <p>810 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-08.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Baby Care</a>
                                </h5>
                                <p>680 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-09.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Home & Health</a>
                                </h5>
                                <p>440 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-10.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Sexual Wellness</a>
                                </h5>
                                <p>270 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-11.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Hands & Feet</a>
                                </h5>
                                <p>360 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="categorie-grid flex-fill">
                            <div class="categorie-img">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/category/categorie-12.png') }}"
                                        alt="Categorie Img">
                                </a>
                            </div>
                            <div class="categorie-content">
                                <h5>
                                    <a href="{{ url('product-all') }}">Oral Care</a>
                                </h5>
                                <p>520 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="categorie-card cash-card">
                        <div class="categorie-details">
                            <h4>Cash On delivery Available</h4>
                            <p>Order Now, Pay Later</p>
                        </div>
                        <div class="categorie-btn">
                            <a href="{{ url('product-all') }}" class="btn">
                                <img src="{{ URL::asset('/assets/img/icons/order-icon.svg') }}" alt="Order Icon"> Order
                                Now
                            </a>
                        </div>
                        <div class="categorie-shapes">
                            <div class="categorie-shape-top">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-11.png') }}" alt="Shape Img">
                            </div>
                            <div class="categorie-shape-bottom">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-12.png') }}" alt="Shape Img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="categorie-card sale-card">
                        <div class="categorie-details">
                            <h4>Sale of the Month</h4>
                            <p>Offer Prices in all medecines</p>
                        </div>
                        <div class="categorie-btn">
                            <a href="{{ url('product-all') }}" class="btn">View Medicines
                                <img src="{{ URL::asset('/assets/img/icons/medicine-icon.svg') }}" alt="Medicine Icon">
                            </a>
                        </div>
                        <div class="categorie-shapes">
                            <div class="categorie-shape-top">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-11.png') }}" alt="Shape Img">
                            </div>
                            <div class="categorie-shape-bottom">
                                <img src="{{ URL::asset('/assets/img/shapes/shape-12.png') }}" alt="Shape Img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Categories Section -->

    <!-- Seller Section -->
    <section class="section seller-section">
        <div class="container">
            <div class="seller-info">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
                        <div class="seller-card flex-fill">
                            <div class="seller-content">
                                <h6>Medical Pack</h6>
                                <h4>Get offers upto 25%</h4>
                                <a href="{{ url('product-all') }}" class="btn">Grab Offer Now</a>
                            </div>
                            <div class="seller-time">
                                <ul class="nav">
                                    <li>
                                        <h5>06</h5>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <h5>16</h5>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <h5>54</h5>
                                        <p>Minutes</p>
                                    </li>
                                    <li>
                                        <h5>16</h5>
                                        <p>Seconds</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="seller-img">
                                <img src="{{ URL::asset('/assets/img/seller-img.png') }}" alt="Seller Img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="seller-title aos" data-aos="fade-up">
                            <h4>Hot Deals</h4>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-01.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Home & Health</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Biotin Tablets</a>
                                </h5>
                                <p>$200 <span>$300</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-02.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Ayush</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Natural Tooth Paste</a>
                                </h5>
                                <p>$50</p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-03.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Baby Care</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Baby Shampoo</a>
                                </h5>
                                <p>$270</p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-04.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Eye Glasses</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Oval Frame Glass</a>
                                </h5>
                                <p>$450 <span>$500</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-05.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Devices</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Infrared Thermometer</a>
                                </h5>
                                <p>$300 <span>$400</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="seller-title aos" data-aos="fade-up">
                            <h4>Best Sellers</h4>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-06.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Hands & Feet</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Eucerin Lotion</a>
                                </h5>
                                <p>$150 <span>$200</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-07.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Covid Essentials</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Hand Sanitizer</a>
                                </h5>
                                <p>$100</p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-08.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Glucometer</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Glucometer</a>
                                </h5>
                                <p>$200 <span>$300</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-09.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Weight</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Weight Machine</a>
                                </h5>
                                <p>$800</p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-10.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Home & Health</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Papulex Gel</a>
                                </h5>
                                <p>$70</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="seller-title aos" data-aos="fade-up">
                            <h4>Top Rated</h4>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-11.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Oral Care</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Electric Tooth Brush</a>
                                </h5>
                                <p>$60 <span>$100</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-12.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Devices</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Sphygmomanomet</a>
                                </h5>
                                <p>$450 <span>$500</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-13.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Covid Essentials</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Hand Gloves</a>
                                </h5>
                                <p>$20</p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-14.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Hands & Feet</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Cattier Cream</a>
                                </h5>
                                <p>$120 <span>$150</span></p>
                            </div>
                        </div>
                        <div class="seller-grid aos" data-aos="fade-up">
                            <div class="seller-icon">
                                <a href="{{ url('product-all') }}">
                                    <img src="{{ URL::asset('/assets/img/seller/seller-15.png') }}" alt="Seller Icon">
                                </a>
                            </div>
                            <div class="seller-text">
                                <h6>Women’s Care</h6>
                                <h5>
                                    <a href="{{ url('product-all') }}">Calcium Tablets</a>
                                </h5>
                                <p>$170 <span>$200</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Seller Section -->

    <!-- Feature Products Section -->
    <section class="section products-sec">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Featured Products</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('product-all') }}">See All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-19.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">Echinacea</a></h4>
                            <span class="badge">100 ml</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$150<span>$199</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-20.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Women’s Care</h6>
                            <h4><a href="{{ url('product-all') }}">Diclofenac</a></h4>
                            <span class="badge">50 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$200<span>$300</span></h5>
                                </div>
                                <div class="cart-count">
                                    <div class="custom-increment cart">
                                        <div class="input-group1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-left-minus btn btn-danger btn-number"
                                                    data-type="minus" data-field="">
                                                    <span><i class="fas fa-minus"></i></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="input-number"
                                                value="10">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-success btn-number"
                                                    data-type="plus" data-field="">
                                                    <span><i class="fas fa-plus"></i></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="" class="cart-icon check-icon">
                                        <i class="feather-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-21.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Weight</h6>
                            <h4><a href="{{ url('product-all') }}">Colchicine</a></h4>
                            <span class="badge">100 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$370<span>$450</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-22.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Oral Care</h6>
                            <h4><a href="{{ url('product-all') }}">Clindamycin Gel</a></h4>
                            <span class="badge">10 g</span>
                            <span class="sticker">5% OFF</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$430<span>$120</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-23.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Women’s Care</h6>
                            <h4><a href="{{ url('product-all') }}">Aspinin-C</a></h4>
                            <span class="badge">70 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$200<span>$300</span></h5>
                                </div>
                                <div class="cart-count">
                                    <div class="custom-increment cart">
                                        <div class="input-group1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-left-minus2 btn btn-danger btn-number"
                                                    data-type="minus" data-field="">
                                                    <span><i class="fas fa-minus"></i></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity2" name="quantity2" class="input-number"
                                                value="10">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus2 btn btn-success btn-number"
                                                    data-type="plus" data-field="">
                                                    <span><i class="fas fa-plus"></i></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="" class="cart-icon check-icon">
                                        <i class="feather-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-24.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">L-Carnitine</a></h4>
                            <span class="badge">100 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$130<span>$150</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-25.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">DyN.O Pre Workout</a></h4>
                            <span class="badge">250 kg</span>
                            <span class="sticker">5% OFF</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$230<span>$250</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-26.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Baby Care</h6>
                            <h4><a href="{{ url('product-all') }}">Tabcin</a></h4>
                            <span class="badge">60 pillsl</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$180<span>$400</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Products Section -->

    <!-- Recent Products Section -->
    <section class="section products-sec recent-product-sec">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Recent Products</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('product-all') }}">See All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-27.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">Gemgex</a></h4>
                            <span class="badge">07 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$100<span>$150</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-28.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Weight</h6>
                            <h4><a href="{{ url('product-all') }}">Tri-Amino</a></h4>
                            <span class="badge">120 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$120<span>$150</span></h5>
                                </div>
                                <div class="cart-count">
                                    <div class="custom-increment cart">
                                        <div class="input-group1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-left-minus3 btn btn-danger btn-number"
                                                    data-type="minus" data-field="">
                                                    <span><i class="fas fa-minus"></i></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity3" name="quantity3" class="input-number"
                                                value="10">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus3 btn btn-success btn-number"
                                                    data-type="plus" data-field="">
                                                    <span><i class="fas fa-plus"></i></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="{{ url('product-all') }}" class="cart-icon check-icon">
                                        <i class="feather-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-29.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">Vitamin C+</a></h4>
                            <span class="badge">40 pills</span>
                            <span class="sticker">5% OFF</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$250<span>$350</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-30.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Weight</h6>
                            <h4><a href="{{ url('product-all') }}">Gravol Ginger</a></h4>
                            <span class="badge">20 pills</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$279<span>$300</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex aos" data-aos="fade-up">
                    <div class="products-card w-100">
                        <div class="product-icon">
                            <span><img src="{{ URL::asset('/assets/img/icons/product-icon-01.svg') }}"
                                    alt=""></span>
                        </div>
                        <div class="product-content">
                            <h4>Free Shipping</h4>
                            <p>Free shipping with discount</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex aos" data-aos="fade-up">
                    <div class="products-card w-100">
                        <div class="product-icon">
                            <span><img src="{{ URL::asset('/assets/img/icons/product-icon-02.svg') }}"
                                    alt=""></span>
                        </div>
                        <div class="product-content">
                            <h4>Great Support 24/7</h4>
                            <p>Instant access to Contact</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex aos" data-aos="fade-up">
                    <div class="products-card w-100">
                        <div class="product-icon">
                            <span><img src="{{ URL::asset('/assets/img/icons/product-icon-03.svg') }}"
                                    alt=""></span>
                        </div>
                        <div class="product-content">
                            <h4>100% Sucure Payment</h4>
                            <p>We ensure your money is save</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex aos" data-aos="fade-up">
                    <div class="products-card w-100">
                        <div class="product-icon">
                            <span><img src="{{ URL::asset('/assets/img/icons/product-icon-04.svg') }}"
                                    alt=""></span>
                        </div>
                        <div class="product-content">
                            <h4>Money-Back Guarantee</h4>
                            <p>30 days money-back guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Recent Products Section -->

    <!-- Coupon Section -->
    <section class="more-coupon-sec">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Save more with coupons</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('product-all') }}">See All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 aos" data-aos="fade-up">
                    <div class="coupon-card">
                        <div class="coupon-info">
                            <h4>Flat $200 Off</h4>
                            <p>On above $2000</p>
                        </div>
                        <div class="coupon-code">
                            <span>Code200</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 aos" data-aos="fade-up">
                    <div class="coupon-card">
                        <div class="coupon-info">
                            <h4>Flat $250 Off</h4>
                            <p>On above $2500</p>
                        </div>
                        <div class="coupon-code">
                            <span>Code250</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 aos" data-aos="fade-up">
                    <div class="coupon-card">
                        <div class="coupon-info">
                            <h4>Flat $300 Off</h4>
                            <p>On above $3000</p>
                        </div>
                        <div class="coupon-code">
                            <span>Code300</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 aos" data-aos="fade-up">
                    <div class="coupon-card">
                        <div class="coupon-info">
                            <h4>Flat $350 Off</h4>
                            <p>On above $3500</p>
                        </div>
                        <div class="coupon-code">
                            <span>Code350</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Coupon Section -->

    <!-- Best Selling Products Section -->
    <section class="section products-sec recent-product-sec">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Best Weekly Selling Products</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('product-all') }}">See All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-31.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Women’s Care</h6>
                            <h4><a href="{{ url('product-all') }}">Embryolisse</a></h4>
                            <h5 class="delivery">Delivery : <span>Tomorrow</span></h5>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$200<span>$300</span></h5>
                                </div>
                                <div class="cart-count">
                                    <div class="custom-increment cart">
                                        <div class="input-group1">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-left-minus4 btn btn-danger btn-number"
                                                    data-type="minus" data-field="">
                                                    <span><i class="fas fa-minus"></i></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity4" name="quantity4" class="input-number"
                                                value="10">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus4 btn btn-success btn-number"
                                                    data-type="plus" data-field="">
                                                    <span><i class="fas fa-plus"></i></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <a href="{{ url('product-all') }}" class="cart-icon check-icon">
                                        <i class="feather-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-32.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Oral Care</h6>
                            <h4><a href="{{ url('product-all') }}">Berocca</a></h4>
                            <h5 class="delivery">Delivery : <span>2 day</span></h5>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$150<span>$199</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-33.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">Acteane</a></h4>
                            <h5 class="delivery">Delivery : <span>1 day</span></h5>
                            <span class="sticker">5% OFF</span>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$250<span>$350</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos" data-aos="fade-up">
                    <div class="products-card">
                        <div class="product-card-img">
                            <a href="{{ url('product-all') }}"><img
                                    src="{{ URL::asset('/assets/img/products/product-34.png') }}" alt=""></a>
                        </div>
                        <div class="product-content">
                            <h6>Home & Health</h6>
                            <h4><a href="{{ url('product-all') }}">Lactoferrin Plus SB</a></h4>
                            <h5 class="delivery">Delivery : <span>4 days</span></h5>
                            <div class="product-cart">
                                <div class="cart-price">
                                    <h5>$279<span>$300</span></h5>
                                </div>
                                <a href="{{ url('product-all') }}" class="cart-icon">
                                    <i class="feather-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="best-sell-box w-100">
                        <h5>Get Flat 5% Simpl Cashback of up to Rs. 500*!..</h5>
                        <p>Get Flat 5% Simpl Cashback of up to Rs. 500 on your FIRST-EVER payment via Simpl for ANY
                            purchases* ..</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="best-sell-box box-two w-100">
                        <h5>Get assured Cashback of up to Rs. 500* + Earn up to 8X rewards*..</h5>
                        <p>ALL users get assured Cashback of max. Rs. 500 on ONLY one transaction of min. Rs 999 Up to 8X
                            Rewar..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Best Selling Products Section -->

    <!-- Trusted Section -->
    <section class="section trusted-section">
        <div class="container">
            <div class="trusted-info">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 trusted-img aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/trusted-img.png') }}" class="img-fluid" alt="Trusted Img">
                    </div>
                    <div class="col-lg-5 col-md-12 aos" data-aos="fade-up">
                        <div class="trusted-content">
                            <h4>100% Trusted Medical Store</h4>
                            <div class="trusted-text">
                                <h6><i class="fa-solid fa-circle-check"></i> Healthy life.</h6>
                                <p>At Surna health, we believe that true well-being extends beyond the prescription counter. Our
                                    commitment to your health goes beyond medications, a dedicated space designed to empower
                                    you on your journey to a healthier and happier life.</p>
                            </div>
                            <div class="trusted-text">
                                <h6><i class="fa-solid fa-circle-check"></i> Every day quality products for you.</h6>
                                <p>At Surna health, we believe that true well-being extends beyond the prescription counter. Our
                                    commitment to your health goes beyond medications, a dedicated space designed to empower
                                    you on your journey to a healthier and happier life.</p>
                            </div>
                            <div class="trusted-btn">
                                <a href="{{ url('product-all') }}" class="btn">
                                    Shop Now <i class="feather-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners-info aos" data-aos="fade-up">
                <ul class="owl-carousel partners-slider d-flex">
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-7.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-8.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-9.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-10.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-11.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-12.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-7.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-8.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/partners/partners-9.svg') }}"
                                alt="Partners">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Trusted Section -->

    <!-- Review Section -->
    <section class="section review-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 review-big-img aos" data-aos="fade-up">
                    <img src="{{ URL::asset('/assets/img/reviews/review-img.png') }}" class="img-fluid"
                        alt="Review Img">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="review-info">
                        <div class="review-grid aos" data-aos="fade-up">
                            <div class="review-img">
                                <img src="{{ URL::asset('/assets/img/reviews/review-01.jpg') }}" alt="Review Img">
                            </div>
                            <div class="review-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>The Surna health has been a game-changer for me. Ordering my medications is a breeze, and the
                                    detailed information provided helps me make informed decisions about my health.</p>
                                <h5>Claudia Cram</h5>
                            </div>
                        </div>
                        <div class="review-grid aos" data-aos="fade-up">
                            <div class="review-img">
                                <img src="{{ URL::asset('/assets/img/reviews/review-02.jpg') }}" alt="Review Img">
                            </div>
                            <div class="review-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>The convenience of having my medications delivered to my doorstep is unparalleled. The
                                    Surna health security measures instill confidence in every transaction.</p>
                                <h5>Andrew Morgan</h5>
                            </div>
                        </div>
                        <div class="review-grid aos" data-aos="fade-up">
                            <div class="review-img">
                                <img src="{{ URL::asset('/assets/img/reviews/review-03.jpg') }}" alt="Review Img">
                            </div>
                            <div class="review-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>As a busy professional, the Surna health efficient service has saved me countless hours. The
                                    ability to chat with a pharmacist online for quick advice is fantastic, making it so
                                    much easier to manage my health.</p>
                                <h5>Margaret Sara</h5>
                            </div>
                        </div>
                        <div class="review-grid aos" data-aos="fade-up">
                            <div class="review-img">
                                <img src="{{ URL::asset('/assets/img/reviews/review-04.jpg') }}" alt="Review Img">
                            </div>
                            <div class="review-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>I can't thank the Surna health enough for its user-friendly interface and quick prescription
                                    refills. The automatic reminders for medication schedules have been a lifesaver,
                                    ensuring I never miss a dose.</p>
                                <h5>Kevin Stoll</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Review Section -->

    <!-- News Section -->
    <section class="section news-section">
        <div class="container">
            <div class="pharmacy-section-header aos" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pharmacy-title">
                            <h4>Latest News</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pharmacy-title-link">
                            <a href="{{ url('blog-details') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="news-grid flex-fill">
                        <div class="news-image">
                            <a href="{{ url('blog-details') }}">
                                <img src="{{ URL::asset('/assets/img/blog/blog-21.jpg') }}" class="img-fluid"
                                    alt="Post Image">
                            </a>
                            <div class="news-date">
                                <h5>18</h5>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul class="nav">
                                <li>
                                    <p>
                                        <img src="{{ URL::asset('/assets/img/icons/tag-icon.svg') }}" alt="Icon">
                                        Food
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/admin-icon.svg') }}" alt="Icon">
                                        By Admin
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/comment-icon.svg') }}"
                                            alt="Icon">
                                        65 Comments
                                    </p>
                                </li>
                            </ul>
                            <h3 class="news-title">
                                <a href="{{ url('blog-details') }}">
                                    Revolutionizing Patient Care: The Future of Online Pharmacies
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="news-grid flex-fill">
                        <div class="news-image">
                            <a href="{{ url('blog-details') }}">
                                <img src="{{ URL::asset('/assets/img/blog/blog-22.jpg') }}" class="img-fluid"
                                    alt="Post Image">
                            </a>
                            <div class="news-date">
                                <h5>19</h5>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul class="nav">
                                <li>
                                    <p>
                                        <img src="{{ URL::asset('/assets/img/icons/tag-icon.svg') }}" alt="Icon">
                                        Food
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/admin-icon.svg') }}" alt="Icon">
                                        By Admin
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/comment-icon.svg') }}"
                                            alt="Icon">
                                        48 Comments
                                    </p>
                                </li>
                            </ul>
                            <h3 class="news-title">
                                <a href="{{ url('blog-details') }}">
                                    Navigating the World of Supplements: A Pharmacist's Perspective
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="news-grid flex-fill">
                        <div class="news-image">
                            <a href="{{ url('blog-details') }}">
                                <img src="{{ URL::asset('/assets/img/blog/blog-23.jpg') }}" class="img-fluid"
                                    alt="Post Image">
                            </a>
                            <div class="news-date">
                                <h5>20</h5>
                                <p>Nov</p>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul class="nav">
                                <li>
                                    <p>
                                        <img src="{{ URL::asset('/assets/img/icons/tag-icon.svg') }}" alt="Icon">
                                        Food
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/admin-icon.svg') }}" alt="Icon">
                                        By Admin
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/icons/comment-icon.svg') }}"
                                            alt="Icon">
                                        26 Comments
                                    </p>
                                </li>
                            </ul>
                            <h3 class="news-title">
                                <a href="{{ url('blog-details') }}">
                                    Behind the Counter: A Glimpse into the Day-to-Day Life of a Pharmacist
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->

    <!-- App Section -->
    <section class="app-section app-sec-twelve pharmacy-app-sec">
        <div class="container">
            <div class="app-twelve border-0">
                <div class="app-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
                            <div class="mobile-img">
                                <img src="{{ URL::asset('/assets/img/mobile-img.png') }}" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="app-content">
                                <div class="app-header aos" data-aos="fade-up">
                                    <h5>Working for Your Better Health.</h5>
                                    <h2>Download the Surna health App today!</h2>
                                </div>
                                <div class="app-scan aos" data-aos="fade-up">
                                    <p>Scan the QR code to get the app now</p>
                                    <img src="{{ URL::asset('/assets/img/scan-img.png') }}" alt="scan-image">
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
