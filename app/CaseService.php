<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseService extends Model
{
  public function scases() {
    return $this->belongsToMany('App\Scase');
  }
}
