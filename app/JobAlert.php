<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobAlert extends Model
{
    protected $fillable = ['email_address', 'full_name', 'phone_number'];
}
