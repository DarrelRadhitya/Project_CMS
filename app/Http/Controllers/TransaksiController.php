<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('Transaksi.index', ['Transaksi' => Transaksi::all()]);
    }

    public function show($id)
    {
        return view('Transaksi.show', ['Transaksi' => Transaksi::find($id)]);
    }

    public function create()
    {
        return view('Transaksi.create');
    }

    public function edit($id)
    {
        return view('Transaksi.edit', ['Transaksi' => Transaksi::find($id)]);
    }

    public function delete($id)
    {
        return view('Transaksi.delete', ['Transaksi' => Transaksi::find($id)]);
    }
}