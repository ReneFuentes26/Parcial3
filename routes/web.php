<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZapatoController;
use App\Http\Controllers\Auth\AuthController;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/integrante', function () {
    return view('integrantes');
});

Route::resource('zapatos', ZapatoController::class);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/github', [App\Http\Controllers\Auth\AuthController::class,'redirectToProvider']);
Route::get('auth/github/callback', [App\Http\Controllers\Auth\AuthController::class,'handleProviderCallback']);
