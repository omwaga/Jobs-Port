<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Institution extends Model
{

    public function trainings()
    {
        return $this->hasMany(Training::class, 'institutions_id');
    }
    
    public function training()
    {
        return $this->hasOne(Training::class);
    }
}
