<?php $page = 'onboarding-preferences'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="left-panel">
        <div class="onboarding-logo text-center">
            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png') }}" class="img-fluid"
                    alt="Surna health-logo"></a>
        </div>
        <div class="onboard-img">
            <img src="{{ URL::asset('/assets/img/onboard-img/onb-slide-img.png') }}" class="img-fluid" alt="onboard-slider">
        </div>
        <div class="onboarding-slider">
            <!-- Slider -->
            <div id="onboard-slider" class="owl-carousel owl-theme onboard-slider slider">
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna health</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna health</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->
                <!-- Slider Item -->
                <div class="onboard-item text-center">
                    <div class="onboard-content">
                        <h3>Welcome to Surna health</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <!-- /Slider Item -->

            </div>
            <!-- /Slider -->
        </div>
    </div>
    <div class="right-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="right-panel-title text-center">
                        <a href="{{ url('/') }}"> <img src="{{ URL::asset('/assets/img/onboard-img/onb-logo.png') }}"
                                alt="Surna health-logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="on-board-wizard">
                        <ul>
                            <li>
                                <a href="{{ url('onboarding-email') }}">
                                    <div class="onboarding-progress active">
                                        <span>1</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Registration</h6>
                                        <p>Enter Details for Register </p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('onboarding-identity') }}">
                                    <div class="onboarding-progress active">
                                        <span>2</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Upload Identity</h6>
                                        <p>Upload your Identity for Verification</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-personalize') }}">
                                    <div class="onboarding-progress active">
                                        <span>3</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Personal Details</h6>
                                        <p>Enter your Personal Details</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-verification') }}">
                                    <div class="onboarding-progress active">
                                        <span>4</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Doctor Verification</h6>
                                        <p>Upload Documents for the Verification</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-payments') }}">
                                    <div class="onboarding-progress active">
                                        <span>5</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Payment details</h6>
                                        <p>Setup Your Payment Details</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('onboarding-preferences') }}">
                                    <div class="onboarding-progress active">
                                        <span>6</span>
                                    </div>
                                    <div class="onboarding-list">
                                        <h6>Preferences</h6>
                                        <p>Setup Your Preferences for your Account</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="onboarding-content-box">
                        <div class="onboarding-title">
                            <h2>Preferences <span>*</span></h2>
                            <h6>This can be edited later on from the account settings.</h6>
                        </div>
                        <div class="onboarding-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Cost of an Consultation
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="onboard-set">
                                                        <div class="onboarding-title">
                                                            <h2>What is the maximum cost per <br>
                                                                consultation?<span>*</span></h2>
                                                            <h6>This can be edited later on from the preferences
                                                                section.</h6>
                                                        </div>
                                                        <div class="onboarding-content passcode-wrap mail-box">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <div class="mb-3">
                                                                        <select class="select">
                                                                            <option selected>Euro</option>
                                                                            <option>INR</option>
                                                                            <option>Dinar</option>
                                                                            <option>ring</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <div class="mb-3">
                                                                        <input type="text" placeholder="Enter Amount"
                                                                            class=" placeholder-style form-control"
                                                                            required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="onboarding-btn Consultation-btn cost-btns">
                                                        <a data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne"
                                                            href="javascript:void(0);">Save</a>
                                                        <a data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne"
                                                            href="javascript:void(0);">Not Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Preferred means for online consultations
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="onboarding-title">
                                                        <h2>
                                                            Which are your preferred means <br> of online
                                                            consultation?<span>*</span>
                                                        </h2>
                                                        <h6>You can select more than one from the below. These will
                                                            show up as options for the patient when booking an
                                                            appointment.</h6>
                                                    </div>
                                                    <div class="onboarding-content">
                                                        <div class="consult-option mb-lg-4 mb-sm-1">
                                                            <div class="call-option">
                                                                <input type="checkbox" id="radio1" name="selector"
                                                                    class="option-radio" checked>
                                                                <label for="radio1" class="call-lable"> <img
                                                                        src="{{ URL::asset('/assets/img/icons/mic-black.svg') }}"
                                                                        alt="mic-icon">Audio Call</label>
                                                            </div>
                                                            <div class="call-option">
                                                                <input type="checkbox" id="radio2" name="selector"
                                                                    class="option-radio">
                                                                <label for="radio2" class="call-lable"><img
                                                                        src="{{ URL::asset('/assets/img/icons/video-icon.svg') }}"
                                                                        alt="video-icon">Video Call</label>
                                                            </div>
                                                            <div class="call-option">
                                                                <input type="checkbox" id="radio3" name="selector"
                                                                    class="option-radio">
                                                                <label for="radio3" class="call-lable"> <img
                                                                        src="{{ URL::asset('/assets/img/icons/ch.svg') }}"
                                                                        alt="chat-icon">Chat</label>
                                                            </div>
                                                        </div>
                                                        <div class="onboarding-title">
                                                            <h6>Choose your preferred language for Audio, Video
                                                                calls and chat. You can select more than one option.
                                                            </h6>
                                                        </div>
                                                        <div class="mb-3">
                                                            <select class="select">
                                                                <option disabled selected>Choose Your Language
                                                                </option>
                                                                <option>French</option>
                                                                <option>English</option>
                                                                <option>Spanish</option>
                                                            </select>
                                                        </div>
                                                        <div class="onboarding-btn Consultation-btn">
                                                            <a data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="true" aria-controls="collapseTwo"
                                                                href="javascript:void(0);">Save</a>
                                                            <a data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="true" aria-controls="collapseTwo"
                                                                href="javascript:void(0);">Not Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Availabilities
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="onboarding-title">
                                                        <h2>Add availability<span>*</span></h2>
                                                        <h6>Visitors will only be able to schedule appointments
                                                            during available hours.</h6>
                                                    </div>
                                                    <div class="onboarding-content passcode-wrap mail-box">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="onboarding-lable">Date</label>
                                                                    <input type="text" placeholder="Select Date"
                                                                        class="form-control placeholder-style datetimepicker"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="onboarding-lable">Time will you be
                                                                        available?</label>
                                                                    <select class="select">
                                                                        <option disabled selected>Start Time
                                                                        </option>
                                                                        <option>12:00 a.m</option>
                                                                        <option>1:00 a.m</option>
                                                                        <option>2:00 a.m</option>
                                                                        <option>3:00 a.m</option>
                                                                        <option>4:00 a.m</option>
                                                                        <option>5:00 a.m</option>
                                                                        <option>6:00 a.m</option>
                                                                        <option>7:00 a.m</option>
                                                                        <option>8:00 a.m</option>
                                                                        <option>9:00 a.m</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="onboarding-lable">&nbsp;</label>
                                                                    <select class="select">
                                                                        <option disabled selected>End Time</option>
                                                                        <option>12:00 a.m</option>
                                                                        <option>1:00 a.m</option>
                                                                        <option>2:00 a.m</option>
                                                                        <option>3:00 a.m</option>
                                                                        <option>4:00 a.m</option>
                                                                        <option>5:00 a.m</option>
                                                                        <option>6:00 a.m</option>
                                                                        <option>7:00 a.m</option>
                                                                        <option>8:00 a.m</option>
                                                                        <option>9:00 a.m</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="repeat-avail d-flex ">
                                                                        <div class="tog-button">
                                                                            <label class="switch">
                                                                                <input type="checkbox">
                                                                                <span class="tog-slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="avail-content d-flex ">
                                                                            <a href="javascript:;">
                                                                                <h6> Repeat Availability
                                                                                </h6>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="onboarding-lable">Choose any day
                                                                        of the week to repeat this
                                                                        availability.</label>
                                                                    <div class="weekDays-selector">
                                                                        <input type="checkbox" id="weekday-mon"
                                                                            class="weekday" />
                                                                        <label for="weekday-mon">M</label>
                                                                        <input type="checkbox" id="weekday-tue"
                                                                            class="weekday" />
                                                                        <label for="weekday-tue">T</label>
                                                                        <input type="checkbox" id="weekday-wed"
                                                                            class="weekday" />
                                                                        <label for="weekday-wed">W</label>
                                                                        <input type="checkbox" id="weekday-thu"
                                                                            class="weekday" />
                                                                        <label for="weekday-thu">T</label>
                                                                        <input type="checkbox" id="weekday-fri"
                                                                            class="weekday" />
                                                                        <label for="weekday-fri">F</label>
                                                                        <input type="checkbox" id="weekday-sat"
                                                                            class="weekday" />
                                                                        <label for="weekday-sat">S</label>
                                                                        <input type="checkbox" id="weekday-sun"
                                                                            class="weekday" />
                                                                        <label for="weekday-sun">S</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="onboarding-lable">Repeat this
                                                                        schedule until</label>
                                                                    <input type="text" placeholder="Select Date"
                                                                        class="form-control placeholder-style datetimepicker"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="onboarding-btn Personalize-btn">
                                                            <a href="javascript:;" data-bs-toggle="modal"
                                                                data-bs-target="#id-verified">Save & Next</a>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade fade-custom" id="id-verified"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog id-upload modal-dialog-centered">
                                                                <div class="modal-content id-pop-content">
                                                                    <div
                                                                        class="modal-header id-pop-header justify-content-center">
                                                                        <img src="{{ URL::asset('/assets/img/icons/success-tick.svg') }}"
                                                                            alt="success-tick">
                                                                    </div>
                                                                    <div class="modal-body id-pop-body text-center">
                                                                        <h2>Doctor’s profile has been verified</h2>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna
                                                                            aliqua.</p>
                                                                    </div>
                                                                    <div class="modal-footer id-pop-footer text-center">
                                                                        <div class="onboarding-btn pop-btn ">
                                                                            <a
                                                                                href="{{ url('doctor-dashboard') }}">Continue</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
