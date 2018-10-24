<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;

class SourcesController extends Controller
{
  public function index()
  {
      return Source::get();
  }
}
