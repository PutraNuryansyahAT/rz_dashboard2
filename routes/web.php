<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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

/* User */
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/', [UserController::class, 'authenticate']);
Route::post('logout', [UserController::class, 'logout']);
Route::put('/update', [UserController::class, 'update']);

/* Update */


/* SideBar*/
Route::get('/dashboard', [DashboardController::class, 'viewdashboard'])->middleware('auth');
Route::get('/transaksi', [TransaksiController::class, 'viewtransaksi'])->middleware('auth');
Route::get('/donatur', [DonaturController::class, 'viewdonatur'])->middleware('auth');
Route::get('/settings', [ViewController::class, 'viewsetting'])->middleware('auth');
Route::get('/affiliate', [ViewController::class, 'viewaffiliate'])->middleware('auth');

/* Transaksi */
Route::get('/searchtransaksi', [TransaksiController::class, 'viewsearchtransaksi'])->middleware('auth');
Route::get('/ajax-autocomplete-search', [TransaksiController::class, 'selectSearch']);
// route ke autocomplete
Route::get('/autocomplete', [TransaksiController::class, 'autocomplete'])->name('autocomplete');

/* Donatur*/
Route::get('/coba', function () {
    return view('/test.index');
});

/* Pages */
Route::get('/faq', [PagesController::class, 'viewfaq'])->middleware('auth');
Route::get('/fiqih', [PagesController::class, 'viewfiqih'])->middleware('auth');
Route::get('/profile', [PagesController::class, 'viewprofile'])->middleware('auth');
