<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Datasantri;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;


class DatasantriController extends Controller
{
    public function index(Request $request)
{
    // dd(Auth::user());
    $query = Datasantri::with('kelas');

    if ($request->has('search') && $request->search != '') {
        $query->where('nama_santri', 'like', '%' . $request->search . '%');
    }

    $datasantris = $query->orderBy('nama_santri')->paginate(10);
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
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'nama_orang_tua' => 'required|string|max:255',
        'kelas_id' => 'required|exists:kelas,id',
        'alamat' => 'nullable|string',
        'bakat_prestasi' => 'nullable|string',
    ]);

    // Prefix NIS
    $prefix = 'NIS';

    // Cari nomor induk terakhir
    $lastSantri = \App\Models\Datasantri::where('nomor_induk_santri', 'like', $prefix . '%')
        ->orderBy('nomor_induk_santri', 'desc')
        ->first();

    if ($lastSantri) {
        $lastNumber = (int) substr($lastSantri->nomor_induk_santri, strlen($prefix)); // Ambil angka setelah "NIS"
        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
    } else {
        $newNumber = '001';
    }

    // Tambahkan ke data yang akan disimpan
    $validated['nomor_induk_santri'] = $prefix . $newNumber;

    // Simpan data
    \App\Models\Datasantri::create($validated);

    return redirect()->route('datasantri.index')->with('success', 'Data santri berhasil disimpan.');
}



public function edit($id)
    {
        $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
        $kelas = Kelas::all();  // Mengambil data kelas
        $santri->tanggal_lahir = \Carbon\Carbon::parse($santri->tanggal_lahir);
        return view('datasantri.edit', compact('santri', 'kelas'));  // Menampilkan form edit
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'nama_santri' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'nama_orang_tua' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
            'alamat' => 'nullable|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'bakat_prestasi' => 'nullable|string',
        ]);

        $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
        $santri->update($validated);  // Update data santri

        // Redirect ke halaman daftar santri
        return redirect()->route('datasantri.index')->with('success', 'Data santri berhasil Diperbarui.');
    }

     // Menghapus data santri
     public function destroy($id)
     {
         $santri = Datasantri::findOrFail($id);  // Mencari santri berdasarkan id
         $santri->delete();  // Menghapus data santri
 
         // Redirect ke halaman daftar santri
         return redirect()->route('datasantri.index')->with('success', 'Berhasil menghapus data');
     }


}
