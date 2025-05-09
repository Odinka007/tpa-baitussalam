<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;

class NilaiA3Controller extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'A3')->first();

    if (!$kelas) return "Kelas A3 tidak ditemukan.";

    $santris = Datasantri::where('kelas_id', $kelas->id)->get();

    return view('nilai.a3', compact('santris'));
}
}
