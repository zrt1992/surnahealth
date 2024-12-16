<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class PatientChatController extends Controller
{
    public function index(Request $request, $doctorId = null)
{
    $messages = collect();
    if ($doctorId) {
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

    $onlineUsers = User::where('id', '!=', auth()->id())->get();

    // Check what data is being returned
    if ($request->ajax()) {
        return response()->json([
            'messages' => $messages,
            'onlineUsers' => $onlineUsers
        ]);
    }

    return view('patient.patient-chat', get_defined_vars());
}


    
}
