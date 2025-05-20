<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;

class NilaiA1Controller extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'A1')->firstOrFail();
    
    $datasantris = Datasantri::with(['nilai.matapelajaran', 'kepribadian'])
        ->where('kelas_id', $kelas->id)
        ->get();

    $matapelajaran = Matapelajaran::where('kelas_id', $kelas->id)->get();

    return view('nilai.a1', compact('datasantris', 'matapelajaran', 'kelas'));
}

}
