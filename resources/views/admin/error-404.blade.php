<?php $page = 'error-404'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper error-page">
        <div class="error-box">
            <h1>404</h1>
            <h3 class="h2 mb-3"><i class="fa fa-warning"></i> Oops! Page not found!</h3>
            <p class="h4 fw-medium">The page you requested was not found.</p>
            <a href="{{ url('admin/index_admin') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
