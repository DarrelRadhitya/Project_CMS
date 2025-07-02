<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PlaystationController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;

// Halaman Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman setelah login
use App\Http\Controllers\DashboardController;
Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');

// Pelanggan
Route::resource('pelanggan', PelangganController::class);
Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'delete'])->name('pelanggan.delete');

// Pembayaran
Route::resource('pembayaran', PembayaranController::class);
Route::get('/pembayaran/{id}/delete', [PembayaranController::class, 'delete'])->name('pembayaran.delete');

// Playstation
Route::resource('playstation', PlaystationController::class);
Route::get('/playstation/{id}/delete', [PlaystationController::class, 'delete'])->name('playstation.delete');

// Transaksi
Route::resource('transaksi', TransaksiController::class);
Route::get('/transaksi/{id}/delete', [TransaksiController::class, 'delete'])->name('transaksi.delete');

// Middleware untuk check age
Route::get('/penyewaan-playstation', function () {
    return "Selamat datang di halaman Penyewaan Playstation!";
})->middleware('check.age');

// images
Route::get('/upload', [ImageController::class, 'create']);
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');