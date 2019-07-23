<?php

namespace App\Http\Controllers;

use App\Notifications\NewLead;
use App\Notifications\NewLeadSlack;
use App\Notifications\FollowUpEmail;
use App\Notifications\LastEmail;
use App\Notifications\IntroEmail;
use Illuminate\Http\Request;
use App\Lead;
use App\User;
use Carbon\Carbon;

class LeadsController extends Controller
{
    public function index()
  {
      $leads = Lead::with('source')->with('status')->where('status_id', '!=', 4)->where('status_id', '!=', 5)->where('status_id', '!=', 3)->latest()->get();

      return $leads;
  }

  public function indexClients()
  {
      $leads = Lead::with('source')->with('status')->where('status_id', '=', 4)->get();

      return $leads;
  }

  public function indexPartners()
  {
      $leads = Lead::with('source')->with('status')->where('status_id', '=', 3)->get();

      return $leads;
  }

  public function indexDashleads()
  {
      $leads = Lead::with('source')->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->with('status')->get();

      return $leads;
  }

  public function store(Request $request)
  {

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

    $users = User::all();
    foreach ($users as $user) {
      $user->notify(new NewLead($lead));
    }

		//$user->notify(new NewLeadSlack($lead));

    return response($lead);
  }

  public function show($id)
  {
    $lead = Lead::with('status')->with('source')->find($id);

    return $lead;
  }


  public function update(Request $request, $id)
  {

    $lead = Lead::findOrFail($id);
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

    return $lead;
  }

  public function openedit($id)
      {
          return Lead::with('sources')->with('statuses')->findOrFail($id);
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
        ->notify(new FollowUpEmail($lead));
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
        ->notify(new LastEmail($lead));
    }

    return $lead;
  }

}
