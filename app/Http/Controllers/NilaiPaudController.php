<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;

class NilaiPaudController extends Controller
{
    public function index()
{
    // Ambil santri dari kelas PAUD beserta nilai dan mata pelajaran
    $kelas = Kelas::where('nama_kelas', 'PAUD')->firstOrFail();
    $datasantris = Datasantri::with(['nilai.mataPelajaran'])->where('kelas_id', $kelas->id)->get();
    $matapelajaran = Matapelajaran::where('kelas_id', $kelas->id)->get();   

    return view('nilai.paud', compact('datasantris', 'matapelajaran'));
}
}
