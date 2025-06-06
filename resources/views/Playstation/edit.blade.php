@extends('layouts.app')

@section('title', 'Detail Playstation')

@section('content')
    <h2 style="text-align: center; font-size: 24px; margin-bottom: 25px;">Edit Playstation</h2>

<form method="POST" action="{{ route('playstation.update', $playstation->id) }}" style="max-width: 600px; margin: 0 auto;">
    @csrf
    @method('PUT')

    <label>Jenis:</label><br>
    <input type="text" name="jenis" value="{{ $playstation->jenis }}" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Harga Sewa:</label><br>
    <input type="number" name="harga_sewa" value="{{ $playstation->harga_sewa }}" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <label>Status:</label><br>
    <input type="text" name="status" value="{{ $playstation->status }}" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"><br>

    <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 6px;">Simpan</button>
</form>

<div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('playstation.show', $playstation->id) }}" style="display: inline-block; background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">← Kembali ke detail</a>
</div>
@endsection
