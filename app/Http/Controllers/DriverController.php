<?php


namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {
        $drivers = Driver::all(); // Fetch all drivers
        return view('drivers.index', ['drivers' => $drivers]);
    }
}
