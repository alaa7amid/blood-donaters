<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital'
    ];

    public function requsting(){
        return $this->hasMany(Requsting::class);
    }
}
