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
                    <h3>Doctors</h3>
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
                    @foreach ($data as $doctor)
                    <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{ url('doctor-profile-2/'. optional($doctor)->id)}}">
                                        <img class="img-fluid" alt="User Image"
                                            src="{{  $doctor->profile_image ?? URL::asset('/assets/img/features/feature-01.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{ url('doctor-profile-2/'. optional($doctor)->id)}}">{{ $doctor->name }}</a>
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">{{ $doctor->speciality }}</p>
                                    <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fas fa-star {{ $i < $doctor->rating ? 'filled' : '' }}"></i>
                                        @endfor
                                        <span class="d-inline-block average-rating">{{ $doctor->rating }}</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability :
                                            {{ $doctor->next_availability }}
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location :
                                            {{ $doctor->address ?? '--' }},{{ $doctor->city ?? '--' }},{{ $doctor->state ?? '--' }}
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Booked on {{ $doctor->last_booked }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{ url('doctor-profile-2/'. optional($doctor)->id)}}"
                                            class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('booking/' . $doctor->id) }}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="col-md-6 col-lg-4">
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
                    </div> --}}
                    
                    							
                    
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
