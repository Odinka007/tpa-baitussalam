<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapengajar;

class DataPengajarController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $pengajar = Datapengajar::when($search, function($query, $search) {
            return $query->where('nama_pengajar', 'like', "%{$search}%");
        })->paginate(10);

        return view('datapengajar.index', compact('pengajar'));
    }

    public function create()
{
    return view('datapengajar.create');
}

public function store(Request $request)
{
    // Simpan hasil validasi ke dalam $validated
    $validated = $request->validate([
        'nama_pengajar'      => 'required|string|max:255',
        'jenis_kelamin'      => 'required|in:Laki-Laki,Perempuan',
        'tempat_lahir'       => 'nullable|string|max:255',
        'tanggal_lahir'      => 'nullable|date',
        'pendidikan_umum'    => 'required|string|max:255',
        'pendidikan_diniyah' => 'required|string|max:255',
        'penataran'          => 'nullable|string|max:255',
        'alamat'             => 'nullable|string',
        'pekerjaan'          => 'required|string|max:255',
    ]);

    // Prefix NIP
    $prefix = 'NIP';

    // Cari nomor induk terakhir
    $lastPengajar = \App\Models\Datapengajar::where('nomor_induk_pengajar', 'like', $prefix . '%')
        ->orderBy('nomor_induk_pengajar', 'desc')
        ->first();

    if ($lastPengajar) {
        $lastNumber = (int) substr($lastPengajar->nomor_induk_pengajar, strlen($prefix));
        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
    } else {
        $newNumber = '001';
    }

    // Tambahkan nomor induk ke data
    $validated['nomor_induk_pengajar'] = $prefix . $newNumber;

    // Simpan data
    \App\Models\Datapengajar::create($validated);

    return redirect()->route('datapengajar.index')->with('success', 'Data pengajar berhasil disimpan.');
}


public function edit($id)
    {
        $pengajar = Datapengajar::findOrFail($id);
        return view('datapengajar.edit', compact('pengajar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengajar' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'nullable|string|max:100',
            'tanggal_lahir' => 'nullable|date',
            'pendidikan_umum' => 'required|string|max:100',
            'pendidikan_diniyah' => 'required|string|max:100',
            'penataran' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'pekerjaan' => 'required|string|max:100',
        ]);

        $pengajar = Datapengajar::findOrFail($id);
        $pengajar->update($request->all());

        return redirect()->route('datapengajar.index')->with('success', 'Data pengajar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengajar = Datapengajar::findOrFail($id);
        $pengajar->delete();

        return redirect()->route('datapengajar.index')->with('success', 'Data pengajar berhasil dihapus.');
    }
}
