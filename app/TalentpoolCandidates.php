<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentpoolCandidates extends Model
{
    protected $guarded = [];
    
    public function talentpool()
    {
        return $this->belongsTo(TalentPool::class, 'talentpool_id');
    }
    
    public function candidate()
    {
        return $this->belongsTo(JobseekerDetail::class, 'user_id');
    }
}
