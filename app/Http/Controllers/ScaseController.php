<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scase;
use App\CaseService;
use App\CaseTechnology;
use Image;

class ScaseController extends Controller
{
  public function index()
  {
      return Scase::latest()->get();
  }


  public function create()
  {
      $caseservices = CaseService::all();
      $casetechnologies = CaseTechnology::all();
      return view('admin.cases.create', compact('caseservices', 'casetechnologies'));
  }

  public function store(Request $request)
  {
    // validate the data
   $this->validate($request, array(
           'title'         => 'required|max:255',
           'slug'          => 'required|alpha_dash|min:5|max:255|unique:scases,slug',
           'body'          => 'required'
       ));
   // store in the database
      $scase = new Scase;
      $scase->title = $request->title;
      $scase->title_work = $request->title_work;
      $scase->slug = $request->slug;
      $scase->body = $request->body;
      $scase->excerpt = $request->excerpt;
      $scase->seotitle = $request->seotitle;
      $scase->dscr = $request->dscr;

   if ($request->hasFile('img')) {
     $image = $request->file('img');
     $filename = time() . '.' . $image->getClientOriginalExtension();
     $location = public_path('images/cases/' . $filename);
     Image::make($image)->save($location);
     $scase->image = $filename;
   };
   if ($request->hasFile('header_image')) {
     $header_image = $request->file('header_image');
     $filename = time() . '.' . $header_image->getClientOriginalExtension();
     $location = public_path('images/cases/' . $filename);
     Image::make($header_image)->save($location);
     $scase->header_image = $filename;
   }


   $scase->save();

    $scase->caseservices()->sync($request->caseservices, false);
    $scase->casetechnologies()->sync($request->casetechnologies, false);

    return redirect('/admin/cases');
  }

  public function edit($id)
  {
    $scase = Scase::with('caseservices', 'casetechnologies')->where('id', $id)->first();
    $caseservices = CaseService::all();
    $casetechnologies = CaseTechnology::all();

    return view('admin.cases.edit', compact('scase', 'caseservices', 'casetechnologies'));
  }

  public function update(Request $request, $id)
  {
   // store in the database
      $scase = Scase::find($id);
      $scase->title = $request->input('title');
      $scase->title_work = $request->input('title_work');
      $scase->slug = $request->input('slug');
      $scase->body = $request->input('body');
      $scase->excerpt = $request->input('excerpt');
      $scase->seotitle = $request->input('seotitle');
      $scase->dscr = $request->input('dscr');

   if ($request->hasFile('img')) {
     $image = $request->file('img');
     $filename = time() . '.' . $image->getClientOriginalExtension();
     $location = public_path('images/cases/' . $filename);
     Image::make($image)->save($location);
     $scase->image = $filename;
   };
   if ($request->hasFile('header_image')) {
     $header_image = $request->file('header_image');
     $filename = time() . '.' . $header_image->getClientOriginalExtension();
     $location = public_path('images/cases/' . $filename);
     Image::make($header_image)->save($location);
     $scase->header_image = $filename;
   }


   $scase->save();

    return redirect('/admin/cases');
  }


}
