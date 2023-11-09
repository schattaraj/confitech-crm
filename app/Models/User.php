<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'emp_id',
        'password',
        'remember_token',
        'user_type',
        'dob',
        'mobile_number',
        'aadhaar_card',
        'aadhaar_card_photo',
        'pan_number',
        'pan_photo',
        'photo',
        'permanent_address',
        'residential_address',
        'blood_group',
        'emergency_contact',
        'emergency_contact_person',
        'emergency_contact_person_relationship',
        'maritial_status',
        'gender',
        'status',
        'joining_date'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
