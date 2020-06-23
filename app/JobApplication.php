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
    public function employer(){
        return $this->belongsTo(Employer::class, 'employer_id');
    }
    
    public function job()
    {
        return $this->belongsTo(Jobposts::class, 'job_id', 'id');
    }

    public function jobseekerprofile()
    {
        return $this->belongsTo(JobseekerDetail::class, 'user_id', 'user_id');
    }
    
}
