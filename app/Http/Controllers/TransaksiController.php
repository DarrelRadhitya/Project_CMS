<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.index', [
            'transaksis' => Transaksi::all()
        ]);
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'id_playstation' => 'required|exists:playstations,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:lunas,dp',
        ]);

        try {
            Transaksi::create([
                'id_pelanggan' => $request->input('id_pelanggan'),
                'id_playstation' => $request->input('id_playstation'),
                'tanggal_pinjam' => $request->input('tanggal_pinjam'),
                'tanggal_kembali' => $request->input('tanggal_kembali'),
                'status' => $request->input('status'),
            ]);

            Log::info('Transaksi baru berhasil ditambahkan.', [
                'id_pelanggan' => $request->input('id_pelanggan'),
                'id_playstation' => $request->input('id_playstation')
            ]);

            return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Gagal menambahkan transaksi: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan transaksi.');
        }
    }

    public function show($id)
    {
        try {
            $transaksi = Transaksi::findOrFail($id);
            Log::info("Menampilkan detail transaksi ID: $id");
            return view('transaksi.show', compact('transaksi'));
        } catch (ModelNotFoundException $e) {
            Log::error("Transaksi ID $id tidak ditemukan.");
            return redirect()->route('transaksi.index')->with('error', 'Data transaksi tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        try {
            $transaksi = Transaksi::findOrFail($id);
            Log::info("Mengakses halaman edit transaksi ID: $id");
            return view('transaksi.edit', compact('transaksi'));
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal mengakses halaman edit transaksi. ID $id tidak ditemukan.");
            return redirect()->route('transaksi.index')->with('error', 'Data transaksi tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id',
            'id_playstation' => 'required|exists:playstations,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:lunas,dp',
        ]);

        try {
            $transaksi = Transaksi::findOrFail($id);

            $transaksi->update([
                'id_pelanggan' => $request->input('id_pelanggan'),
                'id_playstation' => $request->input('id_playstation'),
                'tanggal_pinjam' => $request->input('tanggal_pinjam'),
                'tanggal_kembali' => $request->input('tanggal_kembali'),
                'status' => $request->input('status'),
            ]);

            Log::info("Transaksi ID $id berhasil diperbarui.");
            return redirect()->route('transaksi.show', $id)->with('success', 'Data transaksi berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal memperbarui transaksi. ID $id tidak ditemukan.");
            return redirect()->route('transaksi.index')->with('error', 'Data transaksi tidak ditemukan.');
        }
    }

    public function delete($id)
    {
        try {
            $transaksi = Transaksi::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus transaksi ID: $id");
            return view('transaksi.delete', compact('transaksi'));
        } catch (ModelNotFoundException $e) {
            Log::error("Halaman hapus transaksi gagal dibuka. ID $id tidak ditemukan.");
            return redirect()->route('transaksi.index')->with('error', 'Data transaksi tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $transaksi = Transaksi::findOrFail($id);
            $transaksi->delete();

            Log::info("Transaksi ID $id berhasil dihapus.");
            return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal menghapus transaksi. ID $id tidak ditemukan.");
            return redirect()->route('transaksi.index')->with('error', 'Data transaksi tidak ditemukan.');
        }
    }
}
