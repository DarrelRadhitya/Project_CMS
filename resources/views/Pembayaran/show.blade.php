@extends('layouts.app')

@section('title', 'Detail Pembayaran')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Detail Pembayaran</h2>

        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
            <p><strong>ID Pembayaran:</strong> {{ $pembayaran->id }}</p>
            <p><strong>ID Transaksi:</strong> {{ $pembayaran->id_transaksi }}</p>
            <p><strong>Jumlah Bayar:</strong> Rp {{ number_format($pembayaran->jumlah_bayar) }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $pembayaran->metode_pembayaran }}</p>
            <p><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tanggal_pembayaran }}</p>
        </div>

        <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="{{ route('pembayaran.edit', $pembayaran->id) }}"
               style="padding: 10px 15px; background-color: #2196F3; color: white;
                      text-decoration: none; border-radius: 5px;">
                ✏️ Edit
            </a>

            <a href="{{ route('pembayaran.delete', $pembayaran->id) }}"
               style="padding: 10px 15px; background-color: #f44336; color: white;
                      text-decoration: none; border-radius: 5px;">
                🗑️ Hapus
            </a>
        </div>

        <div style="margin-top: 30px;">
            <a href="{{ route('pembayaran.index') }}"
               style="text-decoration: none; color: #555;">← Kembali ke daftar</a>
        </div>
    </div>
@endsection