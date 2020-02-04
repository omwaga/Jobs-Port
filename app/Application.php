<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cprofile(){
        return $this->belongsTo(Cprofile::class);
    }
}
