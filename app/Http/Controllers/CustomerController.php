<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all(); // Fetch all drivers
        return view('customers.index', ['customers' => $customers]);
    }
}
