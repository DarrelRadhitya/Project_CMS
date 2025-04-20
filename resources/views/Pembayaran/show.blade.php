@extends('layouts.app')

@section('title', 'Detail Pembayaran')

@section('content')
    <h2>Detail Pembayaran</h2>

    <p><strong>Id Pembayaran:</strong> {{ $Pembayaran['Id_Pembayaran'] }}</p>
    <p><strong>Id Transaksi:</strong> {{ $Pembayaran['Id_Transaksi'] }}</p>
    <p><strong>Jumlah Bayar:</strong> {{ $Pembayaran['Jumlah_Bayar'] }}</p>
    <p><strong>Metode Pembayaran:</strong> {{ $Pembayaran['Metode_Pembayaran'] }}</p>
    <p><strong>Tanggal Pembayaran:</strong> {{ $Pembayaran['Tanggal_Pembayaran'] }}</p>

    <br>

    <a href="/pembayaran/{{ $Pembayaran['Id_Pembayaran'] }}/edit">✏️ Edit</a> |
    <a href="/pembayaran/{{ $Pembayaran['Id_Pembayaran'] }}/delete">🗑️ Hapus</a>

    <br><br>

    <a href="/pembayaran">← Kembali ke daftar</a>
@endsection
