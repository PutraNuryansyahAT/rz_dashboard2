<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;


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


/*Register*/

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

/* Login and Logout */
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

/* Update */
Route::put('/update', [UpdateController::class, 'update']);
/* Home*/
Route::get('/home', [ViewController::class, 'viewhome'])->middleware('auth');;
Route::get('/settings', [ViewController::class, 'viewsetting'])->middleware('auth');;
Route::get('/affiliate', [ViewController::class, 'viewaffiliate'])->middleware('auth');

/* Dashboard*/
Route::get('/dashboard', [DashboardController::class, 'viewdashboard']);

/* Transaksi */
Route::get('/transaksi', [TransaksiController::class, 'viewtransaksi'])->middleware('auth');
Route::get('/searchtransaksi', [TransaksiController::class, 'viewsearchtransaksi'])->middleware('auth');

/* Donatur*/
Route::get('/donatur', [DonaturController::class, 'viewdonatur'])->middleware('auth');

Route::get('/coba', function () {
    return view('/test.index');
});
