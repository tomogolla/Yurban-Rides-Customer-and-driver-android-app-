

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/customers', [CustomerController::class, 'index'])->middleware('auth');


Route::post('/register', [DashboardController::class, 'register']);

Route::post('/logout', [DashboardController::class, 'logout']);

Route::post('/login', [DashboardController::class, 'login']);

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RideController;

Route::get('/customers', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/drivers', [DriverController::class, 'index'])->middleware('auth');
Route::get('/rides', [RideController::class, 'index'])->middleware('auth');
