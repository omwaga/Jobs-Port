<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalStatement extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        $this->belongsTo(User::class);
    }
   
}
