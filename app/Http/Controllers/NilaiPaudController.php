<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use Barryvdh\DomPDF\Facade\Pdf;



class NilaiPaudController extends Controller
{
    public function index()
{
    $kelas = Kelas::where('nama_kelas', 'PAUD')->firstOrFail();

    $datasantris = Datasantri::with(['nilai.matapelajaran', 'kepribadian'])
        ->where('kelas_id', $kelas->id)
        ->get();

    $matapelajaran = Matapelajaran::where('kelas_id', $kelas->id)->get();

    return view('nilai.paud', compact('datasantris', 'matapelajaran', 'kelas'));
}
 
}
