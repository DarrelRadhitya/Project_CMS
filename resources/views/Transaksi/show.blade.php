@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
    <h2>Detail Transaksi</h2>

    <p><strong>Id Transaksi:</strong> {{ $Transaksi['Id_Transaksi'] }}</p>
    <p><strong>Id Pelanggan:</strong> {{ $Transaksi['Id_Pelanggan'] }}</p>
    <p><strong>Id Playstation:</strong> {{ $Transaksi['Id_Playstation'] }}</p>
    <p><strong>Tanggal Pinjam:</strong> {{ $Transaksi['Tanggal_Pinjam'] }}</p>
    <p><strong>Tanggal Kembali:</strong> {{ $Transaksi['Tanggal_Kembali'] }}</p>
    <p><strong>Status:</strong> {{ $Transaksi['Status'] }}</p>

    <br>

    <a href="/transaksi/{{ $Transaksi['Id_Transaksi'] }}/edit">✏️ Edit</a> |
    <a href="/transaksi/{{ $Transaksi['Id_Transaksi'] }}/delete">🗑️ Hapus</a>

    <br><br>

    <a href="/transaksi">← Kembali ke daftar</a>
@endsection
