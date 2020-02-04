<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    //
    public function jobposts(){
         return $this->hasMany(Jobposts::class,'industry');
    }
    
    public function userindustries(){
         return $this->hasMany(Usercategories::class,'id','industry_id');
    }
}
