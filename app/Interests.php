<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo(jobcategories::class, 'interests', 'id');
    }
}
