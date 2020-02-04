<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingCategory extends Model
{
    protected $guarded = [];
 
    public function trainings()
    {
        return $this->hasMany(Training::class, 'training_categories_id');
    }
   
}
