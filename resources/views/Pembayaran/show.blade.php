@extends('layouts.app')

@section('title', 'Detail Pembayaran')

@section('content')
    <h2>Detail Pembayaran</h2>

    <p><strong>Jumlah Bayar:</strong> {{ $pembayaran->jumlah_bayar }}</p>
    <p><strong>Metode Pembayaran:</strong> {{ $pembayaran->metode_pembayaran }}</p>
    <p><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tanggal_pembayaran }}</p>

    <br>

    <a href="{{ route('pembayaran.edit', $pembayaran->id) }}">✏️ Edit</a> |
    <a href="{{ route('pembayaran.delete', $pembayaran->id) }}">🗑️ Hapus</a>

    <br><br>

    <a href="{{ route('pembayaran.index') }}">← Kembali ke daftar</a>
@endsection
