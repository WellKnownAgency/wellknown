<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index()
    {
    return view('admin.index');
    }

    public function customers()
    {
    return view('admin.customers');
    }

    public function companies()
    {
    return view('admin.companies');
    }

}
