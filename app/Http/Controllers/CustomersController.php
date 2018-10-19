<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index()
  {
      return Customer::latest()->get();
  }

  public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return 204;
    }

}
