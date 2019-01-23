<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scase extends Model
{
  public function casetechnologies() {
    return $this->belongsToMany(CaseTechnology::class);
  }
  public function caseservices() {
    return $this->belongsToMany('App\CaseService');
  }
}
