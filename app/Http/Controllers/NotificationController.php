<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Auth;
use App\Admin;

class NotificationController extends Controller
{
  public function get()
  {
    $notification = Auth::user()->unreadNotifications;
    return $notification;
  }

    public function read(Request $request)
    {
      Auth::user()->unreadNotifications()->find($request->id)->markAsRead();
      return 'success';
    }

    public function readall()
    {
      Auth::user()->unreadNotifications()->update(['read_at' => now()]);
      return 'success';
    }
}
