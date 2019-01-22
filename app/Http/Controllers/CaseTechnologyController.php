<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaseTechnology;
class CaseTechnologyController extends Controller
{
  public function index()
  {
    return CaseTechnology::latest()->get();
  }

  public function store(Request $request)
  {
    $casetechnology = new CaseTechnology();
    $casetechnology->name = $request->name;
    $casetechnology->icon = $request->icon;
    $casetechnology->save();

    return $casetechnology;
  }

  public function destroy($id)
  {
    $casetechnology = CaseTechnology::findOrFail($id);
    $casetechnology->delete();

    return 204;
  }

}
