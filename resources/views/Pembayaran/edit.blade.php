@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h1 style="text-align: center; margin-bottom: 30px;">Edit Pembayaran</h1>

        <form method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}"
              style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
            @csrf
            @method('PUT')

            <label for="id_transaksi" style="display: block; margin-bottom: 5px;">ID Transaksi:</label>
            <input type="number" name="id_transaksi" id="id_transaksi" value="{{ $pembayaran->id_transaksi }}" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

            <label for="jumlah_bayar" style="display: block; margin-bottom: 5px;">Jumlah Bayar:</label>
            <input type="text" name="jumlah_bayar" id="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}"
                   style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

            <label for="metode_pembayaran" style="display: block; margin-bottom: 5px;">Metode Pembayaran:</label>
            <input type="text" name="metode_pembayaran" id="metode_pembayaran" value="{{ $pembayaran->metode_pembayaran }}"
                   style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc;">

            <label for="tanggal_pembayaran" style="display: block; margin-bottom: 5px;">Tanggal Pembayaran:</label>
            <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" value="{{ $pembayaran->tanggal_pembayaran }}"
                   style="width: 100%; padding: 8px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #ccc;">

            <button type="submit"
                    style="padding: 10px 20px; background-color: #4CAF50; color: white;
                           border: none; border-radius: 5px; cursor: pointer;">
                Simpan
            </button>
        </form>

        <div style="margin-top: 20px;">
            <a href="{{ route('pembayaran.show', $pembayaran->id) }}" style="text-decoration: none; color: #555;">
                ← Kembali ke detail
            </a>
        </div>
    </div>
@endsection
