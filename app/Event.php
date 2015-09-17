<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'location',
        'date',
        'time',
        'desc',
        'active',
        'checkinable'
    ];

    public function prices()
    {
        return $this->hasMany('App\Price');
    }
}
