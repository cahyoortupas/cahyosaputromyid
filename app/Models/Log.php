<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected  $guarded = [];

    public function device()
    {
        return $this->belongsTo(Device::class,'device_id');
    }

    
}
