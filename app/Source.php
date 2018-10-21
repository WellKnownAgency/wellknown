<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class source extends Model
{
  public function lead()
  {
      return $this->belongsTo('App\Lead');
  }
}
