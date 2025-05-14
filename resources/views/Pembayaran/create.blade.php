@extends('layouts.app')

@section('title', 'Tambah Pembayaran')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Tambah Pembayaran Baru</h2>

        <form method="POST" action="{{ route('pembayaran.store') }}"
              style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
            @csrf

            <label for="id_transaksi" style="display: block; margin-bottom: 5px;">ID Transaksi:</label>
            <input type="number" name="id_transaksi" id="id_transaksi" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <label for="jumlah_bayar" style="display: block; margin-bottom: 5px;">Jumlah Bayar:</label>
            <input type="text" name="jumlah_bayar" id="jumlah_bayar" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <label for="metode_pembayaran" style="display: block; margin-bottom: 5px;">Metode Pembayaran:</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <label for="tanggal_pembayaran" style="display: block; margin-bottom: 5px;">Tanggal Pembayaran:</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" required
                   style="width: 100%; padding: 8px; margin-bottom: 20px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <button type="submit"
                    style="padding: 10px 20px; background-color: #4CAF50; color: white;
                           border: none; border-radius: 5px; cursor: pointer;">
                Tambah
            </button>
        </form>

        <div style="margin-top: 20px; text-align: center;">
            <a href="{{ route('pembayaran.index') }}"
               style="text-decoration: none; color: #555;">
                ← Kembali ke daftar
            </a>
        </div>
    </div>
@endsection