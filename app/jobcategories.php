<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobcategories extends Model
{
    //
    protected $fillable = [
        ' jobcategories',
    ];
    
    public function jobs()
    {
        return $this->hasMany(Jobposts::class);
    }
    
}
