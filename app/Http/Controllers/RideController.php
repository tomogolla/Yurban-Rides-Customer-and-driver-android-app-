<?php

namespace App\Http\Controllers;


use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index() {
        $rides = Ride::all(); // Fetch all rides
        return view('rides.index', ['rides' => $rides]);
    }
}
