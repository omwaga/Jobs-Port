<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsDetails extends Model
{
    protected $guarded = [];

    public function procountry()
    {
    	return $this->belongsTo(Country::class, 'country', 'id');
    }

    public function procity()
    {
    	return $this->belongsTo(Town::class, 'city', 'id');
    }


    public function prostate()
    {
    	return $this->belongsTo(State::class, 'state', 'id');
    }

}
