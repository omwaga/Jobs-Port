<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpressCategory extends Model
{
  protected $guarded = [];

  public function users()
  {
  	return $this->hasMany(PersonalStatement::class, 'category', 'id');
  }
}
