<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'legal_entity',
        'state_registration_number',
        'tax_payer_code',
        'founders_of_legal_entity',
        'activity_type',
        'legal_address',
        'actual_activity_address',
        'address',
        'lang',
        'long',
        'staffing_list',
        'legal_registration_certificate',
        'license_to_carry_out_licensed_activities',
        'patronymic',
        'place_of_birth',
        'person_without_citizenship',
        'education',
        'family-status',
        'whatsApp',
        'viber',
        'passport',
        'dob',
        'gender',
        'country',
        'doc_number',
        'doc_type',
        'date_issue',
        'date_expire',
        'mobile',
        'photo',
        'passport_1',
        'pasport_2',
        'user_name',
        'status',
        'type',
        'name',
        'email',
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
}
