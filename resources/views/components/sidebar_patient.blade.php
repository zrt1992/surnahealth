<!-- Profile Sidebar -->
<div class="col-lg-4 col-xl-3 theiaStickySidebar">

    <!-- Profile Sidebar -->
    <div class="profile-sidebar patient-sidebar profile-sidebar-new">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="{{ url('profile-settings') }}" class="booking-doc-img">
                    <img src="{{ URL::asset('assets/img/doctors-dashboard/profile-06.jpg') }}" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3><a href="{{ url('profile-settings') }}">Hendrita</a></h3>
                    <div class="patient-details">
                        <h5 class="mb-0">Patient ID : PT254654</h5>
                    </div>
                    <span>Female <i class="fa-solid fa-circle"></i> 32 years 03 Months</span>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="{{ Request::is('patient-dashboard') ? 'active' : '' }}">
                        <a href="{{ url('patient-dashboard') }}">
                            <i class="fa-solid fa-shapes"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('patient-appointments','patient-upcoming-appointments','patient-completed-appointments','patient-cancelled-appointments','patient-appointments-grid','patient-appointment-details','patient-upcoming-appointment','patient-completed-appointment','patient-cancelled-appointment') ? 'active' : '' }}">
                        <a href="{{ url('patient-appointments') }}">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>My Appointments</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('favourites') ? 'active' : '' }}">
                        <a href="{{ url('favourites') }}">
                            <i class="fa-solid fa-user-doctor"></i>
                            <span>Favourites</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dependent') ? 'active' : '' }}">
                        <a href="{{ url('dependent') }}">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Dependants</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('medical-records') ? 'active' : '' }}">
                        <a href="{{ url('medical-records') }}">
                            <i class="fa-solid fa-money-bill-1"></i>
                            <span>Add Medical Records</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('patient-accounts') ? 'active' : '' }}">
                        <a href="{{ url('patient-accounts') }}">
                            <i class="fa-solid fa-file-contract"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('patient-invoices') ? 'active' : '' }}">
                        <a href="{{ url('patient-invoices') }}">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Invoices</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('chat') ? 'active' : '' }}">
                        <a href="{{ url('chat') }}">
                            <i class="fa-solid fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">7</small>
                        </a>
                    </li>
                    <li class="{{ Request::is('profile-settings') ? 'active' : '' }}">
                        <a href="{{ url('profile-settings') }}">
                            <i class="fa-solid fa-user-pen"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('medical-details') ? 'active' : '' }}">
                        <a href="{{ url('medical-details') }}">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Medical Details</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('change-password') ? 'active' : '' }}">
                        <a href="{{ url('change-password') }}">
                            <i class="fa-solid fa-key"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('login') ? 'active' : '' }}">
                        <a href="{{ url('login') }}">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /Profile Sidebar -->

</div>
<!-- / Profile Sidebar -->
