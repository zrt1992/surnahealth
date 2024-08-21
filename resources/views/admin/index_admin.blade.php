<?php $page = 'index_admin'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary border-primary">
                                    <i class="fe fe-users"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>168</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Doctors</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>487</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Patients</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-danger border-danger">
                                    <i class="fe fe-money"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>485</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Appointment</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning border-warning">
                                    <i class="fe fe-folder"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>$62523</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Revenue</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
						
                    <!-- Sales Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Revenue</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea"></div>
                        </div>
                    </div>
                    <!-- /Sales Chart -->
                    
                </div>
                <div class="col-md-12 col-lg-6">
                
                    <!-- Invoice Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Status</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine"></div>
                        </div>
                    </div>
                    <!-- /Invoice Chart -->
                    
                </div>		
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                
                    <!-- Recent Orders -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Doctors List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Speciality</th>
                                            <th>Earned</th>
                                            <th>Reviews</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Dr. Ruby Perrin</a>
                                                </h2>
                                            </td>
                                            <td>Dental</td>
                                            <td>$3200.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Dr. Darren Elder</a>
                                                </h2>
                                            </td>
                                            <td>Dental</td>
                                            <td>$3100.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/doctors/doctor-thumb-03.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Dr. Deborah Angel</a>
                                                </h2>
                                            </td>
                                            <td>Cardiology</td>
                                            <td>$4000.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/doctors/doctor-thumb-04.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Dr. Sofia Brient</a>
                                                </h2>
                                            </td>
                                            <td>Urology</td>
                                            <td>$3200.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/doctors/doctor-thumb-05.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Dr. Marvin Campbell</a>
                                                </h2>
                                            </td>
                                            <td>Orthopaedics</td>
                                            <td>$3500.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->
                    
                </div>
                <div class="col-md-6 d-flex">
                
                    <!-- Feed Activity -->
                    <div class="card  card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Patients List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>													
                                            <th>Patient Name</th>
                                            <th>Phone</th>
                                            <th>Last Visit</th>
                                            <th>Paid</th>													
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/patients/patient1.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Charlene Reed </a>
                                                </h2>
                                            </td>
                                            <td>8286329170</td>
                                            <td>20 Oct 2023</td>
                                            <td>$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/patients/patient2.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Travis Trimble </a>
                                                </h2>
                                            </td>
                                            <td>2077299974</td>
                                            <td>22 Oct 2023</td>
                                            <td>$200.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/patients/patient3.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Carl Kelly</a>
                                                </h2>
                                            </td>
                                            <td>2607247769</td>
                                            <td>21 Oct 2023</td>
                                            <td>$250.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/patients/patient4.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}"> Michelle Fairfax</a>
                                                </h2>
                                            </td>
                                            <td>5043686874</td>
                                            <td>21 Sep 2023</td>
                                            <td>$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{url('admin/profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{URL::asset('/assets_admin/img/patients/patient5.jpg')}}" alt="User Image"></a>
                                                    <a href="{{url('admin/profile')}}">Gina Moore</a>
                                                </h2>
                                            </td>
                                            <td>9548207887</td>
                                            <td>18 Sep 2023</td>
                                            <td>$350.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Feed Activity -->
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Recent Orders -->
                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">Appointment List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0" id="index_admin_data">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name</th>
                                            <th>Speciality</th>
                                            <th>Patient Name</th>
                                            <th>Apointment Time</th>
                                            <th>Status</th>
                                            <th>Amount</th>
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
@endsection
