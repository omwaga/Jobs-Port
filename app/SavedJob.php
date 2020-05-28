<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    protected $guarded=[];

    public function job()
    {
    	return $this->belongsTo(Jobposts::class, 'job_id');
    }
}
