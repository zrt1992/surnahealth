<?php $page = 'patient-invoices'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Invoices
        @endslot
        @slot('li_1')
            Invoices
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar_patient')
                @endcomponent


                <!-- Invoices -->
                <div class="col-lg-8 col-xl-9">

                    <div class="dashboard-header">
                        <h3>Invoices</h3>
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
                                        <th>ID</th>
                                        <th>Doctor</th>
                                        <th>Appointment Date</th>
                                        <th>Booked on</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-21.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Edalin Hendry</a>
                                            </h2>
                                        </td>
                                        <td>24 Mar 2024</td>
                                        <td>21 Mar 2024</td>
                                        <td>$300</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-13.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">John Homes</a>
                                            </h2>
                                        </td>
                                        <td>17 Mar 2024</td>
                                        <td>14 Mar 2024</td>
                                        <td>$450</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Shanta Neill</a>
                                            </h2>
                                        </td>
                                        <td>11 Mar 2024</td>
                                        <td>07 Mar 2024</td>
                                        <td>$250</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Anthony Tran</a>
                                            </h2>
                                        </td>
                                        <td>26 Feb 2024</td>
                                        <td>23 Feb 2024</td>
                                        <td>$320</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Susan Lingo</a>
                                            </h2>
                                        </td>
                                        <td>18 Feb 2024</td>
                                        <td>15 Feb 2024</td>
                                        <td>$480</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Apt123</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Joseph Boyd</a>
                                            </h2>
                                        </td>
                                        <td>10 Feb 2024</td>
                                        <td>07 Feb 2024</td>
                                        <td>$260</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-blue-600" data-bs-toggle="modal"
                                                data-bs-target="#invoice_view">#Inv-2021</a></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                    <img class="avatar-img rounded-3"
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                        alt="User Image">
                                                </a>
                                                <a href="{{ url('doctor-profile') }}">Juliet Gabriel</a>
                                            </h2>
                                        </td>
                                        <td>28 Jan 2024</td>
                                        <td>25 Jan 2024</td>
                                        <td>$350</td>
                                        <td>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#invoice_view">
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-solid fa-print"></i>
                                                </a>
                                            </div>
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
                <!-- /Invoices -->

            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
