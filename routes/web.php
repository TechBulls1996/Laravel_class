<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home',['title' => "Home"]);
})->name('home');

Route::get('/login', function () {
    return view('login',['title' => "Login"]);
})->name('login');

Route::get('/register', function () {
    return view('register',['title' => "Register"]);
})->name('register');

Route::post("/login_submit", [AuthController::class,'login'])->name('login_submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Dashboard
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware('auth');

