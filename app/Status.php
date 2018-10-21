<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
  public function lead()
  {
      return $this->belongsTo('App\Lead');
  }
}
