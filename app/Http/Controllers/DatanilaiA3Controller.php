<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Nilai;
use App\Models\Kepribadian;

class DatanilaiA3Controller extends Controller
{
    public function index()
    {
        $kelas = Kelas::where('nama_kelas', 'A3')->firstOrFail();
        $datasantris = Datasantri::where('kelas_id', $kelas->id)->paginate(10);
        $matapelajaran = $kelas->matapelajarans;

        return view('datanilai.a3.index', compact('kelas', 'datasantris', 'matapelajaran'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'santri_id' => 'required|exists:datasantris,id',
            'matapelajaran_id' => 'required|array',
            'matapelajaran_id.*' => 'exists:matapelajarans,id',
            'nilai' => 'required|array',
            'nilai.*' => 'numeric|min:0|max:100',
            'kelas_id' => 'required|exists:kelas,id',
            'sikap' => 'nullable|string|max:255',
            'kerajinan' => 'nullable|string|max:255',
            'purgita' => 'nullable|string|max:255',
        ]);

        $santri_id = $request->santri_id;
        $matapelajaran_ids = $request->matapelajaran_id;
        $nilais = $request->nilai;
        $kelas_id = $request->kelas_id;

        // Ambil santri berdasarkan ID
        $santri = Datasantri::findOrFail($santri_id);

        // Loop untuk menyimpan nilai untuk setiap mata pelajaran
        foreach ($matapelajaran_ids as $index => $mapel_id) {
            Nilai::create([
                'santri_id' => $santri_id,
                'matapelajaran_id' => $mapel_id,
                'kelas_id' => $kelas_id,
                'nilai' => $nilais[$index],
            ]);
        }

        // Simpan nilai kepribadian, gunakan updateOrCreate agar bisa update jika sudah ada
         Kepribadian::updateOrCreate(
        ['santri_id' => $santri_id],
        [
            'santri_id' => $santri_id,
            'sikap' => $request->sikap,
            'kerajinan' => $request->kerajinan,
            'purgita' => $request->purgita,
        ]
    );

        return back()->with('success', 'Nilai berhasil disimpan.');
    }
    

    public function edit($santri_id)
    {
        $nilai = Nilai::where('santri_id', $santri_id)->get();
        $santri = Datasantri::findOrFail($santri_id);
        $kelas = $santri->kelas;
        $matapelajaran = $kelas->matapelajarans;

        return view('datanilai.a3.edit', compact('nilai', 'santri', 'matapelajaran'));
    }

    public function update(Request $request, $santri_id)
    {
        $nilais = $request->nilai;
        $matapelajaran_ids = $request->matapelajaran_id;

        foreach ($matapelajaran_ids as $index => $mapel_id) {
            Nilai::updateOrCreate(
                ['santri_id' => $santri_id, 'matapelajaran_id' => $mapel_id],
                ['nilai' => $nilais[$index]]
            );
        }

        // Update atau create nilai kepribadian
        Kepribadian::updateOrCreate(
        ['santri_id' => $santri_id],
        [
            'sikap' => $request->sikap,
            'kerajinan' => $request->kerajinan,
            'purgita' => $request->purgita,
        ]
    );

        return redirect()->route('datanilai.a3.index')->with('success', 'Nilai berhasil diperbarui.');
    }

    public function destroy($santri_id, $mapel_id)
    {
        $nilai = Nilai::where('santri_id', $santri_id)->where('matapelajaran_id', $mapel_id)->first();
        
        if ($nilai) {
            $nilai->delete();
            return back()->with('success', 'Nilai berhasil dihapus.');
        }

        return back()->with('error', 'Data nilai tidak ditemukan.');
    }
}
