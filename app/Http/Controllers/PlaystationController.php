<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class PlaystationController extends Controller
{
    public function index()
    {
        return view('playstation.index', [
            'playstations' => Playstation::all()
        ]);
    }

    public function create()
    {
        return view('playstation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'status' => 'required|in:tersedia,disewakan',
        ]);

        try {
            Playstation::create([
                'jenis' => $request->input('jenis'),
                'harga_sewa' => $request->input('harga_sewa'),
                'status' => $request->input('status'),
            ]);

            Log::info('Data playstation berhasil ditambahkan.', [
                'jenis' => $request->input('jenis'),
                'status' => $request->input('status')
            ]);

            return redirect()->route('playstation.index')->with('success', 'Data playstation berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Gagal menambahkan data playstation: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show($id)
    {
        try {
            $playstation = Playstation::findOrFail($id);
            Log::info("Menampilkan detail playstation ID: $id");
            return view('playstation.show', compact('playstation'));
        } catch (ModelNotFoundException $e) {
            Log::error("Data playstation tidak ditemukan. ID: $id");
            return redirect()->route('playstation.index')->with('error', 'Data playstation tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        try {
            $playstation = Playstation::findOrFail($id);
            Log::info("Mengakses halaman edit playstation ID: $id");
            return view('playstation.edit', compact('playstation'));
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal mengakses halaman edit. Playstation ID $id tidak ditemukan.");
            return redirect()->route('playstation.index')->with('error', 'Data playstation tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'status' => 'required|in:tersedia,disewakan',
        ]);

        try {
            $playstation = Playstation::findOrFail($id);
            $playstation->update([
                'jenis' => $request->input('jenis'),
                'harga_sewa' => $request->input('harga_sewa'),
                'status' => $request->input('status'),
            ]);

            Log::info("Data playstation diperbarui.", ['id' => $id]);
            return redirect()->route('playstation.show', $id)->with('success', 'Data playstation berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal memperbarui. Playstation ID $id tidak ditemukan.");
            return redirect()->route('playstation.index')->with('error', 'Data playstation tidak ditemukan.');
        }
    }

    public function delete($id)
    {
        try {
            $playstation = Playstation::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus playstation ID: $id");
            return view('playstation.delete', compact('playstation'));
        } catch (ModelNotFoundException $e) {
            Log::error("Halaman hapus gagal dibuka. Playstation ID $id tidak ditemukan.");
            return redirect()->route('playstation.index')->with('error', 'Data playstation tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $playstation = Playstation::findOrFail($id);
            $playstation->delete();
            Log::info("Data playstation berhasil dihapus. ID: $id");
            return redirect()->route('playstation.index')->with('success', 'Data playstation berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal menghapus. Playstation ID $id tidak ditemukan.");
            return redirect()->route('playstation.index')->with('error', 'Data playstation tidak ditemukan.');
        }
    }
}
