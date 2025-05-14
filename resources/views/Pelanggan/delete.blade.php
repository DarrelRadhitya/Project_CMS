@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;">
        <h1 style="color: #c0392b;">Yakin ingin menghapus pelanggan ini?</h1>

        <div style="margin: 30px 0; padding: 20px; background-color: #fceaea; border-radius: 10px;">
            <p><strong>ID Pelanggan:</strong> {{ $pelanggan->id }}</p>
            <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
        </div>

        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="padding: 10px 20px; background-color: #e74c3c; color: white;
                           border: none; border-radius: 5px; cursor: pointer; transition: 0.2s;"
                    onmouseover="this.style.backgroundColor='#c0392b'"
                    onmouseout="this.style.backgroundColor='#e74c3c'"
                    onmousedown="this.style.transform='scale(0.97)'"
                    onmouseup="this.style.transform='scale(1)'"><strong>Ya, Hapus</strong></button>
        </form>

        <a href="{{ route('pelanggan.show', $pelanggan->id) }}"
           style="display: inline-block; margin-left: 15px; text-decoration: none;
                  color: #555; padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; transition: 0.2s;"
           onmouseover="this.style.backgroundColor='#eee'"
           onmouseout="this.style.backgroundColor='transparent'"
           onmousedown="this.style.transform='scale(0.97)'"
           onmouseup="this.style.transform='scale(1)'"><strong>Batal</strong></a>
    </div>
@endsection