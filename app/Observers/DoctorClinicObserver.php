<?php

namespace App\Observers;

use App\Models\DoctorClinic;
use App\Models\DoctorClinicGallery;
use App\Traits\FileUpload;

class DoctorClinicObserver
{
    use FileUpload;

    public function saving(DoctorClinic $DoctorClinic)
    {
        $logos = request()->file('logo');

        if ($logos && is_array($logos)) {
            foreach ($logos as $id => $logo) {
                if ($DoctorClinic->id == $id) {
                    $meta = $this->uploadImage($logo, 'logos');
                    if (isset($meta['dirname'], $meta['basename'])) {
                        $DoctorClinic->logo = $meta['dirname'] . '/' . $meta['basename'];
                    }
                }
            }
        }
    }

    public function saved(DoctorClinic $DoctorClinic)
    {
        // Handle Gallery Uploads
        $galleries = request()->file('gallery');
        if ($galleries && is_array($galleries)) {
            foreach ($galleries as $id => $images) {
                if ($DoctorClinic->id == $id) {
                    foreach ($images as $image) {
                        $meta = $this->uploadImage($image, 'gallery');
                        if (isset($meta['dirname'], $meta['basename'])) {
                            DoctorClinicGallery::create([
                                'doctor_id' => getAuthUser()->id,
                                'clinic_id' => $DoctorClinic->id,
                                'image' => $meta['dirname'] . '/' . $meta['basename'],
                            ]);
                        }
                    }
                }
            }
        }
    }
}
