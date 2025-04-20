@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus Playstation ini?</h1>

    <p><strong>ID: {{ $Playstation['Id_Playstation'] }}</strong></p>
    <p>Jenis: {{ $Playstation['Jenis'] }}</p>

    <form action="{{ url('/playstation/' . $Playstation['Id_Playstation']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
    </form>

    <a href="{{ route('playstation.show', $Playstation['Id_Playstation']) }}">Batal</a>
@endsection
