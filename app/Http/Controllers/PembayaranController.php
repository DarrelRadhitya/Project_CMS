<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

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

        Pembayaran::create([
            'id_transaksi' => $request->input('id_transaksi'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
            'metode_pembayaran' => $request->input('metode_pembayaran'),
            'tanggal_pembayaran' => $request->input('tanggal_pembayaran'),
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pembayaran.show', compact('pembayaran'));
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:transaksis,id',
            'jumlah_bayar' => 'required|numeric',
            'metode_pembayaran' => 'required|in:cash,transfer',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'id_transaksi' => $request->input('id_transaksi'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
            'metode_pembayaran' => $request->input('metode_pembayaran'),
            'tanggal_pembayaran' => $request->input('tanggal_pembayaran'),
        ]);

        return redirect()->route('pembayaran.show', $id)->with('success', 'Data pembayaran berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pembayaran.delete', compact('pembayaran'));
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil dihapus.');
    }
}