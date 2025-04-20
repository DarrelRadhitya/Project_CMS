@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus pelanggan ini?</h1>

    <p><strong>{{ $Pelanggan['Nama'] }}</strong></p>
    <p>{{ $Pelanggan['Email'] }}</p>

    <form action="{{ url('/pelanggan/' . $Pelanggan['Id_Pelanggan']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
    </form>

    <a href="{{ route('pelanggan.show', $Pelanggan['Id_Pelanggan']) }}">Batal</a>
@endsection
