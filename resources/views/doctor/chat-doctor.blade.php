<?php $page = 'chat-doctor'; ?>
@extends('layout.mainlayout')
@section('content')
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    // Enable Pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1ddf07e5f24285e83686', {
        cluster: 'mt1'
    });

    var channelName = 'chat.' + {{ $doctorId ?? 'null' }} + '.' + '{{ auth()->id() }}';
    var channel = pusher.subscribe(channelName);
    // var channel = pusher.subscribe('chat.1.3');
    channel.bind('my-event', function(data) {
        console.log('New message: ', data.message);

        var fromName = data.message.from_name;
        var profileImage = data.message.from_profile_image ||
            '{{ URL::asset('assets/img/patients-img-fifteen.png') }}';
        var messageText = data.message.message;
        var timestamp = new Date().toLocaleTimeString([], {
            hour: '2-digit',
            minute: '2-digit'
        });

        // Create the new message element
        var messageContainer = document.getElementById('message-container');
        var messageElement = document.createElement('div');
        messageElement.classList.add('messages');

        messageElement.innerHTML = `
       <div class="chats">
      <div class="chat-avatar">
          <img src="${profileImage}" class="dreams_chat" alt="image">
      </div>
      <div class="chat-content">
          <div class="chat-profile-name">
              <h6>${fromName} <span>${timestamp}</span></h6>
          </div>
          <div class="message-content">
              ${messageText}
          </div>
      </div>
       </div>
    `;

        // Append the new message element to the container
        messageContainer.appendChild(messageElement);
    });
