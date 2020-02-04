<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $guarded = [];
    
    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institutions_id');
    }
    
    public function trainingcategory()
    {
        return $this->belongsTo(TrainingCategory::class, 'training_categories_id');
    }
    
    public function town()
    {
        return $this->belongsTo(Town::class);
    }
    
    public function trainingapplication()
    {
        return $this->belongsTo(TrainingApplication::class);
    }
}
