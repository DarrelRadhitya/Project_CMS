@extends('layouts.app')

@section('title', 'Detail Pelanggan')

@section('content')
    <h2>Detail Pelanggan</h2>

    <p><strong>Nama:</strong> {{ $Pelanggan['Nama'] }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $Pelanggan['Nomor_Telepon'] }}</p>
    <p><strong>Email:</strong> {{ $Pelanggan['Email'] }}</p>

    <br>

    <a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}/edit">✏️ Edit</a> |
    <a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}/delete">🗑️ Hapus</a>

    <br><br>

    <a href="/pelanggan">← Kembali ke daftar</a>
@endsection
