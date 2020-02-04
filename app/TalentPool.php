<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalentPool extends Model
{
    protected $guarded = [];
    
    public function candidates()
    {
        return $this->HasMany(TalentpoolCandidates::class, 'talentpool_id', 'id');
    }
}
