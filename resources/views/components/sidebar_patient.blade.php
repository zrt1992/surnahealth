<!-- Profile Sidebar -->
<div class="col-lg-4 col-xl-3 theiaStickySidebar">

    <!-- Profile Sidebar -->
    <div class="profile-sidebar patient-sidebar profile-sidebar-new">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="{{ route('profile-settings') }}" class="booking-doc-img">
                    <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                        alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3><a href="{{ route('profile-settings') }}">
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}</a></h3>
                    <div class="patient-details">
                        <h5 class="mb-0">Patient ID : PT254654</h5>
                    </div>
                    <span>{{ \Illuminate\Support\Facades\Auth::user()->gender ?? '--' }} <i
                            class="fa-solid fa-circle"></i>{{ calculateAge(\Illuminate\Support\Facades\Auth::user()->dob) }}</span>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="{{ Request::is('patient/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('patient-dashboard') }}">
                            <i class="fa-solid fa-shapes"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('patient/favourites') ? 'active' : '' }}">
                        <a href="{{ route('favourites') }}">
                            <i class="fa-solid fa-user-doctor"></i>
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li
                        class="{{ Request::is('patient/patient-appointments', 'patient-upcoming-appointments', 'patient-completed-appointments', 'patient-cancelled-appointments', 'patient-appointments-grid', 'patient-appointment-details', 'patient-upcoming-appointment', 'patient-completed-appointment', 'patient-cancelled-appointment') ? 'active' : '' }}">
                        <a href="{{ route('patient-appointments') }}">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>My Appointments</span>
                        </a>
                    </li>

                    {{-- <li class="{{ Request::is('patient/dependent') ? 'active' : '' }}">
                        <a href="{{ route('dependent') }}">
                            <i class="fa-solid fa-user-plus"></i>
                            <span>Dependants</span>
                        </a>
                    </li> --}}
                    <li class="{{ Request::is('patient-prescription') ? 'active' : '' }}">
                        <a href="{{ route('patient-prescription') }}">
                            <i class="fa-solid fa-money-bill-1"></i>
                            <span>Presciptions</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('patient/medical-details') ? 'active' : '' }}">
                        <a href="{{ route('medical-details') }}">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Health Tracker</span>
                        </a>
                    </li>
                    {{-- <li class="{{ Request::is('patient-accounts') ? 'active' : '' }}">
                        <a href="{{ route('patient-accounts') }}">
                            <i class="fa-solid fa-file-contract"></i>
                            <span>Accounts</span>
                        </a>
                    </li> --}}
                    {{-- <li class="{{ Request::is('patient-invoices') ? 'active' : '' }}">
                        <a href="{{ route('patient-invoices') }}">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Invoices</span>
                        </a>
                    </li> --}}
                    <li class="{{ Request::is('patient/chat') ? 'active' : '' }}">
                        <a href="{{ route('patient-chat') }}">
                            <i class="fa-solid fa-comments"></i>
                            <span>Message</span>
                            @if ($unseenMessagesCount > 0)
                                <small class="unread-msg">{{ $unseenMessagesCount }}</small>
                            @endif
                        </a>
                    </li>
                    <li class="{{ Request::is('patient/profile-settings') ? 'active' : '' }}">
                        <a href="{{ route('profile-settings') }}">
                            <i class="fa-solid fa-user-pen"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>

                    {{-- <li class="{{ Request::is('patient/change-password') ? 'active' : '' }}">
                        <a href="{{ route('patient.change-password') }}">
                            <i class="fa-solid fa-key"></i>
                            <span>Setting</span>
                        </a>
                    </li> --}}
                    <li class="{{ Request::is('patient/patient-help-and-support') ? 'active' : '' }}">
                        <a href="{{ url('patient/patient-help-and-support') }}">
                            <i class="fa-solid fa-key"></i>
                            <span>Help & Support</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('logout-user') ? 'active' : '' }}">
                        <a href="{{ route('logout-user') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout-user') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /Profile Sidebar -->

</div>
<!-- / Profile Sidebar -->
