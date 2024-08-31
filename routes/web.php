<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController; // Menggunakan controller ReservasiController
use App\Http\Controllers\SuksesController; // Menggunakan controller SuksesController
use App\Http\Controllers\RekapController; // Menggunakan controller SuksesController

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
    return view('beranda');
})->name('beranda');

Route::get('/kamar', function () {
    return view('kamar');
})->name('kamar');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::resource('reservasi', ReservasiController::class);
Route::resource('sukses', SuksesController::class); // Mengatur resource route untuk SuksesController
Route::resource('rekap', RekapController::class); // Mengatur resource route untuk SuksesController

