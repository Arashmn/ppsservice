<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDate('Y-n-j');
    }

}