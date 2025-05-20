<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap Bundle JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

@if (Route::is([
        'about-us',
        'booking-success-one',
        'coming-soon',
        'consultation',
        'doctor-search-grid',
        'doctor-signup',
        'email-otp',
        'error-404',
        'error-500',
        'forgot-password2',
        'index-5',
        'index-7',
        'index-8',
        'index-9',
        'index-10',
        'index-11',
        'index-12',
        'index-13',
        'index',
        'home-page',
        'login-email-otp',
        'login-email',
        'login-phone-otp',
        'login-phone',
        'maintenance',
        'mobile-otp',
        'onboarding-consultation',
        'onboarding-identity',
        'onboarding-preferences',
        'onboarding-verification',
        'onboarding-verify-account',
        'patient-details',
        'patient-signup',
        'payment',
        'pricing',
        'privacy-policy',
        'reset-password',
        'search-2',
        'search',
        'frontend.search',
        'signup-success',
        'signup',
        'terms-condition',
        'paitent-details',
        'index-14',
    ]))
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('/assets/js/feather.min.js') }}"></script>
@endif

@if (Route::is([
        'about-us',
        'booking-2',
        'index-2',
        'index-3',
        'index-4',
        'index-5',
        'index-6',
        'index-7',
        'index-8',
        'index-9',
        'index-10',
        'index-11',
        'index-12',
        'index-13',
        'index',
        'home-page',
        'pharmacy-index',
        'index-14',
    ]))
    <!-- Slick JS -->
    <script src="{{ URL::asset('/assets/js/slick.js') }}"></script>
@endif

@if (Route::is([
        'accounts',
        'add-billing',
        'add-dependent',
        'add-prescription',
        'doctor-appointments',
        'doctor.my-patients',
        'available-timings',
        'blog-details',
        'blog-grid',
        'blog-list',
        'calendar',
        'change-password',
        'checkout',
        'dependent',
        'doctor-add-blog',
        'doctor-blog',
        'doctor-change-password',
        'doctor-dashboard',
        'doctor-pending-blog',
        'doctor-profile-settings',
        'doctor-search-grid',
        'edit-billing',
        'edit-blog',
        'edit-dependent',
        'edit-prescription',
        'favourites',
        'invoices',
        'medical-details',
        'medical-records',
        'membership-details',
        'my-patients',
        'orders-list',
        'patient-accounts',
        'patient-dashboard',
        'patient-profile',
        'pharmacy-search',
        'product-all',
        'product-checkout',
        'product-description',
        'product-healthcare',
        'profile-settings',
        'reviews',
        'schedule-timings',
        'search-2',
        'search',
        'frontend.search',
        'search',
        'social-media',
        'doctor-request',
        'doctor-appointment-start',
        'doctor-upcoming-appointment',
        'doctor-appointments-grid',
        'doctor-specialities',
        'doctor-payment',
        'doctor-completed-appointment',
        'patient-dashboard',
        'profile-settings',
        'doctor-cancelled-appointment',
        'patient-appointments',
        'doctor-experience-settings',
        'patient-appointment-details',
        'patient-appointments-grid',
        'patient-cancelled-appointment',
        'patient-completed-appointment',
        'patient-invoices',
        'patient-upcoming-appointment',
        'doctor-appointment-details',
        'doctor-awards-settings',
        'doctor-business-settings',
        'doctor-clinics-settings',
        'doctor-education-settings',
        'doctor-insurance-settings',
        'doctor-cancelled-appointment-2',
    ]))
    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
@endif

@if (Route::is(['patient-dashboard']))
    <!-- Apex JS -->
    <script src="{{ URL::asset('/assets/plugins/apex/apexcharts.min.js') }}"></script>
@endif

@if (Route::is([
        'doctor-dashboard',
        'patient-dashboard',
        'patient-appointment-details',
        'patient-cancelled-appointment',
        'patient-completed-appointment',
        'patient-upcoming-appointment',
    ]))
    <!-- Apexchart JS -->
    <script src="{{ URL::asset('assets/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/apex/chart-data.js') }}"></script>

    <!-- Circle Progress JS -->
    <script src="{{ URL::asset('assets/js/circle-progress.min.js') }}"></script>
