<?php $page = 'blank-page'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blank Page
        @endslot
        @slot('li_1')
            Blank Page
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Blank Page</h5>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
