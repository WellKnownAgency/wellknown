<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
  public function index()
  {
      return Service::get();
  }

  public function store(Request $request)
  {
    $service = new Service();
    $service->name = $request->name;

    $service->save();

    return $service;
  }

  public function destroy($id)
  {
    $service= Service::findOrFail($id);
    $service->delete();

    return 204;
  }
}
