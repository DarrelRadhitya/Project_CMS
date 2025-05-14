@extends('layouts.app')

@section('title', 'Daftar Playstation')

@section('content')
    <h1 style="text-align: center; font-size: 28px; font-weight: bold; margin-bottom: 30px;">Daftar Playstation</h1>

<ul style="max-width: 600px; margin: 0 auto; padding: 0;">
    @forelse($playstations as $ps)
        <li style="list-style: none; background-color: #f3f3f3; padding: 15px 20px; margin-bottom: 15px; border-radius: 10px; font-weight: 600;">
            <a href="{{ route('playstation.show', $ps->id) }}" style="text-decoration: none; color: #000;">
                {{ $ps->jenis }} - Rp{{ number_format($ps->harga_sewa) }}
            </a>
        </li>
    @empty
        <p style="text-align: center; color: #888;">Tidak ada data playstation.</p>
    @endforelse
</ul>

<div style="text-align: center; margin-top: 30px;">
    <a href="{{ route('playstation.create') }}" style="display: inline-block; background-color: #28a745; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold;">
        + Tambah Playstation
    </a>
</div>

@endsection
