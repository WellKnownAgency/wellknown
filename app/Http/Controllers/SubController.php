<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;

class SubController extends Controller
{
	public function index()
	{
			return Sub::get();
	}

	public function subStore(Request $request)
		{
			$this->validate($request, [
	      'name' => 'required',
	      'email'     => 'required|email'
	    ]);
			$sub = new Sub();
			$sub->name = $request->name;
			$sub->email = $request->email;

			$sub->save();

			return $sub;
		}
}
