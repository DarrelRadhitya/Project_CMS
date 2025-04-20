@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus pembayaran ini?</h1>

    <p><strong>ID: {{ $Pembayaran['Id_Pembayaran'] }}</strong></p>
    <p>Tanggal Pembayaran: {{ $Pembayaran['Tanggal_Pembayaran'] }}</p>

    <form action="{{ url('/pembayaran/' . $Pembayaran['Id_Pembayaran']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
    </form>

    <a href="{{ route('pembayaran.show', $Pembayaran['Id_Pembayaran']) }}">Batal</a>
@endsection
