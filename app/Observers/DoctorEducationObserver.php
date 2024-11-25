<?php

namespace App\Observers;

use App\Models\DoctorEducation;
use App\Traits\FileUpload;

class DoctorEducationObserver
{
    use FileUpload;

    public function saving(DoctorEducation $DoctorEducation)
{
    $logos = request()->file('logo');

    if ($logos && is_array($logos)) {
        foreach ($logos as $id => $logo) {
            if ($DoctorEducation->id == $id) {
                $meta = $this->uploadImage($logo, 'logos');
                if (isset($meta['dirname'], $meta['basename'])) {
                    $DoctorEducation->logo = $meta['dirname'] . '/' . $meta['basename'];
                }
            }
        }
    }
}

}
