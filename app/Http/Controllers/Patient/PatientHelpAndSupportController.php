<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\HelpAndSupport;
use Illuminate\Http\Request;

class PatientHelpAndSupportController extends Controller
{
    public function index()
    {
        $patientTicket = HelpAndSupport::where('user_id',auth()->user()->id)->get();
        return view('patient.patient-help-and-support', get_defined_vars());
    }

    public function createTicket(Request $request)
    {
        $data = $request->validate([
            'ticket_title' => 'required|string',
            'ticket_detail' => 'required',  
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['ticket_status'] = 'pending';
        $ticket = HelpAndSupport::create($data);
        return redirect()->back()->with('success', 'Ticket created successfully.');
    }

    public function destroy($id)
    {
        $ticket = HelpAndSupport::destroy($id);
        return redirect()->back()->with('success', 'Ticket deleted successfully.');
    }
}
