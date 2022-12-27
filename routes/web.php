<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PlatNomorController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\KomparasiController;

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
    return view('navbar/navbar');
});

//Routing Login
Route::get('/formLogin', [LoginAuthController::class, 'formLogin']);
Route::any('/login', [LoginAuthController::class, 'login'])->name('login');
Route::get('/admin/home', function () {
    return view('dashboard\dashboardAdmin');
})->middleware('auth');
Route::post('/logout', [LoginAuthController::class, 'logout'])->name('logoutHome');

//Merek
Route::resource('merek', MerekController::class);

//Plat Nomor
Route::resource('plat_nomor', PlatNomorController::class);

//Mesin
Route::resource('mesin', MesinController::class);

//File
Route::resource('mobil', FileController::class);
