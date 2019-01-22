<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaseService;
class CaseServiceController extends Controller
{
  public function index()
  {
    return CaseService::latest()->get();
  }

  public function store(Request $request)
  {
    $caseservice = new CaseService();
    $caseservice->name = $request->name;

    $caseservice->save();

    return $caseservice;
  }

  public function destroy($id)
  {
    $caseservice = CaseService::findOrFail($id);
    $caseservice->delete();

    return 204;
  }

}
