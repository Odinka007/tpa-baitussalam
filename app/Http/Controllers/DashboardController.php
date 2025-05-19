<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Datasantri;
use App\Models\Datapengajar;
use App\Models\Kelas;
use App\Models\Matapelajaran;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahSantri = Datasantri::count();
        $jumlahPengajar = Datapengajar::count();
        $jumlahKelas = Kelas::count();

        return view('pages.dashboard', compact('jumlahSantri', 'jumlahPengajar', 'jumlahKelas'));
    }
}
