<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <!-- Toastr JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
    $(document).ready(function() {

        $('.reject-link').on('click', function() {

            var selectedRequestId = $(this).data('appointment-id');


            $('#appointment_request_id').val(selectedRequestId);
            $('.modal-title').text('Add New Slot for ' + selectedRequestId);
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Accept appointment with Google token check
        $('.accept-link').on('click', function(e) {
            e.preventDefault();
            let appointmentId = $(this).data('appointment-id');

            // First, check if Google token is in the session
            $.ajax({
                url: '{{ route('check.google.token') }}', // Add this route to check token status
                type: 'GET',
                success: function(response) {
                    if (response.requiresAuth) {
                        // Redirect to Google auth if token is missing
                        window.location.href = '{{ route('google.auth') }}';
                    } else {
                        // Token is present, proceed with accepting the appointment
                        $.ajax({
                            url: `/doctor-request/accept/${appointmentId}`,
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.success) {
                                    toastr.success(response.message);
                                    // You might want to reload the page or update the UI here
                                }
                            },
                            error: function(error) {
                                toastr.error(
                                    'There was an error accepting the appointment'
                                );
                            }
                        });
                    }
                },
                error: function() {
                    toastr.error('Unable to check Google token status');
                }
            });
        });
    });
</script>



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

        // Loop through all the slot elements
        slotElements.forEach(slot => {
            // Check if the slot's data-id matches the passed slotId
            if (slot.dataset.slotId == slotId) {
                // Add the 'selected' class to the clicked slot
                slot.classList.add('selected');
                currentSelectedSlot = slot; // Store the current selected slot
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


{{-- add experience setting --}}
<script>
    const addExperienceBtn = document.querySelector('.add-experience');
    const experienceContainer = document.getElementById('list-accord');
    let experienceCount = 0;

    addExperienceBtn.addEventListener('click', () => {
        experienceCount++;

        const newExperience = document.createElement('div');
        newExperience.classList.add('user-accordion-item');

        newExperience.innerHTML = `
            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#collapse-${experienceCount}">
                New Experience <span class="remove-experience"></span>
            </a>
            <div class="accordion-collapse collapse" id="collapse-${experienceCount}" data-bs-parent="#list-accord">
                <div class="content-collapse">
                    <div class="add-service-info">
                        <div class="add-info">
                            <div class="row align-items-center">
                                 <input type="hidden" name="form_type[]" value="create">
                                <div class="col-md-12">
                                    <div class="form-wrap mb-2">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Hospital Logo</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New
                                                        <input type="file" name="hospital_logo[]" class="upload">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p class="form-text">Your Image should be below 4 MB, accepted formats: jpg, png, svg</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Title</label>
                                        <input type="text" name="title[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Hospital</label>
                                        <input type="text" name="hospital[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Year of Experience</label>
                                        <input type="text" name="year_of_experience[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Location</label>
                                        <input type="text" name="location[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Employment</label>
                                        <select name="employment_type[]" class="select">
                                            <option value="full-time">Full Time</option>
                                            <option value="part-time">Part Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Job Description</label>
                                        <textarea name="job_description[]" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Start Date</label>
                                        <input type="text" name="start_date[]" class="form-control datetimepicker">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">End Date</label>
                                        <input type="text" name="end_date[]" class="form-control datetimepicker">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">&nbsp;</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="currently_working[]" value="1"> I Currently Work Here
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new experience block
        experienceContainer.appendChild(newExperience);

        if ($('select').length > 0) {
            $('.select').select2({
                minimumResultsForSearch: -1,
                width: '100%'
            });
        }
        if ($('.datetimepicker').length > 0) {
            $('.datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                icons: {
                    up: "fas fa-chevron-up",
                    down: "fas fa-chevron-down",
                    next: 'fas fa-chevron-right',
                    previous: 'fas fa-chevron-left'
                }
            });
        }

    });
</script>

{{-- add Education setting --}}
<script>
    const addEducationBtn = document.querySelector('.add-educations');
    const educationContainer = document.getElementById('list-accord');
    let educationCount = 0;

    addEducationBtn.addEventListener('click', () => {
        educationCount++;

        const newExperience = document.createElement('div');
        newExperience.classList.add('user-accordion-item');

        newExperience.innerHTML = `
            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#collapse-${educationCount}">
                 Education <span class="remove-experience"></span>
            </a>
            <div class="accordion-collapse collapse" id="collapse-${educationCount}" data-bs-parent="#list-accord">
              <div class="content-collapse">
												<div class="add-service-info">
													<div class="add-info">
														<div class="row align-items-center">
															<input type="hidden" name="form_type[]" value="create">
															<div class="col-md-12">
																<div class="form-wrap mb-2">
																	<div class="change-avatar img-upload">
																		<div class="profile-img">
																			<i class="fa-solid fa-file-image"></i>
																		</div>
																		<div class="upload-img">
																			<h5>Logo</h5>
																			<div class="imgs-load d-flex align-items-center">
																				<div class="change-photo">
																					Upload New
																					<input type="file"
																						name="logo[]" class="upload">
																				</div>
																				<a href="#"
																					class="upload-remove">Remove</a>
																			</div>
																			<p class="form-text">Your Image should be below 4
																				MB, accepted formats: jpg, png, svg</p>
																		</div>
																	</div>
																</div>
															</div>
														<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Name of the institution</label>
																	<input type="text" name="name_of_institution[]"
																		class="form-control">
																	@error('name_of_institution')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
																</div>
															</div>
														<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Course <span
																			class="text-danger">*</span></label>
																	<input type="text" name="course[]"
																		class="form-control">
																	@error('course')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
																</div>
															</div>
															
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Start Date <span
																			class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" name="start_date[]"
																			class="form-control datetimepicker">
																		<span class="icon"><i
																				class="fa-regular fa-calendar-days"></i></span>
																		@error('start_date')
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">End Date <span
																			class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" name="end_date[]"
																			class="form-control datetimepicker">
																		<span class="icon"><i
																				class="fa-regular fa-calendar-days"></i></span>
																		@error('end_date')
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	
																	
																	<label class="col-form-label">No of Years <span class="text-danger">*</span></label>
																	<input type="text" name="no_of_years[]"
																		class="form-control">
																	@error('no_of_years')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-wrap">
																	<label class="col-form-label">Description <span
																			class="text-danger">*</span></label>
																	<textarea name="description[]" class="form-control" rows="3"></textarea>
																	@error('description')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
																</div>
															</div>
															
														</div>
													</div>
													<div class="text-end">
														<a href="#" class="reset more-item">Reset</a>
													</div>
												</div>
											</div>
            </div>
        `;

        // Append the new experience block
        educationContainer.appendChild(newExperience);

        if ($('.datetimepicker').length > 0) {
            $('.datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                icons: {
                    up: "fas fa-chevron-up",
                    down: "fas fa-chevron-down",
                    next: 'fas fa-chevron-right',
                    previous: 'fas fa-chevron-left'
                }
            });
        }

    });
</script>

{{-- doctor Award setting --}}
<script>
    const addAwardBtn = document.querySelector('.add-awrads'); // Button to add awards
    const awardContainer = document.getElementById('list-accord'); // Container for awards
    let awardCount = 0;

    addAwardBtn.addEventListener('click', () => {
        awardCount++;

        // Create a new award section dynamically
        const newAward = document.createElement('div');
        newAward.classList.add('user-accordion-item');

        newAward.innerHTML = `
            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#award-${awardCount}">
                Awards <span class="remove-award"></span>
            </a>
            <div class="accordion-collapse collapse" id="award-${awardCount}" data-bs-parent="#list-accord">
                <div class="content-collapse">
                    <div class="add-service-info">
                        <div class="add-info">
                            <div class="row align-items-center">
                                <input type="hidden" name="form_type[]" value="create">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Award Name</label>
                                        <input type="text" class="form-control" name="award_name[]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Year <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <input type="text" class="form-control datetimepicker" name="year[]">
                                            <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="3" name="description[]"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="reset more-item">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new award block to the container
        awardContainer.appendChild(newAward);

        // Initialize the datetimepicker for the newly added award
        if ($('.datetimepicker').length > 0) {
            $('.datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                icons: {
                    up: "fas fa-chevron-up",
                    down: "fas fa-chevron-down",
                    next: 'fas fa-chevron-right',
                    previous: 'fas fa-chevron-left'
                }
            });
        }
    });

    // Event delegation to handle dynamic deletion of awards
    awardContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-award')) {
            event.preventDefault();
            const awardItem = event.target.closest('.user-accordion-item');
            if (awardItem) awardItem.remove();
        }
    });
