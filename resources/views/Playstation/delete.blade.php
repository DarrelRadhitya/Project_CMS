@extends('layouts.app')

@section('title', 'Konfirmasi Hapus Playstation')

@section('content')
    <h1 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Yakin ingin menghapus playstation ini?</h1>

<div style="max-width: 600px; margin: 0 auto;">
    <p><strong>ID Playstation:</strong> {{ $playstation->id }}</p>
    <p><strong>Jenis:</strong> {{ $playstation->jenis }}</p>

    <form action="{{ route('playstation.destroy', $playstation->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button style="padding: 10px 15px; background-color: #dc3545; color: white; border: none; border-radius: 5px;">Ya, Hapus</button>
    </form>

    <br><br>
    <a href="{{ route('playstation.show', $playstation->id) }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">Batal</a>
</div>

@endsection
