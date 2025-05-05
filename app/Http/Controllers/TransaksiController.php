<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    // Menampilkan daftar semua transaksi
    public function index()
    {
        return view('transaksi.index', [
            'transaksis' => Transaksi::all()
        ]);
    }

    // Menampilkan form tambah transaksi
    public function create()
    {
        return view('transaksi.create');
    }

    // Menyimpan data transaksi baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        Transaksi::create([
            'tanggal_pinjam' => $request->input('tanggal_pinjam'),
            'tanggal_kembali' => $request->input('tanggal_kembali'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('transaksi.index');
    }

    // Menampilkan detail transaksi
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    // Menampilkan form edit transaksi
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    // Memproses update data transaksi
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'status' => 'required|string|max:255'
        ]);

        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update([
            'tanggal_pinjam' => $request->input('tanggal_pinjam'),
            'tanggal_kembali' => $request->input('tanggal_kembali'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('transaksi.show', $id);
    }

    // Menampilkan halaman konfirmasi hapus
    public function delete($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.delete', compact('transaksi'));
    }

    // Menghapus data transaksi
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index');
    }
}