@endif

@if (Route::is(['reset-password']))
    <!-- Validation-->
    <script src="{{ URL::asset('/assets/js/validation.js') }}"></script>
@endif

@if (Route::is([
        'add-dependent',
        'calendar',
        'edit-dependent',
        'index-2',
        'index-3',
        'index-4',
        'index-5',
        'index-6',
        'index-7',
        'index-8',
        'index-9',
        'index-10',
        'index-11',
        'index',
        'home-page',
        'index-12',
        'index-13',
        'onboarding-availability',
        'onboarding-consultation',
        'onboarding-payments',
        'onboarding-personalize',
        'onboarding-preferences',
        'onboarding-verify-account',
        'patient-details',
        'patient-Personalize',
        'patient-profile',
        'pharmacy-search',
        'product-all',
        'product-description',
        'product-healthcare',
        'profile-settings',
        'search',
        'my-patients',
        'patient-dashboard',
        'profile-settings',
        'doctor-experience-settings',
        'dependent',
        'doctor-awards-settings',
        'doctor-business-settings',
        'doctor-education-settings',
        'doctor-cancelled-appointment-2',
        'available-timings',
        'medical-records',
        'medical-details',
        'index-14',
    ]))
    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
@endif

@if (Route::is([
        'accounts',
        'available-timings',
        'doctor-add-blog',
        'doctor-profile-settings',
        'doctor-register-step2',
        'doctor-register-step3',
        'doctor-search-grid',
        'edit-blog',
        'edit-dependent',
        'index-3',
        'index-6',
        'index-8',
        'index-10',
        'index-11',
        'map-grid',
        'map-list',
        'medical-records',
        'onboarding-availability',
        'onboarding-consultation',
        'onboarding-cost',
        'onboarding-identity',
        'onboarding-payments',
        'onboarding-personalize',
        'onboarding-phone',
        'onboarding-preferences',
        'onboarding-verification',
        'onboarding-verify-account',
        'patient-details',
        'patient-details',
        'patient-other-details',
        'patient-Personalize',
        'patient-register-step2',
        'patient-register-step5',
        'pharmacy-register-step2',
        'pharmacy-register-step3',
        'pharmacy-search',
        'product-all',
        'product-description',
        'product-healthcare',
        'profile-settings',
        'schedule-timings',
        'search-2',
        'search',
        'frontend.search',
        'search',
        'add-dependent',
        'index-12',
        'index-13',
        'dependent',
        'doctor-dashboard',
        'my-patients',
        'social-media',
        'doctor-request',
        'reviews',
        'invoices',
        'doctor-appointment-start',
        'doctor-upcoming-appointment',
        'doctor-appointments-grid',
        'doctor-specialities',
        'doctor-payment',
        'doctor-appointments',
        'doctor.my-patients',
        'doctor-completed-appointment',
        'patient-dashboard',
        'profile-settings',
        'doctor-cancelled-appointment',
        'patient-appointments',
        'doctor-experience-settings',
        'patient-profile',
        'patient-appointment-details',
        'patient-appointments-grid',
        'patient-cancelled-appointment',
        'patient-completed-appointment',
        'patient-upcoming-appointment',
        'calendar',
        'doctor-pending-blog',
        'doctor-appointment-details',
        'doctor-awards-settings',
        'doctor-blog',
        'doctor-business-settings',
        'doctor-change-password',
        'doctor-clinics-settings',
        'doctor-education-settings',
        'doctor-insurance-settings',
        'paitent-details',
        'doctor-cancelled-appointment-2',
        'index-14',
        'booking-success-one',
        'consultation',
    ]))
    <!-- Select2 JS -->
    <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>
@endif

@if (Route::is(['map-grid', 'map-list']))
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
    <script src="{{ URL::asset('/assets/js/map.js') }}"></script>
