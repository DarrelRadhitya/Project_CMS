@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content')
    <h1>Edit Data Pembayaran</h1>

    <form method="POST" action="/pembayaran/{{ $Pembayaran['Id_Pembayaran'] }}">
        @csrf
        @method('PUT')

        <label>Id Pembayaran:</label><br>
        <input type="text" name="Id_Pembayaran" value="{{ $Pembayaran['Id_Pembayaran'] }}"><br><br>

        <label>Id Transaksi:</label><br>
        <input type="text" name="Id_Transaksi" value="{{ $Pembayaran['Id_Transaksi'] }}"><br><br>

        <label>Jumlah Bayar:</label><br>
        <input type="number" name="Jumlah_Bayar" value="{{ $Pembayaran['Jumlah_Bayar'] }}"><br><br>

        <label>Metode Pembayaran:</label><br>
        <input type="text" name="Metode_Pembayaran" value="{{ $Pembayaran['Metode_Pembayaran'] }}"><br><br>

        <label>Tanggal Pembayaran:</label><br>
        <input type="date" name="Tanggal_Pembayaran" value="{{ $Pembayaran['Tanggal_Pembayaran'] }}"><br><br>

        <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
    </form>

    <br>
    <a href="{{ route('pembayaran.show', $Pembayaran['Id_Pembayaran']) }}">← Kembali ke detail</a>
@endsection
