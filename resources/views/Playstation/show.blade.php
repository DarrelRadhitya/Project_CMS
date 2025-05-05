@extends('layouts.app')

@section('title', 'Detail Playstation')

@section('content')
    <h2>Detail Playstation</h2>

    <p><strong>Jenis:</strong> {{ $playstation['jenis'] }}</p>
    <p><strong>Harga sewa per hari:</strong> {{ $playstation['harga_sewa'] }}</p>
    <p><strong>Status:</strong> {{ $playstation['status'] }}</p>

    <br>

    <a href="/playstation/{{ $playstation['id'] }}/edit">✏️ Edit</a> |
    <a href="/playstation/{{ $playstation['id'] }}/delete">🗑️ Hapus</a>

    <br><br>

    <a href="/playstation">← Kembali ke daftar</a>
@endsection
