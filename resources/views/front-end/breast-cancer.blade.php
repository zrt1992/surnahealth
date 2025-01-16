<?php $page = 'breast-cancer'; ?>
@extends('layout.mainlayout')
@section('content')
    <style>
        .banner {
            background-image: url('/assets/img/breast-cancer-symptoms.png');
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
                Catch breast cancer <br> <span style="font-size: 5rem; color: #39e664;">sooner</span>.
            </h1>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="text-start" style="max-width: 60%; text-align: left;">
                    <p class="text-black" style="font-size: 2rem; font-weight: bold;">
                        Learn your risk <span style="font-size: 1rem; font-weight: normal;">in less than 2 minutes and
                            get</span>
                    </p>
                    <p class="text-black" style="font-size: 2rem; font-weight: bold;">
                        Virtual support <span style="font-size: 1rem; font-weight: normal;">from a breast specialist.</span>
                    </p>
                </div>
            </div>


            <div class="d-flex align-items-center justify-content-center">
                <form action="{{ url('booking-success') }}" method="POST" id="payment-form-1">
                    @csrf

                    <input type="hidden" id="success-url-1" class="form-control mb-3" name="success_url"
                        value="https://huggingface.co/spaces/Surna2/Surna_TeleHealth_-_Breast_Cancer_Risk_Assessment" />
                    <input type="hidden" id="payment-amount-1" name="payment_amount" value="25" />

                    <div style="display: flex; align-items: center; gap: 10px;">
                        <button type="button" id="assesment-checkout-button-1" class="btn btn-primary submit-btn">Learn your
                            risk</button>
                        <div id="payment-loader-1" style="display: none;">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
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
