<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CekController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\SsidController;
use App\Http\Controllers\TipeController;
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
    return redirect()->route('login'); // Mengarahkan ke halaman login
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register'); // Beri nama yang berbeda, misalnya 'register.form'
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post'); // Beri nama yang berbeda, misalnya 'register.post'
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [CekController::class, 'home'])->name('home'); // Tetapkan nama rute 'home'
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    // Rute untuk filter
    Route::get('/filter', [CekController::class, 'filter'])->name('cek.filter');
    
    // Rute untuk ekspor
    Route::get('/export', [CekController::class, 'export'])->name('cek.export');
})->middleware('auth'); // Tambahkan middleware 'auth' di sini juga


// Route untuk input cek jaringan
Route::get('cek', [CekController::class, 'tabel'])->name('cek.tabel');
Route::get('cek/create', [CekController::class, 'create'])->name('cek.create');
Route::post('cek', [CekController::class, 'save'])->name('cek.save');
Route::get('cek/{id}/edit', [CekController::class, 'edit'])->name('cek.edit');
Route::put('cek/{id}', [CekController::class, 'ubah'])->name('cek.ubah');
Route::delete('cek/{id}', [CekController::class, 'destroy'])->name('cek.destroy');
//---------------------------------------

// Route untuk input barang
Route::get('barang', [BarangController::class, 'index'])->name('barang.info_barang');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create_barang');
Route::post('barang', [BarangController::class, 'save'])->name('barang.save');
Route::get('barang/{id_perangkat}/edit', [BarangController::class, 'edit'])->name('barang.edit_barang');
Route::put('barang/{id_perangkat}', [BarangController::class, 'ubah'])->name('barang.ubah');
Route::delete('barang/{id_perangkat}', [BarangController::class, 'destroy'])->name('barang.destroy');
// --------------------------------------

// Route untuk input tipe
Route::get('tipe', [TipeController::class, 'index'])->name('tipe.info_tipe');
Route::get('tipe/create', [TipeController::class, 'create'])->name('tipe.create_tipe');
Route::post('tipe', [TipeController::class, 'save'])->name('tipe.save');
Route::get('tipe/{id_tipe}/edit', [TipeController::class, 'edit'])->name('tipe.edit_tipe');
Route::put('tipe/{id_tipe}', [TipeController::class, 'ubah'])->name('tipe.ubah');
Route::delete('tipe/{id_tipe}', [TipeController::class, 'destroy'])->name('tipe.destroy');
// --------------------------------------

// Route untuk input ssid
Route::get('ssid', [SsidController::class, 'index'])->name('ssid.info_ssid');
Route::get('ssid/create', [SsidController::class, 'create'])->name('ssid.create_ssid');
Route::post('ssid', [SsidController::class, 'save'])->name('ssid.save');
Route::get('ssid/{id_ssid}/edit', [SsidController::class, 'edit'])->name('ssid.edit_ssid');
Route::put('ssid/{id_ssid}', [SsidController::class, 'ubah'])->name('ssid.ubah');
Route::delete('ssid/{id_ssid}', [SsidController::class, 'destroy'])->name('ssid.destroy');
// --------------------------------------

// Route untuk input ruangan
Route::get('ruangan', [RuanganController::class, 'index'])->name('ruangan.info_ruangan');
Route::get('ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create_ruangan');
Route::post('ruangan', [RuanganController::class, 'save'])->name('ruangan.save');
Route::get('ruangan/{id_ruangan}/edit', [RuanganController::class, 'edit'])->name('ruangan.edit_ruangan');
Route::put('ruangan/{id_ruangan}', [RuanganController::class, 'ubah'])->name('ruangan.ubah');
Route::delete('ruangan/{id_ruangan}', [RuanganController::class, 'destroy'])->name('ruangan.destroy');
// --------------------------------------

// Route untuk input divisi
Route::get('divisi', [DivisiController::class, 'index'])->name('divisi.info_divisi');
Route::get('divisi/create', [DivisiController::class, 'create'])->name('divisi.create_divisi');
Route::post('divisi/create', [DivisiController::class, 'save'])->name('divisi.save');
Route::get('divisi/{id_divisi}/edit', [DivisiController::class, 'edit'])->name('divisi.edit_divisi');
Route::put('divisi/{id_divisi}', [DivisiController::class, 'ubah'])->name('divisi.ubah');
Route::delete('divisi/{id_divisi}', [DivisiController::class, 'destroy'])->name('divisi.destroy');
// --------------------------------------



Route::get('/cetak', function () {
    return view('cetak');
});
