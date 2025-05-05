@extends('layouts.app')

@section('title', 'Edit Data Playstation')

@section('content')
    <h1>Edit Data Playstation</h1>

    <form method="POST" action="{{ route('playstation.update', $playstation->id) }}">
        @csrf
        @method('PUT')

        <label>Jenis:</label><br>
        <input type="text" name="jenis" value="{{ $playstation->jenis }}"><br><br>

        <label>Harga sewa per hari:</label><br>
        <input type="number" name="harga_sewa" value="{{ $playstation->harga_sewa }}"><br><br>

        <label>Status:</label><br>
        <input type="text" name="status" value="{{ $playstation->status }}"><br><br>

        <button style="margin-top: 10px;">Simpan</button>
    </form>

    <br>
    <a href="{{ route('playstation.show', $playstation->id) }}">← Kembali ke detail</a>
@endsection
