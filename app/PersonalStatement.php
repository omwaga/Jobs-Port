<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalStatement extends Model
{
    protected $guarded = [];
 
    public function user()
    {
       return $this->belongsTo(User::class);
    }
   
    public function skills()
    {
       return $this->hasMany(Skills::class, 'user_id', 'user_id');
    }
}
