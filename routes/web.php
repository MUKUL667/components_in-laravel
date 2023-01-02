<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TwoFactorController;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
// Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

// Auth::routes();
// Route::group(['middleware'=>['twofactor','auth']],function()
// {

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// });
// Route::get('verify/resend', [TwoFactorController::class, 'resend'])->name('verify.resend');
// Route::resource('verify', TwoFactorController::class)->only(['index', 'store']);