</script>

{{-- doctor insurance setting --}}
<script>
    const addInsuranceBtn = document.querySelector('.add-insurance'); // Button to add insurance
    const insuranceContainer = document.getElementById('list-accord'); // Container for insurances
    let insuranceCount = 1;

    addInsuranceBtn.addEventListener('click', () => {
        insuranceCount++;

        // Create a new insurance section dynamically
        const newInsurance = document.createElement('div');
        newInsurance.classList.add('user-accordion-item');

        newInsurance.innerHTML = `
            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#insurance-${insuranceCount}">
                Insurance <span class="remove-insurance"></span>
            </a>
            <div class="accordion-collapse collapse" id="insurance-${insuranceCount}" data-bs-parent="#list-accord">
                <div class="content-collapse">
                    <div class="add-service-info">
                        <div class="add-info">
                            <div class="row align-items-center">
                                <input type="hidden" name="form_type[]" value="create">
                                <div class="col-md-12">
                                    <div class="form-wrap mb-2">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Logo</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New
                                                        <input type="file" name="logo[]" class="upload">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p class="form-text">
                                                    Your Image should be below 4 MB, accepted formats: jpg, png, svg.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap">
                                        <label class="col-form-label">Insurance Name</label>
                                        <input type="text" class="form-control" name="insurance_name[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="reset more-item">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new insurance block to the container
        insuranceContainer.appendChild(newInsurance);
    });

    // Event delegation to handle dynamic deletion of insurances
    insuranceContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-insurance')) {
            event.preventDefault();
            const insuranceItem = event.target.closest('.user-accordion-item');
            if (insuranceItem) insuranceItem.remove();
        }
    });
</script>

{{-- Doctor clinic setting --}}
<script>
    const addClinicBtn = document.querySelector('.add-clinics'); // Button to add clinics
    const clinicContainer = document.getElementById('list-accord'); // Container for clinics
    let clinicCount = 1; // Initialize clinic counter

    // Add a new clinic dynamically
    addClinicBtn.addEventListener('click', () => {
        clinicCount++;

        // Create a new clinic block
        const newClinic = document.createElement('div');
        newClinic.classList.add('user-accordion-item');

        newClinic.innerHTML = `
            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#clinic-${clinicCount}">
                Clinic <span class="remove-clinic"></span>
            </a>
            <div class="accordion-collapse collapse" id="clinic-${clinicCount}" data-bs-parent="#list-accord">
                <div class="content-collapse">
                    <div class="add-service-info">
                        <div class="add-info">
                            <div class="row align-items-center">
                                	<input type="hidden" name="form_type[]" value="create">
                                <div class="col-md-12">
                                    <div class="form-wrap mb-2">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Logo</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New 
                                                        <input type="file" class="upload" name="logo[]">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p class="form-text">Your Image should Below 4 MB, Accepted format jpg, png, svg</p>
                                            </div>			
                                        </div>	
                                    </div>	
                                </div>	
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Clinic Name</label>
                                        <input type="text" class="form-control" name="clinic_name[]">
                                    </div>													
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Location</label>
                                        <input type="text" class="form-control" name="location[]">
                                    </div>													
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Address</label>
                                        <input type="text" class="form-control" name="address[]">
                                    </div>													
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Gallery</label>
                                        <div class="drop-file">
                                            <p>Drop files or Click to upload</p>
                                            <input type="file" multiple name="gallery[]">
                                        </div>
                                        <div class="view-imgs">
                                            <!-- Placeholder for dynamically uploaded images -->
                                        </div>
                                    </div>													
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="reset more-item">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new clinic block to the container
        clinicContainer.appendChild(newClinic);
    });

    // Event delegation to handle dynamic deletion of clinics
    clinicContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-clinic')) {
            event.preventDefault();
            const clinicItem = event.target.closest('.user-accordion-item');
            if (clinicItem) clinicItem.remove();
        }
    });
</script>

{{-- Toaster --}}
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Success", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    @elseif(session('error'))
        toastr.error("{{ session('error') }}", "Error", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    @endif
</script>
