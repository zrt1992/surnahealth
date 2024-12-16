<?php

namespace App\Observers;

use App\Models\DoctorEducation;
use App\Traits\FileUpload;

class DoctorEducationObserver
{
    use FileUpload;

    public function saving(DoctorEducation $DoctorEducation)
{
    $certification = request()->file('certifications');

    if ($certification && is_array($certification)) {
        foreach ($certification as $id => $certification) {
            if ($DoctorEducation->id == $id) {
                $meta = $this->uploadImage($certification, 'certifications');
                if (isset($meta['dirname'], $meta['basename'])) {
                    $DoctorEducation->certifications = $meta['dirname'] . '/' . $meta['basename'];
                }
            }
        }
    }
}

}
