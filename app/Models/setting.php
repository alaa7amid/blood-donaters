<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable = [
        'user_id',
        'service',
        'email',
        'phone1',
        'phone2',
        'location',
        'instagram',
        'facebook',
        'tiktok'
    ];
}
