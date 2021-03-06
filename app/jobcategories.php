<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobcategories extends Model
{
    //
    protected $fillable = [
        'jobcategories', 'description', 'seo_description'
    ];
    
    public function jobs()
    {
        return $this->hasMany(Jobposts::class);
    }
    
}
