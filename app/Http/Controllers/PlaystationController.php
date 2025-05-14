<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;

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

         Playstation::create([
            'jenis' => $request->input('jenis'),
            'harga_sewa' => $request->input('harga_sewa'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('playstation.index');
    }

    public function show($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.show', compact('playstation'));
    }

    public function edit($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.edit', compact('playstation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'status' => 'required|in:tersedia,disewakan',
        ]);

        $playstation = Playstation::findOrFail($id);
        $playstation->update([
            'jenis' => $request->input('jenis'),
            'harga_sewa' => $request->input('harga_sewa'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('playstation.show', $id);
    }

    public function delete($id)
    {
        $playstation = Playstation::findOrFail($id);
        return view('playstation.delete', compact('playstation'));
    }

    public function destroy($id)
    {
        $playstation = Playstation::findOrFail($id);
        $playstation->delete();

        return redirect()->route('playstation.index');
    }
}
