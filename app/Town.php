<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
    
    public function training()
    {
        return $this->hasOne(Training::class);
    }
    public function jobposts(){
        
        return $this->hasMany(Jobposts::class,'location');
    }
}
