<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Ride;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCustomers = Customer::count();
        $totalDrivers = Driver::count();
        $totalRides = Ride::count();

        // You can also pass more specific data if needed
        return view('dashboard.index', [
            'totalCustomers' => $totalCustomers,
            'totalDrivers' => $totalDrivers,
            'totalRides' => $totalRides,
        ]);
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name'=> $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }
        return redirect('/');
    } 
    public function logout() {
        auth()-> logout();
        return redirect('/');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name'=>['required', Rule::unique('users', 'name')],
            'email'=>['required', Rule::unique('users', 'email')],
            'password'=>'required'
        ]);

        $incomingFields['password']=bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');

    }
}