@endif

@if (Route::is(['about-us', 'index-6', 'index', 'home-page']))
    <!-- Counter JS -->
    <script src="{{ URL::asset('/assets/js/counter.js') }}"></script>
@endif

@if (Route::is([
        'booking-2',
        'booking',
        'contact-us',
        'faq',
        'doctor-appointment-start',
        'doctor-upcoming-appointment',
        'doctor-appointments-grid',
        'my-patients',
        'doctor-appointments',
        'doctor.my-patients',
        'reviews',
        'doctor-cancelled-appointment',
        'patient-appointments',
        'patient-appointments-grid',
        'doctor-cancelled-appointment-2',
    ]))
    <script>
        let currentDate = new Date();
        let currentSelectedSlot = null; // To keep track of the selected slot
        let weekOffset =
        0; // Keeps track of the current week offset (0 for current week, 1 for next week, -1 for previous week)

        // Function to get the date of the Monday of the week for the current date
        function getMonday(date) {
            const day = date.getDay(),
                diff = date.getDate() - day + (day === 0 ? -6 : 1); // adjust when day is Sunday
            return new Date(date.setDate(diff));
        }

        // Function to populate the week with the current week's dates and handle week offset
        function populateWeek(startDate) {
            const weekContainer = document.getElementById("week-container");
            // Clear previous week days
            weekContainer.querySelectorAll(".day").forEach(day => day.remove());

            let current = new Date(startDate);
            const daysOfWeek = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];

            daysOfWeek.forEach((day, index) => {
                const li = document.createElement("li");
                li.classList.add("day");
                li.dataset.date = current.toISOString(); // Add the date as a data attribute for later use
                li.innerHTML = `
                    <span>${day}</span>
                    <span class="slot-date">${current.toLocaleDateString("en-US", { day: "2-digit", month: "short" })}
                        <small class="slot-year">${current.getFullYear()}</small>
                    </span>`;
                weekContainer.insertBefore(li, weekContainer.querySelector(".right-arrow"));
                current.setDate(current.getDate() + 1);
            });
        }

        // Function to go to the next week
        function nextWeek() {
            weekOffset++;
            currentDate.setDate(currentDate.getDate() + 7);
            populateWeek(getMonday(currentDate));
        }

        // Function to go to the previous week
        function previousWeek() {
            weekOffset--;
            currentDate.setDate(currentDate.getDate() - 7);
            populateWeek(getMonday(currentDate));
        }

        // Initialize current week on page load
        populateWeek(getMonday(currentDate));

        // Slot selection logic
        function selectSlot(slotId, startTime, endTime, day) {
            // Remove 'selected' class from the previously selected slot, if any
            if (currentSelectedSlot) {
                currentSelectedSlot.classList.remove('selected');
            }

            // Find the clicked slot element and add the 'selected' class
            const slotElements = document.querySelectorAll(".timing");
            slotElements.forEach(slot => {
                if (slot.textContent.trim() === startTime) {
                    slot.classList.add('selected');
                    currentSelectedSlot = slot;
                }
            });

            // Update the hidden fields for form submission
            document.getElementById('start_time').value = startTime;
            document.getElementById('slot_id').value = slotId;

            // Set the booking date based on the selected day of the week
            const selectedDate = getDateFromWeekday(day);
            document.getElementById('booking_date').value = selectedDate.toISOString().split("T")[0];

            // Highlight the selected day in the week container
            highlightSelectedDay(selectedDate);
        }

        // Get date based on the day of the week and current week offset
        function getDateFromWeekday(day) {
            const today = new Date();
            const selectedDayIndex = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"].indexOf(
                day);
            const currentWeekMonday = getMonday(today);

            // Adjust the current date for the selected week offset (current, next, or previous)
            currentWeekMonday.setDate(currentWeekMonday.getDate() + (weekOffset * 7));

            // Get the correct date for the selected day
            return new Date(currentWeekMonday.setDate(currentWeekMonday.getDate() + selectedDayIndex));
        }

        // Highlight the selected day in the week container
        function highlightSelectedDay(date) {
            const daySlots = document.querySelectorAll("#week-container .day");
            daySlots.forEach(day => day.classList.remove("highlighted"));

            const selectedDateStr = date.toLocaleDateString("en-US", {
                day: "2-digit",
                month: "short"
            });
            daySlots.forEach(day => {
                const slotDate = day.querySelector(".slot-date");
                if (slotDate && slotDate.textContent.includes(selectedDateStr)) {
                    day.classList.add("highlighted");
                }
            });
        }
    </script>
    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
