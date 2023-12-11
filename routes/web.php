<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// landing
// Route::get('landing', function () {
//     return view('landing.landing');
// });

Route::get("landing", [ContohController::class, "index"])

// auth
Route::get('auth/login', function () {
    return view('auth.login');
});

Route::get('auth/register', function () {
    return view('auth.register');
});

// dashboard

Route::get('dashboard/home', function () {
    return view('dashboard.content.home');
});
