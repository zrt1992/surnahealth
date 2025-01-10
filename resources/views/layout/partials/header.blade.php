@if (Route::is(['pharmacy-index']))
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="special-offer-content">
                        <p>Special offer! Get -20% off for first order with minimum <span>$200.00</span> in cart.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-header-right">
                        <ul class="nav">
                            <li>
                                <div class="dropdown lang-dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                        data-bs-toggle="dropdown">
                                        English
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">French</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Spanish</a>
                                        <a class="dropdown-item" href="javascript:void(0);">German</a>
                                    </div>
                                </div>
                                <div class="dropdown lang-dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                        data-bs-toggle="dropdown">
                                        USD
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Euro</a>
                                        <a class="dropdown-item" href="javascript:void(0);">INR</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Dinar</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="btn log-register">
                                    <a href="{{ url('login') }}" class="me-1">
                                        <span><i class="feather-user"></i></span> Sign In
                                    </a> /
                                    <a href="{{ url('register') }}" class="ms-1">Sign Up</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Header -->

    <!-- Cart Section -->
    <div class="cart-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="cart-logo">
                        <a href="{{ url('index') }}">
                            <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-search">
                        <form action="{{ url('pharmacy-search') }}">
                            <div class="enter-pincode">
                                <i class="feather-map-pin"></i>
                                <div class="enter-pincode-input">
                                    <input type="text" class="form-control" placeholder="Enter Pincode">
                                </div>
                            </div>
                            <div class="cart-search-input">
                                <input type="text" class="form-control"
                                    placeholder="Search for medicines, health products and more">
                            </div>
                            <div class="cart-search-btn">
                                <button type="submit" class="btn">
                                    <i class="feather-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shopping-cart-list">
                        <ul class="nav">
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/cart-favourite.svg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <div class="shopping-cart-amount">
                                    <div class="shopping-cart-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/shopping-bag.svg') }}"
                                            alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="shopping-cart-content">
                                        <p>Shopping cart</p>
                                        <h6>$57.00</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Cart Section -->

    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="browse-categorie">
                    <div class="dropdown categorie-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icons/browse-categorie.svg') }}" alt=""> Browse
                            Categories
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Ayush</a>
                            <a class="dropdown-item" href="javascript:void(0);">Covid Essentials</a>
                            <a class="dropdown-item" href="javascript:void(0);">Devices</a>
                            <a class="dropdown-item" href="javascript:void(0);">Glucometers</a>
                        </div>
                    </div>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu megamenu">
                            <a href="{{ url('/') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu mega-submenu">
                                <li>
                                    <div class="megamenu-wrapper">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-01.jpg') }}"
                                                                class="img-fluid " alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index') }}" class="inner-demo-img">General
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo ">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-2') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-02.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-2') }}" class="inner-demo-img">General
                                                            Home
                                                            2</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-3') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-03.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-3') }}" class="inner-demo-img">General
                                                            Home
                                                            3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-4') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-04.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-4') }}" class="inner-demo-img">General
                                                            Home
                                                            4</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-5') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-05.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-5') }}"
                                                            class="inner-demo-img">Cardiology
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-6') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-06.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-6') }}" class="inner-demo-img">Eye
                                                            Care
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-7') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-07.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-7') }}"
                                                            class="inner-demo-img">Veterinary
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-8') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-08.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-8') }}"
                                                            class="inner-demo-img">Paediatric
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-9') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-09.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-9') }}"
                                                            class="inner-demo-img">Fertility
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-10') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-10.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-10') }}" class="inner-demo-img">ENT
                                                            Hospital
                                                            Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-11') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-11.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-11') }}"
                                                            class="inner-demo-img">Cosmetics Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-12') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-12.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-12') }}" class="inner-demo-img">Lab
                                                            Test Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-13') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-13.jpg') }}"
                                                                class="img-fluid" alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-13') }}"
                                                            class="inner-demo-img">Homecare Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="single-demo">
                                                    <div class="demo-img">
                                                        <a href="{{ url('index-14') }}" class="inner-demo-img"><img
                                                                src="{{ URL::asset('/assets/img/home/home-14.jpg') }}"
                                                                class="img-fluid " alt="img"></a>
                                                    </div>
                                                    <div class="demo-info">
                                                        <a href="{{ url('index-14') }}"
                                                            class="inner-demo-img">Dentists</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('doctor-dashboard') }}">Doctor Dashboard</a></li>
                                <li><a href="{{ url('doctor/doctor-appointments') }}">Appointments</a></li>
                                <li><a href="{{ url('schedule-timings') }}">Schedule Timing</a></li>
                                <li><a href="{{ url('doctor/my-patients') }}">Patients List</a></li>
                                <li><a href="{{ url('patient-profile') }}">Patients Profile</a></li>
                                <li><a href="{{ url('chat-doctor') }}">Chat</a></li>
                                <li><a href="{{ url('invoices') }}">Invoices</a></li>
                                <li><a href="{{ url('doctor/doctor-profile-settings') }}">Profile Settings</a></li>
                                <li><a href="{{ url('reviews') }}">Reviews</a></li>
                                <li><a href="{{ url('doctor-register') }}">Doctor Register</a></li>
                                <li class="has-submenu">
                                    <a href="{{ url('doctor-blog') }}">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('doctor-blog') }}">Blog</a></li>
                                        <li><a href="{{ url('blog-details') }}">Blog view</a></li>
                                        <li><a href="{{ url('doctor-add-blog') }}">Add Blog</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Doctors</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('map-grid') }}">Map Grid</a></li>
                                        <li><a href="{{ url('map-list') }}">Map List</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Search Doctor</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('search') }}">Search Doctor 1</a></li>
                                        <li><a href="{{ url('search-2') }}">Search Doctor 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('doctor-profile') }}">Doctor Profile</a></li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Booking</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('booking') }}">Booking 1</a></li>
                                        <li><a href="{{ url('booking-2') }}">Booking 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                <li><a href="{{ url('booking-success') }}">Booking Success</a></li>
                                <li><a href="{{ url('patient-dashboard') }}">Patient Dashboard</a></li>
                                <li><a href="{{ url('favourites') }}">Favourites</a></li>
                                <li><a href="{{ url('chat') }}">Chat</a></li>
                                <li><a href="{{ url('profile-settings') }}">Profile Settings</a></li>
                                <li><a href="{{ url('patient.change-password') }}">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu active">
                            <a href="javascript:void(0);">Pharmacy <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="active"><a href="{{ url('pharmacy-index') }}">Pharmacy</a></li>
                                <li><a href="{{ url('pharmacy-details') }}">Pharmacy Details</a></li>
                                <li><a href="{{ url('pharmacy-search') }}">Pharmacy Search</a></li>
                                <li><a href="{{ url('product-all') }}">Product</a></li>
                                <li><a href="{{ url('product-description') }}">Product Description</a></li>
                                <li><a href="{{ url('cart') }}">Cart</a></li>
                                <li><a href="{{ url('product-checkout') }}">Product Checkout</a></li>
                                <li><a href="{{ url('payment-success') }}">Payment Success</a></li>
                                <li><a href="{{ url('pharmacy-register') }}">Pharmacy Register</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Call</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('voice-call') }}">Voice Call</a></li>
                                        <li><a href="{{ url('video-call') }}">Video Call</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Invoices</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('invoices') }}">Invoices</a></li>
                                        <li><a href="{{ url('invoice-view') }}">Invoice View</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Authentication</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('login-email') }}">Login Email</a></li>
                                        <li><a href="{{ url('login-phone') }}">Login Phone</a></li>
                                        <li><a href="{{ url('doctor-signup') }}">Doctor Signup</a></li>
                                        <li><a href="{{ url('patient-signup') }}">Patient Signup</a></li>
                                        <li><a href="{{ url('forgot-password') }}">Forgot Password 1</a></li>
                                        <li><a href="{{ url('forgot-password2') }}">Forgot Password 2</a></li>
                                        <li><a href="{{ url('login-email-otp') }}">Email OTP</a></li>
                                        <li><a href="{{ url('login-phone-otp') }}">Phone OTP</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Error Pages</a>
                                    <ul class="submenu inner-submenu">
                                        <li><a href="{{ url('error-404') }}">404 Error</a></li>
                                        <li><a href="{{ url('error-500') }}">500 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('blank-page') }}">Starter Page</a></li>
                                <li><a href="{{ url('pricing') }}">Pricing Plan</a></li>
                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                                <li><a href="{{ url('maintenance') }}">Maintenance</a></li>
                                <li><a href="{{ url('coming-soon') }}">Coming Soon</a></li>
                                <li><a href="{{ url('terms-condition') }}">Terms & Condition</a></li>
                                <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('components') }}">Components</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:;">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('blog-list') }}">Blog List</a></li>
                                <li><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                                <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:;">Admin <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a></li>
                                <li><a href="{{ url('pharmacy-admin/index_pharmacy_admin') }}"
                                        target="_blank">Pharmacy Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- /Header -->
