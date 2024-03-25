<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CekController;
use App\Http\Controllers\InputController;
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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [CekController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cek', function() {
    return 'test';
});

Route::get('/cek', [CekController::class, 'tabel']);
Route::get('/cek/create', [CekController::class, 'create']);
Route::post('/cek/hasil', [CekController::class, 'hasil']);

Route::get('/input', function () {
    return view('input');
});

Route::get('/cetak', function () {
    return view('cetak');
});
