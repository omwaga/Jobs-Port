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
    public function cprofile()
    {
        return $this->belongsTo(Cprofile::class, 'employer_id');
    }
    public function industries(){
        
        return $this->belongsTo(Industry::class,'name');
    }
    public function town(){
        return $this->belongsTo(Town::class);
    }
    public function usercategory(){
        return $this->belongsTo(Usercategories::class,'industry_name');
    }
    
    public function applications()
    {
      return $this->HasMany(JobApplication::class, 'job_id');
    }
}
