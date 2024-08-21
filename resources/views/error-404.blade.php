<?php $page = 'error-404'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Error 404
        @endslot
        @slot('li_1')
            Error 404
        @endslot
    @endcomponent
    <!-- Error 404 -->
    <section class="error-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <div class="error-info">
                        <div class="error-404-img">
                            <img src="{{ URL::asset('/assets/img/error-404.png') }}" class="img-fluid" alt="error-404-image">
                            <div class="error-content error-404-content">
                                <h2>Oops! That Page Can’t Be Found.</h2>
                                <p>The page you are looking for was never existed.</p>
                                <a href="{{ url('/') }}" class="btn btn-primary prime-btn">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Error 404 -->
@endsection
