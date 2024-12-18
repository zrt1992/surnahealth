<?php $page = 'chat'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Message
        @endslot
        @slot('li_1')
            Message
        @endslot
    @endcomponent
    <!-- Page Content -->
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable Pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('1ddf07e5f24285e83686', {
            cluster: 'mt1'
        });

        // var channelName = 'chat.' + {{ $doctorId ?? 'null' }} + '.' + '{{ auth()->id() }}';
        var channelName = 'chat';
        var channel = pusher.subscribe(channelName);
        var receiverId = '{{ auth()->id() }}';
        var senderId = '{{ $doctorId ?? 'null' }}';

        channel.bind('my-event', function(data) {
            console.log('New message: ', data.message);

            // Define variables with default values
            var fromName = data.message.from_name || 'Unknown User';
            var profileImage = data.message.from_profile_image ||
                '{{ URL::asset('assets/img/default-avatar.png') }}';
            var messageText = data.message.message || '';

            const chatPartnerIds = @json(
                $chatRooms->map(function ($chatRoom) {
                    return $chatRoom->user1_id == auth()->id() ? $chatRoom->user2_id : $chatRoom->user1_id;
                }));

            console.log(chatPartnerIds, 'chtprt');

            if (chatPartnerIds.includes(data.message.sender_id) || chatPartnerIds.includes(data.message
                    .receiver_id)) {
                // Append to recent chat list if not already present
                var userList = document.querySelector('.user-list');
                var existingChat = document.querySelector(
                    `.user-list-item[data-partner-id="${data.message.sender_id}"]`
                );

                if (!existingChat) {
                    var listItem = document.createElement('li');
                    listItem.classList.add('user-list-item');
                    listItem.setAttribute('data-partner-id', data.message.sender_id);

                    listItem.innerHTML = `
                        <a href="/chat-doctor/${data.message.sender_id}">
                            <div class="avatar">
                                <img src="${profileImage}" alt="image">
                            </div>
                            <div class="users-list-body">
                                <div>
                                    <h5>${fromName}</h5>
                                    <p>${messageText.length > 30 ? messageText.substring(0, 30) + '...' : messageText}</p>
                                </div>
                                <div class="last-chat-time">
                                    <small class="text-muted">Just now</small>
                                    <div class="new-message-count">1</div>
                                </div>
                            </div>
                        </a>
                    `;

                    userList.prepend(listItem);
                } else {
                    // Update the existing chat with the new message and time
                    existingChat.querySelector('.users-list-body p').textContent =
                        messageText.length > 30 ? messageText.substring(0, 30) + '...' : messageText;
                    existingChat.querySelector('.last-chat-time small').textContent = 'Just now';

                    // // Optional: Increment the unread message count
                    var newMessageCount = existingChat.querySelector('.new-message-count');
                    if (newMessageCount && senderId != data.message.sender_id) {
                        newMessageCount.textContent = parseInt(newMessageCount.textContent) + 1;
                    }
                }
            } else {

                if (data.message.receiver_id == receiverId) {
                    fetch(`/patient/patient-recent-chats/${data.message.sender_id}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.error) {
                                console.error(data.error);
                                return;
                            }

                            var userList = document.querySelector('.chat-list');
                            userList.innerHTML = '';
                            data.chatRooms.forEach(chatRoom => {
                                var listItem = document.createElement('li');
                                listItem.classList.add('user-list-item');

                                listItem.innerHTML = `
                                <a href="/patient/chat/${chatRoom.partner_id}">
                                    <div class="avatar">
                                        <img src="${chatRoom.profile_image}" alt="image">
                                    </div>
                                    <div class="users-list-body">
                                        <div>
                                            <h5>${chatRoom.partner_name}</h5>
                                            <p>${chatRoom.latest_message}</p>
                                        </div>
                                        <div class="last-chat-time">
                                            <small class="text-muted">${chatRoom.last_chat_time}</small>
                                           ${
                                                    chatRoom.unseen_count > 0 && receiverId == chatRoom.partner_id
                                                        ? `<div class="new-message-count">${chatRoom.unseen_count}</div>`
                                                        : ''
                                                }
                                        </div>
                                    </div>
                                </a>
                            `;

                                userList.prepend(listItem);
                            });
                        })
                        .catch(error => console.error('Error fetching recent chats:', error));
                } 
            }

            if (data.message.receiver_id == receiverId && data.message.sender_id == senderId) {
                var timestamp = new Date().toLocaleTimeString([], {
                    hour: '2-digit',
                    minute: '2-digit'
                });

                // Create the new message element in the message container
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

                messageContainer.appendChild(messageElement);
            }
        });
    </script>

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
                                                                <img src="{{ URL::asset($user->profile_image ?? 'assets/img/services-six-1.png') }}"
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
                                    {{-- <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
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

                                    </ul> --}}
                                    <!-- Left Chat Title -->
                                    <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                        <div class="fav-title pin-chat">
                                            <h6>Recent Chat</h6>
                                        </div>
                                    </div>
                                    <!-- /Left Chat Title -->
                                    <ul class="user-list chat-list" id="chatList">

                                    </ul>
                                    <ul class="user-list">
                                        @forelse ($chatRooms as $chatRoom)
                                            @php

                                                $chatPartner =
                                                    $chatRoom->user1_id == auth()->id()
                                                        ? $chatRoom->user2_id
                                                        : $chatRoom->user1_id;
                                                $chatPartnerUser = \App\Models\User::find($chatPartner);
                                                $latestMessage = $chatRoom->messages->first();
                                                $unseenCount = \App\Models\Message::where('chat_room_id', $chatRoom->id)
                                                    ->where('receiver_id', auth()->id())
                                                    ->where('seen', null)
                                                    ->count();

                                            @endphp

                                            @if ($chatPartnerUser)
                                                <li class="user-list-item" data-partner-id="{{ $chatPartnerUser->id }}">
                                                    <a href="{{ route('patient-chat', $chatPartnerUser->id ?? '') }}">
                                                        <div class="avatar">
                                                            <img src="{{ $chatPartnerUser->profile_image ?? URL::asset('assets/img/default-avatar.png') }}"
                                                                alt="image">
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div>
                                                                <h5>{{ $chatPartnerUser->name }}</h5>
                                                                <p>{{ \Illuminate\Support\Str::limit($latestMessage->content ?? 'No messages yet', 30) }}
                                                                </p>
                                                            </div>
                                                            <div class="last-chat-time">
                                                                <small
                                                                    class="text-muted">{{ $latestMessage ? $latestMessage->created_at->diffForHumans() : '' }}</small>
                                                                <div class="new-message-count">{{ $unseenCount }}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                        @empty
                                            <li class="text-muted text-center py-3">
                                                No recent chats found.
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>

                            </div>

                        </div>
                        <!-- / Chats sidebar -->
                    </div>
                    <!-- /Sidebar group -->

                    <!-- Chat -->
                    <div class="chat chat-messages" id="middle">
                        <div class="slimscroll mb-3" id="scroll">
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
        function scrollToBottom() {
            let messageContainer = document.getElementById('scroll');
            messageContainer.scrollTop = messageContainer.scrollHeight;
        }

        document.getElementById('messageForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            let receiverId = document.getElementById('receiver_id').value;
            let messageContent = document.getElementById('messageContent').value;
            let csrfToken = document.querySelector('input[name="_token"]').value;

            let authUser = @json(auth()->user());
            let fromName = authUser.name
            let profileImage = authUser.profile_image || '{{ URL::asset('assets/img/patients-img-fifteen.png') }}';
            let messageText = messageContent;
            let timestamp = new Date().toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });

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

            messageContainer.appendChild(messageElement);

            scrollToBottom();

            document.getElementById('messageContent').value = '';
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

                    console.log('Message sent:', data);
                })
                .catch(error => console.error('Error:', error));
        });

        // Scroll to the bottom when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            scrollToBottom();
        });
    </script>

    <!-- /Page Content -->
@endsection
