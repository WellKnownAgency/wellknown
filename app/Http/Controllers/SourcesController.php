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

  public function store(Request $request)
  {
    $source = new Source();
    $source->name = $request->name;

    $source->save();

    return $source;
  }

  public function destroy($id)
  {
    $source = Source::findOrFail($id);
    $source->delete();

    return 204;
  }
}
