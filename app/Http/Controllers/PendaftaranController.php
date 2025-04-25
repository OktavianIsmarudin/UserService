<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Pendaftaran::with(['siswa', 'jurusan'])->get();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'jurusan_id' => 'required|exists:jurusans,id',
            'tanggal_daftar' => 'required|date',
        ]);

        $pendaftaran = Pendaftaran::create($validated);
        return response()->json($pendaftaran->load(['siswa', 'jurusan']), 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id) {
        return Pendaftaran::with(['siswa', 'jurusan'])->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
