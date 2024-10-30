@if (
    !Route::is([
        'product-list',
        'invoice',
        'edit-supplier',
        'edit-product',
        'customer-orders',
        'settings',
        'profile',
        'invoice-report',
        'transactions-list',
        'add-supplier',
        'products',
        'add-product',
        'outstock',
        'expired',
        'categories',
        'purchase',
        'add-purchase',
        'order',
        'sales',
        'supplier',
        'edit-purchase',
    ]))
    <title>Surna -Pharmacy Dashboard</title>
@endif
@if (Route::is(['products']))
    <title>Surna - Products Page</title>
@endif
@if (Route::is(['add-product']))
    <title>Surna - Add Product Page</title>
@endif
@if (Route::is(['outstock']))
    <title>Surna - Outstock Page</title>
@endif
@if (Route::is(['expired']))
    <title>Surna - Expired Page</title>
@endif
@if (Route::is(['categories']))
    <title>Surna - Categories Page</title>
@endif
@if (Route::is(['purchase']))
    <title>Surna - Purchase Page</title>
@endif
@if (Route::is(['add-purchase']))
    <title>Surna - Add Purchase Page</title>
@endif
@if (Route::is(['order']))
    <title>Surna - Order Page</title>
@endif
@if (Route::is(['sales']))
    <title>Surna - Sales Page</title>
@endif
@if (Route::is(['supplier']))
    <title>Surna - Supplier Page</title>
@endif
@if (Route::is(['add-supplier']))
    <title>Surna - Add Supplier Page</title>
@endif
@if (Route::is(['transactions-list']))
    <title>Surna - Transactions List Page</title>
@endif
@if (Route::is(['invoice-report']))
    <title>Surna - Invoice Report Page</title>
@endif
@if (Route::is(['profile']))
    <title>Surna - Profile</title>
@endif
@if (Route::is(['settings']))
    <title>Surna - Settings Page</title>
@endif
@if (Route::is(['customer-orders']))
    <title>Surna - Customer Order Page</title>
@endif
@if (Route::is(['edit-product']))
    <title>Surna - Edit Product Page</title>
@endif
@if (Route::is(['edit-purchase']))
    <title>Surna - Edit Purchase Page</title>
@endif
@if (Route::is(['edit-supplier']))
    <title>Surna - Edit Supplier Page</title>
@endif
@if (Route::is(['invoice']))
    <title>Surna - Invoice</title>
@endif
@if (Route::is(['product-list']))
    <title>Surna - Product List Page</title>
@endif
<link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_pharmacy/img/favicon.png') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets_pharmacy/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets_pharmacy/plugins/fontawesome/css/all.min.css') }}">

<!-- Feather CSS -->
<link rel="stylesheet" href="{{ url('/assets_pharmacy/css/feather.css') }}">
<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/css/feathericon.min.css') }}">
<link rel="stylesheet" href="{{ url('assets_pharmacy/plugins/morris/morris.css') }}">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/css/select2.min.css') }}">
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/css/bootstrap-datetimepicker.min.css') }}">

<!-- Full Calander CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/plugins/fullcalendar/fullcalendar.min.css') }}">
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/plugins/datatables/datatables.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('assets_pharmacy/css/custom.css') }}">
