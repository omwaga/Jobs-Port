<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercategories extends Model
{
    protected $guarded = [];
    
    public function jobseeker(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function industry(){
        return $this->belongsTo(Industry::class,'industry_id', 'id');
    }

    public function profile()
    {
    	return $this->belongsTo(JobseekerDetail::class, 'user_id', 'user_id');
    }

    public function skills()
    {
    	return $this->belongsTo(Skills::class, 'user_id', 'user_id');
    }
}
