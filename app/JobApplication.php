<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cprofile(){
        return $this->belongsTo(Cprofile::class, 'employer_id');
    }
    
    public function job()
    {
        return $this->belongsTo(Jobposts::class, 'job_id');
    }
    
}
