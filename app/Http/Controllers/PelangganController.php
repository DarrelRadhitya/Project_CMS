<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.index', [
            'pelanggans' => Pelanggan::all()
        ]);
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:pelanggans,email|max:255',
        ]);

        Pelanggan::create([
            'nama' => $request->input('nama'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:pelanggans,email,' . $id . '|max:255',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->update([
            'nama' => $request->input('nama'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('pelanggan.show', $id)->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.delete', compact('pelanggan'));
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus.');
    }
}
