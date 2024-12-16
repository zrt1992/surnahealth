<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($doctorId)
    {
        $doctor = User::findOrFail($doctorId);
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

        $onlineUsers = User::where('id', '!=', auth()->user()->id)->get();
        return view('doctor.chat-doctor', get_defined_vars());
    }

    public function send(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);
    
        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->input('content'),
        ]);
    
        // Broadcast the event with the new message
        event(new MyEvent([
            'sender_id' => auth()->user()->id,
            'receiver_id' =>  $request->receiver_id,
            'from_name' => auth()->user()->name,
            'from_profile_image' => auth()->user()->profile_image,
            'message' => $message->content,
        ]));
    
        $sender = auth()->user();

        return response()->json([
            'success' => true,
            'message' => [
                'sender_name' => $sender->name,
                'sender_profile_image' => $sender->profile_image,
                'content' => $message->content,
            ],
        ]);
    }
    

}
