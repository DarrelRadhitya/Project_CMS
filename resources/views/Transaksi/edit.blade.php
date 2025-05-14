@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
    <h1 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Edit Transaksi</h1>

<form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}" style="max-width: 600px; margin: 0 auto;">
    @csrf
    @method('PUT')

    <label>ID Pelanggan:</label><br>
    <input type="number" name="id_pelanggan" value="{{ $transaksi->id_pelanggan }}" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>ID Playstation:</label><br>
    <input type="number" name="id_playstation" value="{{ $transaksi->id_playstation }}" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tanggal_pinjam" value="{{ $transaksi->tanggal_pinjam }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tanggal_kembali" value="{{ $transaksi->tanggal_kembali }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Status:</label><br>
    <input type="text" name="status" value="{{ $transaksi->status }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 6px;">Simpan</button>
</form>

<div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('transaksi.show', $transaksi->id) }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">← Kembali ke detail</a>
</div>

@endsection
