@if (Route::is(['accounts']))
    <!-- Payment Request Moodal -->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="payment_request">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Request <span class="text-danger request-id">Request ID :
                            #RQ-1323</span></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="accounts">
                        <div class="input-block input-block-new">
                            <label class="form-label">Request Amount</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Description</label>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /Payment Request Moodal -->

    <!-- Account Details Modal-->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="account_details">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Account Details</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('account.store') }}" method="POST">
                        @csrf
                        <div class="input-block input-block-new">
                            <label class="form-label">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control">
                            @error('bank_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Branch Name</label>
                            <input type="text" name="branch_name" class="form-control">
                            @error('branch_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Account Number</label>
                            <input type="text" name="account_number" class="form-control">
                            @error('account_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Account Name</label>
                            <input type="text" name="account_name" class="form-control">
                            @error('account_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /Account Details Modal-->

    <!-- Other Accounts Modal-->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="other_accounts">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Other Accounts</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="other-accounts-info">
                        <ul>
                            @isset($accounts)
                                @forelse ($accounts as $account)
                                    <li>
                                        <ul class="other-bank-info">
                                            <li>
                                                <h6>Name</h6>
                                                <span>{{ $account->bank_name }}</span>
                                            </li>
                                            <li>
                                                <h6>Account No</h6>
                                                <span>{{ $account->account_number }}</span>
                                            </li>
                                            <li>
                                                <h6>Branch</h6>
                                                <span>{{ $account->branch_name }}</span>
                                            </li>
                                            <li>
                                                <h6>Name on Bank Account</h6>
                                                <span>{{ $account->account_name }}</span>
                                            </li>
                                            <li>
                                                @if ($account->default)
                                                    <a href="#">Current</a>
                                                @else
                                                    <a href="{{ route('account-default', $account->id) }}">Change to
                                                        default</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </li>
                                @empty
                                    <p>No accounts found.</p>
                                @endforelse
                            @else
                                <!-- Default content when $accounts is not available -->
                            @endisset

                        </ul>
                        <a href="#" class="btn btn-primary prime-btn w-100 mt-2" data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Other Accounts Modal-->

    <!-- Request Completed Modal-->
    <div class="modal fade custom-modal custom-modal-two" id="request_details_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Details <span class="badge badge-success-bg">Completed</span></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="completed-request">
                        <ul>
                            <li>
                                <h6>ID</h6>
                                <span>#AC-1234</span>
                            </li>
                            <li>
                                <h6>Requested on</h6>
                                <span>24 Mar 2024</span>
                            </li>
                            <li>
                                <h6>Credited Date</h6>
                                <span>24 Mar 2024</span>
                            </li>
                            <li>
                                <h6>Amount</h6>
                                <span class="text-blue">$300</span>
                            </li>
                        </ul>
                        <div class="bank-detail">
                            <h4>Bank Details</h4>
                            <div class="accont-information">
                                <h6>Name</h6>
                                <span>Citi Bank Inc</span>
                            </div>
                            <div class="accont-information">
                                <h6>Account No</h6>
                                <span>5396 5250 1908 XXXX</span>
                            </div>
                            <div class="accont-information">
                                <h6>Branch</h6>
                                <span>London</span>
                            </div>
                        </div>
                        <div class="request-des">
                            <h4>Reqeust Description</h4>
                            <p>I recently completed a series of dental treatments with Dr.Edalin Hendry,
                                and I couldn't be more pleased with the results. From my very first appointment.
                            </p>
                        </div>
                        <a href="#" class="btn btn-primary prime-btn w-100" data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Request Completed Modal-->

    <!-- Request Cancel Modal-->
    <div class="modal fade custom-modal custom-modal-two" id="request_cancel_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Details <span class="badge badge-danger-bg">Cancelled</span></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cancelled-request">
                        <div class="canceled-user-info d-flex align-items-center">
                            <div class="patinet-information">
                                <a href="{{ url('doctor-upcoming-appointment') }}">
                                    <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-01.jpg') }}"
                                        alt="User Image">
                                </a>
                                <div class="patient-info">
                                    <p>#Apt0001</p>
                                    <h6><a href="{{ url('doctor-upcoming-appointment') }}">Adrian</a></h6>
                                </div>
                            </div>
                            <div class="email-info">
                                <ul>
                                    <li><i class="fa-solid fa-envelope"></i>adran@example.com</li>
                                    <li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cancellation-fees">
                            <h6>Consultation Fees : $200</h6>
                            <div class="cancellation-info">
                                <div class="appointment-type">
                                    <p class="md-text">Type of Appointment</p>
                                    <p><i class="fa-solid fa-building text-green"></i>Direct Visit</p>
                                </div>
                                <div class="appointment-type">
                                    <p class="md-text">Clinic Location</p>
                                    <p>Adrian’s Dentistry</p>
                                </div>
                            </div>
                        </div>
                        <div class="cancel-reason">
                            <h5>Reason</h5>
                            <p>I have an urgent surgery, while our Appointment so i am rejecting appointment </p>
                            <span class="text-danger">Cancelled By You on 23 Mar 2024</span>
                        </div>
                        <span class="text-blue refund">Status : Refund Accepted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Request Cancel Modal-->
@endif

@if (Route::is(['calendar']))
    <!-- Add Event Modal -->
    <div id="add_event" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label>Event Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="mb-3">
                            <label>Event Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Event Modal -->

    <!-- Add Event Modal -->
    <div class="modal custom-modal fade none-border" id="my_event">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
                    <button type="button" class="btn btn-danger delete-event submit-btn"
                        data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Event Modal -->

    <!-- Add Category Modal -->
    <div class="modal custom-modal fade" id="add_new_event">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label>Category Name</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                name="category-name" />
                        </div>
                        <div class="mb-3">
                            <label>Choose Category Color</label>
                            <select class="form-select form-control form-white select"
                                data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="inverse">Inverse</option>
                            </select>
                        </div>
                        <div class="submit-section text-center">
                            <button type="button" class="btn btn-primary save-category submit-btn"
                                data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Category Modal -->
@endif
@if (Route::is(['chat-doctor']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="{{ URL::asset('/assets/img/patients/patient.jpg') }}"
                                        class="call-avatar">
                                    <h4>Richard Wilson</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('voice-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('/assets/img/patients/patient.jpg') }}" alt="User Image">
                                    <h4>Richard Wilson</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('video-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['chat']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image"
                                        src="{{ URL::asset('assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        class="call-avatar">
                                    <h4>Darren Elder</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('voice-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                    <h4>Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('video-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['components']))
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal" data-bs-original-title=""
                        title="">Close</button>
                    <button class="btn btn-secondary" type="button" data-bs-original-title="" title="">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <p>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <h5>Popover in a modal</h5>
                    <p>This <a class="btn btn-primary popover-test" href="javascript:;" role="button"
                            title="" data-content="Popover body content is set in this attribute."
                            data-container="#exampleModalPopovers" data-bs-original-title="Popover title">button</a>
                        triggers a popover on click.</p>
                    <hr>
                    <h5>Tooltips in a modal</h5>
                    <p><a class="tooltip-test" href="javascript:;" title=""
                            data-container="#exampleModalPopovers" data-bs-original-title="Tooltip">This link</a> and
                        <a class="tooltip-test" href="javascript:;" title=""
                            data-container="#exampleModalPopovers" data-bs-original-title="Tooltip">that link</a> have
                        tooltips on hover.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="grid-modal" tabindex="-1" role="dialog" aria-labelledby="grid-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body grid-showcase">
                    <div class="container-fluid bd-example-row">
                        <div class="row">
                            <div class="col-md-4"><span>.col-md-4</span></div>
                            <div class="col-md-4 ms-auto"><span>.col-md-4 .ms-auto</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ms-auto"><span>.col-md-3 .ms-auto</span></div>
                            <div class="col-md-2 ms-auto"><span>.col-md-2 .ms-auto</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ms-auto"><span>.col-md-6 .ms-auto</span></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9"><span>Level 1: .col-sm-9</span>
                                <div class="row">
                                    <div class="col-8 col-sm-6"><span>Level 2: .col-8 .col-sm-6</span></div>
                                    <div class="col-4 col-sm-6"><span>Level 2: .col-4 .col-sm-6</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">New message</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Recipient:</label>
                            <input class="form-control" type="text" value="@fat" data-bs-original-title=""
                                title="">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Send
                        message</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New message</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Recipient:</label>
                            <input class="form-control" id="recipient-name" type="text" value="@Mat"
                                data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Send
                        message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New message</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Recipient:</label>
                            <input class="form-control" type="text" value="@getbootstrap"
                                data-bs-original-title="" title="">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Message:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        data-bs-original-title="" title="">Close</button>
                    <button class="btn btn-primary" type="button" data-bs-original-title="" title="">Send
                        message</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">...</div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">...</div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <div class="modal-body">...</div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['dependent']))
    <!-- Add Dependent Modal-->
    <div class="modal fade custom-modals" id="add_dependent">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Dependant</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('dependents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="add-dependent">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrap pb-0">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Profile Image</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New
                                                        <input type="file" class="upload" name="profile_image"
                                                            id="profileImageInput">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p>Your image should be below 4 MB, accepted formats: jpg, png, svg</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Relationship</label>
                                        <input type="text" class="form-control" name="relationship" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">DOB <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <input type="text" class="form-control datetimepicker" name="dob"
                                                required>
                                            <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Select Gender</label>
                                        <select class="select" name="gender" required>
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /Add Dependent Modal-->

    <!-- Edit Dependent Modal-->
    <div class="modal fade custom-modals" id="edit_dependent" tabindex="-1" aria-labelledby="edit_dependent_label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="edit_dependent_label">Edit Dependant</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('dependents.update', ':id') }}" method="POST" enctype="multipart/form-data"
                    id="edit_dependent_form">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrap pb-0">
                                    <div class="change-avatar img-upload">
                                        <div class="profile-img">
                                            <i class="fa-solid fa-file-image"></i>
                                        </div>
                                        <div class="upload-img">
                                            <h5>Profile Image</h5>
                                            <div class="imgs-load d-flex align-items-center">
                                                <div class="change-photo">
                                                    Upload New
                                                    <input type="file" class="upload" name="profile_image">
                                                </div>
                                                <a href="#" class="upload-remove">Remove</a>
                                            </div>
                                            <p>Your Image should be below 4 MB, Accepted formats: jpg, png, svg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="dependant_name"
                                        value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Relationship</label>
                                    <input type="text" class="form-control" name="relationship"
                                        id="dependant_relationship" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">DOB <span class="text-danger">*</span></label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" name="dob"
                                            id="dependant_dob" value="">
                                        <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Gender</label>
                                    <select class="select" name="gender" id="dependant_gender">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- /Edit Dependent Modal-->
@endif
@if (Route::is(['doctor-blog']))
    <!-- Model -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Inactive Service?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg">Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Model -->
@endif
@if (Route::is(['doctor-pending-blog']))
    <!-- Model -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Active Service?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg">Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Model -->
@endif

@if (Route::is(['doctor-profile-2']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        class="call-avatar">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('voice-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('video-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['medical-details']))
    <div class="modal fade custom-modals" id="add-med-record">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Medical Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('patient-medical-detail.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="timing-modal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">BMI</label>
                                        <input type="text" name="bmi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">Heart Rate</label>
                                        <input type="text" name="heart_rate" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">Weight</label>
                                        <input type="text" name="weight" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">FBC</label>
                                        <input type="text" name="fbc" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block input-block-new">
                                        <label class="col-form-label">End Date <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="text" name="end_date"
                                                class="form-control datetimepicker">
                                            <span class="icon cal-form-icon"><i
                                                    class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Medical Detail -->

    <!-- Edit Medical Detail -->
    <div class="modal fade custom-modals" id="edit-med-record">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Medical Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="medical-details">
                    <div class="modal-body">
                        <div class="timing-modal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">BMI</label>
                                        <input type="text" class="form-control" value="20.1 kg/m2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">Heart Rate</label>
                                        <input type="text" class="form-control" value="140 Bpm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">Weight</label>
                                        <input type="text" class="form-control" value="300">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block input-block-new">
                                        <label class="form-label">FBC</label>
                                        <input type="text" class="form-control" value="70 - 90">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block input-block-new">
                                        <label class="col-form-label">End Date <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="text" class="form-control datetimepicker">
                                            <span class="icon cal-form-icon"><i
                                                    class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Medical Detail -->

    <!-- Medical Detail -->
    <div class="modal fade custom-modals" id="med-detail">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Medical Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="medical-details">
                    <div class="modal-body">
                        <div class="med-detail-patient">
                            <div class="med-patient">
                                <span><img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                        alt="Img"></span>
                                <div class="name-detail">
                                    <h5>Hendrita Kearns</h5>
                                    <ul>
                                        <li>Age : 42 </li>
                                        <li>Female</li>
                                        <li>AB+ve</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date-cal">
                                <p><span><i class="fa-solid fa-calendar-days me-2"></i>Last Updated</span>24 Mar 2024
                                </p>
                            </div>
                        </div>
                        <div class="med-detail-item">
                            <div class="d-flex flex-wrap">
                                <div class="health-records icon-red">
                                    <span><i class="fa-solid fa-syringe"></i>Blood Pressure</span>
                                    <h3>100 mg/dl</h3>
                                </div>
                                <div class="health-records icon-orange">
                                    <span><i class="fa-solid fa-heart"></i>Heart Rate</span>
                                    <h3>140 Bpm</h3>
                                </div>
                                <div class="health-records icon-dark-blue">
                                    <span><i class="fa-solid fa-notes-medical"></i>Glucose Level</span>
                                    <h3>70 - 90</h3>
                                </div>
                                <div class="health-records icon-amber">
                                    <span><i class="fa-solid fa-temperature-high"></i>Body Temprature</span>
                                    <h3>37.5 C</h3>
                                </div>
                                <div class="health-records icon-purple">
                                    <span><i class="fa-solid fa-user-pen"></i>BMI </span>
                                    <h3>20.1 kg/m2</h3>
                                </div>
                                <div class="health-records icon-blue">
                                    <span><i class="fa-solid fa-highlighter"></i>SPo2</span>
                                    <h3>96%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Medical Detail -->
@endif

@if (Route::is(['medical-records']))
    <!-- Add Medical Records Modal -->
    <div class="modal fade custom-modals" id="add_medical_records">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Medical Record</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('medical-record.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Patient</label>
                                    <select class="select" name="patient">
                                        <option>Select Patient</option>
                                        <option value="Adrian Marshall">Adrian Marshall</option>
                                        <option value="Kelly Stevens">Kelly Stevens</option>
                                        <option value="Catherine Gracey">Catherine Gracey</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Start Date <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="start_date" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Hospital Name</label>
                                    <input type="text" name="hospital_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <label class="col-form-label">Symptoms <span
                                            class="text-danger">*</span></label>
                                    <div class="input-block input-block-new mb-0">
                                        <input class="input-tags form-control" id="inputBox3" type="text"
                                            data-role="tagsinput" placeholder="Type New" name="symptoms"
                                            value="Fever, Headache">
                                        <a href="#" class="input-text save-btn">Save</a>
                                    </div>
                                </div>
                                <div class="form-wrap mb-0">
                                    <label class="col-form-label">Report</label>
                                    <div class="upload-file">
                                        <input type="file" name="report">
                                        <p>Drop files or Click to upload</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Medical Records Modal -->

    <!-- Edit Medical Records Modal -->
    <div class="modal fade custom-modals" id="edit_medical_records" tabindex="-1"
        aria-labelledby="edit_medical_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Medical Record</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form id="edit_medical_records_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" id="record_title" name="title"
                                        placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Patient</label>
                                    <select class="form-control" id="record_patient" name="patient">
                                        <option>Select Patient</option>
                                        <option>Adrian Marshall</option>
                                        <option>Kelly Stevens</option>
                                        <option>Catherine Gracey</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Start Date <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control datetimepicker"
                                        id="record_start_date" name="start_date" placeholder="Start Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Hospital Name</label>
                                    <input type="text" class="form-control" id="record_hospital_name"
                                        name="hospital_name" placeholder="Hospital Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label">Symptoms <span class="text-danger">*</span></label>
                                <div class="input-block input-block-new">
                                    <input class="input-tags form-control" id="record_symptoms" name="symptoms"
                                        type="text" data-role="tagsinput" placeholder="Type New">
                                    <a href="#" class="input-text save-btn">Save</a>
                                </div>
                                <div class="form-wrap mb-0">
                                    <label class="col-form-label">Report</label>
                                    <div class="upload-file">
                                        <input type="file" id="record_report" name="report">
                                        <p>Drop files or Click to upload</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- /Edit Medical Records Modal -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Prescription ID :</strong> #PR-123 <br>
                                        <strong>Issued:</strong> 21 Mar 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Doctor Details</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Edalin Hendry <br>
                                            806 Twin Willow Lane, <br>
                                            Newyork, USA <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info invoice-info2">
                                        <h6 class="customer-text">Patient Details</h6>
                                        <p class="invoice-details">
                                            Adrian Marshall <br>
                                            299 Star Trek Drive,<br>
                                            Florida, 32405, USA <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Prescription Details</h6>
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Medicine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                </tr>
                                                <tr>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                </tr>
                                                <tr>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                </tr>
                                                <tr>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Information -->
                        <div class="other-info">
                            <h4>Other information</h4>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus
                                dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo
                                vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem.
                                Nullam finibus pellentesque libero.</p>
                        </div>
                        <div class="other-info">
                            <h4>Follow Up</h4>
                            <p class="text-muted mb-0">Follow u p after 3 months, Have to come on empty stomach</p>
                        </div>ch
                        <div class="prescriber-info">
                            <h6>Dr. Edalin Hendry</h6>
                            <p>Dept of Cardiology</p>
                        </div>
                        <!-- /Invoice Information -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->
@endif

@if (Route::is(['patient-accounts']))
    <!-- Payment Request Moodal -->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="payment_request">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Request <span class="text-danger request-id">Request ID :
                            #RQ-1323</span></h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="patient-accounts">
                        <div class="input-block input-block-new">
                            <label class="form-label">Request Amount</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Description</label>
                            <textarea rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /Payment Request Moodal -->

    <!-- Account Details Modal-->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="account_details">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Account Details</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('patient-account.store') }}" method="POST">
                        @csrf
                        <div class="input-block input-block-new">
                            <label class="form-label">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control">
                            @error('bank_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Branch Name</label>
                            <input type="text" name="branch_name" class="form-control">
                            @error('branch_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Account Number</label>
                            <input type="text" name="account_number" class="form-control">
                            @error('account_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-block input-block-new">
                            <label class="form-label">Account Name</label>
                            <input type="text" name="account_name" class="form-control">
                            @error('account_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /Account Details Modal-->

    <!-- Other Accounts Modal-->
    <div class="modal fade custom-modal custom-modal-two modal-lg" id="other_accounts">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Other Accounts</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="other-accounts-info">
                        <ul>
                            @isset($accounts)
                                @forelse ($accounts as $account)
                                    <li>
                                        <ul class="other-bank-info">
                                            <li>
                                                <h6>Name</h6>
                                                <span>{{ $account->bank_name }}</span>
                                            </li>
                                            <li>
                                                <h6>Account No</h6>
                                                <span>{{ $account->account_number }}</span>
                                            </li>
                                            <li>
                                                <h6>Branch</h6>
                                                <span>{{ $account->branch_name }}</span>
                                            </li>
                                            <li>
                                                <h6>Name on Bank Account</h6>
                                                <span>{{ $account->account_name }}</span>
                                            </li>
                                            <li>
                                                @if ($account->default)
                                                    <a href="#">Current</a>
                                                @else
                                                    <a href="{{ route('patient-account-default', $account->id) }}">Change
                                                        to default</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </li>
                                @empty
                                    <p>No accounts found.</p>
                                @endforelse
                            @else
                                <!-- Default content when $accounts is not available -->
                            @endisset

                        </ul>

                        <a href="#" class="btn btn-primary prime-btn w-100 mt-2"
                            data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Other Accounts Modal-->

    <!-- Request Completed Modal-->
    <div class="modal fade custom-modal custom-modal-two" id="request_details_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Details <span class="badge badge-success-bg">Completed</span>
                    </h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="completed-request">
                        <ul>
                            <li>
                                <h6>ID</h6>
                                <span>#AC-1234</span>
                            </li>
                            <li>
                                <h6>Requested on</h6>
                                <span>24 Mar 2024</span>
                            </li>
                            <li>
                                <h6>Credited Date</h6>
                                <span>24 Mar 2024</span>
                            </li>
                            <li>
                                <h6>Amount</h6>
                                <span class="text-blue">$300</span>
                            </li>
                        </ul>
                        <div class="bank-detail">
                            <h4>Bank Details</h4>
                            <div class="accont-information">
                                <h6>Name</h6>
                                <span>Citi Bank Inc</span>
                            </div>
                            <div class="accont-information">
                                <h6>Account No</h6>
                                <span>5396 5250 1908 XXXX</span>
                            </div>
                            <div class="accont-information">
                                <h6>Branch</h6>
                                <span>London</span>
                            </div>
                        </div>
                        <div class="request-des">
                            <h4>Reqeust Description</h4>
                            <p>I recently completed a series of dental treatments with Dr.Edalin Hendry,
                                and I couldn't be more pleased with the results. From my very first appointment.
                            </p>
                        </div>
                        <a href="#" class="btn btn-primary prime-btn w-100"
                            data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Request Completed Modal-->

    <!-- Request Cancel Modal-->
    <div class="modal fade custom-modal custom-modal-two" id="request_cancel_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Details <span class="badge badge-danger-bg">Cancelled</span>
                    </h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cancelled-request">
                        <div class="canceled-user-info d-flex align-items-center">
                            <div class="patinet-information">
                                <a href="{{ url('doctor-upcoming-appointment') }}">
                                    <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-01.jpg') }}"
                                        alt="User Image">
                                </a>
                                <div class="patient-info">
                                    <p>#Apt0001</p>
                                    <h6><a href="{{ url('doctor-upcoming-appointment') }}">Adrian</a></h6>
                                </div>
                            </div>
                            <div class="email-info">
                                <ul>
                                    <li><i class="fa-solid fa-envelope"></i>adran@example.com</li>
                                    <li><i class="fa-solid fa-phone"></i>+1 504 368 6874</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cancellation-fees">
                            <h6>Consultation Fees : $200</h6>
                            <div class="cancellation-info">
                                <div class="appointment-type">
                                    <p class="md-text">Type of Appointment</p>
                                    <p><i class="fa-solid fa-building text-green"></i>Direct Visit</p>
                                </div>
                                <div class="appointment-type">
                                    <p class="md-text">Clinic Location</p>
                                    <p>Adrian’s Dentistry</p>
                                </div>
                            </div>
                        </div>
                        <div class="cancel-reason">
                            <h5>Reason</h5>
                            <p>I have an urgent surgery, while our Appointment so i am rejecting appointment </p>
                            <span class="text-danger">Cancelled By You on 23 Mar 2024</span>
                        </div>
                        <div class="refund-status">
                            <span class="text-blue refund">Status : Initiate Now</span>
                            <span class="text-blue refund">Status : Initiated</span>
                            <span class="text-blue refund">Status : Completed</span>
                            <span class="text-blue refund">Status : Pending</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Request Cancel Modal-->

    <!-- Refund Request Modal-->
    <div class="modal fade info-modal" id="refund-request">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-wrap text-center">
                        <span class="icon-success"><i class="fa-solid fa-calendar-check"></i></span>
                        <h3>Refund initiated Successfully</h3>
                        <p>Your Payment will be credited in your bank account in 3 working days</p>
                        <a href="#" class="btn btn-primary prime-btn" data-bs-dismiss="modal">Okay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Refund Request Modal-->
@endif

@if (Route::is(['patient-dashboard']))
    <!-- Add Dependent Modal-->
    <div class="modal fade custom-modals" id="add_dependent">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Dependant</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="add-dependent">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrap pb-0">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Profile Image</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p>Your Image should Below 4 MB, Accepted format jpg,png,svg</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Relationship</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">DOB <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <input type="text" class="form-control datetimepicker">
                                            <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Select Gender</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Dependent Modal-->
@endif

@if (Route::is(['patient-profile', 'doctor.patient-profile','patient-dashboard','patient-prescription']))
    <!--View Prescription -->
    <!-- Modal -->
    <div class="modal fade custom-modals" id="view_prescription" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Prescription Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5 id="prescription-date">--</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            {{-- <li><a href="#" class="btn btn-primary prime-btn">Download</a></li> --}}
                        </ul>
                    </div>

                    <div class="view-prescribe invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details" id="invoice-header">
                                        <strong>Prescription:</strong> --<br>
                                        <strong>Issued:</strong> --
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Prescription Details</h6>
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Medicine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    {{-- <th>Timings</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody id="prescription-table-body">
                                                <!-- Dynamic data will be inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Static Doctor/Patient Details can stay as is -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_bill">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>View Billing</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Invoice No : </strong> #INV005<br>
                                        <strong>Issued:</strong> 21 Mar 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing From</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Edalin Hendry <br>
                                            806 Twin Willow Lane, <br>
                                            Newyork, USA <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing To</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Richard Wilson <br>
                                            299 Star Trek Drive<br>
                                            Florida, 32405, USA<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info invoice-info2">
                                        <h6 class="customer-text">Payment Method</h6>
                                        <p class="invoice-details">
                                            Debit Card <br>
                                            XXXXXXXXXXXX-2541<br>
                                            HDFC Bank<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Invoice Details</h6>
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Quatity</th>
                                                    <th>VAT</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>General Consultation</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>Video Call</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 ms-auto">
                                    <div class="table-responsive">
                                        <table class="invoice-table-two table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td><span>$350</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Discount:</th>
                                                    <td><span>-10%</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Amount:</th>
                                                    <td><span>$315</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Information -->
                        <div class="other-info mb-0">
                            <h4>Other information</h4>
                            <p class="text-muted mb-0">An account of the present illness, which includes the
                                circumstances surrounding the onset of recent health changes and the chronology of
                                subsequent events that have led the patient to seek medicine</p>
                        </div>
                        <!-- /Invoice Information -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!-- Add Medical Records Modal -->
    <div class="modal fade custom-modals" id="add_medical_records">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Medical Record</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('medical-record.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Patient</label>
                                    <select class="select" name="patient_id">
                                        <option value="1">Select Patient</option>
                                        <option value="2">Adrian Marshall</option>
                                        <option value="3">Kelly Stevens</option>
                                        <option value="4">Catherine Gracey</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Start Date <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="start_date" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Hospital Name</label>
                                    <input type="text" name="hospital_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <label class="col-form-label">Symptoms <span
                                            class="text-danger">*</span></label>
                                    <div class="input-block input-block-new mb-0">
                                        <input class="input-tags form-control" id="inputBox3" type="text"
                                            data-role="tagsinput" placeholder="Type New" name="symptoms"
                                            value="Fever, Headache">
                                        <a href="#" class="input-text save-btn">Save</a>
                                    </div>
                                </div>
                                <div class="form-wrap mb-0">
                                    <label class="col-form-label">Report</label>
                                    <div class="upload-file">
                                        <input type="file" name="report">
                                        <p>Drop files or Click to upload</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Medical Records Modal -->

    <!-- Add Medical Records Modal -->
    <div class="modal fade custom-modals" id="edit_medical_records">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Medical Record</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" value="Echocardiogram	">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Select Patient</label>
                                    <select class="select">
                                        <option>Select Patient</option>
                                        <option selected>Adrian Marshall</option>
                                        <option>Kelly Stevens</option>
                                        <option>Catherine Gracey</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Start Date <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control datetimepicker" value="17/03/2024">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Hospital Name</label>
                                    <input type="text" class="form-control" value="ENT Hospital">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <label class="col-form-label">Symptoms <span
                                            class="text-danger">*</span></label>
                                    <div class="input-block input-block-new mb-0">
                                        <input class="input-tags form-control" id="inputBox3" type="text"
                                            data-role="tagsinput" placeholder="Type New" name="Label"
                                            value="Fever, Headache">
                                        <a href="#" class="input-text save-btn">Save</a>
                                    </div>
                                </div>
                                <div class="form-wrap mb-0">
                                    <label class="col-form-label">Report</label>
                                    <div class="upload-file">
                                        <input type="file">
                                        <p>Drop files or Click to upload</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Medical Records Modal -->

    <!-- Add Prescription -->
    <div class="modal fade custom-modals" id="add_prescription">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ url('patient-profile') }}">
                    <div class="modal-body">
                        <div class="patient-wrap">
                            <div class="patient-info mt-0">
                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-01.jpg') }}"
                                    alt="img">
                                <div class="user-patient">
                                    <h6>#P0016</h6>
                                    <h5>Adrian Marshall</h5>
                                    <ul>
                                        <li>299 Star Trek Drive, Florida, 32405, USA</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="patient-book patien-inv">
                                <h6>#INV0001</h6>
                                <p>1 November 2023</p>
                            </div>
                        </div>
                        <div class="add-prescripe-info">
                            <div class="row prescripe-cont">
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Visit</option>
                                            <option>Online</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Dosage</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Frequency</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Duration</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>1 Month</option>
                                            <option>1 Day</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 xol-lg-3 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="form-wrap w-100">
                                            <label class="col-form-label">Instruction</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-wrap ms-2">
                                            <label class="col-form-label d-block">&nbsp;</label>
                                            <a href="#" class="trash"><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="add-prescribe">Add More</a>
                        </div>
                        <div class="wrap-sign">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sign-wrapper">
                                        <div class="upload-sign">
                                            <p>Click here to sign</p>
                                        </div>
                                        <div class="info-name">
                                            <h6>( Dr. Darren Elder )</h6>
                                            <p>Signature</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Prescription -->

    <!-- Add Billing -->
    <div class="modal fade custom-modals" id="add_billing">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Billing</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="patient-wrap">
                            <div class="patient-info">
                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-01.jpg') }}"
                                    alt="img">
                                <div class="user-patient">
                                    <h6>#P0016</h6>
                                    <h5>Adrian Marshall</h5>
                                    <ul>
                                        <li>Age : 42</li>
                                        <li>Male</li>
                                        <li>AB+ve</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="patient-book patien-inv">
                                <h6>#INV0001</h6>
                                <p>1 November 2023</p>
                            </div>
                        </div>
                        <div class="add-billing-info">
                            <div class="row bill-cont">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="form-wrap w-100">
                                            <label class="col-form-label">Amount</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-wrap ms-2">
                                            <label class="col-form-label d-block">&nbsp;</label>
                                            <a href="#" class="trash">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="add-bill">Add More</a>
                        </div>
                        <div class="wrap-sign">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sign-wrapper">
                                        <div class="upload-sign">
                                            <p>Click here to sign</p>
                                        </div>
                                        <div class="info-name">
                                            <h6>( Dr. Darren Elder )</h6>
                                            <p>Signature</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Billing -->
@endif

@if (Route::is(['pharmacy-details']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        class="call-avatar">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('voice-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('video-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['product-description']))
    <!-- Voice Call Modal -->
    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Outgoing Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        class="call-avatar">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('voice-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outgoing Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Voice Call Modal -->

    <!-- Video Call Modal -->
    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Incoming Call -->
                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar"
                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end"
                                        data-bs-dismiss="modal" aria-label="Close"><i
                                            class="material-icons">call_end</i></a>
                                    <a href="{{ url('video-call') }}" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Incoming Call -->

                </div>
            </div>
        </div>
    </div>
    <!-- Video Call Modal -->
@endif

@if (Route::is(['schedule-timings']))
    <!-- Add Time Slot Modal -->
    <div class="modal fade custom-modal" id="add_time_slot">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Time Slots</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="hours-info">
                            <div class="row hours-cont">
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>Start Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>End Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more mb-3">
                            <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add
                                More</a>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Time Slot Modal -->

    <!-- Edit Time Slot Modal -->
    <div class="modal fade custom-modal" id="edit_time_slot">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Time Slots</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="hours-info">
                            <div class="row hours-cont">
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>Start Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option selected>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>End Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option selected>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row hours-cont">
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>Start Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option selected>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>End Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option selected>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2"><label
                                        class="d-md-block d-sm-none d-none">&nbsp;</label><a href="javascript:;"
                                        class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
                            </div>

                            <div class="row hours-cont">
                                <div class="col-12 col-md-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>Start Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option selected>1.00 am</option>
                                                    <option>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label>End Time</label>
                                                <select class="form-select form-control select">
                                                    <option>-</option>
                                                    <option>12.00 am</option>
                                                    <option>12.30 am</option>
                                                    <option>1.00 am</option>
                                                    <option selected>1.30 am</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2"><label
                                        class="d-md-block d-sm-none d-none">&nbsp;</label><a href="javascript:;"
                                        class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
                            </div>

                        </div>

                        <div class="add-more mb-3">
                            <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add
                                More</a>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Time Slot Modal -->
@endif


@if (Route::is(['appointments']))
    <!-- Appointment Details Modal -->
    <div class="modal fade custom-modal" id="appt_details">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Appointment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="info-details">
                        <li>
                            <div class="details-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="title">#APT0001</span>
                                        <span class="text">21 Jun 2023 10:00 AM</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-end">
                                            <button type="button" class="btn bg-success-light btn-sm"
                                                id="topup_status">Completed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="title">Status:</span>
                            <span class="text">Completed</span>
                        </li>
                        <li>
                            <span class="title">Confirm Date:</span>
                            <span class="text">29 Jun 2023</span>
                        </li>
                        <li>
                            <span class="title">Paid Amount</span>
                            <span class="text">$450</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Details Modal -->
@endif

@if (Route::is(['doctor-appointment-start']))
    <!-- Appointment End Modal -->
    <div class="modal fade info-modal" id="end_session">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-wrap">
                        <div class="success-info">
                            <div class="text-center">
                                <span class="icon-success bg-blue"><i class="fa-solid fa-calendar-check"></i></span>
                                <h3>Session Ended</h3>
                                <p>Your Appointment has been Ended</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-btn text-center">
                        <a href="#" class="btn btn-gray" data-bs-toggle="modal" data-bs-dismiss="modal">Go
                            to Appointments</a>
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_prescription"
                            class="btn btn-primary prime-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment End Modal -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Details</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>


                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('/assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->
@endif
@if (Route::is(['doctor-upcoming-appointment']))
    <!-- Appointment Details Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Details Modal -->
@endif
@if (Route::is(['doctor-appointments-grid']))
    <!-- Appointment Details Modal -->
    <div class="modal fade custom-modal" id="appt_details">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Appointment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="info-details">
                        <li>
                            <div class="details-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="title">#APT0001</span>
                                        <span class="text">21 Oct 2023 10:00 AM</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-end">
                                            <button type="button" class="btn bg-success-light btn-sm"
                                                id="topup_status">Completed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="title">Status:</span>
                            <span class="text">Completed</span>
                        </li>
                        <li>
                            <span class="title">Confirm Date:</span>
                            <span class="text">29 Jun 2023</span>
                        </li>
                        <li>
                            <span class="title">Paid Amount</span>
                            <span class="text">$450</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Details Modal -->
@endif
@if (Route::is(['doctor-completed-appointment']))
    <!-- Appointment Details Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Details Modal -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('/assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->
@endif

@if (Route::is(['patient-dashboard']))
    <!-- Add Dependent Modal-->
    <div class="modal fade custom-modals" id="add_dependent">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Dependant</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="add-dependent">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrap pb-0">
                                        <div class="change-avatar img-upload">
                                            <div class="profile-img">
                                                <i class="fa-solid fa-file-image"></i>
                                            </div>
                                            <div class="upload-img">
                                                <h5>Profile Image</h5>
                                                <div class="imgs-load d-flex align-items-center">
                                                    <div class="change-photo">
                                                        Upload New
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <a href="#" class="upload-remove">Remove</a>
                                                </div>
                                                <p>Your Image should Below 4 MB, Accepted format jpg,png,svg</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Relationship</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">DOB <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <input type="text" class="form-control datetimepicker">
                                            <span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Select Gender</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Dependent Modal-->
@endif

@if (Route::is(['doctor-cancelled-appointment']))
    <!-- Appointment Cancel Reason Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Reason Modal -->
@endif

@if (Route::is(['patient-appointment-details']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!-- Appointment Cancel Reason Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Reason Modal -->
@endif

@if (Route::is(['patient-cancelled-appointment']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!-- Appointment Cancel Reason Modal Patient side -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p id="reason-text">Loading reason...</p>
                        <span id="reason-details" class="text-danger">Loading details...</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Reason Modal -->
@endif

@if (Route::is(['patient-completed-appointment']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!-- Appointment Cancel Reason Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Reason Modal -->
@endif

@if (Route::is(['patient-invoices']))
    <!--View Invoice -->
    <div class="modal fade custom-modals" id="invoice_view">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Invoice</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Invoice No : </strong> #INV005<br>
                                        <strong>Issued:</strong> 21 Mar 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing From</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Edalin Hendry <br>
                                            806 Twin Willow Lane, <br>
                                            Newyork, USA <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing To</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Richard Wilson <br>
                                            299 Star Trek Drive<br>
                                            Florida, 32405, USA<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info invoice-info2">
                                        <h6 class="customer-text">Payment Method</h6>
                                        <p class="invoice-details">
                                            Debit Card <br>
                                            XXXXXXXXXXXX-2541<br>
                                            HDFC Bank<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Invoice Details</h6>
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Quatity</th>
                                                    <th>VAT</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>General Consultation</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>Video Call</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 ms-auto">
                                    <div class="table-responsive">
                                        <table class="invoice-table-two table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td><span>$350</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Discount:</th>
                                                    <td><span>-10%</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Amount:</th>
                                                    <td><span>$315</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Information -->
                        <div class="other-info mb-0">
                            <h4>Other information</h4>
                            <p class="text-muted mb-0">An account of the present illness, which includes the
                                circumstances surrounding the onset of recent health changes and the chronology of
                                subsequent events that have led the patient to seek medicine</p>
                        </div>
                        <!-- /Invoice Information -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Invoice -->
@endif

@if (Route::is(['patient-upcoming-appointment']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!-- Appointment Cancel Reason Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Reason Modal -->
@endif

@if (Route::is(['doctor-cancelled-appointment-2']))
    <!-- Appointment Details Modal -->
    <div class="modal fade custom-modal custom-modal-two" id="reject_reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="reason-of-rejection">
                        <p>I have an urgent surgery, while our Appointment so i am rejecting appointment, you can book
                            an reschedule by next week.</p>
                        <span class="text-danger">Cancelled By You on 23 March 2023</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Details Modal -->
@endif

@if (Route::is(['available-timings']))
    <!-- Add Slots -->
    <!-- Add Slots Modal -->
    <!-- Add Slots Modal -->
    <div class="modal fade custom-modals" id="add_slot">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="{{ route('available-timings-add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="timing-modal">
                            <div class="row">
                                <!-- Start Time -->
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Start Time</label>
                                        <input type="text" name="start_time" class="form-control timepicker1"
                                            value="04:00 PM">
                                    </div>
                                </div>
                                <!-- End Time -->
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">End Time</label>
                                        <input type="text" name="end_time" class="form-control timepicker1"
                                            value="04:30 PM"> <!-- Added name -->
                                    </div>
                                </div>
                                <!-- Appointment Intervals -->
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Appointment Intervals</label>
                                        <select class="select" name="appointment_intervals"> <!-- Added name -->
                                            <option value="10">10 Minutes</option>
                                            <option value="20">20 Minutes</option>
                                            <option value="30">30 Minutes</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Appointment Durations -->
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Appointment Durations</label>
                                        <select class="select" name="appointment_duration"> <!-- Added name -->
                                            <option value="30">30 Minutes</option>
                                            <option value="60">1 Hour</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Appointment Spaces -->
                                <div class="col-md-12">
                                    <div class="form-wrap mb-0">
                                        <label class="col-form-label d-block">Assign Appointment Spaces</label>
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="space1" name="space"
                                                class="form-check-input" value="1" checked="">
                                            <label class="form-check-label" for="space1">Space 1</label>
                                        </div>
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="space2" name="space"
                                                class="form-check-input" value="2">
                                            <label class="form-check-label" for="space2">Space 2</label>
                                        </div>
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="space3" name="space"
                                                class="form-check-input" value="3">
                                            <label class="form-check-label" for="space3">Space 3</label>
                                        </div>
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="space4" name="space"
                                                class="form-check-input" value="4">
                                            <label class="form-check-label" for="space4">Space 4</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden field for selected day -->
                    <input type="hidden" id="selected_day" name="selected_day">
                    <input type="hidden" id="availability_type" name="availability_type">
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- /Add Slots -->

    <!-- Remove Slots -->
    <div class="modal fade info-modal" id="delete_slot">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-wrap">
                        <div class="success-info">
                            <div class="text-center">
                                <span class="icon-success bg-red"><i class="fa-solid fa-xmark"></i></span>
                                <h3>Remove Slots</h3>
                                <p>Are you sure you want to remove this slots?</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-btn text-center">
                        <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Yes, Remove</a>
                        <button class="btn btn-primary prime-btn">No, i Changed my mind</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Remove Slots -->
@endif

@if (Route::is(['doctor-add-blog']))
    <!-- Model -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteNotConfirmModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Active Service?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg1">Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Model -->
@endif

@if (Route::is(['doctor-appointment-details']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">02</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->
@endif

@if (Route::is(['doctor-payment']))
    <!-- Configuration -->
    <div class="modal fade custom-modals" id="add_configure">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Configuration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="available-timings">
                    <div class="modal-body">
                        <div class="timing-modal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrap mb-0">
                                        <label class="col-form-label">Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Configuration -->
@endif

@if (Route::is(['doctor-request.index']))
    <!-- Appointment Accepted Modal -->
    <div class="modal fade info-modal" id="accept_appointment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-wrap text-center">
                        <span class="icon-success"><i class="fa-solid fa-calendar-check"></i></span>
                        <h3>Appointment Accepted</h3>
                        <p>Your Appointment has been scheduled on 23 Mar 2023</p>
                        <a href="{{ url('doctor/doctor-appointments') }}" class="btn btn-primary prime-btn">Go to
                            Appointments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Accepted Modal -->

    <!-- Appointment Cancel Modal -->
    <div class="modal fade info-modal" id="cancel_appointment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="success-wrap">
                        <form action="{{ route('doctor-request.reject') }}" method="POST">
                            @csrf

                            <input type="hidden" id="appointment_request_id" name="appointment_request_id">
                            <div class="success-info">
                                <div class="text-center">
                                    <span class="icon-success bg-red"><i class="fa-solid fa-xmark"></i></span>
                                    <h3>Are you Sure</h3>
                                    <p>Do you want to Cancel Appointment</p>
                                </div>

                                <div class="form-wrap">
                                    <label class="col-form-label">Cancel Reason <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="cancel_reason" name="cancel_reason" rows="4"></textarea>
                                </div>
                                <div class="form-wrap">
                                    <div class="custom-control form-check custom-control-inline">
                                        <input type="radio" id="reshedule" name="cancel_with"
                                            class="form-check-input" value="reschedule" checked="">
                                        <label class="form-check-label" for="reshedule">Cancel with
                                            Reschedule</label>
                                    </div>
                                </div>
                                <div class="form-wrap">
                                    <div class="custom-control form-check custom-control-inline">
                                        <input type="radio" id="refund" name="cancel_with"
                                            class="form-check-input" value="refund" checked="">
                                        <label class="form-check-label" for="refund">Cancel with Request Refund
                                            Description text</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-button">
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-danger w-100">Reject</button>
                                        {{-- <a href="#" class="btn btn-gray w-100">No, I change my mind</a> --}}
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{ url('doctor/doctor-appointments') }}"
                                            class="btn btn-primary prime-btn w-100">Go
                                            to
                                            Appointments</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Appointment Cancel Modal -->
@endif

@if (Route::is(['edit-blog']))
    <!-- Model -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-success si_accept_confirm">Yes</a>
                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteNotConfirmModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Active Service?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="acc_msg1">Service is Booked and Inprogress..</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger si_accept_cancel"
                        data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Model -->
@endif

@if (Route::is(['index-10']))
    <div class="modal fade modal-content-video" id="video" tabindex="-1" aria-labelledby="video">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="video-home">
                        <video controls id="promovideo">
                            <iframe src="https://www.youtube.com/embed/ExJZAegsOis"></iframe>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['invoices']))
    <!--View Invoice -->
    <div class="modal fade custom-modals" id="invoice_view">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Invoice</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe invoice-content">
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="invoice-details">
                                        <strong>Invoice No : </strong> #INV005<br>
                                        <strong>Issued:</strong> 21 Mar 2024
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing From</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Edalin Hendry <br>
                                            806 Twin Willow Lane, <br>
                                            Newyork, USA <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Billing To</h6>
                                        <p class="invoice-details invoice-details-two">
                                            Richard Wilson <br>
                                            299 Star Trek Drive<br>
                                            Florida, 32405, USA<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="invoice-info invoice-info2">
                                        <h6 class="customer-text">Payment Method</h6>
                                        <p class="invoice-details">
                                            Debit Card <br>
                                            XXXXXXXXXXXX-2541<br>
                                            HDFC Bank<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Invoice Details</h6>
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Quatity</th>
                                                    <th>VAT</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>General Consultation</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>Video Call</td>
                                                    <td>1</td>
                                                    <td>$0</td>
                                                    <td>$100</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 ms-auto">
                                    <div class="table-responsive">
                                        <table class="invoice-table-two table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal:</th>
                                                    <td><span>$350</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Discount:</th>
                                                    <td><span>-10%</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Amount:</th>
                                                    <td><span>$315</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Information -->
                        <div class="other-info mb-0">
                            <h4>Other information</h4>
                            <p class="text-muted mb-0">An account of the present illness, which includes the
                                circumstances surrounding the onset of recent health changes and the chronology of
                                subsequent events that have led the patient to seek medicine</p>
                        </div>
                        <!-- /Invoice Information -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Invoice -->
@endif

@if (Route::is(['my-patients']))
    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Vitals</h5>
                            <ul>
                                <li><span>Pulse : </span> 64 Bpm</li>
                                <li><span>Systolic BP : </span>100mmHg</li>
                                <li><span>Diastolic : </span>60mmHg</li>
                                <li><span>Spo2 : </span>100%</li>
                                <li><span>BSA : </span>1.68</li>
                                <li><span>Height : </span>159 cm</li>
                                <li><span>Weight : </span>64 Kg</li>
                                <li><span>Patient Direct from : </span>Walk in / OPD</li>
                                <li><span>Body Mass Index : </span>25.16 BMI</li>
                                <li><span>Allergies : </span>Pain near left chest, Pelvic salinity</li>
                            </ul>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Previous Medical History</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Clinical Notes</h5>
                            <p>The patient presents with a 3-day history of worsening cough and fever, peaking at
                                38.5°C, noted for decreased appetite. Physical examination reveals bilateral wheezing
                                and crackles on lung auscultation, suggestive of a respiratory infection.</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Complaint</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medi</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Medications</h5>
                            <p>The patient has a history of type 2 diabetes mellitus diagnosed in 2018, well-controlled
                                on metformin. Additionally, the patient underwent appendectomy in 2020 without
                                postoperative complications.</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive inv-table">
                                        <table class="invoice-table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Medecine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Timings</th>
                                                    <th>Instruction</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ecosprin 75MG [Asprin 75 MG Oral Tab]</td>
                                                    <td>75 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Alexer 90MG Tab</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>Before Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ramistar XL2.5</td>
                                                    <td>60 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-0</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Metscore</td>
                                                    <td>90 mg <span>Oral Tab</span></td>
                                                    <td>1-0-0-1</td>
                                                    <td>1 month</td>
                                                    <td>After Meal</td>
                                                    <td>Take in alternate das, with hot water</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page 01 of <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#view_prescription2" data-bs-dismiss="modal">02</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->

    <!--View Prescription -->
    <div class="modal fade custom-modals" id="view_prescription2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View Prescription</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="prescribe-download">
                        <h5>21 Mar 2024</h5>
                        <ul>
                            <li><a href="javascript:void(0);" class="print-link"><i
                                        class="fa-solid fa-print"></i></a></li>
                            <li><a href="#" class="btn btn-primary prime-btn">Download</a></li>
                        </ul>
                    </div>
                    <div class="view-prescribe-details">
                        <div class="hospital-addr">
                            <div class="invoice-logo">
                                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                            <h5>16, Wardlow, Buxton, Derbyshire, SK17 8RW. Phone : 01298 872268 </h5>
                            <p>Monday to Sunday - 09:30am to 12:00pm</p>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <h6 class="customer-text">Dr Edalin Hendry</h6>
                                        <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info2">
                                        <p><span>Date : </span>25 Jan 2024, 07:00</p>
                                        <p><span>Appointment Type : </span>Video</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="patient-id">
                                        <h6>Patient Details</h6>
                                        <div class="patient-det">
                                            <h6>Kelly Joseph</h6>
                                            <ul>
                                                <li>28Y / Male</li>
                                                <li>Blood : O+ve</li>
                                                <li>Patient / Consult ID : OP1245654 / C243546566 </li>
                                                <li>Type : Outpatient</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <div class="appointment-notes">
                            <h3>Appointment Note</h3>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Advice</h5>
                            <p>An account of the present illness, which includes the circumstances surrounding the onset
                                of recent health changes and the chronology of subsequent events that have led the
                                patient to seek medicine</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Lab Tests</h5>
                            <p class="mb-0">1. Liver Function Tests (LFTs)</p>
                            <p>2. Hemoglobin A1c (HbA1c)</p>
                        </div>
                        <div class="appoint-wrap">
                            <h5>Follow Up</h5>
                            <p class="mb-0">After 3 Months in empty Stomach</p>
                            <p>Lab test for Glucose Level</p>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="scan-wrap">
                                    <h6>Scan to download report</h6>
                                    <img src="{{ URL::asset('assets/img/scan.png') }}" alt="scan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="prescriber-info">
                                    <h6>Dr. Edalin Hendry</h6>
                                    <p>Dept of Cardiology</p>
                                </div>
                            </div>
                        </div>

                        <ul class="nav inv-paginate justify-content-center">
                            <li>Page <a href="#" data-bs-toggle="modal" data-bs-target="#view_prescription"
                                    data-bs-dismiss="modal">01</a> of 02</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /View Prescription -->
@endif

@if (Route::is(['patient-other-details']))
    <!-- Modal -->
    <div class="modal fade fade-custom" id="profile-completed" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog id-upload modal-dialog-centered">
            <div class="modal-content id-pop-content">
                <div class="modal-header id-pop-header justify-content-center">
                    <img src="{{ URL::asset('assets/img/icons/success-tick.svg') }}" alt="success-tick">
                </div>
                <div class="modal-body id-pop-body text-center">
                    <h3>Thank you</h3>
                    <span> Mr.Dennis</span>
                    <p class="pb-0">your Account has been completed successfully</p>
                </div>
                <div class="modal-footer id-pop-footer text-center">
                    <div class="onboarding-btn pop-btn ">
                        <a href="{{ url('patient-dashboard') }}">Go to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif



<!-- remove image  Modal -->
<!-- Modal for Image Removal Confirmation -->
<div class="modal fade custom-modal custom-modal-two" id="remove_image" tabindex="-1"
    aria-labelledby="removeImageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removeImageLabel">Remove Gallery Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove this image from the gallery?</p>
                <span class="text-danger">This action cannot be undone.</span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm_delete_button">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for delete record Confirmation -->
