<?php $page = 'checkout'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Checkout
        @endslot
        @slot('li_1')
            Checkout
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-7 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                           
                            <form action="{{ url('booking-success') }}" method="POST">
                              

                                <div class="payment-widget">
                                    <h4 class="card-title">Payment Method</h4>

                                    <!-- Credit Card Payment -->
                                    <div class="payment-list">
                                        <label class="payment-radio credit-card-option">
                                            <input type="radio" name="radio" checked>
                                            <span class="checkmark"></span>
                                            Credit card
                                        </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 card-label">
                                                    <label for="card_name">Name on Card</label>
                                                    <input class="form-control" id="card_name" type="text" name="card_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 card-label">
                                                    <label for="card_number">Card Number</label>
                                                    <input class="form-control" id="card_number"
                                                       type="text" name="card_number">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 card-label">
                                                    <label for="expiry_month">Expiry Month</label>
                                                    <input class="form-control" id="expiry_month" placeholder="MM"
                                                        type="text" name="expiry_month">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 card-label">
                                                    <label for="expiry_year">Expiry Year</label>
                                                    <input class="form-control" id="expiry_year" placeholder="YY"
                                                        type="text" name="expiry_year">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 card-label">
                                                    <label for="cvv">CVV</label>
                                                    <input class="form-control" id="cvv" type="text" name="cvv">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Credit Card Payment -->

                                    <!-- Paypal Payment -->
                                    <div class="payment-list">
                                        <label class="payment-radio paypal-option">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                            Paypal
                                        </label>
                                    </div>
                                    <!-- /Paypal Payment -->

                                    <!-- Terms Accept -->
                                    <div class="terms-accept">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms_accept">
                                            <label for="terms_accept">I have read and accept <a href="{{url('terms-condition')}}">Terms &amp;
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <!-- /Terms Accept -->

                                    <!-- Submit Section -->
                                    <div class="submit-section mt-4">
                                        <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                    </div>
                                    <!-- /Submit Section -->

                                </div>
                            </form>
                           
                           

                        </div>
                    </div>

                </div> --}}

                <div class="col-md-9 col-lg-8 theiaStickySidebar">

                    <!-- Booking Summary -->
                    <div class="card booking-card">
                        <div class="card-header">
                            <h4 class="card-title">Booking Summary</h4>
                        </div>
                        <div class="card-body">

                            <!-- Booking Doctor Info -->
                            <div class="booking-doc-info">
                                <a href="{{ url('doctor-profile') }}" class="booking-doc-img">
                                    <img src="{{ $doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                </a>
                                <div class="booking-info">
                                    <h4><a href="{{ url('doctor-profile') }}">Dr. {{ $doctor->name ?? '--' }}</a></h4>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">35</span>
                                    </div>
                                    <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i>
                                            {{ $doctor->city ?? '--' }},{{ $doctor->state ?? '--' }},
                                            {{ $doctor->country ?? '--' }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Booking Doctor Info -->

                            <div class="booking-summary">
                                <div class="booking-item-wrap">
                                    <ul class="booking-date">
                                        <li>Date :<span>{{ $storedBookingData['booking_date'] ?? '--' }}</span></li>
                                        <li>Time :<span>{{ $slot->start_time ?? '--' }}</span></li>
                                    </ul>
                                    <ul class="booking-fee">
                                        <li>Consulting Fee <span>${{ $doctor->consultation_fees ?? '--' }}</span></li>
                                        {{-- <li>Booking Fee <span>$10</span></li>
                                        <li>Video Call <span>$50</span></li> --}}
                                    </ul>
                                    <div class="booking-total">
                                        <ul class="booking-total-list">
                                            <li>
                                                <span>Total</span>
                                                <span class="total-cost">${{ $doctor->consultation_fees ?? '--' }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="{{ url('booking-success') }}" method="POST" id="payment-form">
                                        @csrf
                                        <input type="hidden" name="payment_amount"
                                            value="{{ $doctor->consultation_fees ?? '0' }}">
                                        <!-- Example amount in cents -->

                                        <div style="display: flex; align-items: center; gap: 10px;">
                                            <!-- Payment Button -->
                                            <button type="button" id="checkout-button"
                                                class="btn btn-primary submit-btn">Confirm and Pay</button>

                                            <!-- Loader -->
                                            <div id="payment-loader" style="display: none;">
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Summary -->

                </div>
            </div>

        </div>

    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        const checkoutButton = document.getElementById('checkout-button');
        const loader = document.getElementById('payment-loader');

        checkoutButton.addEventListener('click', async () => {
            // Show the loader and disable the button
            loader.style.display = 'block';
            checkoutButton.disabled = true;
            checkoutButton.innerHTML = 'Processing...';

            try {
                const response = await fetch("{{ url('patient/create-checkout-session') }}", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        payment_amount: document.querySelector('input[name="payment_amount"]')
                            .value
                    })
                });

                const session = await response.json();
                if (session.id) {
                    // Redirect to Stripe Checkout
                    await stripe.redirectToCheckout({
                        sessionId: session.id
                    });
                } else {
                    throw new Error('Session creation failed');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            } finally {
                // Hide the loader and enable the button
                loader.style.display = 'none';
                checkoutButton.disabled = false;
                checkoutButton.innerHTML = 'Confirm and Pay';
            }
        });
    </script>
    <!-- /Page Content -->
@endsection