@endif

@if (Route::is(['dependent', 'medical-details']))
    <script src="{{ URL::asset('/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
@endif

@if (Route::is(['calendar']))
    <!-- Full Calendar JS -->
    <script src="{{ URL::asset('/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.fullcalendar.js') }}"></script>
@endif



@if (Route::is([
        'cart',
        'doctor-profile',
        'map-list',
        'pharmacy-details',
        'pharmacy-search',
        'product-all',
        'product-description',
        'product-healthcare',
        'search',
        'index-10',
    ]))
    <!-- Fancybox JS -->
    <script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
@endif

@if (Route::is(['doctor-dashboard']))
    <!-- Circle Progress JS -->
    <script src="{{ URL::asset('/assets/js/circle-progress.min.js') }}"></script>
@endif

@if (Route::is(['doctor-profile-settings']))
    <!-- Dropzone JS -->
    <script src="{{ URL::asset('/assets/plugins/dropzone/dropzone.min.js') }}"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

    @if (Route::is(['dependent']))
        <!-- Profile Settings JS -->
        <script src="{{ URL::asset('/assets/js/profile-settings.js') }}"></script>
    @endif
@endif

@if (Route::is(['doctor-search-grid', 'search-2']))
    <!-- Jquery UI -->
    <script src="{{ URL::asset('/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
@endif

@if (Route::is([
        'doctor-signup',
        'email-otp',
        'login-phone-otp',
        'login-phone',
        'mobile-otp',
        'onboarding-phone',
        'patient-signup',
    ]))
    <!-- Mobile Input -->
    <script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
@endif

@if (Route::is([
        'index-2',
        'index-3',
        'index-4',
        'index-5',
        'index-6',
        'index-7',
        'index-8',
        'index-9',
        'index-10',
        'index-11',
        'index',
        'home-page',
        'index-12',
        'index-13',
        'pharmacy-index',
        'index-14',
    ]))
    <!-- BacktoTop JS -->
    <script src="{{ URL::asset('/assets/js/backToTop.js') }}"></script>
@endif
<!-- Animation JS -->
<script src="{{ URL::asset('/assets/js/aos.js') }}"></script>


@if (Route::is([
        'index-3',
        'index-4',
        'index-5',
        'index-6',
        'index-7',
        'index-8',
        'index-9',
        'index-10',
        'index-11',
        'index',
        'home-page',
        'index-12',
        'index-13',
        'onboarding-availability',
        'onboarding-consultation',
        'onboarding-cost',
        'onboarding-email-otp',
        'onboarding-email-step-2-verify',
        'onboarding-email',
        'onboarding-identity',
        'onboarding-lock',
        'onboarding-password',
        'onboarding-payments',
        'onboarding-personalize',
        'onboarding-phone-otp',
        'onboarding-phone',
        'onboarding-preferences',
        'onboarding-verification',
        'onboarding-verify-account',
        'patient-dependant-details',
        'patient-details',
        'patient-email',
        'patient-family-details',
        'patient-other-details',
        'patient-Personalize',
        'pharmacy-index',
        'patient-dashboard',
        'patient-appointment-details',
        'patient-cancelled-appointment',
        'patient-completed-appointment',
        'patient-upcoming-appointment',
        'index-14',
        'doctor-profile',
    ]))
    <!-- Owl Carousel JS -->
    <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>
