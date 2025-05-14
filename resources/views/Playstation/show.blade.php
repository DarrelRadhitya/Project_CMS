@extends('layouts.app')

@section('title', 'Detail Playstation')

@section('content')
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Detail Playstation</h2>

<div style="max-width: 600px; margin: 0 auto;">
    <p><strong>ID Playstation:</strong> {{ $playstation->id }}</p>
    <p><strong>Jenis:</strong> {{ $playstation->jenis }}</p>
    <p><strong>Harga Sewa:</strong> Rp{{ number_format($playstation->harga_sewa) }}</p>
    <p><strong>Status:</strong> {{ $playstation->status }}</p>

    <div style="margin-top: 20px;">
        <a href="{{ route('playstation.edit', $playstation->id) }}" style="display: inline-block; background-color: #ffc107; color: black; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold;">✏️ Edit</a>
        <a href="{{ route('playstation.delete', $playstation->id) }}" style="display: inline-block; background-color: #dc3545; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-left: 10px;">🗑️ Hapus</a>
    </div>

    <div style="margin-top: 30px;">
        <a href="{{ route('playstation.index') }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">← Kembali ke daftar</a>
    </div>
</div>

@endsection
