<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PlaystationController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('home');
});

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