@endif

@if (Route::is(['index-12', 'index-13']))
    <!-- Swiper Slider -->
    <script src="{{ URL::asset('/assets/plugins/swiper/js/swiper-bundle.min.js') }}"></script>
@endif

@if (Route::is(['index-11', 'index-10', 'index-12', 'index-13', 'index-7', 'index-14']))
    <!-- counterup JS -->
    <script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>
@endif

@if (Route::is(['chat-doctor', 'patient-chat']))
    <!-- Swiper JS -->
    <script src="{{ URL::asset('assets/plugins/swiper/swiper.min.js') }}"></script>
@endif

<!-- Custom JS -->
<script src="{{ URL::asset('/assets/js/script.js') }}"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}", "Success", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    @elseif (session('error'))
        toastr.error("{{ session('error') }}", "Error", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    @endif
</script>

{{-- search script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');
        const searchIcon = document.getElementById('searchIcon');

        // Check if the elements exist before adding event listeners
        if (searchForm && searchInput) {
            // Submit form on Enter key press
            searchInput.addEventListener('keypress', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault(); // Prevent default form submission
                    searchForm.submit();
                }
            });
        }

        if (searchForm && searchIcon) {
            // Submit form on search icon click
            searchIcon.addEventListener('click', function() {
                searchForm.submit();
            });
        }
    });
</script>



@if (Route::is(['register','doctor-register','login']))
<script>
    function togglePasswordVisibility() {
        const input = document.getElementById('password');
        const icon = document.querySelector('.custom-toggle-password i');

        if (!input || !icon) return;

        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        icon.classList.toggle('fa-eye', !isPassword);
        icon.classList.toggle('fa-eye-slash', isPassword);
    }

    function toggleConfirmPassword() {
        const input = document.getElementById('password_confirmation');
        const icon = document.querySelector('.custom-toggle-confirm-password i');

        if (!input || !icon) return;

        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        icon.classList.toggle('fa-eye', !isPassword);
        icon.classList.toggle('fa-eye-slash', isPassword);
    }
</script>
@endif

{{-- stripe assesment checkout --}}
@if (!Route::is(['register','doctor-register', 'patient-register-step4', 'doctor-register-step4','frontend.search']))
    <!-- Swiper Slider -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');

        // Function to handle checkout for both buttons
        const handleCheckout = async (buttonId, formId, loaderId, amountId, successUrlId) => {
            const checkoutButton = document.getElementById(buttonId);
            const loader = document.getElementById(loaderId);

            checkoutButton.addEventListener('click', async () => {
                // Show the loader and disable the button
                loader.style.display = 'block';
                checkoutButton.disabled = true;
                checkoutButton.innerHTML = 'Processing...';

                const paymentAmount = document.getElementById(amountId).value;
                const successUrl = document.getElementById(successUrlId).value;

                try {
                    const response = await fetch("{{ url('frontend/assesment-stripe-checkout') }}", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            payment_amount: paymentAmount,
                            success_url: successUrl
                        }),
                    });

                    const session = await response.json();
                    if (session.id) {
                        // Redirect to Stripe Checkout
                        await stripe.redirectToCheckout({
                            sessionId: session.id
                        });
                    } else {
                        throw new Error('Session creation failed');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                } finally {
                    // Hide the loader and enable the button
                    loader.style.display = 'none';
                    checkoutButton.disabled = false;
                    checkoutButton.innerHTML = 'Learn your risk';
                }
            });
        };

        // Initialize checkout handlers for both forms
        handleCheckout('assesment-checkout-button-1', 'payment-form-1', 'payment-loader-1', 'payment-amount-1',
            'success-url-1');
        handleCheckout('assesment-checkout-button-2', 'payment-form-2', 'payment-loader-2', 'payment-amount-2',
            'success-url-2');
        handleCheckout('assesment-checkout-button-3', 'payment-form-3', 'payment-loader-3', 'payment-amount-3',
            'success-url-3');
    </script>
@endif