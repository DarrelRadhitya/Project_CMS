@extends('layouts.app')

@section('title', 'Tambah Pelanggan')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center; margin-bottom: 30px;">Tambah Pelanggan Baru</h2>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('pelanggan.store') }}"
              style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
            @csrf

            <label for="nama" style="display: block; margin-bottom: 5px;">Nama:</label>
            <input type="text" name="nama" id="nama" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <label for="no_telepon" style="display: block; margin-bottom: 5px;">Nomor Telepon:</label>
            <input type="text" name="no_telepon" id="no_telepon" required
                   style="width: 100%; padding: 8px; margin-bottom: 15px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
            <input type="email" name="email" id="email" required
                   style="width: 100%; padding: 8px; margin-bottom: 20px;
                          border-radius: 5px; border: 1px solid #ccc;">

            <button type="submit"
                    style="padding: 10px 20px; background-color: #4CAF50; color: white;
                           border: none; border-radius: 5px; cursor: pointer; transition: 0.2s;"
                    onmouseover="this.style.backgroundColor='#45a049'"
                    onmouseout="this.style.backgroundColor='#4CAF50'"
                    onmousedown="this.style.transform='scale(0.97)'"
                    onmouseup="this.style.transform='scale(1)'"><strong>Tambah</strong></button>
        </form>

        <div style="margin-top: 20px; text-align: center;">
            <a href="{{ route('pelanggan.index') }}"
               style="text-decoration: none; color: #555; transition: 0.2s;"
               onmouseover="this.style.color='#000'"
               onmouseout="this.style.color='#555'">
               ← Kembali ke daftar
            </a>
        </div>
    </div>
@endsection
