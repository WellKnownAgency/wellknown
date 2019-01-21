<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseService extends Model
{
  public function caseservices() {
    return $this->hasmany('App\Scase');
  }
}
