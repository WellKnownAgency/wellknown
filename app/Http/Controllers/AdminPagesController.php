<?php

namespace App\Http\Controllers;

use App\SeoProject;
use App\Lead;
use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class AdminPagesController extends Controller
{
    public function index()
    {
    return view('admin.index');
    }

    public function leads()
    {
    return view('admin.leads');
    }

    public function clients()
    {
    return view('admin.clients');
    }

    public function partners()
    {
    return view('admin.partners');
    }

    public function companies()
    {
    return view('admin.companies');
    }

    public function posts()
    {
      $categories = Category::get();
      return view('admin.posts.index')->withCategories($categories);
    }

    public function cases()
    {
      return view('admin.cases.index');
    }

    public function caseservices()
    {
    return view('admin.caseservices.index');
    }
    public function casetechnologies()
    {
    return view('admin.casetechnologies.index');
    }

    public function categories()
    {
    return view('admin.categories.index');
    }

    public function settings()
    {
    return view('admin.settings');
    }

    public function seo()
    {
        $projects = SeoProject::with(['pages.keywords'])->limit(10);
        $total = $projects->count();

        $projects = $projects->get();

        return view('admin.seo.index', compact('projects', 'total'));
    }

    public function calendar()
    {
    return view('admin.calendar');
    }

		public function subs()
    {
    return view('admin.subs');
    }

}
