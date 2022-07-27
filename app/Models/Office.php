<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'management',
        'license_number',
        'work_history',
        'area',
        'apprentice',
        'address_office',
        'phone_office',
        'type',
        'is_owner',
        'is_parking',
        'accept',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
