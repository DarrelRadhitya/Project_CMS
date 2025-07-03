<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayaran.index', [
            'pembayarans' => Pembayaran::all()
        ]);
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:transaksis,id',
            'jumlah_bayar' => 'required|numeric',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_pembayaran' => 'required|date',
        ]);

        try {
            Pembayaran::create([
                'id_transaksi' => $request->input('id_transaksi'),
                'jumlah_bayar' => $request->input('jumlah_bayar'),
                'metode_pembayaran' => $request->input('metode_pembayaran'),
                'tanggal_pembayaran' => $request->input('tanggal_pembayaran'),
            ]);

            Log::info('Pembayaran berhasil ditambahkan.', [
                'id_transaksi' => $request->input('id_transaksi'),
                'jumlah_bayar' => $request->input('jumlah_bayar'),
            ]);

            return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Gagal menambahkan pembayaran: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan pembayaran.');
        }
    }

    public function show($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            Log::info("Menampilkan detail pembayaran ID: $id");
            return view('pembayaran.show', compact('pembayaran'));
        } catch (ModelNotFoundException $e) {
            Log::error("Data pembayaran ID $id tidak ditemukan.");
            return redirect()->route('pembayaran.index')->with('error', 'Data pembayaran tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            Log::info("Mengakses halaman edit pembayaran ID: $id");
            return view('pembayaran.edit', compact('pembayaran'));
        } catch (ModelNotFoundException $e) {
            Log::error("Data pembayaran untuk diedit ID $id tidak ditemukan.");
            return redirect()->route('pembayaran.index')->with('error', 'Data pembayaran tidak ditemukan.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:transaksis,id',
            'jumlah_bayar' => 'required|numeric',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_pembayaran' => 'required|date',
        ]);

        try {
            $pembayaran = Pembayaran::findOrFail($id);

            $pembayaran->update([
                'id_transaksi' => $request->input('id_transaksi'),
                'jumlah_bayar' => $request->input('jumlah_bayar'),
                'metode_pembayaran' => $request->input('metode_pembayaran'),
                'tanggal_pembayaran' => $request->input('tanggal_pembayaran'),
            ]);

            Log::info('Data pembayaran diperbarui.', ['id' => $id]);
            return redirect()->route('pembayaran.show', $id)->with('success', 'Data pembayaran berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal memperbarui data. Pembayaran ID $id tidak ditemukan.");
            return redirect()->route('pembayaran.index')->with('error', 'Data pembayaran tidak ditemukan.');
        }
    }

    public function delete($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            Log::info("Mengakses halaman konfirmasi hapus pembayaran ID: $id");
            return view('pembayaran.delete', compact('pembayaran'));
        } catch (ModelNotFoundException $e) {
            Log::error("Data pembayaran untuk dihapus (view) ID $id tidak ditemukan.");
            return redirect()->route('pembayaran.index')->with('error', 'Data pembayaran tidak ditemukan.');
        }
    }

    public function destroy($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            $pembayaran->delete();
            Log::info("Data pembayaran ID $id berhasil dihapus.");
            return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            Log::error("Gagal menghapus data. Pembayaran ID $id tidak ditemukan.");
            return redirect()->route('pembayaran.index')->with('error', 'Data pembayaran tidak ditemukan.');
        }
    }
}
