<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        // Accept appointment
        $('.accept-link').on('click', function(e) {
            e.preventDefault();
            let appointmentId = $(this).data('appointment-id');

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
                    toastr.error('There was an error accepting the appointment');
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
