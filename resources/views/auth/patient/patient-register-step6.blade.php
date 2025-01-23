<?php $page = 'patient-register-step5'; ?>
@extends('layout.mainlayout')
@section('content')
    <section class="pricing-section doc-plan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-header-one">
                        <h2 class="section-title">Pricing Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                @foreach ([$regularSubscription, $premiumSubscription] as $subscription)
                    <div class="col-lg-3 col-sm-12 aos" data-aos="fade-up">
                        <div class="card pricing-card {{ $loop->first ? '' : 'pricing-card-active' }}">
                            <div class="card-body">
                                <div class="pricing-header">
                                    <div class="pricing-header-info">
                                        <div class="pricing-icon">
                                            <span>
                                                <img src="{{ URL::asset('/assets/img/icons/price-icon' . $loop->iteration . '.svg') }}"
                                                    alt="icon">
                                            </span>
                                        </div>
                                        <div class="pricing-title">
                                            <h4>{{ $subscription->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-info">
                                    <div class="pricing-amount">
                                        @if ($subscription->prices->isNotEmpty())
                                            <h2>${{ $subscription->prices->first()->amount / 100 }}
                                                <span>/{{ $subscription->prices->first()->interval }}</span>
                                            </h2>
                                        @endif
                                        <h6>What’s included</h6>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            @foreach (explode(', ', $subscription->description) as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        @if ($subscription->prices->isNotEmpty())
                                            @foreach ($subscription->prices as $price)
                                                <form action="{{ url('booking-success') }}" method="POST"
                                                    id="payment-form">
                                                    @csrf
                                                    <input type="hidden" name="stripe_price_id"
                                                        value="{{ $price->stripe_price_id ?? '0' }}">


                                                    <div style="display: flex; align-items: center; gap: 10px;">

                                                        <button type="button"
                                                            class="btn btn-primary submit-btn checkout-button"
                                                            data-price-id="{{ $price->stripe_price_id ?? '0' }}">
                                                            Subscribe for {{ ucfirst($price->interval) }}
                                                        </button>


                                                    </div>
                                                </form>
                                            @endforeach
                                        @else
                                            <a href="{{ url('login-email') }}" class="btn">Choose Plan</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        const checkoutButtons = document.querySelectorAll('.checkout-button');
        const loader = document.getElementById('payment-loader');

        checkoutButtons.forEach(button => {
            button.addEventListener('click', async () => {
                const priceId = button.getAttribute('data-price-id');

                button.disabled = true;
                button.innerHTML = 'Processing...';

                try {
                    const response = await fetch("{{ url('patient-subscription-checkout-session') }}", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            price_id: priceId
                        }),
                    });

                    const session = await response.json();
                    if (session.id) {
                        // Redirect to Stripe Checkout
                        await stripe.redirectToCheckout({
                            sessionId: session.id
                        });
                    } else {
                        throw new Error(session.error || 'Session creation failed.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                } finally {
                    loader.style.display = 'none';
                    button.disabled = false;
                    button.innerHTML = `Subscribe for ${button.textContent.trim()}`;
                }
            });
        });
    </script>


    <!-- /Page Content -->
@endsection
