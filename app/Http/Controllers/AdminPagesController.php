<?php

namespace App\Http\Controllers;

use App\SeoProject;
use Illuminate\Http\Request;

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

    public function companies()
    {
    return view('admin.companies');
    }

    public function posts()
    {
    return view('admin.posts.index');
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

}
