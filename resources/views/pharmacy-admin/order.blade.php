<?php $page = 'order'; ?>
@extends('layout.mainlayout_pharmacy_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Order</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="{{ url('pharmacy-admin/index_pharmacy_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Recent Orders -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0" id="orders_data">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supplier ID</th>
                                            <th>Supplier Name</th>
                                            <th>Order by</th>
                                            <th>Add order</th>
                                            <th>Order list</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Model -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg">Are you sure you want to delete?</p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modele -->
@endsection
