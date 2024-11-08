     <!-- Profile Sidebar -->
     <div class="profile-sidebar doctor-sidebar profile-sidebar-new">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="{{route('doctor-profile')}}" class="booking-doc-img">
                    <img src="{{URL::asset('assets/img/services-six-1.png')}}" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3><a href="{{route('doctor-profile')}}">Dr Edalin Hendry</a></h3>
                    <div class="patient-details">
                        <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                    </div>
                    <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>Dentist</span>
                </div>
            </div>
        </div>
        <div class="doctor-available-head">
            <div class="input-block input-block-new">
                <label class="form-label">Availability <span class="text-danger">*</span></label>
                <select class="select form-control">
                    <option>I am Available Now</option>
                    <option>Not Available</option>
                </select>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="{{ Request::is('doctor-dashboard') ? 'active' : '' }}">
                        <a href="{{route('doctor-dashboard')}}">
                            <i class="fa-solid fa-shapes"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('doctor-request') ? 'active' : '' }}">
                        <a href="{{route('doctor-request')}}">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Requests</span>
                            <small class="unread-msg">2</small>
                        </a>
                    </li>
                    <li class="{{ Request::is('appointments','doctor-appointments-grid','doctor-appointment-details','doctor-cancelled-appointment','doctor-cancelled-appointment-2','doctor-upcoming-appointment','doctor-appointment-start','doctor-completed-appointment') ? 'active' : '' }}">
                        <a href="{{route('appointments')}}">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('available-timings') ? 'active' : '' }}">
                        <a href="{{route('available-timings')}}">
                            <i class="fa-solid fa-calendar-day"></i>
                            <span>Available Timings</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('my-patients','patient-profile') ? 'active' : '' }}">
                        <a href="{{route('my-patients')}}">
                            <i class="fa-solid fa-user-injured"></i>
                            <span>My Patients</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('doctor-specialities') ? 'active' : '' }}">
                        <a href="{{route('doctor-specialities')}}">
                            <i class="fa-solid fa-clock"></i>
                            <span>Specialties & Services</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('reviews') ? 'active' : '' }}">
                        <a href="{{route('reviews')}}">
                            <i class="fas fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('accounts') ? 'active' : '' }}">
                        <a href="{{route('accounts')}}">
                            <i class="fa-solid fa-file-contract"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('invoices') ? 'active' : '' }}">
                        <a href="{{route('invoices')}}">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Invoices</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('doctor-payment') ? 'active' : '' }}">
                        <a href="{{route('doctor-payment')}}">
                            <i class="fa-solid fa-money-bill-1"></i>
                            <span>Payout Settings</span>
                        </a>
                    </li>																																				
                    <li class="{{ Request::is('chat-doctor') ? 'active' : '' }}">
                        <a href="{{route('chat-doctor')}}">
                            <i class="fa-solid fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">7</small>
                        </a>
                    </li>
                    {{-- <li class="{{ Request::is('doctor-profile-settings','doctor-awards-settings','doctor-business-settings','doctor-clinics-settings') ? 'active' : '' }}">
                        <a href="{{route('doctor-profile-settings')}}">
                            <i class="fa-solid fa-user-pen"></i>
                            <span>Video meet</span>
                        </a>
                    </li> --}}
                    <li class="{{ Request::is('doctor-profile-settings','doctor-awards-settings','doctor-business-settings','doctor-clinics-settings') ? 'active' : '' }}">
                        <a href="{{route('google.auth')}}">
                            <i class="fa-solid fa-user-pen"></i>
                            <span>Video meet</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('social-media') ? 'active' : '' }}">
                        <a href="{{route('social-media')}}">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Social Media</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('doctor-change-password') ? 'active' : '' }}">
                        <a href="{{route('doctor-change-password')}}">
                            <i class="fa-solid fa-key"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('logout-user') ? 'active' : '' }}">
                        <a href="{{route('logout-user')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout-user') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
     <!-- /Profile Sidebar -->
