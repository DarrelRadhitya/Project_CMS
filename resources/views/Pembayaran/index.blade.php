@extends('layouts.app')

@section('title', 'Daftar Pembayaran')

@section('content')
    <h1>Daftar Pembayaran</h1>

    <ul>
        @forelse($pembayarans as $b)
            <li>
                <a href="/pembayaran/{{ $b['id'] }}">
                    {{ $b['id'] }} - {{ $b['tanggal_pembayaran'] }}
                </a>
            </li>
        @empty
            <p>Tidak ada pembayaran.</p>
        @endforelse
    </ul>

    <a href="/pembayaran/create" style="display: inline-block; margin-top: 20px;">+ Tambah Pembayaran</a>
    <br><br>
@endsection
