@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content')
    <h1>Edit Pembayaran</h1>

    <form method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}">
        @csrf
        @method('PUT')

        <label>Jumlah Bayar:</label><br>
        <input type="text" name="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}"><br><br>

        <label>Metode Pembayaran:</label><br>
        <input type="text" name="metode_pembayaran" value="{{ $pembayaran->metode_pembayaran }}"><br><br>

        <label>Tanggal Pembayaran:</label><br>
        <input type="date" name="tanggal_pembayaran" value="{{ $pembayaran->tanggal_pembayaran }}"><br><br>

        <button style="margin-top: 10px;">Simpan</button>
    </form>

    <br>
    <a href="{{ route('pembayaran.show', $pembayaran->id) }}">← Kembali ke detail</a>
@endsection
