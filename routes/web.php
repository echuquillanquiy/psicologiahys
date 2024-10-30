<?php

use App\Http\Controllers\AcrofobyController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\BaronController;
use App\Http\Controllers\BournoutController;
use App\Http\Controllers\ClaustrofobyController;
use App\Http\Controllers\EpworthController;
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

Route::resource('baron', BaronController::class)->names('baron')->middleware('auth');

Route::resource('clq', ClaustrofobyController::class)->names('clq')->middleware('auth');

Route::resource('audit', AuditController::class)->names('audit')->middleware('auth');

Route::resource('cohen', AcrofobyController::class)->names('cohen')->middleware('auth');

Route::resource('epworth', EpworthController::class)->names('epworth')->middleware('auth');
