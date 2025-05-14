@extends('layouts.app')

@section('title', 'Daftar Pelanggan')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h1 style="text-align: center; margin-bottom: 30px;">Daftar Pelanggan</h1>

        @if($pelanggans->isEmpty())
            <p style="text-align: center; color: #888;">Tidak ada pelanggan.</p>
        @else
            <ul style="list-style: none; padding: 0;">
                @foreach($pelanggans as $p)
                    <li style="padding: 10px 15px; margin-bottom: 10px; background-color: #f2f2f2; border-radius: 8px;">
                        <a href="{{ route('pelanggan.show', $p->id) }}"
                           style="text-decoration: none; color: #333; display: block; transition: 0.2s;"
                           onmouseover="this.style.backgroundColor='#ddd'"
                           onmouseout="this.style.backgroundColor='#f2f2f2'"
                           onmousedown="this.style.transform='scale(0.97)'"
                           onmouseup="this.style.transform='scale(1)'"><strong>{{ $p->nama }}</strong></a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('pelanggan.create') }}"
               style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white;
                      text-decoration: none; border-radius: 5px; transition: 0.2s;"
               onmouseover="this.style.backgroundColor='#45a049'"
               onmouseout="this.style.backgroundColor='#4CAF50'"
               onmousedown="this.style.transform='scale(0.97)'"
               onmouseup="this.style.transform='scale(1)'"><strong>+ Tambah Pelanggan</strong></a>
        </div>
    </div>
@endsection