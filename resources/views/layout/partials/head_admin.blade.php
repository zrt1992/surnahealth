@if (
    !Route::is([
        'appointment-list',
        'blog',
        'specialities',
        'doctor-list',
        'patient-list',
        'reviews',
        'transactions-list',
        'settings',
        'invoice-report',
        'profile',
        'login',
        'register',
        'forgot-password',
        'lock-screen',
        'error-404',
        'error-500',
        'blank-page',
        'components',
        'form-basic',
        'form-inputs',
        'form-horizontal',
        'form-vertical',
        'form-mask',
        'form-validation',
        'tables-basic',
        'data-tables',
        'invoice',
        'calendar',
        'blog-details',
        'edit-blog',
        'product-list',
        'pharmacy-list',
    ]))
    <title>Surna - Dashboard</title>
@endif
@if (Route::is(['appointment-list']))
    <title>Surna - Appointment List Page</title>
@endif
@if (Route::is(['specialities']))
    <title>Surna - Specialities Page</title>
@endif
@if (Route::is(['doctor-list']))
    <title>Surna - Doctor List Page</title>
@endif
@if (Route::is(['patient-list']))
    <title>Surna - Patient List Page</title>
@endif
@if (Route::is(['reviews']))
    <title>Surna - Reviews Page</title>
@endif
@if (Route::is(['transactions-list']))
    <title>Surna - Transactions List Page</title>
@endif
@if (Route::is(['settings']))
    <title>Surna - Settings Page</title>
@endif
@if (Route::is(['invoice-report']))
    <title>Surna - Invoice Report Page</title>
@endif
@if (Route::is(['profile']))
    <title>Surna - Profile</title>
@endif
@if (Route::is(['login']))
    <title>Surna - Login</title>
@endif
@if (Route::is(['register']))
    <title>Surna - Register</title>
@endif
@if (Route::is(['forgot-password']))
    <title>Surna - Forgot Password</title>
@endif
@if (Route::is(['lock-screen']))
    <title>Surna - Lock Screen</title>
@endif
@if (Route::is(['error-404']))
    <title>Surna - Error 404</title>
@endif
@if (Route::is(['error-500']))
    <title>Surna - Error 500</title>
@endif
@if (Route::is(['blank-page']))
    <title>Surna - Blank Page</title>
@endif
@if (Route::is(['components']))
    <title>Surna - Components</title>
@endif
@if (Route::is(['form-basic']))
    <title>Surna - Basic Inputs</title>
@endif
@if (Route::is(['form-inputs']))
    <title>Surna - Form Input Groups</title>
@endif
@if (Route::is(['form-horizontal']))
    <title>Surna - Horizontal Form</title>
@endif
@if (Route::is(['form-vertical']))
    <title>Surna - Vertical Form</title>
@endif
@if (Route::is(['form-mask']))
    <title>Surna - Form Mask</title>
@endif
@if (Route::is(['form-validation']))
    <title>Surna - Form Validation</title>
@endif
@if (Route::is(['tables-basic']))
    <title>Surna - Tables Basic</title>
@endif
@if (Route::is(['data-tables']))
    <title>Surna - Data Tables</title>
@endif
@if (Route::is(['invoice']))
    <title>Surna - Invoice</title>
@endif
@if (Route::is(['calendar']))
    <title>Surna - Calendar</title>
@endif
@if (Route::is(['blog', 'blog-details']))
    <title>Surna - Blog Page</title>
@endif
@if (Route::is(['add-blog']))
    <title>Surna - Add Blog Page</title>
@endif
@if (Route::is(['edit-blog']))
    <title>Surna - Edit Blog Page</title>
@endif
@if (Route::is(['product-list']))
    <title>Surna - Product List Page</title>
@endif
@if (Route::is(['pharmacy-list']))
    <title>Surna - Pharmacy List Page</title>
@endif
<!-- Favicon -->
@if (Route::is(['pending-blog']))
    <title>Surna - Pending Blog Page</title>
@endif
<link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_admin/img/favicon.png') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets_admin/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets_admin/plugins/fontawesome/css/all.min.css') }}">

@if (Route::is(['blog', 'blog-details', 'add-blog', 'edit-blog', 'pending-blog']))
    <link rel="stylesheet" href="{{ url('assets_admin/plugins/fontawesome/css/all.min.css') }}">
@endif
<!-- Feather CSS -->
<link rel="stylesheet" href="{{ url('/assets_admin/css/feather.css') }}">
<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/css/feathericon.min.css') }}">
<link rel="stylesheet" href="{{ url('assets_admin/plugins/morris/morris.css') }}">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/css/select2.min.css') }}">
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/css/bootstrap-datetimepicker.min.css') }}">

<!-- Full Calander CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/plugins/fullcalendar/fullcalendar.min.css') }}">

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/plugins/datatables/datatables.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('assets_admin/css/custom.css') }}">
