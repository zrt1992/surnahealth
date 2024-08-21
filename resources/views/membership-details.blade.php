<?php $page = 'membership-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Membership
        @endslot
        @slot('li_1')
            Membership
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @component('components.sidebar_patient')
                @endcomponent
                <div class="col-lg-8 col-xl-9">

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
                                                            <th>Plan Name</th>
                                                            <th>Type</th>
                                                            <th>Amount</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Monthly Plan</td>
                                                            <td>Month</td>
                                                            <td>$150</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>11 Dec 2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Yearly plan</td>
                                                            <td>Year</td>
                                                            <td>$950</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>10 Nov 2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Whole Body Check</td>
                                                            <td>Month</td>
                                                            <td>$100</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>11 Dec 2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Child Health Check</td>
                                                            <td>Month</td>
                                                            <td>$100</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>11 Dec 2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Senior citizen Health Check</td>
                                                            <td>Month</td>
                                                            <td>$105</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>11 Dec 2023</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Personalized Health Check</td>
                                                            <td>Month</td>
                                                            <td>$105</td>
                                                            <td>11 Nov 2023</td>
                                                            <td>11 Dec 2023</td>
                                                        </tr>
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
