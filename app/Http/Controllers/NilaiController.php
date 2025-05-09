<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Datasantri;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // Ambil kelas PAUD dari tabel 'kelas'
        $kelas = Kelas::where('nama_kelas', 'PAUD')->first();
    
        if (!$kelas) {
            return "Kelas PAUD tidak ditemukan.";
        }
    
        // Ambil semua santri yang kelas_id = ID PAUD
        $santris = Datasantri::where('kelas_id', $kelas->id)->get();
    
        // return view('nilai.index', compact('santris'));

        $nilai = Nilai::with('santri')->get();
        return view('nilai.index', compact('santris', 'nilai'));
    }

    public function create()
    {
        // Ambil semua data santri
        $santris = Datasantri::all();
        return view('nilai.create', compact('santris', 'matapelajaran'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'santri_id' => 'required|exists:datasantris,id',
            'mata_pelajaran' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        // Menyimpan nilai
        Nilai::create($validated);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil disimpan.');
    }

    public function edit($id)
    {
        // Ambil nilai yang ingin diubah dan data santri
        $nilai = Nilai::findOrFail($id);
        $santris = Datasantri::all();
        return view('nilai.edit', compact('nilai', 'santris'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'santri_id' => 'required|exists:datasantris,id',
            'mata_pelajaran' => 'required|string',
            'nilai' => 'required|numeric',
        ]);

        // Update nilai
        $nilai = Nilai::findOrFail($id);
        $nilai->update($validated);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus nilai
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }

}
