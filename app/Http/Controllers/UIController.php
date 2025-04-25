<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class UIController extends Controller
{
    public function index() {
        return view('home');
    }

    public function siswas() {
        $siswas = Siswa::all();
        return view('siswas', compact('siswas'));
    }

    public function storeSiswa(Request $request) {
        Siswa::create($request->all());
        return redirect('/siswas');
    }

    public function jurusans() {
        $jurusans = Jurusan::all();
        return view('jurusans', compact('jurusans'));
    }

    public function storeJurusan(Request $request) {
        Jurusan::create($request->all());
        return redirect('/jurusans');
    }

    public function pendaftarans() {
        $pendaftarans = Pendaftaran::with(['siswa', 'jurusan'])->get();
        $siswas = Siswa::all();
        $jurusans = Jurusan::all();
        return view('pendaftarans', compact('pendaftarans', 'siswas', 'jurusans'));
    }

    public function storePendaftaran(Request $request) {
        Pendaftaran::create($request->all());
        return redirect('/pendaftarans');
    }
}

