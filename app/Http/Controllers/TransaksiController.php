<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

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

        Transaksi::create([
            'id_pelanggan' => $request->input('id_pelanggan'),
            'id_playstation' => $request->input('id_playstation'),
            'tanggal_pinjam' => $request->input('tanggal_pinjam'),
            'tanggal_kembali' => $request->input('tanggal_kembali'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
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

        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update([
            'id_pelanggan' => $request->input('id_pelanggan'),
            'id_playstation' => $request->input('id_playstation'),
            'tanggal_pinjam' => $request->input('tanggal_pinjam'),
            'tanggal_kembali' => $request->input('tanggal_kembali'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('transaksi.show', $id)->with('success', 'Data transaksi berhasil diperbarui.');
    }

    public function delete($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.delete', compact('transaksi'));
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
    }
}