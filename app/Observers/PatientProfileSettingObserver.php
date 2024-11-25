<?php

namespace App\Observers;

use App\Models\User;
use App\Traits\FileUpload;

class PatientProfileSettingObserver
{
    use FileUpload;
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }

    public function saving(User $users)
    {
        $profile_image = request()->file('profile_image'); // Get the file from the request
// dd($profile_image);
        if ($profile_image) {
            // Call the uploadImage method from the FileUpload trait
            $meta = $this->uploadImage($profile_image, 'profile_images');  // You can define your own directory
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  // Get the relative file path
                $users->profile_image = $full_path;  // Save the relative path in the database
            }
        }
    }
}
