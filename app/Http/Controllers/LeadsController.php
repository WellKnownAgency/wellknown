<?php

namespace App\Http\Controllers;

use App\Notifications\NewLead;
use App\Notifications\IntroEmail;
use Illuminate\Http\Request;
use App\Lead;
use App\Admin ;

class LeadsController extends Controller
{
    public function index()
  {
      $leads = Lead::with('source')->where('status_id', '!=', 4)->get();

      return $leads;
  }

  public function indexClients()
  {
      $leads = Lead::with('source')->with('status')->where('status_id', '=', 4)->get();

      return $leads;
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'email'=>'required'
    ]);

    $lead = new Lead();
    $lead->first_name = $request->first_name;
    $lead->last_name = $request->last_name;
    $lead->phone = $request->phone;
    $lead->email = $request->email;
    $lead->website = $request->website;
    $lead->company = $request->company;
    $lead->position = $request->position;
    $lead->address = $request->address;
    $lead->city = $request->city;
    $lead->state = $request->state;
    $lead->country = $request->country;
    $lead->body = $request->body;
    $lead->facebook = $request->facebook;
    $lead->twitter = $request->twitter;
    $lead->instagram = $request->instagram;
    $lead->linkedin = $request->linkedin;
    $lead->note = $request->note;
    $lead->status_id = $request->status_id;
    $lead->source_id = $request->source_id;

    $lead->save();

    $admins = Admin::all();
    foreach ($admins as $admin) {
      $admin->notify(new NewLead($lead));
    }

    return $lead;
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
