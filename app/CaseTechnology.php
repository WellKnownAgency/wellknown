<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CaseTechnology;
class CaseTechnology extends Model
{
  public function index()
  {
    return CaseTechnology::latest()->get();
  }


}
