<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function index()
    {
        return Status::get();
    }
}
