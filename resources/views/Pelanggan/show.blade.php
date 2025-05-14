@extends('layouts.app')

@section('title', 'Detail Pelanggan')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Detail Pelanggan</h2>

        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
            <p><strong>ID Pelanggan:</strong> {{ $pelanggan->id }}</p>
            <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $pelanggan->no_telepon }}</p>
            <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
        </div>

        <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
               style="padding: 10px 15px; background-color: #2196F3; color: white;
                      text-decoration: none; border-radius: 5px; transition: 0.2s;"
               onmouseover="this.style.backgroundColor='#1976D2'"
               onmouseout="this.style.backgroundColor='#2196F3'"
               onmousedown="this.style.transform='scale(0.97)'"
               onmouseup="this.style.transform='scale(1)'"><strong>✏️ Edit</strong></a>

            <a href="{{ route('pelanggan.delete', $pelanggan->id) }}"
               style="padding: 10px 15px; background-color: #f44336; color: white;
                      text-decoration: none; border-radius: 5px; transition: 0.2s;"
               onmouseover="this.style.backgroundColor='#d32f2f'"
               onmouseout="this.style.backgroundColor='#f44336'"
               onmousedown="this.style.transform='scale(0.97)'"
               onmouseup="this.style.transform='scale(1)'"><strong>🗑️ Hapus</strong></a>
        </div>

        <div style="margin-top: 30px;">
            <a href="{{ route('pelanggan.index') }}"
               style="text-decoration: none; color: #555; transition: 0.2s;"
               onmouseover="this.style.color='#000'"
               onmouseout="this.style.color='#555'">
               ← Kembali ke daftar
            </a>
        </div>
    </div>
@endsection