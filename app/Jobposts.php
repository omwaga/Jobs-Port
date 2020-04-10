<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobposts extends Model
{
    protected $guarded = [];
    
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function industries(){
        
        return $this->belongsTo(Industry::class,'industry', 'id');
    }
    public function town(){
        return $this->belongsTo(Town::class, 'location', 'id');
    }
    public function usercategory(){
        return $this->belongsTo(Usercategories::class,'industry_name');
    }

    public function category()
    {
      return $this->belongsTo(jobcategories::class, 'jobcategories_id', 'id');
    }
    
    public function applications()
    {
      return $this->HasMany(JobApplication::class, 'job_id');
    }
}
