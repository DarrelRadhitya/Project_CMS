@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;">
        <h1 style="color: #c0392b;">Yakin ingin menghapus pembayaran ini?</h1>

        <div style="margin: 30px 0; padding: 20px; background-color: #fceaea; border-radius: 10px;">
            <p><strong>ID Pembayaran:</strong> {{ $pembayaran->id }}</p>
            <p><strong>Tanggal Pembayaran:</strong> {{ $pembayaran->tanggal_pembayaran }}</p>
        </div>

        <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="padding: 10px 20px; background-color: #e74c3c; color: white;
                           border: none; border-radius: 5px; cursor: pointer;">
                Ya, Hapus
            </button>
        </form>

        <a href="{{ route('pembayaran.show', $pembayaran->id) }}"
           style="display: inline-block; margin-left: 15px; text-decoration: none;
                  color: #555; padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px;">
            Batal
        </a>
    </div>
@endsection
