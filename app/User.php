<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider','provider_id','user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        User::saving(function ($model) {
            if(!User::where("user_type","=", "Admin")->exists())
            {
                $model->user_type = 'Admin';
            } 

        });
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function talentpools()
    {
        return $this->hasMany(TalentPool::class);
    }

    public function jobapplications(){
        return $this->hasMany(JobApplication::class);
    }

    public function jobseekerdetail()
    {
        return $this->hasOne(JobseekerDetail::class, 'user_id', 'id');
    }

    public function personalstatement()
    {
        return $this->hasOne(PersonalStatement::class, 'user_id', 'id');
    }

    public function skills()
    {
        return $this->hasMany(Skills::class, 'user_id', 'id');
    }

    public function experiences()
    {
        return $this->HasMany(WorkExperience::class, 'user_id', 'id');
    }

    public function educations()
    {
        return $this->HasMany(Education::class, 'user_id', 'id');
    }

    public function references()
    {
        return $this->HasMany(Reference::class, 'user_id', 'id');
    }
    
}
