<?php

namespace App\Observers;

use App\Models\DoctorInsurances;
use App\Traits\FileUpload;

class DoctorInsurancesObserver
{
    use FileUpload;

    public function saving(DoctorInsurances $doctorInsurances)
{
    $logos = request()->file('logo');

    if ($logos && is_array($logos)) {
        foreach ($logos as $id => $logo) {
            if ($doctorInsurances->id == $id) {
                $meta = $this->uploadImage($logo, 'logos');
                if (isset($meta['dirname'], $meta['basename'])) {
                    $doctorInsurances->logo = $meta['dirname'] . '/' . $meta['basename'];
                }
            }
        }
    }
}

}
