<?php $page = 'patient-accounts'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Accounts
        @endslot
        @slot('li_1')
            Accounts
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @component('components.sidebar_patient')
                @endcomponent

                <div class="col-lg-8 col-xl-9">
                    <div class="accunts-sec">
                        <div class="dashboard-header">
                            <div class="header-back">
                                <h3>Accounts</h3>
                            </div>
                        </div>
                        <div class="account-details-box">
                            <div class="row">
                                <div class="col-xxl-6 col-lg-7">
                                    <div class="account-payment-info">
                                        <h4>Statistics</h4>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6">
                                                <div class="payment-amount">
                                                    <h6><i class="fa-solid fa-file-invoice-dollar text-success"></i>Total
                                                        Balance</h6>
                                                    <span>${{ $totalBalance->total_balance ?? '00' }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="payment-amount">
                                                    <h6><i class="fa-solid fa-circle-question text-pink"></i>Requested</h6>
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-request">
                                            <span>Last Payment request : 24 Mar 2023</span>
                                            <a href="#payment_request" class="btn btn-primary prime-btn"
                                                data-bs-toggle="modal">Request Payment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-1 d-lg-none d-xxl-block"></div>
                                <div class="col-lg-5">
                                    <div class="bank-details-info">
                                        <h3>Bank Details</h3>
                                        <ul>
                                            <li>
                                                <h6>Bank Name</h6>
                                                <h5>{{ $totalBalance->bank_name ?? '--' }}</h5>
                                            </li>
                                            <li>
                                                <h6>Account Number</h6>
                                                <h5>{{ $totalBalance->account_name ?? '--' }}</h5>
                                            </li>
                                            <li>
                                                <h6>Branch Name</h6>
                                                <h5>{{ $totalBalance->branch_name ?? '--' }}</h5>
                                            </li>
                                            <li>
                                                <h6>Account Name</h6>
                                                <h5>{{ $totalBalance->account_number ?? '--' }}</h5>
                                            </li>
                                        </ul>
                                        <div class="edit-detail-link">
                                            <a href="#account_details" data-bs-toggle="modal">Edit Details</a>
                                            <a href="#other_accounts" data-bs-toggle="modal">Other Accounts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="account-detail-table">
                                <!-- Tab Menu -->
                                <nav class="accounts-tab">
                                    <ul class="nav nav-tabs-bottom">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#pat_accounts"
                                                data-bs-toggle="tab">Accounts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#pat_refundrequest" data-bs-toggle="tab">Refund
                                                Request</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /Tab Menu -->

                                <!-- Tab Content -->
                                <div class="tab-content pt-0">

                                    <!-- Accounts Tab -->
                                    <div id="pat_accounts" class="tab-pane fade show active">
                                        <ul class="header-list-btns d-inline-block mb-4">
                                            <li>
                                                <div class="input-block dash-search-input">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="search-icon"><i
                                                            class="fa-solid fa-magnifying-glass"></i></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="custom-new-table">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Account No</th>
                                                            <th>Reason</th>
                                                            <th>Debited / Credited On</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);" class="text-blue">#AC-1234</a>
                                                            </td>
                                                            <td>5396 5250 1908 XXXX</td>
                                                            <td>Appointment</td>
                                                            <td>26 Mar 2024</td>
                                                            <td>$300</td>
                                                            <td>
                                                                <span class="badge badge-success-bg">Completed</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);" class="text-blue">#AC-1235</a>
                                                            </td>
                                                            <td>6372 4902 4902 XXXX</td>
                                                            <td>Appointment</td>
                                                            <td>28 Mar 2024</td>
                                                            <td>$480</td>
                                                            <td>
                                                                <span class="badge badge-success-bg">Completed</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);" class="text-blue">#AC-1236</a>
                                                            </td>
                                                            <td>4892 0204 4924 XXXX</td>
                                                            <td>Appointment</td>
                                                            <td>11 Apr 2024</td>
                                                            <td>$250</td>
                                                            <td>
                                                                <span class="badge badge-success-bg">Completed</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);" class="text-blue">#AC-1237</a>
                                                            </td>
                                                            <td>5730 4892 0492 XXXX</td>
                                                            <td>Refund</td>
                                                            <td>18 Apr 2024</td>
                                                            <td>$220</td>
                                                            <td>
                                                                <span class="badge badge-warning-bg">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="text-blue">#AC-1238</a>
                                                            </td>
                                                            <td>7922 9024 5824 XXXX</td>
                                                            <td>Appointment</td>
                                                            <td>29 Apr 2024</td>
                                                            <td>$350</td>
                                                            <td>
                                                                <span class="badge badge-success-bg">Completed</span>
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
                                                    <a href="#" class="page-link"><i
                                                            class="fa-solid fa-chevron-left"></i></a>
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
                                                    <a href="#" class="page-link"><i
                                                            class="fa-solid fa-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Pagination -->
                                    </div>
                                    <!-- /Accounts Tab -->

                                    <!-- Refund Request Tab -->
                                    <div class="tab-pane fade" id="pat_refundrequest">
                                        <ul class="header-list-btns d-inline-block mb-4">
                                            <li>
                                                <div class="input-block dash-search-input">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="search-icon"><i
                                                            class="fa-solid fa-magnifying-glass"></i></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="custom-new-table">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Doctor</th>
                                                            <th>Appointment Date</th>
                                                            <th>Payment</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);"
                                                                    class="text-blue">#AC-1234</a>
                                                            </td>
                                                            <td>
                                                                <div class="table-avtatar">
                                                                    <a href="{{ url('doctor-profile') }}"><img
                                                                            src="{{ URL::asset('/assets/img/doctors-dashboard/doctor-profile-img.jpg') }}"
                                                                            alt="Img">Edalin Hendry</a>
                                                                </div>
                                                            </td>
                                                            <td>24 Mar 2024 - 10:30 AM</td>
                                                            <td>$300</td>
                                                            <td>
                                                                <span class="badge badge-warning-bg">Pending</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#" class="account-action"><i
                                                                            class="fa-solid fa-link"></i></a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span><a href="#refund-request" data-bs-toggle="modal"
                                                                        class="text-blue">Initiate Payment</a></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);"
                                                                    class="text-blue">#AC-1235</a>
                                                            </td>
                                                            <td>
                                                                <div class="table-avtatar">
                                                                    <a href="{{ url('doctor-profile') }}"><img
                                                                            src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                                            alt="Img">Shanta Neill</a>
                                                                </div>
                                                            </td>
                                                            <td>28 Mar 2024 - 11:15 AM</td>
                                                            <td>$250</td>
                                                            <td>
                                                                <span class="badge badge-success-bg">Completed</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#request_details_modal"
                                                                        class="account-action" data-bs-toggle="modal"><i
                                                                            class="fa-solid fa-link"></i></a>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:void(0);"
                                                                    class="text-blue">#AC-1236</a>
                                                            </td>
                                                            <td>
                                                                <div class="table-avtatar">
                                                                    <a href="{{ url('doctor-profile') }}"><img
                                                                            src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                            alt="Img">Anthony Tran</a>
                                                                </div>
                                                            </td>
                                                            <td>02 Apr 2024 - 04:15 PM</td>
                                                            <td>$380</td>
                                                            <td>
                                                                <span class="badge badge-danger-bg">Cancelled</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <a href="#request_cancel_modal" class="account-action"
                                                                        data-bs-toggle="modal"><i
                                                                            class="fa-solid fa-link"></i></a>
                                                                </div>

                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Pagination -->
                                        <div class="pagination dashboard-pagination">
                                            <ul>
                                                <li>
                                                    <a href="#" class="page-link"><i
                                                            class="fa-solid fa-chevron-left"></i></a>
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
                                                    <a href="#" class="page-link"><i
                                                            class="fa-solid fa-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Pagination -->
                                    </div>
                                    <!-- /Refund Request Tab -->

                                </div>
                                <!-- Tab Content -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
 
@endsection
