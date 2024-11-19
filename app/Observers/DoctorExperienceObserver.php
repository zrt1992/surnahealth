<?php

namespace App\Observers;

use App\Models\DoctorExperience;
use App\Traits\FileUpload;

class DoctorExperienceObserver
{
    use FileUpload;
  
    public function saving(DoctorExperience $doctorExperiences)
    {
        $hospital_logo = request()->file('hospital_logo'); 
        if ($hospital_logo) {
         
            $meta = $this->uploadImage($hospital_logo, 'hospital_logos');  
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  
                $doctorExperiences->hospital_logo = $full_path;
            }
        }
    }
}
