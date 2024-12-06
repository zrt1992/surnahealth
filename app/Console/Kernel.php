<?php

namespace App\Console;

use App\Console\Commands\SendAppointmentReminders;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Schedule the appointment reminder command to run daily at 8 AM
        $schedule->command('app:send-appointment-reminders')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Load the custom commands
        $this->load(__DIR__.'/Commands');

        // Include the console routes
        require base_path('routes/console.php');
    }
}
