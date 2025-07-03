<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

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

        try {
            Pelanggan::create([
                'nama' => $request->input('nama'),
                'no_telepon' => $request->input('no_telepon'),
                'email' => $request->input('email'),
            ]);

            Log::info('Data pelanggan berhasil disimpan.', [
                'nama' => $request->input('nama'),
                'email' => $request->input('email')
            ]);

            return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error menyimpan data pelanggan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show($id)
    {
        try {
            $pelanggan = Pelanggan::findOrFail($id);
            Log::info('Menampilkan detail pelanggan ID: ' . $id);
            return view('pelanggan.show', compact('pelanggan'));
        } catch (ModelNotFoundException $e) {
            Log::error('Gagal menampilkan detail pelanggan. ID tidak ditemukan: ' . $id);
            return redirect()->route('pelanggan.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        try {
            $pelanggan = Pelanggan::findOrFail($id);
            Log::info('Mengakses halaman edit pelanggan ID: ' . $id);
            return view('pelanggan.edit', compact('pelanggan'));
        } catch (ModelNotFoundException $e) {
            Log::error('Gagal mengakses edit pelanggan. ID tidak ditemukan: ' . $id);
            return redirect()->route('pelanggan.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
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

            Log::info('Data pelanggan diperbarui.', ['id' => $id]);
            return redirect()->route('pelanggan.show', $id)->with('success', 'Data pelanggan berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            Log::error('Gagal memperbarui data. Pelanggan ID tidak ditemukan: ' . $id);
            return redirect()->route('pelanggan.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }
    }

    public function delete($id)
    {
        try {
            $pelanggan = Pelanggan::findOrFail($id);
            Log::info('Mengakses halaman konfirmasi hapus pelanggan ID: ' . $id);
            return view('pelanggan.delete', compact('pelanggan'));
        } catch (ModelNotFoundException $e) {
            Log::error('Gagal mengakses halaman hapus. Pelanggan ID tidak ditemukan: ' . $id);
            return redirect()->route('pelanggan.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $pelanggan = Pelanggan::findOrFail($id);
            $pelanggan->delete();

            Log::info('Data pelanggan berhasil dihapus.', ['id' => $id]);
            return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            Log::error('Gagal menghapus data. Pelanggan ID tidak ditemukan: ' . $id);
            return redirect()->route('pelanggan.index')->with('error', 'Data pelanggan tidak ditemukan.');
        }
    }
}
