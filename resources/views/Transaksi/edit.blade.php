@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
    <h1>Edit Transaksi</h1>

    <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">
        @csrf
        @method('PUT')

        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tanggal_pinjam" value="{{ $transaksi->tanggal_pinjam }}"><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tanggal_kembali" value="{{ $transaksi->tanggal_kembali }}"><br><br>

        <label>Status:</label><br>
        <input type="text" name="status" value="{{ $transaksi->status }}"><br><br>

        <button style="margin-top: 10px;">Simpan</button>
    </form>

    <br>
    <a href="{{ route('transaksi.show', $transaksi->id) }}">← Kembali ke detail</a>
@endsection
