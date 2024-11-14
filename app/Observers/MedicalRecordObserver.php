<?php

namespace App\Observers;

use App\Models\MedicalRecord;
use App\Traits\FileUpload;

class MedicalRecordObserver
{
    use FileUpload;


    public function updated(MedicalRecord $medicalRecord): void
    {
        $report = request()->file('report'); // Get the file from the request
        if ($report) {
            // Call the uploadImage method from the FileUpload trait
            $meta = $this->uploadImage($report, 'reports');  // You can define your own directory
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  // Get the relative file path
                $medicalRecord->report = $full_path;  // Save the relative path in the database
            }
        }
    }
    public function saving(MedicalRecord $medicalRecord)
    {
       
        $report = request()->file('report'); // Get the file from the request
        if ($report) {
            // Call the uploadImage method from the FileUpload trait
            $meta = $this->uploadImage($report, 'reports');  // You can define your own directory
            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];  // Get the relative file path
                $medicalRecord->report = $full_path;  // Save the relative path in the database
            }
        }
    }
}
