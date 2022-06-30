<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [ViewController::class, 'viewhome']);

Route::get('/settings', [ViewController::class, 'viewsetting']);

Route::get('/transaksi', [ViewController::class, 'viewtransaksi']);

Route::get('/donatur', function () {
    return view('/dashboard.donatur');
});


Route::get('/coba', function () {
    return view('/test.index');
});