@endif

<!-- Header -->
@if (!Route::is(['pharmacy-index', 'signup', 'booking-success-one', 'payment', 'consultation', 'paitent-details']))
    @if (
        !Route::is([
            '/',
            'index',
            'index-2',
            'index-3',
            'index-5',
            'index-6',
            'index-7',
            'index-8',
            'index-9',
            'index-10',
            'index-11',
            'index-12',
            'index-13',
            'index-14',
        ]))
        <header class="header header-custom header-fixed header-one">
    @endif
    @if (Route::is('index', '/'))
        <header class="header header-custom header-fixed header-one home-head-one">
    @endif
    @if (Route::is(['index-2']))
        <header class="header header-trans header-two">
    @endif
    @if (Route::is(['index-3']))
        <header class="header header-trans header-three header-eight">
    @endif
    @if (Route::is(['index-5']))
        <header class="header header-custom header-fixed header-ten">
    @endif
    @if (Route::is(['index-6']))
        <header class="header header-trans header-eleven">
    @endif
    @if (Route::is(['index-7']))
        <header class="header header-fixed header-fourteen header-twelve veterinary-header">
    @endif
    @if (Route::is(['index-8']))
        <header class="header header-fixed header-fourteen header-twelve header-thirteen">
    @endif
    @if (Route::is(['index-9']))
        <header class="header header-fixed header-fourteen">
    @endif
    @if (Route::is(['index-10']))
        <header class="header header-fixed header-fourteen header-fifteen ent-header">
    @endif
    @if (Route::is(['index-11']))
        <header class="header header-fixed header-fourteen header-sixteen">
    @endif
    @if (Route::is(['index-12']))
        <header class="header header-fixed header-fourteen header-twelve header-thirteen">
    @endif
    @if (Route::is(['index-13']))
        <header class="header header-custom header-fixed header-ten home-care-header">
            <div class="header-top-wrap">
                <div class="container">
                    <div class="header-top-bar">
                        <ul class="header-contact">
                            <li><i class="fa-solid fa-envelope"></i>surna@example.com</li>
                            <li><i class="fa-solid fa-location-dot"></i>231 madison Street, NewYork, USA</li>
                        </ul>
                        <ul class="social-icon">
                            <li>
                                <select class="select">
                                    <option>English</option>
                                    <option>Japanese</option>
                                </select>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    @endif
    @if (Route::is(['index-14']))
        <header class="header header-custom header-fixed header-ten home-care-header dentist-header">
            <div class="header-top-wrap">
                <div class="container">
                    <div class="header-top-bar">
                        <ul class="header-contact">
                            <li><span class="question-mark-icon"><i class="fa-solid fa-question"></i></span>Have any
                                Questions?</li>
                            <li><i class="fa-solid fa-envelope"></i>info@example.com</li>
                            <li><i class="fa-solid fa-phone"></i>+1 123 456 8891</li>
                        </ul>
                        <ul class="social-icon">
                            <li>
                                <select class="select">
                                    <option>English</option>
                                    <option>Japanese</option>
                                </select>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    @endif
    <div class="container">
        @if (Route::is(['index-7']))
            <div class="veterinary-top-head">
                <ul>
                    <li><i class="fa-solid fa-envelope me-2"></i>surna@example.com</li>
                    <li><i class="fa-solid fa-location-dot me-2"></i>231 madison Street, NewYork,USA</li>
                </ul>
                <ul>
                    <li>Mon-Fri : 10:00 AM - 09:00PM</li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        @endif
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('index') }}" class="navbar-brand logo">
                    @if (
                        !Route::is([
                            'index-2',
                            'index-3',
                            'index-6',
                            'index-7',
                            'index-10',
                            'index-11',
                            'index-12',
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'patient-checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointments-grid',
                            'doctor-appointment-start',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-profile-settings.index',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-reschedule-appointment',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-register',
                            'blog-details',
                            'map-grid',
                            'map-list',
                            'search',
                            'search-2',
                            'pharmacy-register',
                            'about-us',
                            'contact-us',
                            'blank-page',
                            'pricing',
                            'faq',
                            'blog-list',
                            'blog-grid',
                            'calendar',
                            'coming-soon',
                            'components',
                            'doctor-search-grid',
                            'email-otp',
                            'error-404',
                            'error-500',
                            'forgot-password',
                            'forgot-password2',
                            'login',
                            'login-email',
                            'login-email-otp',
                            'login-phone',
                            'login-phone-otp',
                            'mobile-otp',
                            'patient-signup',
                            'privacy-policy',
                            'register',
                            'reset-password',
                            'signup-success',
                            'terms-condition',
                            'maintenance',
                        ]))
                        <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    @endif
                    @if (Route::is([
                            'index-2',
                            'index-3',
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'patient-checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointment-start',
                            'doctor-appointments-grid',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-reschedule-appointment',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-register',
                            'blog-details',
                            'map-grid',
                            'map-list',
                            'search',
                            'search-2',
                            'pharmacy-register',
                            'about-us',
                            'contact-us',
                            'blank-page',
                            'pricing',
                            'faq',
                            'blog-list',
                            'blog-grid',
                            'calendar',
                            'coming-soon',
                            'components',
                            'doctor-search-grid',
                            'email-otp',
                            'error-404',
                            'error-500',
                            'forgot-password',
                            'forgot-password2',
                            'login',
                            'login-email',
                            'login-email-otp',
                            'login-phone',
                            'login-phone-otp',
                            'mobile-otp',
                            'patient-signup',
                            'privacy-policy',
                            'register',
                            'reset-password',
                            'signup-success',
                            'terms-condition',
                            'maintenance',
                        ]))
                        <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    @endif
                    @if (Route::is(['index-6']))
                        <img src="{{ URL::asset('/assets/img/footer-logo.png') }}" class="img-fluid"
                            alt="Logo">
                    @endif
                    @if (Route::is(['index-7']))
                        <img src="{{ URL::asset('/assets/img/veterinary-home-logo.svg') }}" class="img-fluid"
                            alt="Logo">
                    @endif
                    @if (Route::is(['index-10', 'index-11']))
                        <img src="{{ URL::asset('/assets/img/logo-15.png') }}" class="img-fluid" alt="Logo">
                    @endif
                    @if (Route::is(['index-12']))
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    @endif
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('index') }}" class="menu-logo">
                        @if (!Route::is(['index-2', 'index-6', 'index-10', 'index-11', 'index-12', 'doctor-dashboard']))
                            <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                        @endif
                        @if (Route::is(['index-2', 'index-6', 'index-10', 'index-11', 'index-12', 'doctor-dashboard']))
                            <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                        @endif
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li
                        class="has-submenu megamenu {{ Request::is('/', 'index', 'index-2', 'index-3', 'index-4', 'index-5', 'index-6', 'index-7', 'index-8', 'index-9', 'index-10', 'index-11', 'index-12', 'index-13', 'index-14') ? 'active' : '' }}">
                        <a href="{{ url('/index') }}">{{ __('messages.home') }}
                        </a>
                       
                    @if (Route::is(['index-11']))
                        <li class="login-link"><a href="{{ url('login-email') }}">Login / Signup</a></li>
                    @endif
                    @if (
                        !Route::is([
                            'index-2',
                            'index-3',
                            'index-6',
                            'index-7',
                            'index-8',
                            'index-10',
                            'index-12',
                            'index-13',
                            'index-14',
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'patient-checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointment-start',
                            'doctor-appointments-grid',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-reschedule-appointment',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                        ]))
                        @if (!Route::is(['index-9']))
                            <li class="searchbar">
                        @endif
                        @if (Route::is(['index-9']))
                            <li class="searchbar searchbar-fourteen">
                        @endif
                        <a href="javascript:void(0);"><i class="feather-search"></i></a>
                        <div class="togglesearch">
                            <form action="{{ url('search') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                            </form>
                        </div>
                        </li>
                    @endif
                    @if (Route::is(['index-10']))
                        <li>
                            <div class="dropdown header-dropdown country-flag">
                                <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                    href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/flags/us.png') }}" alt="Img">English
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="{{ URL::asset('/assets/img/flags/fr.png') }}"
                                            alt="Img">French
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="{{ URL::asset('/assets/img/flags/es.png') }}"
                                            alt="Img">Spanish
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="{{ URL::asset('/assets/img/flags/de.png') }}"
                                            alt="Img">German
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endif
                    @if (
                        !Route::is([
                            'index-11',
                            'doctor-dashboard',
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'patient-checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointment-start',
                            'doctor-appointments-grid',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-reschedule-appointment',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-register',
                            'blog-details',
                        ]))
                        <li class="login-link"><a href="{{ url('login') }}">Login / Signup</a></li>
                    @endif
                    @if (Route::is([
                            'search',
                            'about-us',
                            'blank-page',
                            'blog-details',
                            'blog-grid',
                            'blog-list',
                            'calendar',
                            'coming-soon',
                            'components',
                            'contact-us',
                            'doctor-register',
                            'doctor-search-grid',
                            'email-otp',
                            'error-404',
                            'error-500',
                            'faq',
                            'forgot-password',
                            'forgot-password2',
                            'login',
                            'login-email',
                            'login-email-otp',
                            'login-phone',
                            'login-phone-otp',
                            'map-grid',
                            'map-list',
                            'mobile-otp',
                            'patient-signup',
                            'pharmacy-register',
                            'pricing',
                            'privacy-policy',
                            'register',
                            'reset-password',
                            'search-2',
                            'signup-success',
                            'terms-condition',
                            'maintenance',
                        ]))
                        <li class="register-btn">
                            <a href="{{ url('register') }}" class="btn reg-btn"><i
                                    class="feather-user"></i>Registers</a>
                        </li>
                        @if (\Illuminate\Support\Facades\Auth::check())
                            <li class="register-btn">
                                <a href="{{ route('profile.destroy') }}" class="btn btn-primary log-btn"><i
                                        class="feather-lock"></i>Logout</a>
                            </li>
                        @else
                            <form id="logout-form" action="{{ route('profile.destroy') }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('delete')
                                <li class="register-btn">
                                    <a href="{{ url('login') }}" class="btn btn-primary log-btn"><i
                                            class="feather-lock"></i>Login</a>
                                </li>
                            </form>
                        @endif
                    @endif
                </ul>
            </div>
            @if (
                !Route::is([
                    'search',
                    'about-us',
                    'blank-page',
                    'blog-details',
                    'blog-grid',
                    'blog-list',
                    'calendar',
                    'coming-soon',
                    'components',
                    'contact-us',
                    'doctor-register',
                    'doctor-search-grid',
                    'email-otp',
                    'error-404',
                    'error-500',
                    'faq',
                    'forgot-password',
                    'forgot-password2',
                    'login',
                    'login-email',
                    'login-email-otp',
                    'login-phone',
                    'login-phone-otp',
                    'map-grid',
                    'map-list',
                    'mobile-otp',
                    'patient-signup',
                    'pharmacy-register',
                    'pricing',
                    'privacy-policy',
                    'register',
                    'reset-password',
                    'search-2',
                    'signup-success',
                    'terms-condition',
                    'maintenance',
                ]))
                <ul class="nav header-navbar-rht">
                    @if (
                        !Route::is([
                            'index-2',
                            'index-3',
                            'index-5',
                            'index-6',
                            'index-7',
                            'index-8',
                            'index-9',
                            'index-10',
                            'index-11',
                            'index-12',
                            'index-13',
                            'index-14',
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointment-start',
                            'doctor-appointments-grid',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                        ]))
                        <li class="register-btn">
                            <a href="{{ url('register') }}" class="btn reg-btn"><i
                                    class="feather-user"></i>{{ __('messages.register') }}</a>
                        </li>
                        @if (\Illuminate\Support\Facades\Auth::check())
                            @csrf
                            @method('delete')
                            <li class="register-btn">
                                <a href="{{ route('logout-user') }}" class="btn btn-primary log-btn"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="feather-lock"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout-user') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="register-btn">
                                <a href="{{ url('login') }}" class="btn btn-primary log-btn"><i
                                        class="feather-lock"></i>{{ __('messages.login') }}</a>
                            </li>
                            <li>
                                <div class="dropdown lang-dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                        data-bs-toggle="dropdown">
                                        {{ strtoupper(app()->getLocale()) }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="?lang=en">English</a>
                                        <a class="dropdown-item" href="?lang=fr">Français</a>
                                        <a class="dropdown-item" href="?lang=es">Español</a>
                                        <a class="dropdown-item" href="?lang=pt">Português</a>
                                    </div>
                                </div>
                            </li>
                          
                           
                        @endif
                    @endif
                    @if (Route::is(['index-2']))
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ url('login') }}">login / Signup </a>
                        </li>
                    @endif
                    @if (Route::is(['index-3']))
                        <li class="contact-item"><i class="fa-solid fa-phone"></i><span>Contact :</span>+1 315 369
                            5943
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ url('login') }}"><img
                                    src="{{ URL::asset('/assets/img/icons/user-circle.svg') }}" alt="img">Login
                                /
                                Sign up </a>
                        </li>
                    @endif
                    @if (Route::is(['index-5']))
                        <li class="register-btn">
                            <a href="{{ url('login-email') }}" class="btn log-btn"><i
                                    class="feather-lock"></i>Login</a>
                        </li>
                        <li class="register-btn">
                            <a href="{{ url('signup') }}" class="btn reg-btn"><i class="feather-user"></i>Sign
                                Up</a>
                        </li>
                    @endif
                    @if (Route::is(['index-6']))
                        <li class="login-in-fourteen"><a href="{{ url('register') }}"><img
                                    src="{{ URL::asset('/assets/img/icons/login-user-circle.svg') }}" class="me-2"
                                    alt="Img">Sign Up /
                            </a> <a href="{{ url('login') }}"> Sign In</a></li>
                    @endif
                    @if (Route::is(['index-7']))
                        <li class="login-in-fourteen log-in-vet-head"><a href="{{ url('register') }}"><i
                                    class="fa-regular fa-user me-2"></i>Sign Up / </a> <a
                                href="{{ url('login') }}">
                                Sign In</a></li>
                        <li class="searchbar searchbar-fourteen">
                            <a href="javascript:void(0);"><i class="feather-search"></i></a>
                            <div class="togglesearch">
                                <form action="{{ url('search-2') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    @endif
                    @if (Route::is(['index-8']))
                        <li class="flag-nav">
                            <select class="flag-img">
                                <option data-image="assets/img/flags/us.png">English</option>
                                <option data-image="assets/img/flags/jp.png">Japanese</option>
                            </select>
                        </li>
                        <li class="login-in">
                            <a href="{{ url('login-email') }}" class="btn sign-btn"><i
                                    class="fa-solid fa-lock"></i>Sign In</a>
                        </li>
                        <li class="login-in">
                            <a href="{{ url('signup') }}" class="btn reg-btn">
                                <i class="fa-solid fa-user"></i>Sign Up
                            </a>
                        </li>
                    @endif
                    @if (Route::is(['index-9']))
                        <li class="login-in-fourteen">
                            <a href="{{ url('login-email') }}" class="btn reg-btn"><i
                                    class="fa-solid fa-lock"></i>Log
                                In</a>
                        </li>
                        <li class="login-in-fourteen">
                            <a href="{{ url('signup') }}" class="btn btn-primary reg-btn reg-btn-fourteen"><i
                                    class="fa-solid fa-user"></i>Sign Up</a>
                        </li>
                    @endif
                    @if (Route::is(['index-10']))
                        <li class="searchbar">
                            <a href="javascript:void(0);"><i class="feather-search"></i></a>
                            <div class="togglesearch">
                                <form action="{{ url('search') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn">Search</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="login-in-fourteen">
                            <a href="{{ url('login') }}" class="btn reg-btn"><i
                                    class="fa-solid fa-lock me-2"></i>Login</a>
                        </li>
                        <li class="login-in-fourteen">
                            <a href="{{ url('register') }}" class="btn btn-primary reg-btn reg-btn-fourteen">
                                <i class="fa-solid fa-user me-2"></i>Sign Up
                            </a>
                        </li>
                    @endif
                    @if (Route::is(['index-11']))
                        <li class="login-in-sixteen">
                            <a href="{{ url('login-email') }}" class="btn reg-btn"><i
                                    class="feather-lock me-2"></i>Login<span></span><span></span><span></span><span></span></a>
                        </li>
                        <li class="login-in-sixteen">
                            <a href="{{ url('signup') }}" class="btn btn-primary reg-btn reg-btn-sixteen"><i
                                    class="feather-user me-2"></i>Sign Up</a>
                        </li>
                    @endif
                    @if (Route::is(['index-12']))
                        <li class="login-in-fourteen">
                            <a href="{{ url('login-email') }}" class="btn reg-btn log-btn-twelve">Log In</a>
                        </li>
                        <li class="login-in-fourteen">
                            <a href="{{ url('signup') }}" class="reg-btn-thirteen regist-btn"><span>Register</span>
                            </a>
                        </li>
                    @endif
                    @if (Route::is(['index-13']))
                        <li class="searchbar">
                            <a href="javascript:void(0);"><i class="feather-search"></i></a>
                            <div class="togglesearch">
                                <form action="{{ url('search-2') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="register-btn">
                            <a href="{{ url('login-email') }}" class="btn log-btn"><i
                                    class="feather-lock"></i>Login</a>
                        </li>
                        <li class="register-btn">
                            <a href="{{ url('signup') }}" class="btn reg-btn"><i class="feather-user"></i>Sign
                                Up</a>
                        </li>
                    @endif
                    @if (Route::is(['index-14']))
                        <li class="searchbar">
                            <a href="javascript:void(0);"><i class="feather-search"></i></a>
                            <div class="togglesearch">
                                <form action="{{ url('search-2') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="register-btn">
                            <a href="{{ url('login-email') }}" class="btn log-btn"><i
                                    class="feather-lock"></i>Login</a>
                        </li>
                        <li class="register-btn">
                            <a href="{{ url('signup') }}" class="btn reg-btn"><i class="feather-user"></i>Sign
                                Up</a>
                        </li>
                    @endif
                    @if (Route::is([
                            'accounts',
                            'doctor-appointments',
                            'available-timings',
                            'booking-2',
                            'booking-success',
                            'booking',
                            'cart',
                            'patient.change-password',
                            'chat-doctor',
                            'patient-chat',
                            'checkout',
                            'dependent',
                            'doctor-add-blog',
                            'doctor-blog',
                            'doctor.doctor-change-password',
                            'doctor-dashboard',
                            'doctor-pending-blog',
                            'doctor-profile-settings.index',
                            'doctor-profile',
                            'doctor-profile-2',
                            'favourites',
                            'patient-help-and-support',
                            'invoice-view',
                            'invoices',
                            'medical-details',
                            'medical-records',
                            'patient-prescription',
                            'doctor.my-patients',
                            'doctor-help-and-support',
                            'orders-list',
                            'patient-accounts',
                            'patient-dashboard',
                            'patient-profile',
                            'payment-success',
                            'pharmacy-details',
                            'pharmacy-search',
                            'product-all',
                            'product-checkout',
                            'product-description',
                            'profile-settings',
                            'reviews',
                            'schedule-timings',
                            'social-media',
                            'video-call',
                            'voice-call',
                            'add-billing',
                            'add-dependent',
                            'add-prescription',
                            'edit-billing',
                            'edit-blog',
                            'edit-dependent',
                            'edit-prescription',
                            'membership-details',
                            'doctor-request.index',
                            'doctor-payment',
                            'doctor-specialities',
                            'doctor-appointment-start',
                            'doctor-appointments-grid',
                            'doctor-upcoming-appointment',
                            'doctor-completed-appointment',
                            'doctor-cancelled-appointment-2',
                            'doctor-appointment-details',
                            'doctor-awards-settings',
                            'doctor-business-settings',
                            'doctor-cancelled-appointment',
                            'doctor-clinics-settings',
                            'doctor-education-settings',
                            'doctor-experience-settings',
                            'doctor-insurance-settings',
                            'patient-upcoming-appointment',
                            'patient-invoices',
                            'patient-completed-appointment',
                            'patient-appointments-grid',
                            'patient-appointments',
                            'patient-appointment-details',
                            'patient-cancelled-appointment',
                            'doctor-cancelled-appointment-2',
                        ]))
                        @if (
                            !Route::is([
                                'add-billing',
                                'add-dependent',
                                'add-prescription',
                                'edit-billing',
                                'edit-blog',
                                'edit-dependent',
                                'edit-prescription',
                                'membership-details',
                            ]))
                            <!-- Cart -->
                            {{-- <li class="nav-item dropdown noti-nav view-cart-header me-3">
                            <a href="#" class="dropdown-toggle nav-link p-0 position-relative"
                                data-bs-toggle="dropdown">
                                <i class="fa-solid fa-cart-shopping"></i> <small class="unread-msg1">7</small>
                            </a>
                            <div class="dropdown-menu notifications dropdown-menu-end">
                                <div class="shopping-cart">
                                    <ul class="shopping-cart-items list-unstyled">
                                        <li class="clearfix">
                                            <div class="close-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                                            <a href="{{ url('product-description') }}"><img
                                                    class="avatar-img rounded"
                                                    src="{{ URL::asset('/assets/img/products/product.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('product-description') }}"
                                                class="item-name">Benzaxapine
                                                Croplex</a>
                                            <span class="item-price">$849.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>

                                        <li class="clearfix">
                                            <div class="close-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                                            <a href="{{ url('product-description') }}"><img
                                                    class="avatar-img rounded"
                                                    src="{{ URL::asset('/assets/img/products/product1.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('product-description') }}" class="item-name">Ombinazol
                                                Bonibamol</a>
                                            <span class="item-price">$1,249.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>

                                        <li class="clearfix">
                                            <div class="close-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                                            <a href="{{ url('product-description') }}"><img
                                                    class="avatar-img rounded"
                                                    src="{{ URL::asset('/assets/img/products/product2.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('product-description') }}" class="item-name">Dantotate
                                                Dantodazole</a>
                                            <span class="item-price">$129.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>
                                    </ul>
                                    <div class="booking-summary pt-3">
                                        <div class="booking-item-wrap">
                                            <ul class="booking-date">
                                                <li>Subtotal <span>$5,877.00</span></li>
                                                <li>Shipping <span>$25.00</span></li>
                                                <li>Tax <span>$0.00</span></li>
                                                <li>Total <span>$5.2555</span></li>
                                            </ul>
                                            <div class="booking-total">
                                                <ul class="booking-total-list text-align">
                                                    <li>
                                                        <div class="clinic-booking pt-3">
                                                            <a class="apt-btn" href="{{ url('cart') }}">View
                                                                Cart</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="clinic-booking pt-3">
                                                            <a class="apt-btn"
                                                                href="{{ url('product-checkout') }}">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                            <!-- /Cart -->

                            <!-- Notifications -->
                            @if (Auth::check())
                                <li class="nav-item dropdown noti-nav me-3 pe-0">
                                    <a href="#" class="dropdown-toggle nav-link p-0" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-bell"></i> <span class="badge">5</span>
                                    </a>
                                    <div class="dropdown-menu notifications dropdown-menu-end ">
                                        <div class="topnav-dropdown-header">
                                            <span class="notification-title">Notifications</span>
                                        </div>
                                        <div class="noti-content">
                                            <ul class="notification-list">
                                                <li class="notification-message">
                                                    <a href="#">
                                                        <div class="notify-block d-flex">
                                                            <span class="avatar">
                                                                <img class="avatar-img" alt="Ruby perin"
                                                                    src="{{ URL::asset('/assets/img/clients/client-01.jpg') }}">
                                                            </span>
                                                            <div class="media-body">
                                                                <h6>Travis Tremble <span
                                                                        class="notification-time">18.30
                                                                        PM</span></h6>
                                                                <p class="noti-details">Sent a amount of $210 for his
                                                                    Appointment <span class="noti-title">Dr.Ruby perin
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="#">
                                                        <div class="notify-block d-flex">
                                                            <span class="avatar">
                                                                <img class="avatar-img" alt="Hendry Watt"
                                                                    src="{{ URL::asset('/assets/img/clients/client-02.jpg') }}">
                                                            </span>
                                                            <div class="media-body">
                                                                <h6>Travis Tremble <span class="notification-time">12
                                                                        Min
                                                                        Ago</span></h6>
                                                                <p class="noti-details"> has booked her appointment to
                                                                    <span class="noti-title">Dr. Hendry Watt</span></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="#">
                                                        <div class="notify-block d-flex">
                                                            <div class="avatar">
                                                                <img class="avatar-img" alt="Maria Dyen"
                                                                    src="{{ URL::asset('/assets/img/clients/client-03.jpg') }}">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6>Travis Tremble <span class="notification-time">6
                                                                        Min
                                                                        Ago</span></h6>
                                                                <p class="noti-details"> Sent a amount $210 for his
                                                                    Appointment <span class="noti-title">Dr.Maria
                                                                        Dyen</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-message">
                                                    <a href="#">
                                                        <div class="notify-block d-flex">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img" alt="client-image"
                                                                    src="{{ URL::asset('/assets/img/doctor-banner.png') }}">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6>Travis Tremble <span class="notification-time">8.30
                                                                        AM</span></h6>
                                                                <p class="noti-details"> Send a message to his doctor
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            <!-- /Notifications -->
                        @endif
                        @if (
                            !Route::is([
                                'booking-2',
                                'booking-success',
                                'booking',
                                'cart',
                                'patient.change-password',
                                'patient-chat',
                                'checkout',
                                'dependent',
                                'doctor-profile',
                                'doctor-profile-2',
                                'medical-details',
                                'medical-records',
                                'patient-prescription',
                                'orders-list',
                                'payment-success',
                                'pharmacy-details',
                                'pharmacy-search',
                                'product-all',
                                'product-checkout',
                                'product-description',
                                'profile-settings',
                                'voice-call',
                                'add-billing',
                                'edit-billing',
                            ]))
                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="javascript:;" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        @if (
                                            !Route::is([
                                                'favourites',
                                                'patient-help-and-support',
                                                'patient-accounts',
                                                'patient-dashboard',
                                                'patient-upcoming-appointment',
                                                'patient-invoices',
                                                'patient-completed-appointment',
                                                'patient-appointments-grid',
                                                'patient-appointments',
                                                'patient-appointment-details',
                                                'patient-cancelled-appointment',
                                            ]))
                                            <img class="rounded-circle"
                                                src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                width="31" alt="Darren Elder">
                                        @endif
                                        @if (Route::is([
                                                'favourites',
                                                'patient-help-and-support',
                                                'patient-accounts',
                                                'patient-dashboard',
                                                'patient-upcoming-appointment',
                                                'patient-invoices',
                                                'patient-completed-appointment',
                                                'patient-appointments-grid',
                                                'patient-appointments',
                                                'patient-appointment-details',
                                                'patient-cancelled-appointment',
                                            ]))
                                            <img class="rounded-circle"
                                                src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                width="31" alt="Darren Elder">
                                        @endif
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @if (
                                        !Route::is([
                                            'favourites',
                                            'patient-help-and-support',
                                            'patient-accounts',
                                            'patient-dashboard',
                                            'patient-upcoming-appointment',
                                            'patient-invoices',
                                            'patient-completed-appointment',
                                            'patient-appointments-grid',
                                            'patient-appointments',
                                            'patient-reschedule-appointment',
                                            'patient-appointment-details',
                                            'patient-cancelled-appointment',
                                        ]))
                                        <div class="user-header">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                    alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="user-text">
                                                <h6>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
                                                <p class="text-muted mb-0">Doctor</p>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{ url('doctor/dashboard') }}">Dashboard</a>
                                    @endif

                                    @if (Route::is([
                                            'favourites',
                                            'patient-help-and-support',
                                            'patient-accounts',
                                            'patient-dashboard',
                                            'patient-upcoming-appointment',
                                            'patient-invoices',
                                            'patient-completed-appointment',
                                            'patient-appointments-grid',
                                            'patient-appointments',
                                            'patient-appointment-details',
                                            'patient-cancelled-appointment',
                                        ]))
                                        <div class="user-header">
                                            <div class="avatar avatar-sm">
                                                <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                    alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="user-text">
                                                <h6>{{ \Illuminate\Support\Facades\Auth::user()->name }}</h6>
                                                <p class="text-success mb-0">Available</p>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{ url('patient/dashboard') }}">Dashboard</a>
                                    @endif

                                    @if (
                                        !Route::is([
                                            'favourites',
                                            'patient-help-and-support',
                                            'patient-accounts',
                                            'patient-dashboard',
                                            'patient-upcoming-appointment',
                                            'patient-invoices',
                                            'patient-completed-appointment',
                                            'patient-appointments-grid',
                                            'patient-appointments',
                                            'patient-appointment-details',
                                            'patient-cancelled-appointment',
                                        ]))
                                        <a class="dropdown-item"
                                            href="{{ url('doctor/doctor-profile-settings') }}">Profile
                                            Settings</a>
                                    @endif
                                    @if (Route::is([
                                            'favourites',
                                            'patient-help-and-support',
                                            'patient-accounts',
                                            'patient-dashboard',
                                            'patient-upcoming-appointment',
                                            'patient-invoices',
                                            'patient-completed-appointment',
                                            'patient-appointments-grid',
                                            'patient-appointments',
                                            'patient-reschedule-appointment',
                                            'patient-appointment-details',
                                            'patient-cancelled-appointment',
                                        ]))
                                        <a class="dropdown-item"
                                            href="{{ url('/patient/profile-settings') }}">Profile
                                            Setting</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout-user') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-forms').submit();">Logout</a>
                                    <form id="logout-forms" action="{{ route('logout-user') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <!-- /User Menu -->
                        @endif
                        @if (Route::is([
                                'booking-2',
                                'booking-success',
                                'booking',
                                'cart',
                                'patient.change-password',
                                'patient-chat',
                                'checkout',
                                'dependent',
                                'doctor-profile',
                                'doctor-profile-2',
                                'medical-details',
                                'medical-records',
                                'patient-prescription',
                                'orders-list',
                                'payment-success',
                                'pharmacy-details',
                                'pharmacy-search',
                                'product-all',
                                'product-checkout',
                                'product-description',
                                'profile-settings',
                                'voice-call',
                                'add-billing',
                                'edit-billing',
                            ]))
                            <!-- User Menu -->
                            @if (Auth::check())
                                <!-- Check if the user is authenticated -->
                                <li class="nav-item dropdown has-arrow logged-item">
                                    <a href="javascript:;" class="dropdown-toggle nav-link"
                                        data-bs-toggle="dropdown">
                                        <span class="user-img">
                                            @if (!Route::is(['doctor-profile', 'doctor-profile-2']))
                                                <img class="rounded-circle"
                                                    src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                    width="31" alt="Darren Elder">
                                            @endif
                                            @if (Route::is(['doctor-profile', 'doctor-profile-2']))
                                                <img class="rounded-circle"
                                                    src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                    width="31" alt="Darren Elder">
                                            @endif
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="user-header">
                                            <div class="avatar avatar-sm">
                                                @if (!Route::is(['doctor-profile', 'doctor-profile-2']))
                                                    <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                        alt="User Image" class="avatar-img rounded-circle">
                                                @endif
                                                @if (Route::is(['doctor-profile', 'doctor-profile-2']))
                                                    <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_image ?? URL::asset('/assets/img/doctors/doc-profile-img.jpg') }}"
                                                        alt="User Image" class="avatar-img rounded-circle">
                                                @endif
                                            </div>
                                            <div class="user-text">
                                                <h6>{{ \Illuminate\Support\Facades\Auth::user()->name ?? '--' }}</h6>
                                                @if (!Route::is(['doctor-profile', 'doctor-profile-2']))
                                                    <p class="text-muted mb-0">Patient</p>
                                                @endif
                                                @if (Route::is(['doctor-profile', 'doctor-profile-2']))
                                                    <p class="text-muted mb-0">Available</p>
                                                @endif
                                            </div>
                                        </div>
                                        <a class="dropdown-item"
                                            href="{{ url('/patient/dashboard') }}">Dashboard</a>
                                        <a class="dropdown-item"
                                            href="{{ url('/patient/profile-settings') }}">Profile Settings</a>
                                        <a class="dropdown-item" href="http://127.0.0.1:8000/logout-user"
                                            onclick="event.preventDefault(); document.getElementById('logout-forms').submit();">Logout</a>
                                        <form id="logout-forms" action="{{ route('logout-user') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif

                            <!-- /User Menu -->
                        @endif
                    @endif
                </ul>
            @endif
        </nav>
    </div>
    </header>
