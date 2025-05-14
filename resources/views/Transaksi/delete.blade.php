@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Yakin ingin menghapus transaksi ini?</h1>

<div style="max-width: 600px; margin: 0 auto;">
    <p><strong>ID transaksi:</strong> {{ $transaksi->id }}</p>
    <p><strong>Status:</strong> {{ $transaksi->status }}</p>

    <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button style="padding: 10px 15px; background-color: #dc3545; color: white; border: none; border-radius: 5px; margin-right: 10px;">Ya, hapus</button>
    </form>

    <a href="{{ route('transaksi.show', $transaksi->id) }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">Batal</a>
</div>

@endsection
