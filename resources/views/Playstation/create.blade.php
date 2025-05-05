@extends('layouts.app')

@section('title', 'Tambah Playstation')

@section('content')
    <h2 style="margin-bottom: 16px;">Tambah Playstation Baru</h2>

    <form method="POST" action="{{ route('playstation.store') }}" style="line-height: 2;">
        @csrf
        <label>Jenis: <input type="text" name="jenis" required></label><br>
        <label>Harga Sewa: <input type="text" name="harga_sewa" required></label><br>
        <label>Status: <input type="text" name="status" required></label><br>
        <button type="submit" style="margin-top: 10px;">Tambah</button>
    </form>

    <a href="{{ route('playstation.index') }}" style="display: inline-block; margin-top: 20px;">← Kembali ke daftar</a>
@endsection
