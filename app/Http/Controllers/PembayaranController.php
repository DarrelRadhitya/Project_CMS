<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('Pembayaran.index', ['Pembayaran' => Pembayaran::all()]);
    }

    public function show($id)
    {
        return view('Pembayaran.show', ['Pembayaran' => Pembayaran::find($id)]);
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function edit($id)
    {
        return view('Pembayaran.edit', ['Pembayaran' => Pembayaran::find($id)]);
    }

    public function delete($id)
    {
        return view('Pembayaran.delete', ['Pembayaran' => Pembayaran::find($id)]);
    }
}