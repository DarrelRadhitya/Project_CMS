<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        return view('Pelanggan.index', ['Pelanggan' => Pelanggan::all()]);
    }

    public function show($id)
    {
        return view('Pelanggan.show', ['Pelanggan' => Pelanggan::find($id)]);
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function edit($id)
    {
        return view('Pelanggan.edit', ['Pelanggan' => Pelanggan::find($id)]);
    }

    public function delete($id)
    {
        return view('Pelanggan.delete', ['Pelanggan' => Pelanggan::find($id)]);
    }
}