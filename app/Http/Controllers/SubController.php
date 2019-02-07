<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;
use Carbon\Carbon;

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

		public function indexDashSubs()
		{
			$subs = Sub::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();

			return $subs;
		}
}
