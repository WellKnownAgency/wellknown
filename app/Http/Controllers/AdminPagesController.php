<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

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
    return view('admin.seo.index');
    }

}
