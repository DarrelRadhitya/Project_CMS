@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus pembayaran ini?</h1>

    <p><strong>{{ $pembayaran->id }}</strong></p>
    <p>{{ $pembayaran->tanggal_pembayaran }}</p>

    <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button style="margin-right: 10px;">Ya, hapus</button>
    </form>

    <a href="{{ route('pembayaran.show', $pembayaran->id) }}">Batal</a>
@endsection
