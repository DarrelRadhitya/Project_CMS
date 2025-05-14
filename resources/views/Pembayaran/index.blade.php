@extends('layouts.app')

@section('title', 'Daftar Pembayaran')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h1 style="text-align: center; margin-bottom: 30px;">Daftar Pembayaran</h1>

        @if($pembayarans->isEmpty())
            <p style="text-align: center; color: #888;">Tidak ada pembayaran.</p>
        @else
            <ul style="list-style: none; padding: 0;">
                @foreach($pembayarans as $b)
                    <li style="padding: 10px 15px; margin-bottom: 10px; background-color: #f2f2f2; border-radius: 8px;">
                        <a href="{{ route('pembayaran.show', $b->id) }}" style="text-decoration: none; color: #333; display: block;">
                            {{ $b->id }} - {{ $b->metode_pembayaran }} - Rp {{ number_format($b->jumlah_bayar) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('pembayaran.create') }}"
               style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white;
                      text-decoration: none; border-radius: 5px;">
                + Tambah Pembayaran
            </a>
        </div>
    </div>
@endsection