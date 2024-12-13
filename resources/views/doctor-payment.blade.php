<?php $page = 'doctor-payment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payout Settings
        @endslot
        @slot('li_1')
            Payout Settings
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-xl-3 theiaStickySidebar">

                    @component('components.sidebar_doctor')
                    @endcomponent
                    
                </div>

                <!-- Payouts -->
                <div class="col-lg-8 col-xl-9">

                    <div class="payout-wrap">
                        <div class="payout-title">
                            <h4>Settings</h4>
                            <p>All the earning will be sent to below selected payout method</p>
                        </div>
                        <div class="stripe-wrapper">
                            <div class="stripe-box">
                                <div class="stripe-img">
                                    <img src="{{ URL::asset('assets/img/icons/stripe.svg')}}" alt="img">
                                </div>
                                <a href="" class="btn"><i class="fa-solid fa-gear"></i>Configure</a>
                              
                            </div>
                            <div class="stripe-box active">
                                <div class="stripe-img">
                                    <img src="{{ URL::asset('assets/img/icons/paypal.svg')}}" alt="img">
                                </div>
                                {{-- <a href="javascript:void(0);" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#add_configure"><i class="fa-solid fa-gear"></i>Configure</a> --}}

                                     <a href="javascript:void(0);" class="btn" ><i class="fa-solid fa-gear"></i>Configure</a> 
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-header">
                        <h3>Payouts</h3>
                    </div>

                    <div class="search-header">
                        <div class="search-field">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>

                    <div class="custom-table">
                        <div class="table-responsive">
                            <table class="table table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Payment Method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$200</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$200</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$350</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24 Mar 2024</td>
                                        <td>Paypal</td>
                                        <td>$100</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04 Apr 2024</td>
                                        <td>Paypal</td>
                                        <td>$180</td>
                                        <td>
                                            <span class="badge badge-green status-badge">Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination dashboard-pagination">
                        <ul>
                            <li>
                                <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li>
                                <a href="#" class="page-link active">2</a>
                            </li>
                            <li>
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li>
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li>
                                <a href="#" class="page-link">...</a>
                            </li>
                            <li>
                                <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /Payouts -->
            </div>

        </div>

    </div>
    <!-- /Page Content -->

@endsection
