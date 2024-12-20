     <!-- Profile Sidebar -->
     <div class="profile-sidebar doctor-sidebar profile-sidebar-new">
         <div class="widget-profile pro-widget-content">
             <div class="profile-info-widget">
                 <a href="{{ url('doctor/doctor-profile-settings') }}" class="booking-doc-img">
                     <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                         alt="User Image">
                 </a>
                 <div class="profile-det-info">
                     <h3><a href="{{ url('doctor/doctor-profile-settings') }}">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                     </h3>
                     <div class="patient-details">
                         <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                     </div>
                     <span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>
                         {{ \Illuminate\Support\Facades\Auth::user()->specializations()->first()?->name }}</span>
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
                     <li class="{{ Request::is('doctor/dashboard') ? 'active' : '' }}">
                         <a href="{{ route('doctor-dashboard') }}">
                             <i class="fa-solid fa-shapes"></i>
                             <span>Dashboard</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('doctor-request') ? 'active' : '' }}">
                         <a href="{{ route('doctor-request.index') }}">
                             <i class="fa-solid fa-calendar-check"></i>
                             <span>Requests</span>
                             @if ($doctorRequestCount > 0)
                                 <small class="unread-msg">{{ $doctorRequestCount }}</small>
                             @endif
                         </a>
                     </li>
                     <li
                         class="{{ Request::is('doctor/doctor-appointments', 'doctor-appointments-grid', 'doctor-appointment-details', 'doctor-cancelled-appointment', 'doctor-cancelled-appointment-2', 'doctor-upcoming-appointment', 'doctor-appointment-start', 'doctor-completed-appointment') ? 'active' : '' }}">
                         <a href="{{ route('doctor-appointments') }}">
                             <i class="fa-solid fa-calendar-days"></i>
                             <span>Appointments</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('available-timings') ? 'active' : '' }}">
                         <a href="{{ route('available-timings') }}">
                             <i class="fa-solid fa-calendar-day"></i>
                             <span>Available Timings</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('doctor/my-patients', 'patient-profile') ? 'active' : '' }}">
                         <a href="{{ route('doctor.my-patients') }}">
                             <i class="fa-solid fa-user-injured"></i>
                             <span>My Patients</span>
                         </a>
                     </li>
                     {{-- <li class="{{ Request::is('doctor-specialities') ? 'active' : '' }}">
                        <a href="{{route('doctor-specialities')}}">
                            <i class="fa-solid fa-clock"></i>
                            <span>Specialties & Services</span>
                        </a>
                    </li> --}}
                     {{-- <li class="{{ Request::is('reviews') ? 'active' : '' }}">
                        <a href="{{route('reviews')}}">
                            <i class="fas fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li> --}}
                     <li class="{{ Request::is('accounts') ? 'active' : '' }}">
                         <a href="{{ route('accounts') }}">
                             <i class="fa-solid fa-file-contract"></i>
                             <span>Accounts</span>
                         </a>
                     </li>
                     {{-- <li class="{{ Request::is('invoices') ? 'active' : '' }}">
                        <a href="{{route('invoices')}}">
                            <i class="fa-solid fa-file-lines"></i>
                            <span>Invoices</span>
                        </a>
                    </li> --}}
                     <li class="{{ Request::is('doctor-payment') ? 'active' : '' }}">
                         <a href="{{ route('doctor-payment') }}">
                             <i class="fa-solid fa-money-bill-1"></i>
                             <span>Payout Settings</span>
                         </a>
                     </li>
                     <li class="{{ Request::is('chat-doctor') ? 'active' : '' }}">
                         <a href="{{ route('chat-doctor') }}">
                             <i class="fa-solid fa-comments"></i>
                             <span>Message</span>
                             @if ($unseenMessagesCount > 0)
                                 <small class="unread-msg">{{ $unseenMessagesCount }}</small>
                             @endif
                         </a>
                     </li>
                     {{-- <li class="">
                         <a href="#">
                             <i class="fa-solid fa-money-bill-1"></i>
                             <span>Presciptions</span>
                         </a>
                     </li> --}}
                     {{-- <li class="{{ Request::is('doctor-profile-settings','doctor-awards-settings','doctor-business-settings','doctor-clinics-settings') ? 'active' : '' }}">
                        <a href="{{route('doctor-profile-settings')}}">
                            <i class="fa-solid fa-user-pen"></i>
                            <span>Video meet</span>
                        </a>
                    </li> --}}
                     <li
                         class="{{ Request::is('doctor-profile-settings', 'doctor-awards-settings', 'doctor-business-settings', 'doctor-clinics-settings') ? 'active' : '' }}">
                         {{-- <a href="{{route('google.auth')}}"> --}}
                         <a href="{{ url('doctor/doctor-profile-settings') }}">

                             <i class="fa-solid fa-user-pen"></i>
                             <span>Profile setting</span>
                         </a>
                     </li>

                     {{-- <li class="{{ Request::is('social-media') ? 'active' : '' }}">
                        <a href="{{route('social-media')}}">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Social Media</span>
                        </a>
                    </li> --}}
                     <li class="{{ Request::is('doctor/doctor-help-and-support') ? 'active' : '' }}">
                         <a href="{{ url('doctor/doctor-help-and-support') }}">
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

                         <form id="logout-form" action="{{ route('logout-user') }}" method="POST"
                             style="display: none;">
                             @csrf
                         </form>
                     </li>
                 </ul>
             </nav>
         </div>
     </div>
     <!-- /Profile Sidebar -->
