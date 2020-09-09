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
        $this->HasMany(Shortlist::class);
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
        return $this->belongsTo(Country::class, 'nationality', 'id');
    }

    public function state()
    {
        return $this->belongsTo(Town::class, 'city', 'id');
    }
   
}
