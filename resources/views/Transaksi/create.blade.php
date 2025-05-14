@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Tambah Transaksi Baru</h2>

<form method="POST" action="{{ route('transaksi.store') }}" style="max-width: 600px; margin: 0 auto;">
    @csrf
    <label>ID Pelanggan:</label><br>
    <input type="number" name="id_pelanggan" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>ID Playstation:</label><br>
    <input type="number" name="id_playstation" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tanggal_pinjam" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tanggal_kembali" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Status:</label><br>
    <input type="text" name="status" required style="width: 100%; padding: 10px; margin-bottom: 20px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 6px;">Tambah</button>
</form>

<div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('transaksi.index') }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">← Kembali ke daftar</a>
</div>

@endsection
