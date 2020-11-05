<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLevel extends Model
{
    protected $guarded = [];

    public function selected()
    {
    	return $this->belongsTo(Level::class, 'level', 'id');
    }
}
