@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
    <h1 style="text-align: center; font-size: 28px; font-weight: bold; margin-bottom: 30px;">Daftar Transaksi</h1>

<ul style="max-width: 600px; margin: 0 auto; padding: 0;">
    @forelse($transaksis as $t)
        <li style="list-style: none; background-color: #f3f3f3; padding: 15px 20px; margin-bottom: 15px; border-radius: 10px; font-weight: 600;">
            <a href="/transaksi/{{ $t['id'] }}" style="text-decoration: none; color: #000;">
                {{ $t['id'] }} - {{ $t['status'] }}
            </a>
        </li>
    @empty
        <p style="text-align: center; color: #888;">Tidak ada transaksi.</p>
    @endforelse
</ul>

<div style="text-align: center; margin-top: 30px;">
    <a href="/transaksi/create" style="display: inline-block; background-color: #28a745; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold;">
        + Tambah Transaksi
    </a>
</div>

@endsection
