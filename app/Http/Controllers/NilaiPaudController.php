<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;

class NilaiPaudController extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'PAUD')->first();

    if (!$kelas) {
        return "Kelas PAUD tidak ditemukan.";
    }

    $santris = Datasantri::where('kelas_id', $kelas->id)->get();

    return view('nilai.paud', compact('santris'));

    $santris = Datasantri::where('kelas_id', 1)->with('nilai')->get(); // Kelas PAUD
    return view('nilai.paud', compact('santris'));
}
}
