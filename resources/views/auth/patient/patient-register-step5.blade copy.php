<?php $page = 'patient-register-step5'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content login-page pt-0">
        <div class="container-fluid">
            
            <!-- Register Content -->
            <div class="account-content">
                <div class="d-flex align-items-center">
                    <div class="login-right">
                        <div class="inner-right-login">
                            <div class="login-header">
                                <div class="logo-icon">
                                    <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Surna-logo">
                                </div>
                                <div class="step-list">
                                    <ul>
                                        <li><a href="javascript:;" class="active-done">1</a></li>
                                        <li><a href="javascript:;" class="active-done">2</a></li>
                                        <li><a href="javascript:;" class="active-done">3</a></li>
                                        <li><a href="javascript:;" class="active-done">4</a></li>
                                        <li><a href="javascript:;" class="active">5</a></li>
                                    </ul>
                                </div>
                                
                                <form method="post">
                                    <h3 class="my-4">Subscription</h3>
                                    <div class="mb-3">
                                        <label class="mb-2">Select Payment Method</label>
                                        <select class="form-select form-control select" id="heart_rate" name="heart_rate" tabindex="-1" aria-hidden="true">
                                            <option value="">Select Your Method</option>
                                            <option value="stripe">Stripe</option>
                                           
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Select Subscription Plan</label>
                                        <select class="form-select form-control select" name="subscription_plan">
                                            <option value="">Select Your Plan</option>
                                            
                                            @foreach ($plans as $plan)
                                                @foreach ($plan->prices as $price)  <!-- Loop through the prices for each plan -->
                                                    <option value="{{ $price->stripe_price_id }}">
                                                        {{ $plan->name }} (${{ $price->amount / 100 }}/{{ ucfirst($price->interval) }})
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="mt-5">
                                        <a href="{{url('patient-dashboard')}}" class="btn btn-primary w-100 btn-lg login-btn step5_submit">Continue </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="login-bottom-copyright">
                            <span>© <script>document.write(new Date().getFullYear())</script> Surna. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Register Content -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
