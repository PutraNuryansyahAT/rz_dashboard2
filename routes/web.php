<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\RegisterController;


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
Route::get('/transaksi', [ViewController::class, 'viewtransaksi'])->middleware('auth');
Route::get('/donatur', function () {
    return view('/dashboard.donatur');
});


Route::get('/coba', function () {
    return view('/test.index');
});
