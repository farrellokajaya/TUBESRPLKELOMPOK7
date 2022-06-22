<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'login'])->name('login')-> middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('store');

Route::get('/dashboard', function(){
    return view('dashboard');
});
