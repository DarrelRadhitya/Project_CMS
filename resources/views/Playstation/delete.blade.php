@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus Playstation ini?</h1>

    <p><strong>ID: {{ $playstation['id'] }}</strong></p>
    <p>Jenis: {{ $playstation['jenis'] }}</p>

    <form action="{{ route('playstation.destroy', $playstation->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button style="margin-right: 10px;">Ya, hapus</button>
    </form>

    <a href="{{ route('playstation.show', $playstation->id) }}">Batal</a>
@endsection
