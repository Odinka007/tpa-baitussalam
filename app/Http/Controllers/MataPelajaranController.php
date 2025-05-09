<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
{
    $kelas = \App\Models\Kelas::all();
    return view('matapelajaran.index', compact('kelas'));
}

    
    public function paud()
    {
        $kelas = Kelas::where('nama_kelas', 'PAUD')->with('mataPelajarans')->firstOrFail();
        return view('matapelajaran.perkelas', compact('kelas'));
    }

    public function a1()
    {
        $kelas = Kelas::where('nama_kelas', 'A1')->with('mataPelajarans')->firstOrFail();
        return view('matapelajaran.perkelas', compact('kelas'));
    }

    public function a2()
    {
        $kelas = Kelas::where('nama_kelas', 'A2')->with('mataPelajarans')->firstOrFail();
        return view('matapelajaran.perkelas', compact('kelas'));
    }

    public function a3()
    {
        $kelas = Kelas::where('nama_kelas', 'A3')->with('mataPelajarans')->firstOrFail();
        return view('matapelajaran.perkelas', compact('kelas'));
    }
    
}
