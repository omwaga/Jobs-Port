<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    public function jobseeker()
    {
       return $this->belongsTo(JobseekerDetail::class, 'user_id', 'user_id');
    }
    public function cprofile(){
        $this->belongsTo(Employer::class, 'employer_id');
    }
    public function applications()
    {
        return $this->HasMany(JobApplication::class, 'user_id');
    }
}
