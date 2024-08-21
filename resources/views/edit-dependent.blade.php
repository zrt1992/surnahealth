<?php $page = 'edit-dependent'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Dependent
        @endslot
        @slot('li_1')
            Edit Dependent
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-5 col-xl-5 col-sm-12 dependent">
                    <h2 class="text-center mb-4">Edit Dependent</h2>
                    <div class="card">
                        <div class="card-body">
                            <!-- Profile Settings Form -->
                            <form>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Name</label>
                                            <input type="text" class="form-control" value="Sherif">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Gender</label>
                                            <select class="form-select form-control">
                                                <option>Male</option>
                                                <option>Fe Male</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Relationship</label>
                                            <select class="form-select form-control">
                                                <option>Son</option>
                                                <option>Daughter</option>
                                                <option>Father</option>
                                                <option>Mother</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Phone Number (optional)</label>
                                            <input type="text" class="form-control" value="9845346123">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Email (optional)</label>
                                            <input type="text" class="form-control" value="abc@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                </div>
                            </form>
                            <!-- /Profile Settings Form -->

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
