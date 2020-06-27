<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsSkills extends Model
{
    protected $guarded = [];

    public function pros()
    {
    	return $this->hasMany(ProsServices::class, 'skills', 'id');
    }
}
