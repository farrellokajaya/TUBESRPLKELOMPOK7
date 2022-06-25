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
    return view('home');
});

Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('store');

Route::get('/dashboard',[DashboardController::class, 'Dashboard'])->middleware('auth');

Route::get('/pendaftaran',[DashboardController::class, 'pendaftaran'])->name('pendaftaran')->middleware('auth');
Route::post('/pendaftaran',[DashboardController::class, 'store'])->name('store');

Route::get('/perpanjang',[DashboardController::class, 'perpanjang'])->name('perpanjang')->middleware('auth');
Route::post('/perpanjang',[DashboardController::class, 'store_perpanjang'])->name('store_perpanjang');

Route::get('/inputnilai',[DashboardController::class, 'inputnilai'])->name('inputnilai')->middleware('auth');
Route::post('/inputnilai',[DashboardController::class, 'store_inputnilai'])->name('store_inputnilai');

Route::get('/cekhasil',[DashboardController::class, 'cekhasil'])->name('cekhasil')->middleware('auth');
Route::post('/cekhasil',[DashboardController::class, 'store_inputnilai'])->name('store_inputnilai');

Route::get('/pengambilan',[DashboardController::class, 'pengambilan'])->name('pengambilan')->middleware('auth');;