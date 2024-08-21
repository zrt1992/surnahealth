<?php $page = 'error-500'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Error 500
        @endslot
        @slot('li_1')
            Error 500
        @endslot
    @endcomponent
    <!-- Error 500 -->
    <section class="error-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <div class="error-info">
                        <div class="error-img">
                            <img src="{{ URL::asset('/assets/img/error-500.png') }}" class="img-fluid" alt="error-500-image">
                        </div>
                        <div class="error-content">
                            <h2>Oops! That Page Can’t Be Found.</h2>
                            <p>The page you are looking for was never existed.</p>
                            <a href="{{ url('/') }}" class="btn btn-primary prime-btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Error 500 -->
@endsection
