<?php $page = 'favourites'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Favourites
        @endslot
        @slot('li_1')
            Favourites
        @endslot
    @endcomponent
   <!-- Page Content -->
   <div class="content doctor-content">
    <div class="container">
        <div class="row">

            @component('components.sidebar_patient')
                @endcomponent

            <div class="col-lg-8 col-xl-9">

                <div class="dashboard-header">
                    <h3>Favourites</h3>
                    <ul class="header-list-btns">
                        <li>
                            <div class="input-block dash-search-input">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Favourites -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-21.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Edalin Hendry</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 23 Mar 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Newyork, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 21 Jan 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Details</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-13.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Shanta Nesmith</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">DO -  Doctor of Osteopathic Medicine</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(35)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 27 Mar 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Los Angeles, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 18 Jan 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-14.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.John Ewel</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">DPM - Doctor of Podiatric Medicine</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 02 Apr 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Dallas, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 28 Jan 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-15.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Susan Fenimore</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">BSG - Bachelor of Science in Genetic Counseling</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 11 Apr 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Chicago, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 08 Feb 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-16.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Juliet Rios</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">ND - Doctor of Naturopathic Medicine</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability :18 Apr 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Detroit, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 16 Feb 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-17.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Joseph Engels</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">BSPT - Bachelor of Science in Physical Therapy</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 10 May 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Las Vegas, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 08 Mar 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-18.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Victoria Selzer</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 20 May 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Denver, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 18 Mar 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-19.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Benjamin Hedge</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">BSND - Bachelor of Science in Nutrition and Dieteticsantology, BDS</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 24 May 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Miami, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 21 Mar 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-20.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Kristina Lepley</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">MDS - Bachelor of Science in Health Informaticsc</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 13 Jun 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : San Jose, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 10 Apr 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>								
                    
                </div>
                <!-- /Favourites -->

                <div class="col-md-12">
                    <div class="loader-item text-center">
                        <a href="javascript:void(0);" class="btn btn-load">Load More</a>
                    </div>
                </div>	

            </div>
        </div>
    </div>

</div>		
<!-- /Page Content -->
@endsection
