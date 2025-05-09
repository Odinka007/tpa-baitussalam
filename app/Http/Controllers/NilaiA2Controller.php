<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;

class NilaiA2Controller extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'A2')->first();

    if (!$kelas) return "Kelas A2 tidak ditemukan.";

    $santris = Datasantri::where('kelas_id', $kelas->id)->get();

    return view('nilai.a2', compact('santris'));
}
}
