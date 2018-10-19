<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
      public function index()
    {
        return Company::latest()->get();
    }

    public function destroy($id)
      {
          $company = Company::findOrFail($id);
          $company->delete();

          return 204;
      }
}
