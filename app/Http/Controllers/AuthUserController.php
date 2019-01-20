<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;

class AuthUserController extends Controller
{
  public function index()
  {
    return Auth::user();
  }

  public function store(Request $request)
  {
      $exploded = explode(',', $request->image);

      $decoded = base64_decode($exploded[1]);

      if(str_contains($exploded[0], 'jpeg'))
        $extension = 'jpg';
        else
        $extension = 'png';

      $filename = str_random().'.'.$extension;

      $path = public_path().'/images/users/'.$filename;

      file_put_contents($path, $decoded);

      $user = Auth::user();
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->dscr = $request->input('dscr');
      $user->linkedin = $request->input('linkedin');
      $user->facebook = $request->input('facebook');
      $user->twitter = $request->input('twitter');
        $user->avatar = $filename;

    $user->save();

    return $user;
  }
}
