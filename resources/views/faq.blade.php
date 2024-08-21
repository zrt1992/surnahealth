<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            FAQ
        @endslot
        @slot('li_1')
            FAQ
        @endslot
    @endcomponent
    <!-- FAQ Section -->
    <section class="faq-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-inner-header text-center">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="faq-info faq-inner-info">
                        <div class="accordion" id="faq-details">
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Sed ut perspiciatis unde omnis iste natus error sit?
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Ut enim ad minim veniam, quis nostrud exercitation?
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Duis aute irure dolor in reprehenderit in voluptate velit?
                                    </a>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Nemo enim ipsam voluptatem quia voluptas sit aut odit?
                                    </a>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="faq-info faq-inner-info">
                        <div class="accordion" id="faq-details-info">

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can i make an Appointment Online with White Plains Hospital Kendi?
                                    </a>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#faq-details-info">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Sed ut perspiciatis unde omnis iste natus error sit?
                                    </a>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#faq-details-info">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        Ut enim ad minim veniam, quis nostrud exercitation?
                                    </a>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#faq-details-info">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        Duis aute irure dolor in reprehenderit in voluptate velit?
                                    </a>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#faq-details-info">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Nemo enim ipsam voluptatem quia voluptas sit aut odit?
                                    </a>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#faq-details-info">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->
@endsection
