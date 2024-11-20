<?php

namespace App\Observers;

use App\Models\DoctorExperience;
use App\Traits\FileUpload;

class DoctorExperienceObserver
{
    use FileUpload;

    public function saving(DoctorExperience $doctorExperience)
{
    $hospital_logos = request()->file('hospital_logo');

    if ($hospital_logos && is_array($hospital_logos)) {
        foreach ($hospital_logos as $id => $hospital_logo) {
            if ($doctorExperience->id == $id) {
                $meta = $this->uploadImage($hospital_logo, 'hospital_logos');
                if (isset($meta['dirname'], $meta['basename'])) {
                    $doctorExperience->hospital_logo = $meta['dirname'] . '/' . $meta['basename'];
                }
            }
        }
    }
}

}
