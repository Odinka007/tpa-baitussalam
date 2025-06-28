<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class DatanilaiController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $kelas = Kelas::all();
        } else {
            $kelas = Kelas::where('id', $user->kelas_id)->get();
        }

        return view('datanilai.index', compact('kelas'));
    }

}

    