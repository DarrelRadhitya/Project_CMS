@extends('layouts.app')

@section('title', 'Detail Playstation')

@section('content')
    <h2>Detail Playstation</h2>

    <p><strong>Id Playstation:</strong> {{ $Playstation['Id_Playstation'] }}</p>
    <p><strong>Jenis:</strong> {{ $Playstation['Jenis'] }}</p>
    <p><strong>Harga sewa per hari:</strong> {{ $Playstation['Harga_Sewa'] }}</p>
    <p><strong>Status:</strong> {{ $Playstation['Status'] }}</p>

    <br>

    <a href="/playstation/{{ $Playstation['Id_Playstation'] }}/edit">✏️ Edit</a> |
    <a href="/playstation/{{ $Playstation['Id_Playstation'] }}/delete">🗑️ Hapus</a>

    <br><br>

    <a href="/playstation">← Kembali ke daftar</a>
@endsection
