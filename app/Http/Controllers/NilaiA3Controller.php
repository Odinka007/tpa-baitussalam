<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use Barryvdh\DomPDF\Facade\Pdf;

class NilaiA3Controller extends Controller
{
    public function index()
{
   $kelas = Kelas::where('nama_kelas', 'A3')->firstOrFail();
    
    $datasantris = Datasantri::with(['nilai.matapelajaran', 'kepribadian'])
        ->where('kelas_id', $kelas->id)
        ->get();

    $matapelajaran = Matapelajaran::where('kelas_id', $kelas->id)->get();

    return view('nilai.a3', compact('datasantris', 'matapelajaran', 'kelas'));
}

public function cetakPdf($id)
{
    $santri = Datasantri::with(['nilai.matapelajaran', 'kepribadian'])->findOrFail($id);

    $kelas = Kelas::where('nama_kelas', 'A3')->firstOrFail(); 

    $pdf = Pdf::loadView('pdf.nilaia3', compact('santri', 'kelas'))
              ->setPaper([0, 0, 595.276, 935.433], 'portrait');

    return $pdf->download('nilai_' . $kelas->nama_kelas . $santri->nama_santri . '.pdf');
}

}
