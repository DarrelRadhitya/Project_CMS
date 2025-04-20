@extends('layouts.app')

@section('title', 'Edit Pelanggan')

@section('content')
    <h1>Edit Pelanggan</h1>

    <form method="POST" action="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="Nama" value="{{ $Pelanggan['Nama'] }}"><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="number" name="Nomor_Telepon" value="{{ $Pelanggan['Nomor_Telepon'] }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="Email" value="{{ $Pelanggan['Email'] }}"><br><br>

        <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
    </form>

    <br>
    <a href="{{ route('pelanggan.show', $Pelanggan['Id_Pelanggan']) }}">← Kembali ke detail</a>
@endsection
