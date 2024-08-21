<?php $page = 'maintenance'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Maintenance
        @endslot
        @slot('li_1')
            Maintenance
        @endslot
    @endcomponent
    <!-- Maintenance -->
    <section class="error-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <div class="error-info">
                        <div class="error-img">
                            <img src="{{ URL::asset('/assets/img/maintenance.png') }}" class="img-fluid"
                                alt="maintenance-image">
                        </div>
                        <div class="error-content">
                            <h2>We are Under Maintenance.</h2>
                            <p>Will be Back Soon!</p>
                            <a href="{{ url('/') }}" class="btn btn-primary prime-btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Maintenance -->
@endsection
