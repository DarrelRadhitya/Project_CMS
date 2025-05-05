@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Transaksi Baru</h2>

    <form method="POST" action="{{ route('transaksi.store') }}" style="line-height: 2;">
        @csrf
        <label>Tanggal Pinjam: <input type="date" name="tanggal_pinjam" required></label><br>
        <label>Tanggal Kembali: <input type="date" name="tanggal_kembali" required></label><br>
        <label>Status: <input type="text" name="status" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('transaksi.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
