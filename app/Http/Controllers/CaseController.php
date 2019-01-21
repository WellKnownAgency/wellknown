<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Case;
use Image;

class CaseController extends Controller
{
  public function index()
  {
      return Case::latest()->get();
  }

  

}
