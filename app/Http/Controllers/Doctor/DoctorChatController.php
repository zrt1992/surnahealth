<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorChatController extends Controller
{
    public function index(Request $request,$doctorId = null)
    {

        $messages = collect();
        if($doctorId){
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
        }
       
        // dd($messages);
          
        $onlineUsers = User::where('id', '!=', auth()->user()->id)->get();
    return view('doctor.chat-doctor', get_defined_vars());
    }
     
}
