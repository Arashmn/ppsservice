<?php

namespace App\Models;

use App\Models\Office;
use Config\Enum\UserSexEnum;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'father',
        'email',
        'sex',
        'mobile_number',
        'password',
        'code_meli',
        'birthday',
        'address',
        'is_staff',
        'agent',
        'moaref',
        'pic',
        'file',
        'accept',
        'department_id',
        'password',
        'office_id'
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

    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = Hash::make($value);
    }

    public function offices()
    {

        return $this->hasMany(Office::class);

    }

    // public function car_inses()
    // {
    //    return $this->hasOne(car_ins::class);
    // }


    // public function office()
    // {
    //     return $this->belongsTo(Office::class);
    // }



}