@extends('layouts.app')

@section('title', 'Tambah Pembayaran')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Pembayaran Baru</h2>

    <form method="POST" action="{{ route('pembayaran.store') }}" style="line-height: 2;">
        @csrf
        <label>Jumlah Bayar: <input type="text" name="jumlah_bayar" required></label><br>
        <label>Metode Pembayaran: <input type="text" name="metode_pembayaran" required></label><br>
        <label>Tanggal Pembayaran: <input type="date" name="tanggal_pembayaran" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('pembayaran.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
