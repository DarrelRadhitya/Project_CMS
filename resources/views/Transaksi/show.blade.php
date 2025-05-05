@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
    <h2>Detail Transaksi</h2>

    <p><strong>Tanggal Pinjam:</strong> {{ $transaksi->tanggal_pinjam }}</p>
    <p><strong>Tanggal Kembali:</strong> {{ $transaksi->tanggal_kembali }}</p>
    <p><strong>Status:</strong> {{ $transaksi->status }}</p>

    <br>

    <a href="{{ route('transaksi.edit', $transaksi->id) }}">✏️ Edit</a> |
    <a href="{{ route('transaksi.delete', $transaksi->id) }}">🗑️ Hapus</a>

    <br><br>

    <a href="{{ route('transaksi.index') }}">← Kembali ke daftar</a>
@endsection
