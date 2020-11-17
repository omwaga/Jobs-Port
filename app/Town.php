<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
	protected $guarded = [];
	
    public function jobposts(){
        
        return $this->hasMany(Jobposts::class,'location');
    }

    public function country()
    {
    	return $this->belongsTo(Country::class, 'countries_id', 'id');
    }
}
