<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matapelajaran;
use App\Models\Kelas;

class MataPelajaranA2Controller extends Controller
{
    public function index()
    {
        $kelas = Kelas::where('nama_kelas', 'A2')->with('mataPelajarans')->firstOrFail();
        $matapelajarans = $kelas->mataPelajarans;

        return view('matapelajaran.a2.index', compact('matapelajarans'));
    }

    public function create()
    {
        return view('matapelajaran.a2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matapelajaran' => 'required|string|max:255',
        ]);

        $kelas = Kelas::where('nama_kelas', 'A2')->firstOrFail();

        Matapelajaran::create([
            'kelas_id' => $kelas->id,
            'nama_matapelajaran' => $request->nama_matapelajaran,
        ]);

        return redirect()->route('matapelajaran.a2.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mapel = Matapelajaran::with('kelas')->findOrFail($id);

        // Pastikan hanya mapel dari kelas PAUD yang bisa diedit di sini
        if ($mapel->kelas->nama_kelas !== 'A2') {
            abort(404);
        }

        return view('matapelajaran.a2.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matapelajaran' => 'required|string|max:255',
        ]);

        $mapel = Matapelajaran::with('kelas')->findOrFail($id);

        if ($mapel->kelas->nama_kelas !== 'A2') {
            abort(404);
        }

        $mapel->update([
            'nama_matapelajaran' => $request->nama_matapelajaran,
        ]);

        return redirect()->route('matapelajaran.a2.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mapel = Matapelajaran::with('kelas')->findOrFail($id);

        if ($mapel->kelas->nama_kelas !== 'A2') {
            abort(404);
        }

        $mapel->delete();

        return redirect()->route('matapelajaran.a2.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
