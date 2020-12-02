<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable 
{
    //
    use Notifiable;

    protected $guard='employer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function jobs(){
         return $this->hasMany(Jobposts::class,'employer_id');
    }
    public function applications(){
        return $this->hasMany(JobApplication::class,'employer_id');
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'company_industry', 'id');
    }

    public function doc()
    {
        return $this->hasOne(EmployerDocument::class, 'employer_id', 'id');
    }
}