<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Nilai;

class DatanilaiController extends Controller
{

    public function index()
    {
        $kelas = Kelas::all();
        return view('datanilai.index', compact('kelas'));
    }

}

    // public function paud()
    // {
    //     $kelas = Kelas::where('nama_kelas', 'PAUD')->with('matapelajarans')->firstOrFail();
    //     $datasantris = Datasantri::where('kelas_id', $kelas->id)->get();
    //     return view('datanilai.perkelas', compact('kelas', 'datasantris'));
    // }

    // public function a1()
    // {
    //     $kelas = Kelas::where('nama_kelas', 'A1')->with('matapelajarans')->firstOrFail();
    //     $datasantris = Datasantri::where('kelas_id', $kelas->id)->get();
    //     return view('datanilai.perkelas', compact('kelas', 'datasantris'));
    // }

    // public function a2()
    // {
    //     $kelas = Kelas::where('nama_kelas', 'A2')->with('matapelajarans')->firstOrFail();
    //     $datasantris = Datasantri::where('kelas_id', $kelas->id)->get();
    //     return view('datanilai.perkelas', compact('kelas', 'datasantris'));
    // }

    // public function a3()
    // {
    //     $kelas = Kelas::where('nama_kelas', 'A3')->with('matapelajarans')->firstOrFail();
    //     $datasantris = Datasantri::where('kelas_id', $kelas->id)->get();
    //     return view('datanilai.perkelas', compact('kelas', 'datasantris'));
    // }

    // public function store(Request $request)
    // {
    //     $santri_id = $request->santri_id;
    //     $matapelajaran_ids = $request->matapelajaran_id;
    //     $nilais = $request->nilai;

    //     foreach ($matapelajaran_ids as $index => $mapel_id) {
    //         Nilai::create([
    //             'santri_id' => $santri_id,
    //             'matapelajaran_id' => $mapel_id,
    //             'nilai' => $nilais[$index],
    //         ]);
    //     }

    //     return back()->with('success', 'Nilai berhasil disimpan.');
    // }




//     public function index()
// {
//     $kelas = Kelas::all();
//     return view('datanilai.index', compact('kelas'));
// }
// public function showNilaiByKelas($kelasId)
// {

//     $kelas = Kelas::with('matapelajarans')->findOrFail($kelasId);
//     $datasantris = Datasantri::where('kelas_id', $kelasId)->get();
//     $matapelajaran = $kelas->matapelajarans;
//     // $nilais = Nilai::whereIn('santri_id', $datasantris->pluck('id'))->get();

//     return view('datanilai.show_by_kelas', compact('kelas', 'datasantris', 'matapelajaran'));
//     // return view('datanilai.show', compact('kelas', 'datasantris', 'nilais'));
// }

// public function store(Request $request)
// {
//     $santri_id = $request->santri_id;
//     $matapelajaran_ids = $request->matapelajaran_id;
//     $nilais = $request->nilai;

//     foreach ($matapelajaran_ids as $index => $mapel_id) {
//         Nilai::create([
//             'santri_id' => $santri_id,
//             'matapelajaran_id' => $mapel_id,
//             'nilai' => $nilais[$index],
//         ]);
//     }

//     return back()->with('success', 'Nilai berhasil disimpan.');
// }



