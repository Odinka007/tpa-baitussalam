<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;

class NilaiA1Controller extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'A1')->first();

    if (!$kelas) {
        return "Kelas A1 tidak ditemukan.";
    }

    $santris = Datasantri::where('kelas_id', $kelas->id)->get();

    return view('nilai.a1', compact('santris'));
}
}
