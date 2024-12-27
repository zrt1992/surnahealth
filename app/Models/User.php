<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'display_name',
        'phone',
        'known_languages',
        'dob',
        'blood_group',
        'country',
        'pincode',
        'city',
        'state',
        'address',
        'years_of_experience',
        'profile_image',
        'password',
        'gender',
        'height',
        'weight',
        'photo_id',
        'registration_step',
        'consultation_fees',
        'medical_licence_number',
        'medical_licence',
        'referral_code',
        'term_and_condition',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function setNameAttribute($value)
    {
        if (!empty($this->first_name) && !empty($this->last_name)) {
            // Combine first_name and last_name if they are set
            $this->attributes['name'] = $this->first_name . ' ' . $this->last_name;
        } else {
            // Fallback: use the provided name if first_name and last_name are not set
            $this->attributes['name'] = $value;
        }
    }
    
    public function getFirstNameAttribute()
    {
        $nameParts = explode(' ', $this->name);

        return $nameParts[0] ?? '';
    }


    public function getLastNameAttribute()
    {
        $nameParts = explode(' ', $this->name);

        return $nameParts[1] ?? '';
    }


    public function doctorSpecialization()
    {
        return $this->belongsToMany(Specialization::class, 'doctor_specialization', 'user_id', 'specialization_id')
                    ->withTimestamps(); // to include created_at and updated_at in the pivot table
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'doctor_specialization');
    }

    // A doctor can have many qualifications
    public function doctorEducation()
    {
        return $this->hasMany(DoctorEducation::class,'doctor_id','id');
    }

    public function doctorClinic()
    {
        return $this->hasMany(DoctorClinic::class,'doctor_id','id');
    }

    public function doctorAwards()
    {
        return $this->hasMany(DoctorAward::class,'doctor_id','id');
    }

    public function doctorExperiences()
    {
        return $this->hasMany(DoctorExperience::class,'doctor_id','id');
    }

    public function doctorBusinessHour()
    {
        return $this->hasMany(DoctorBusinessHour::class,'doctor_id','id');
    }

    public function availableTimings()
    {
        return $this->hasMany(AvailableTimming::class);
    }

    public function appointmentRequests()
    {
        return $this->hasMany(AppointmentRequests::class, 'doctor_id', 'id');
    }

    // Patient side relations
    public function medicalDetails()
{
    return $this->hasOne(MedicalDetail::class);
}

public function appointments()
{
    return $this->hasMany(Appointment::class,'user_id','id');
}

public function prescriptions()
{
    return $this->hasMany(Prescription::class,'user_id','id');
}

public function patientAppointmentPreferences()
{
    return $this->hasOne(PatientAppoitmentPreferences::class,'user_id','id');
}
}
