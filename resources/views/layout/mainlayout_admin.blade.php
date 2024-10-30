<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="The responsive professional Surna template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="keywords" content="practo clone, Surna, doctor appointment, Practo clone html template, doctor booking template">
		<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
		<meta property="og:url" content="https://Surna.Soorna.com/html/">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Doctors Appointment HTML Website Templates | Surna">
		<meta property="og:description" content="The responsive professional Surna template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta property="og:image" content="assets/img/preview-banner.jpg')}}">
		<meta name="twitter:card" content="summary_large_image">
		<meta property="twitter:domain" content="https://Surna.Soorna.com/html/">
		<meta property="twitter:url" content="https://Surna.Soorna.com/html/">
		<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Surna">
		<meta name="twitter:description" content="The responsive professional Surna template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="twitter:image" content="assets/img/preview-banner.jpg')}}">
        <title>Surna - Dashboard</title>
    @include('layout.partials.head_admin')
</head>

<body>
    @if (!Route::is(['login', 'register', 'forgot-password', 'lock-screen', 'error-404', 'error-500']))
        @include('layout.partials.header_admin')
        @include('layout.partials.nav_admin')
    @endif
    @yield('content')
    @include('layout.partials.footer_admin-scripts')
</body>

</html>
