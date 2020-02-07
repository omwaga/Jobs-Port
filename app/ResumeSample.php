<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeSample extends Model
{
    protected $guarded = [];

    public function domain()
    {
    	return $this->belongsTo(ResumeDomain::class, 'domain_id', 'id');
    }
}
