<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index()
    {
        return Status::get();
    }

    public function store(Request $request)
    {
      $status = new Status();
      $status->name = $request->name;

      $status->save();

      return $status;
    }

    public function destroy($id)
    {
      $status = Status::findOrFail($id);
      $status->delete();

      return 204;
    }
}
