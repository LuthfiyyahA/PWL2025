<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Ukm;
use Illuminate\Http\Request;

class AngggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        $ukm = Ukm::all();
        return view('anggota.create', compact('ukm'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'ukm_id' => 'required|exists:ukm,id',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota created successfully.');
    }
}
