@extends('layouts.app')

@section('title', 'Edit Data Playstation')

@section('content')
    <h1>Edit Data Playstation</h1>

    <form method="POST" action="/playstation/{{ $Playstation['Id_Playstation'] }}">
        @csrf
        @method('PUT')

        <label>Id Playstation:</label><br>
        <input type="text" name="Id_Playstation" value="{{ $Playstation['Id_Playstation'] }}"><br><br>

        <label>Jenis:</label><br>
        <input type="text" name="Jenis" value="{{ $Playstation['Jenis'] }}"><br><br>

        <label>Harga sewa per hari:</label><br>
        <input type="number" name="Harga_Sewa" value="{{ $Playstation['Harga_Sewa'] }}"><br><br>

        <label>Status:</label><br>
        <input type="text" name="Status" value="{{ $Playstation['Status'] }}"><br><br>

        <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
    </form>

    <br>
    <a href="{{ route('playstation.show', $Playstation['Id_Playstation']) }}">← Kembali ke detail</a>
@endsection
