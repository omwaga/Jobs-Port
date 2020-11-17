<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function towns()
    {
    	return $this->hasMany(Town::class, 'countries_id', 'id');
    }
}
