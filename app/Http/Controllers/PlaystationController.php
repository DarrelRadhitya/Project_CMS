<?php

namespace App\Http\Controllers;

use App\Models\Playstation;

class PlaystationController extends Controller
{
    public function index()
    {
        return view('Playstation.index', ['Playstation' => Playstation::all()]);
    }

    public function show($id)
    {
        return view('Playstation.show', ['Playstation' => Playstation::find($id)]);
    }

    public function create()
    {
        return view('Playstation.create');
    }

    public function edit($id)
    {
        return view('Playstation.edit', ['Playstation' => Playstation::find($id)]);
    }

    public function delete($id)
    {
        return view('Playstation.delete', ['Playstation' => Playstation::find($id)]);
    }
}