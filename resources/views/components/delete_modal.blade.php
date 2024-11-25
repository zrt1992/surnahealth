{{-- Delete modal script --}}
{{-- <div class="modal fade" id="delete_record" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="acc_title">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="acc_msg">Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-success si_accept_confirm" id="confirm_delete_button">Yes</a>
                <button type="button" class="btn btn-danger si_accept_cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal  custom-modal custom-modal-two" id="delete_record" tabindex="-1" aria-labelledby="removeImageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removeImageLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
                <span class="text-danger">This action cannot be undone.</span>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm_delete_button">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButton = document.getElementById('confirm_delete_button');

    // Listen for modal open and set the delete ID and route
    document.querySelectorAll('[data-bs-target="#delete_record"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const deleteId = this.dataset.id;
            const deleteRoute = this.dataset.route;

            // Store the dynamic route and ID in the delete button
            deleteButton.dataset.route = deleteRoute;
            deleteButton.dataset.id = deleteId;
        });
    });

    // Handle delete confirmation
    deleteButton.addEventListener('click', function () {
        const deleteRoute = this.dataset.route;
        const deleteId = this.dataset.id;

        // Replace :id in the route with the actual ID
        const deleteUrl = deleteRoute.replace(':id', deleteId);

        // Redirect to the constructed URL
        window.location.href = deleteUrl;
    });
});

</script>