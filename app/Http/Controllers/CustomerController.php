<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Display a listing of customers.
    public function index(Request $request)
    {
        $customers = Customer::all()->paginate(100);

        return $customers;
    }
}
