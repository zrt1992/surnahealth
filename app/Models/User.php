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
        'profile_image',
        'password',
        'gender',
        'height',
        'weight',
        'quali_certificate',
        'photo_id',
        'clinical_employment',
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
        return $this->hasOne(Specialization::class, 'doctor_specialization');
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'doctor_specialization');
    }

    // A doctor can have many qualifications
    public function doctorEducation()
    {
        return $this->hasMany(DoctorEducation::class);
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
}
