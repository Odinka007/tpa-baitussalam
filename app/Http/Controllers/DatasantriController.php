<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasantri;
use App\Models\Kelas;

class DatasantriController extends Controller
{
    public function index()
{
    $datasantris = Datasantri::with('kelas')->get(); // relasi ke tabel kelas
    return view('datasantri.index', compact('datasantris'));
}

public function create()
{
    $kelas = Kelas::all();  // Mengambil data kelas
    return view('datasantri.create', compact('kelas'));  // Menampilkan form dengan data kelas
}

public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'nama_santri' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);
        Datasantri::create($validated);
        return redirect()->route('datasantri.index');
}

public function edit($id)
    {
        $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
        $kelas = Kelas::all();  // Mengambil data kelas
        return view('datasantri.edit', compact('santri', 'kelas'));  // Menampilkan form edit
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'nama_santri' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'alamat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);

        $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
        $santri->update($validated);  // Update data santri

        // Redirect ke halaman daftar santri
        return redirect()->route('datasantri.index');
    }

     // Menghapus data santri
     public function destroy($id)
     {
         $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
         $santri->delete();  // Menghapus data santri
 
         // Redirect ke halaman daftar santri
         return redirect()->route('datasantri.index');
     }


}
