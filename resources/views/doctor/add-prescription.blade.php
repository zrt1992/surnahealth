<?php $page = 'add-prescription'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Add Prescription
        @endslot
        @slot('li_1')
            Add Prescription
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-xl-3 theiaStickySidebar">

                    @component('components.sidebar_doctor')
                    @endcomponent

                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add Prescription</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="biller-info">
                                        <h4 class="d-block">Dr. {{ $doctor->name ?? '' }}</h4>
                                        <span
                                            class="d-block text-sm text-muted">{{ $doctor->specializations->first()->name ?? '--' }}</span>
                                        <span class="d-block text-sm text-muted">{{ $doctor->city ?? '--' }},
                                            {{ $doctor->state ?? '--' }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <div class="billing-info">
                                        <h4 class="d-block">1 November 2023</h4>
                                        <span class="d-block text-muted">#INV0001</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Add Item -->
                            <div class="add-more-item text-end">
                                <a href="javascript:void(0);" class="add-prescription"><i class="fas fa-plus-circle"></i>
                                    Add Item</a>
                            </div>
                            <!-- /Add Item -->

                            <!-- Prescription Item -->
                            <form action="{{ route('store-prescription') }}">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center add-table-prescription" id="prescription-table">
                                            <thead>
                                                <tr>
                                                    <th class="table-name">Name</th>
                                                    <th>Quantity</th>
                                                    <th class="table-days">Days</th>
                                                    <th>Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                    <tbody >
                                                        <tr class="test">
                                                            <input type="hidden" name="user_id[]"
                                                                value="{{ $id }}">
                                                            <td><input class="form-control" type="text" name="name[]">
                                                            </td>
                                                            <td><input class="form-control" type="number"
                                                                    name="quantity[]"></td>
                                                            <td><input class="form-control" type="number" name="days[]">
                                                            </td>
                                                            <td>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="morning[]" value="1"> Morning
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="afternoon[]" value="1"> Afternoon
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="evening[]" value="1"> Evening
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="night[]" value="1"> Night
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn bg-danger-light trash"><i
                                                                        class="far fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                 </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /Prescription Item -->

                            <!-- Signature -->
                            <div class="row">
                                <div class="col-md-12 text-end">
                                    <div class="signature-wrap">
                                        <div class="signature">
                                            Click here to sign
                                        </div>
                                        <div class="sign-name">
                                            <p class="mb-0">( Dr. Darren Elder )</p>
                                            <span class="text-muted">Signature</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Signature -->

                            <!-- Submit Section -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-set-button">
                                        <button class="btn btn-light" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <!-- /Submit Section -->

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('layout.partials.custom_scripts')
    <!-- /Page Content -->
@endsection
