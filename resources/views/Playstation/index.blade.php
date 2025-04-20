@extends('layouts.app')

@section('title', 'Daftar Playstation')

@section('content')
    <h1>Daftar Playstation</h1>

    <ul>
        @forelse($Playstation as $ps)
            <li>
                <a href="/playstation/{{ $ps['Id_Playstation'] }}">
                    {{ $ps['Id_Playstation'] }} - {{ $ps['Jenis'] }}
                </a>
            </li>
        @empty
            <p>Tidak ada playstation.</p>
        @endforelse
    </ul>

    <a href="/playstation/create" style="display: inline-block; margin-top: 20px;">+ Tambah Playstation</a>
    <br><br>
@endsection
