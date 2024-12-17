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
}
