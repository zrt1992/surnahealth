<?php

namespace App\Console\Commands;

use App\Mail\Doctor\AppointmentReminderEmail;
use App\Models\Appointment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendAppointmentReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-appointment-reminders';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Send reminder emails for upcoming appointments';

    public function handle()
    {
        // Fetch appointments happening in the next 24 hours
        $appointments = Appointment::where('start_date', '>=', now()->addDay()->toDateString())
        ->where('start_date', '<', now()->addDay()->addDay()->toDateString())
        ->get();
    
        Log::info($appointments);
        Log::info( now()->addDay()->toDateString());
        Log::info( now()->addDay()->addDay()->toDateString());
       
        foreach ($appointments as $appointment) {
            // Debugging: Check if the doctor email exists
            Log::info("Sending reminder for appointment: " . $appointment->id . " to doctor: " . $appointment->doctor->email);
        
            $emailData = [
                'subject' => 'Reminder email',
                'greeting' => 'Hello ' . $appointment->doctor->name,
                'body' => 'Appointment reminder!',
                'actionText' => 'Appointments',
                'actionURL' => url('/appointments'),
                'thanks' => 'Thank you for choosing us!',
            ];
        
            Mail::to($appointment->doctor->email)
                ->send(new AppointmentReminderEmail($emailData));
        }
        

        $this->info('Reminder emails sent successfully.');
    }
}
