<?php

use Illuminate\Support\Facades\Route;


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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/failed', [App\Http\Controllers\HomeController::class, 'failedTrans'])->name('failed');
Route::get('/successful', [App\Http\Controllers\HomeController::class, 'successfulTrans'])->name('successful');
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/getUsers', [App\Http\Controllers\UserController::class, 'getUsers'])->name('get.users');


