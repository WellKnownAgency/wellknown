<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

		public function postAMP(Request $request)
    {
		 // store in the database
				$review = new Review ;
				$review ->rating = $request->rating;
				$review ->name = $requst->name;

			 	$review ->save();

				$review->headers->set();

			return response($review)->header('Content-type: application/json')
															->header('Access-Control-Allow-Origin: *.ampproject.org');
    }
}
