<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorChatController extends Controller
{
    public function index(Request $request, $doctorId = null)
    {

        $messages = collect();
        $chatRooms = collect();
        if ($doctorId) {
            $doctor = User::findOrFail($doctorId);
            $unseenCount = Message::where('sender_id', $doctorId)
            ->where('receiver_id', auth()->id())
            ->where('seen', null)
            ->update(['seen' => 1]);
            $messages = Message::where(function ($query) use ($doctorId) {
                $query->where('sender_id', auth()->id())
                    ->where('receiver_id', $doctorId);
            })
                ->orWhere(function ($query) use ($doctorId) {
                    $query->where('sender_id', $doctorId)
                        ->where('receiver_id', auth()->id());
                })
                ->orderBy('created_at')
                ->get();

           
        }
        $chatRooms = ChatRoom::where('user1_id', auth()->id())
        ->orWhere('user2_id', auth()->id())
        ->with(['messages' => function ($query) {
            $query->latest()->first();
        }])
        ->orderBy('updated_at', 'desc')
        ->get();
        // dd($messages);

        $onlineUsers = User::where('id', '!=', auth()->user()->id)->get();
        return view('doctor.chat-doctor', get_defined_vars());
    }

    public function getRecentChats($id)
    {
        $chatRoom = ChatRoom::where('user1_id', auth()->id())->orWhere('user2_id', auth()->id())
            ->where('user2_id', $id)->orWhere('user1_id', $id)
            ->with(['messages' => function ($query) {
                $query->latest();
            }])
            ->orderBy('updated_at', 'desc')
            ->first();
    
        if (!$chatRoom) {
            return response()->json(['error' => 'No chat found'], 404);
        }
    
        $chatPartnerId = $chatRoom->user1_id == auth()->id() ? $chatRoom->user2_id : $chatRoom->user1_id;
        $chatPartnerUser = \App\Models\User::find($chatPartnerId);
        $latestMessage = $chatRoom->messages->first();
        $unseenCount = \App\Models\Message::where('chat_room_id', $chatRoom->id)
            ->where('receiver_id', auth()->id())
            ->whereNull('seen')
            ->count();
    
        return response()->json([
            'chatRooms' => [
                [
                    'partner_id' => $chatPartnerUser->id,
                    'partner_name' => $chatPartnerUser->name,
                    'profile_image' => $chatPartnerUser->profile_image ?? asset('assets/img/default-avatar.png'),
                    'latest_message' => \Illuminate\Support\Str::limit($latestMessage->content ?? 'No messages yet', 30),
                    'last_chat_time' => $latestMessage ? $latestMessage->created_at->diffForHumans() : '',
                    'unseen_count' => $unseenCount,
                ]
            ]
        ]);
    }
}
