@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus transaksi ini?</h1>

    <p><strong>ID: {{ $Transaksi['Id_Transaksi'] }}</strong></p>

    <form action="{{ url('/transaksi/' . $Transaksi['Id_Transaksi']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
    </form>

    <a href="{{ route('transaksi.show', $Transaksi['Id_Transaksi']) }}">Batal</a>
@endsection
