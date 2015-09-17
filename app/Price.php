<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price_categories';

    public function event()
    {
        return $this->belongsTo('App\Event');

    }
}
