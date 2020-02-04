<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        $this->belongsTo(User::class);
    }
   
}