@endif
<!-- /Header -->


@if (Route::is(['signup', 'payment', 'consultation', 'booking-success-one', 'paitent-details']))
    <!-- Header -->
    <header class="header login-header-info">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('index') }}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('index') }}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li>
                        <a href="javascript:void(0);">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ url('login-email') }}">Login</a>
                    </li>
                    <li class="flag-dropdown-hide">
                        <div class="flag-dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;" role="button"
                                aria-expanded="false">
                                <img src="{{ URL::asset('/assets/img/flags/flag-01.png') }}" alt="flag-image"
                                    height="20" class="flag-img"> <span>English</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/flag-01.png') }}" alt="flag-image"
                                        height="16"> English
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/flag-02.png') }}" alt="flag-image"
                                        height="16"> French
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/flag-03.png') }}" alt="flag-image"
                                        height="16"> Spanish
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/flag-05.png') }}" alt="flag-image"
                                        height="16"> German
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown">
                    <div class="flag-dropdown">
                        <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="javascript:;"
                            role="button" aria-expanded="false">
                            <img src="{{ URL::asset('/assets/img/flags/flag-01.png') }}" alt="flag-image"
                                height="20" class="flag-img"> <span>English</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/flag-01.png') }}" alt="flag-image"
                                    height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/flag-02.png') }}" alt="flag-image"
                                    height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/flag-03.png') }}" alt="flag-image"
                                    height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/flag-05.png') }}" alt="flag-image"
                                    height="16"> German
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!-- /Header -->
@endif
