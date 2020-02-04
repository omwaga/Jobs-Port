<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerDetail extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function shortlist()
    {
        $this->HasMany(Shortlis::class);
    }
   
}
