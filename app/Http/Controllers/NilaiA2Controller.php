<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;

class NilaiA2Controller extends Controller
{
   public function index()
{
    $kelas = Kelas::where('nama_kelas', 'A2')->firstOrFail();
    
    $datasantris = Datasantri::with(['nilai.matapelajaran', 'kepribadian'])
        ->where('kelas_id', $kelas->id)
        ->get();

    $matapelajaran = Matapelajaran::where('kelas_id', $kelas->id)->get();

    return view('nilai.a2', compact('datasantris', 'matapelajaran', 'kelas'));
}
}
