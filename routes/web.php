<?php

use App\Http\Controllers\BournoutController;
use App\Http\Controllers\EysenckController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('bournout', BournoutController::class)->names('bournout')->middleware('auth');

Route::resource('eysenck', EysenckController::class)->names('eysenck')->middleware('auth');


