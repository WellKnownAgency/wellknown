<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadsController extends Controller
{
    public function index()
  {
      return Lead::with('status')->with('source')->get();
  }


  public function show($id)
  {
    $lead = Lead::find($id);

    return $lead;
  }

  public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return 204;
    }

}
