<?php $page = 'patient-help-and-support'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Patient Help and Support
        @endslot
        @slot('li_1')
            Patient Help and Support
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">
            <div class="row">


                @component('components.sidebar_patient')
                @endcomponent


                <div class="col-lg-8 col-xl-9">

                    <!-- Profile Settings -->
                    <div class="dashboard-header">
                        <h3>Help and Support</h3>
                    </div>
                    <form action="{{ route('patient-create-ticket') }}" method="POST">
                        @csrf

                        <div class="setting-title">
                            <h5>Create ticket</h5>
                        </div>

                        <div class="setting-card">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Ticket title<span class="text-danger">*</span></label>
                                        <input type="text" name="ticket_title" class="form-control"
                                            value="{{ old('ticket_title') }}">
                                        @error('ticket_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Ticket Detail <span
                                                class="text-danger">*</span></label>
                                        <textarea name="ticket_detail" value="{{ old('ticket_detail') }}" class="form-control" rows="3"></textarea>
                                        @error('ticket_detail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </form>

                    <div class="tab-content pt-0">

                        <!-- Prescription Tab -->
                        <div class="tab-pane fade show active" id="prescription">
                            <div class="search-header">
                                <div class="search-field">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>

                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Ticket title</th>
                                                <th>Ticket status</th>
                                                <th>ticket date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($patientTicket) && $patientTicket->isNotEmpty())
                                                @foreach ($patientTicket as $ticket)
                                                    <tr>
                                                        <td><a class="text-blue-600" href="javascript:void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#view_prescription">#{{ $ticket->id ?? '' }}</a>
                                                        </td>
                                                        <td>{{ $ticket->ticket_title ?? '' }}</td>
                                                        <td>{{ $ticket->ticket_status ?? '' }}</td>
                                                        <td>{{ $ticket->created_at ?? '' }}</td>
                                                        
                                                        <td>
                                                            <div class="action-item">
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#delete_record"
                                                                data-id="{{ $ticket->id }}"
                                                                data-route="{{ route('patient-ticket-remove', ':id') }}">
                                                                <i class="fa-solid fa-trash-can"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link ">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
@endsection
