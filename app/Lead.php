<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
  public function source()
  {
      return $this->belongsTo('App\Source');
  }
  public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
