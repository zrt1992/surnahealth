<?php $page = 'orders-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Orders
        @endslot
        @slot('li_1')
            Orders
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @component('components.sidebar_patient')
                @endcomponent

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Order Id</th>
                                                            <th>Pharmacy Name</th>
                                                            <th class="text-center">Quantity</th>
                                                            <th class="text-center">Amount</th>
                                                            <th>Payment Gateway</th>
                                                            <th>Status</th>
                                                            <th>Order date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $json = file_get_contents(public_path('../public/assets/data/orders-list.json'));
                                                        $users = json_decode($json, true);
                                                    @endphp
                                                    @foreach ($users as $user)

                                                        <tr>
                                                            <td> {{ $user['id'] }} </td>
                                                            <td><a href="{{url('invoice-view')}}"> {{ $user['order_id'] }} </a></td>
                                                            <td> {{ $user['pharmacy_name'] }} </td>
                                                            <td> {{ $user['quantity'] }} </td>
                                                            <td> {{ $user['amount'] }} </td>
                                                            <td> {{ $user['payment_gateway'] }} </td>
                                                            <td><span class="{{ $user['Class'] }}"> {{ $user['status'] }} </span></td>
                                                            <td> {{ $user['order_date'] }} <span class="d-block text-info">{{ $user['time'] }} </span></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    <!-- /Page Content -->
@endsection
