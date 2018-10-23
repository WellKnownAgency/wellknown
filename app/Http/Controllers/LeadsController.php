<?php

namespace App\Http\Controllers;

use App\Notifications\IntroEmail;
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
    $lead = Lead::with('status')->with('source')->find($id);

    return $lead;
  }

  public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return 204;
    }

  public function statuschange(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
    $lead->status_id = $request->status_id;
    $lead->update();

    return $lead;
  }

  public function doneintroemail(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
    $lead->introemail = $request->introemail;
    $lead->update();

    if ($lead->status_id = 2) {
    \Notification::route('mail', $lead->email)
        ->notify(new IntroEmail($lead));
    }
    return $lead;
  }

  public function doneintrocall(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
    $lead->introcall = $request->introcall;
    $lead->update();

    return $lead;
  }

  public function donefllupemail(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
    $lead->fllupemail = $request->fllupemail;
    $lead->update();

    if ($lead->introemail = true) {
    \Notification::route('mail', $lead->email)
        ->notify(new IntroEmail($lead));
    }

    return $lead;
  }

  public function donelastemail(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
    $lead->lastemail = $request->lastemail;
    $lead->update();

    if ($lead->fllupemail = true) {
    \Notification::route('mail', $lead->email)
        ->notify(new IntroEmail($lead));
    }

    return $lead;
  }

}
