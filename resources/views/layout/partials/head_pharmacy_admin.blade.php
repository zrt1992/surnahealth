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
    <title>Surna health -Pharmacy Dashboard</title>
@endif
@if (Route::is(['products']))
    <title>Surna health - Products Page</title>
@endif
@if (Route::is(['add-product']))
    <title>Surna health - Add Product Page</title>
@endif
@if (Route::is(['outstock']))
    <title>Surna health - Outstock Page</title>
@endif
@if (Route::is(['expired']))
    <title>Surna health - Expired Page</title>
@endif
@if (Route::is(['categories']))
    <title>Surna health - Categories Page</title>
@endif
@if (Route::is(['purchase']))
    <title>Surna health - Purchase Page</title>
@endif
@if (Route::is(['add-purchase']))
    <title>Surna health - Add Purchase Page</title>
@endif
@if (Route::is(['order']))
    <title>Surna health - Order Page</title>
@endif
@if (Route::is(['sales']))
    <title>Surna health - Sales Page</title>
@endif
@if (Route::is(['supplier']))
    <title>Surna health - Supplier Page</title>
@endif
@if (Route::is(['add-supplier']))
    <title>Surna health - Add Supplier Page</title>
@endif
@if (Route::is(['transactions-list']))
    <title>Surna health - Transactions List Page</title>
@endif
@if (Route::is(['invoice-report']))
    <title>Surna health - Invoice Report Page</title>
@endif
@if (Route::is(['profile']))
    <title>Surna health - Profile</title>
@endif
@if (Route::is(['settings']))
    <title>Surna health - Settings Page</title>
@endif
@if (Route::is(['customer-orders']))
    <title>Surna health - Customer Order Page</title>
@endif
@if (Route::is(['edit-product']))
    <title>Surna health - Edit Product Page</title>
@endif
@if (Route::is(['edit-purchase']))
    <title>Surna health - Edit Purchase Page</title>
@endif
@if (Route::is(['edit-supplier']))
    <title>Surna health - Edit Supplier Page</title>
@endif
@if (Route::is(['invoice']))
    <title>Surna health - Invoice</title>
@endif
@if (Route::is(['product-list']))
    <title>Surna health - Product List Page</title>
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
