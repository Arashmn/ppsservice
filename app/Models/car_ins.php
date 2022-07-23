<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class car_ins extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_name',
        'car_year',
        'car_tage',
        'car_number',
        'car_chassis',
        'ins_type',
        'ins_company',
        'ins_serialNumber',
        'ins_premium',
        'ins_expire',
        'user_id'
    ];

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
