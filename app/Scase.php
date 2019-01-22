<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scase extends Model
{
  public function casetechnology() {
    return $this->belongsTo('App\CaseTechnology');
  }
  public function caseservice() {
    return $this->belongsTo('App\CaseService');
  }


}
