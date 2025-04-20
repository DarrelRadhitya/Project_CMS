@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
    <h1>Daftar Transaksi</h1>

    <ul>
        @forelse($Transaksi as $t)
            <li>
                <a href="/transaksi/{{ $t['Id_Transaksi'] }}">{{ $t['Id_Transaksi'] }}</a>
            </li>
        @empty
            <p>Tidak ada transaksi.</p>
        @endforelse
    </ul>

    <a href="/transaksi/create" style="display: inline-block; margin-top: 20px;">+ Tambah Transaksi</a>
    <br><br>
@endsection