</script>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar-two">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title">Message</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Message</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <!-- Page Content -->
    <div class="page-wrapper chat-page-wrapper">
        <div class="container">

            <div class="content">

                <div class="dashboard-header">
                    <h3><a href="{{ url('patient/dashboard') }}"><i class="fa-solid fa-arrow-left"></i> Message</a></h3>
                </div>

                <div class="chat-sec">

                    <!-- sidebar group -->
                    <div class="sidebar-group left-sidebar chat_sidebar">

                        <!-- Chats sidebar -->
                        <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

                            <div class="slimscroll-active-sidebar">

                                <!-- Left Chat Title -->
                                <div class="left-chat-title all-chats">
                                    <div class="setting-title-head">
                                        <h4> All Chats</h4>
                                    </div>
                                    <div class="add-section">
                                        <!-- Chat Search -->
                                        <form>
                                            <div class="user-chat-search">
                                                <span class="form-control-feedback"><i
                                                        class="fa-solid fa-magnifying-glass"></i></span>
                                                <input type="text" name="chat-search" placeholder="Search"
                                                    class="form-control">
                                            </div>
                                        </form>
                                        <!-- /Chat Search -->
                                    </div>
                                </div>
                                <!-- /Left Chat Title -->

                                <!-- Top Online Contacts -->
                                <div class="top-online-contacts">
                                    <div class="fav-title">
                                        <h6>Online Now</h6>
                                        <a href="javascript:void(0);">View All</a>
                                    </div>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            @foreach ($onlineUsers as $user)
                                                <div class="swiper-slide">
                                                    <div class="top-contacts-box">
                                                        <a href="{{ route('patient-chat', $user->id ?? '') }}">
                                                            <div class="profile-img online">
                                                                <img src="{{ URL::asset($user->profile_image ?? 'assets/img/default-user.png') }}"
                                                                    alt="Img">
                                                            </div>
                                                            <div class="user-name">
                                                                <p>{{ $user->name ?? 'Unknown User' }}</p>
                                                            </div>
                                                        </a>
                                                     

                                                    </div>
                                                </div>
                                            @endforeach

                                            @if ($onlineUsers->isEmpty())
                                                <p class="text-center">No users online at the moment.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /Top Online Contacts -->

                                <div class="sidebar-body chat-body" id="chatsidebar">

                                    <!-- Left Chat Title -->
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title pin-chat">
                                            <h6>Pinned Chat</h6>
                                        </div>
                                    </div>
                                    <!-- /Left Chat Title -->

                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <a href="javascript:void(0);">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                        alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Adrian Marshall</h5>
                                                        <p>Have you called them?</p>
                                                    </div>
                                                    <div class="last-chat-time">
                                                        <small class="text-muted">Just Now</small>
                                                        <div class="chat-pin">
                                                            <i class="fa-solid fa-thumbtack me-2"></i>
                                                            <i class="fa-solid fa-check-double green-check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <!-- Left Chat Title -->
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title pin-chat">
                                            <h6>Recent Chat</h6>
                                        </div>
                                    </div>
                                    <!-- /Left Chat Title -->
                                    <ul class="user-list">
                                        <li class="user-list-item">
                                            <a href="javascript:void(0);">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('assets/img/patients-img-fifteen.png') }}"
                                                        alt="image">
                                                </div>
                                                <div class="users-list-body">
                                                    <div>
                                                        <h5>Kelly Stevens</h5>
                                                        <p>Have you called them?</p>
                                                    </div>
                                                    <div class="last-chat-time">
                                                        <small class="text-muted">Just Now</small>
                                                        <div class="new-message-count">2</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                        </div>
                        <!-- / Chats sidebar -->
                    </div>
                    <!-- /Sidebar group -->

                    <!-- Chat -->
                    <div class="chat chat-messages" id="middle">
                        <div class="slimscroll">
                            <div class="chat-inner-header">
                                <div class="chat-header">
                                    <div class="user-details">
                                        <div class="d-lg-none">
                                            <ul class="list-inline mt-2 me-2">
                                                <li class="list-inline-item">
                                                    <a class="text-muted px-0 left_sides" href="#" data-chat="open">
                                                        <i class="fas fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <figure class="avatar avatar-online">
                                            <img src="{{ URL::asset(auth()->user()->profile_image ?? 'assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                alt="image">
                                        </figure>
                                        <div class="mt-1">
                                            <h5>{{ auth()->user()->name }}</h5>

                                            <small class="last-seen">
                                                Online
                                            </small>
                                        </div>
                                    </div>
                                    <div class="chat-options ">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="btn btn-outline-light no-bg" href="#"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item ">Close Chat </a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#mute-notification">Mute Notification</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#disappearing-messages">Disappearing Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#clear-chat">Clear Message</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#change-chat">Delete Chat</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#report-user">Report</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#block-user">Block</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Chat Search -->
                                    <div class="chat-search">
                                        <form>
                                            <span class="form-control-feedback"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                            <input type="text" name="chat-search" placeholder="Search Chats"
                                                class="form-control">
                                            <div class="close-btn-chat"><i class="fa fa-close"></i></div>
                                        </form>
                                    </div>
                                    <!-- /Chat Search -->
                                </div>
                            </div>
                            <div class="chat-body">
                                <div class="messages" id="message-container">
                                    @foreach ($messages as $message)
                                        @if ($message->sender_id == auth()->id())
                                            <div class="chats chats-right">
                                                <div class="chat-content">
                                                    <div class="chat-profile-name text-end justify-content-end">
                                                        <h6>{{ $message->receiver->name ?? '' }}<span>{{ $message->created_at->format('g:i A') }}
                                                                <i class="fa-solid fa-check-double green-check"></i></span>
                                                        </h6>
                                                    </div>
                                                    <div class="message-content">
                                                        {{ $message->content }}
                                                    </div>
                                                </div>
                                                <div class="chat-avatar">
                                                    <img src="{{ $message->receiver->profile_image ?? URL::asset('assets/img/services-six-1.png') }}"
                                                        class="dreams_chat" alt="image">
                                                </div>
                                            </div>
                                        @else
                                            <div class="chats">
                                                <div class="chat-avatar">
                                                    <img src="{{ $message->sender->profile_image ?? URL::asset('assets/img/patients-img-fifteen.png') }}"
                                                        class="dreams_chat" alt="image">
                                                </div>
                                                <div class="chat-content">
                                                    <div class="chat-profile-name">
                                                        <h6>{{ $message->sender->name ?? '' }}<span>{{ $message->created_at->format('g:i A') }}</span>
                                                        </h6>
                                                    </div>
                                                    <div class="message-content">
                                                        {{ $message->content }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="chat-footer">
                            <form id="messageForm">
                                @csrf
                                <input type="hidden" name="receiver_id" id="receiver_id"
                                    value="{{ $doctorId ?? '' }}">
                                <input type="text" name="content" id="messageContent" class="form-control chat_form"
                                    placeholder="Type your message here..." required>
                                <div class="form-buttons">
                                    <button class="btn send-btn" type="submit">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /Chat -->


                </div>
            </div>
        </div>
    </div>
   
    <script>
        document.getElementById('messageForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting traditionally
    
            let receiverId = document.getElementById('receiver_id').value;
            let messageContent = document.getElementById('messageContent').value;
            let csrfToken = document.querySelector('input[name="_token"]').value;
    
            fetch("{{ route('messages.send') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    receiver_id: receiverId,
                    content: messageContent
                })
            })
            .then(response => response.json())
            .then(data => {
                // Clear the input field
                document.getElementById('messageContent').value = '';
    
                // Get the necessary data
                let fromName = data.message.sender_name; // assuming sender's name is returned in the response
                let profileImage = data.message.sender_profile_image || '{{ URL::asset("assets/img/patients-img-fifteen.png") }}'; // Default profile image if none
                let messageText = data.message.content;
                let timestamp = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    
                // Create the new message element
                let messageContainer = document.getElementById('message-container');
                let messageElement = document.createElement('div');
                messageElement.classList.add('chats', 'chats-right');
    
                // Append the message HTML
                messageElement.innerHTML = `
                    <div class="chat-content">
                        <div class="chat-profile-name text-end justify-content-end">
                            <h6>${fromName} <span>${timestamp}</span>
                                <i class="fa-solid fa-check-double green-check"></i></h6>
                        </div>
                        <div class="message-content">
                            ${messageText}
                        </div>
                    </div>
                    <div class="chat-avatar">
                        <img src="${profileImage}" class="dreams_chat" alt="image">
                    </div>
                `;
    
                // Append the new message element to the message container
                messageContainer.appendChild(messageElement);
    
                // Optionally scroll to the bottom of the chat container after appending the message
                messageContainer.scrollTop = messageContainer.scrollHeight;
    
                console.log('Message sent:', data);
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

@endsection
