<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingApplication extends Model
{
    protected $guarded = [];
    
    public function trainings()
    {
        return $this->hasMany(TrainingApplication::class);
    }
}
