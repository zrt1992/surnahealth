<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

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
        // Automatically combine first_name and last_name into the name column
        $this->attributes['name'] = $this->first_name . ' ' . $this->last_name;
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




    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'doctor_specialization');
    }

    // A doctor can have many qualifications
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }

    public function availableTimings()
    {
        return $this->hasMany(AvailableTimming::class);
    }

    public function appointmentRequests()
    {
        return $this->hasMany(AppointmentRequests::class,'doctor_id','id');
    }
}
