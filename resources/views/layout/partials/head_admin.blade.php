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
    <title>Surna health - Dashboard</title>
@endif
@if (Route::is(['appointment-list']))
    <title>Surna health - Appointment List Page</title>
@endif
@if (Route::is(['specialities']))
    <title>Surna health - Specialities Page</title>
@endif
@if (Route::is(['doctor-list']))
    <title>Surna health - Doctor List Page</title>
@endif
@if (Route::is(['patient-list']))
    <title>Surna health - Patient List Page</title>
@endif
@if (Route::is(['reviews']))
    <title>Surna health - Reviews Page</title>
@endif
@if (Route::is(['transactions-list']))
    <title>Surna health - Transactions List Page</title>
@endif
@if (Route::is(['settings']))
    <title>Surna health - Settings Page</title>
@endif
@if (Route::is(['invoice-report']))
    <title>Surna health - Invoice Report Page</title>
@endif
@if (Route::is(['profile']))
    <title>Surna health - Profile</title>
@endif
@if (Route::is(['login']))
    <title>Surna health - Login</title>
@endif
@if (Route::is(['register']))
    <title>Surna health - Register</title>
@endif
@if (Route::is(['forgot-password']))
    <title>Surna health - Forgot Password</title>
@endif
@if (Route::is(['lock-screen']))
    <title>Surna health - Lock Screen</title>
@endif
@if (Route::is(['error-404']))
    <title>Surna health - Error 404</title>
@endif
@if (Route::is(['error-500']))
    <title>Surna health - Error 500</title>
@endif
@if (Route::is(['blank-page']))
    <title>Surna health - Blank Page</title>
@endif
@if (Route::is(['components']))
    <title>Surna health - Components</title>
@endif
@if (Route::is(['form-basic']))
    <title>Surna health - Basic Inputs</title>
@endif
@if (Route::is(['form-inputs']))
    <title>Surna health - Form Input Groups</title>
@endif
@if (Route::is(['form-horizontal']))
    <title>Surna health - Horizontal Form</title>
@endif
@if (Route::is(['form-vertical']))
    <title>Surna health - Vertical Form</title>
@endif
@if (Route::is(['form-mask']))
    <title>Surna health - Form Mask</title>
@endif
@if (Route::is(['form-validation']))
    <title>Surna health - Form Validation</title>
@endif
@if (Route::is(['tables-basic']))
    <title>Surna health - Tables Basic</title>
@endif
@if (Route::is(['data-tables']))
    <title>Surna health - Data Tables</title>
@endif
@if (Route::is(['invoice']))
    <title>Surna health - Invoice</title>
@endif
@if (Route::is(['calendar']))
    <title>Surna health - Calendar</title>
@endif
@if (Route::is(['blog', 'blog-details']))
    <title>Surna health - Blog Page</title>
@endif
@if (Route::is(['add-blog']))
    <title>Surna health - Add Blog Page</title>
@endif
@if (Route::is(['edit-blog']))
    <title>Surna health - Edit Blog Page</title>
@endif
@if (Route::is(['product-list']))
    <title>Surna health - Product List Page</title>
@endif
@if (Route::is(['pharmacy-list']))
    <title>Surna health - Pharmacy List Page</title>
@endif
<!-- Favicon -->
@if (Route::is(['pending-blog']))
    <title>Surna health - Pending Blog Page</title>
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
