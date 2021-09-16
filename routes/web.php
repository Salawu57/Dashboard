<?php

use Illuminate\Support\Facades\Route;
use App\Models\Airtime_Transactions;


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


Route::get('/pages', function () {
    return view('search');
});


Auth::routes();
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search.record');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/failed', [App\Http\Controllers\HomeController::class, 'failedTransV'])->name('failed');
Route::get('/successful', [App\Http\Controllers\HomeController::class, 'successfulTransV'])->name('successful');
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::get('/getUsers', [App\Http\Controllers\UserController::class, 'getUsers'])->name('get.users');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile');
Route::post('/removeUser', [App\Http\Controllers\UserController::class, 'removeUser'])->name('users.remove');
Route::post('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('users.changePassword');
Route::post('/updateProfile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('users.updateProfile');
Route::get('searchtrans', [App\Http\Controllers\HomeController::class, 'searchtrans'])->name('search.report');
Route::get('successfulTrans', [App\Http\Controllers\HomeController::class, 'successfultrans'])->name('search.successfultrans');
Route::get('failedTrans', [App\Http\Controllers\HomeController::class, 'failedTrans'])->name('search.failedTrans');
Route::Post('/transactionExport', [App\Http\Controllers\HomeController::class, 'transactionExport'])->name('export.transactionExport');
Route::Post('/failedTranExport', [App\Http\Controllers\HomeController::class, 'failedTranExport'])->name('export.failedTranExport');
Route::Post('/successfulTranExport', [App\Http\Controllers\HomeController::class, 'successfulTranExport'])->name('export.successfulTranExport');
