<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CaseTechnology;
class CaseTechnology extends Model
{
  public function casetechnologies() {
    return $this->hasmany('App\Scase');
  }

}
