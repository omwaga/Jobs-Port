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

    public function skills()
    {
    	return $this->HasMany(Skills::class, 'user_id', 'user_id');
    }

    public function statement()
    {
        return $this->belongsTo(PersonalStatement::class, 'user_id', 'user_id');
    }
   
}
