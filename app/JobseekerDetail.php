<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobseekerDetail extends Model
{
    protected $guarded = [];
 
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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

    public function country()
    {
        return $this->belongsTo(PersonalStatement::class, 'nationality', 'id');
    }
   
}
