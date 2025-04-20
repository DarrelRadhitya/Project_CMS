@extends('layouts.app')

@section('title', 'Edit Data Transaksi')

@section('content')
    <h1>Edit Data Transaksi</h1>

    <form method="POST" action="/transaksi/{{ $Transaksi['Id_Transaksi'] }}">
        @csrf
        @method('PUT')

        <label>Id Transaksi:</label><br>
        <input type="text" name="Id_Transaksi" value="{{ $Transaksi['Id_Transaksi'] }}"><br><br>

        <label>Id Pelanggan:</label><br>
        <input type="text" name="Id_Pelanggan" value="{{ $Transaksi['Id_Pelanggan'] }}"><br><br>

        <label>Id Playstation:</label><br>
        <input type="text" name="Id_Playstation" value="{{ $Transaksi['Id_Playstation'] }}"><br><br>

        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="Tanggal_Pinjam" value="{{ $Transaksi['Tanggal_Pinjam'] }}"><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="Tanggal_Kembali" value="{{ $Transaksi['Tanggal_Kembali'] }}"><br><br>

        <label>Status:</label><br>
        <input type="text" name="Status" value="{{ $Transaksi['Status'] }}"><br><br>

        <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
    </form>

    <br>
    <a href="{{ route('transaksi.show', $Transaksi['Id_Transaksi']) }}">← Kembali ke detail</a>
@endsection
