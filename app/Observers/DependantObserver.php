<?php

namespace App\Observers;

use App\Models\Dependant;
use App\Traits\FileUpload;

class DependantObserver
{
    use FileUpload;


    public function updated(Dependant $dependants): void
    {
        $profile_image = request()->file('profile_image'); // Get the file from the request
        if ($profile_image) {
            // Call the uploadImage method from the FileUpload trait
            $meta = $this->uploadImage($profile_image, 'profile_images');  // You can define your own directory
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  // Get the relative file path
                $dependants->profile_image = $full_path;  // Save the relative path in the database
            }
        }
    }
    public function saving(Dependant $dependants)
    {
        $profile_image = request()->file('profile_image'); // Get the file from the request
        if ($profile_image) {
            // Call the uploadImage method from the FileUpload trait
            $meta = $this->uploadImage($profile_image, 'profile_images');  // You can define your own directory
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  // Get the relative file path
                $dependants->profile_image = $full_path;  // Save the relative path in the database
            }
        }
    }
}
