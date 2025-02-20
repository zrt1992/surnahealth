<?php $page = 'breast-cancer'; ?>
@extends('layout.mainlayout')
@section('content')
    <style>
        .banner {
            background-image: url('/assets/img/cardiac-issues-banner.webp');
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 30px;
            height: 100vh;
        }
    </style>
    <!-- Home Banner -->
    <section class="banner text-center d-flex align-items-center justify-content-center"
        style="height: 100vh; background-color: #f8f9fa;">
        <div class="container">
            <h1 class="mb-3" style="font-size: 3rem; font-weight: bold;">
                Catch cardiac issues <br> <span style="font-size: 5rem; color: #39e664;">sooner</span>.
            </h1>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="text-start" style="max-width: 60%; text-align: left;">
                    <p class="text-black" style="font-size: 2rem; font-weight: bold;">
                        Learn your risk <span style="font-size: 1rem; font-weight: normal;">in less than 2 minutes and
                            get</span>
                    </p>
                    <p class="text-black" style="font-size: 2rem; font-weight: bold;">
                        Virtual support <span style="font-size: 1rem; font-weight: normal;">from a cardiac specialist.</span>
                    </p>
                </div>
            </div>


            <div class="d-flex align-items-center justify-content-center">
                <form method="POST" id="payment-form-3">
                    @csrf
                    <div class="col-12 d-flex col-xxl-12 col-lg-12 col-sm-6">
                        <input type="hidden" id="success-url-3" class="form-control mb-3" name="success_url"
                            value="https://huggingface.co/spaces/surna/surna-heart" />
                        <input type="hidden" id="payment-amount-3" name="payment_amount" value="35" />
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <button type="button" id="assesment-checkout-button-3" class="btn btn-primary submit-btn">Learn your
                                risk</button>
                            <div id="payment-loader-3" style="display: none;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
       
    </section>


    <!-- /Home Banner -->


    @component('components.scrolltotop')
    @endcomponent

    
@endsection
