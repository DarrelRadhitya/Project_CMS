@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Detail Transaksi</h2>

    @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

<div style="max-width: 600px; margin: 0 auto;">
    <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
    <p><strong>ID Pelanggan:</strong> {{ $transaksi->id_pelanggan }}</p>
    <p><strong>ID Playstation:</strong> {{ $transaksi->id_playstation }}</p>
    <p><strong>Tanggal Pinjam:</strong> {{ $transaksi->tanggal_pinjam }}</p>
    <p><strong>Tanggal Kembali:</strong> {{ $transaksi->tanggal_kembali }}</p>
    <p><strong>Status:</strong> {{ $transaksi->status }}</p>

    <div style="margin-top: 20px;">
        <a href="{{ route('transaksi.edit', $transaksi->id) }}" style="display: inline-block; background-color: #ffc107; color: black; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">✏️ Edit</a>
        <a href="{{ route('transaksi.delete', $transaksi->id) }}" style="display: inline-block; background-color: #dc3545; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-left: 10px;">🗑️ Hapus</a>
    </div>

    <div style="margin-top: 30px;">
        <a href="{{ route('transaksi.index') }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">← Kembali ke daftar</a>
    </div>
</div>

@endsection
