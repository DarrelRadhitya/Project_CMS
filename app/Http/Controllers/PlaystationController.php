<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;

class PlaystationController extends Controller
{
    // Menampilkan daftar semua playstation
    public function index()
    {
        return view('playstation.index', [
            'playstations' => Playstation::all()
        ]);
    }

    // Menampilkan form tambah playstation
    public function create()
    {
        return view('playstation.create');
    }

    // Menyimpan data playstation baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        Playstation::create([
            'jenis' => $request->input('jenis'),
            'harga_sewa' => $request->input('harga_sewa'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('playstation.index');
    }

    // Menampilkan detail playstation
    public function show($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.show', compact('playstation'));
    }

    // Menampilkan form edit playstation
    public function edit($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.edit', compact('playstation'));
    }

    // Memproses update data playstation
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $playstation = Playstation::findOrFail($id);

        $playstation->update([
            'jenis' => $request->input('jenis'),
            'harga_sewa' => $request->input('harga_sewa'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('playstation.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.delete', compact('playstation'));
    }

    // Menghapus data playstation
    public function destroy($id)
    {
        $playstation = Playstation::findOrFail($id);
        $playstation->delete();

        return redirect()->route('playstation.index');
    }
}