<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class officeStatus extends Model
{
    use HasFactory;

    protected $fillable= ['office_id','user_id','detail','status','date'];

    public function getDateAttribute($value)
    {
        return (new Verta($value))->format('Y-n-j');
    }
    public function getTimeAttribute($value)
    {
     
        return (new Verta($value))->formatTime();

    }




    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}