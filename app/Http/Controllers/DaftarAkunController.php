<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarAkunController extends Controller
{
    public function index()
{
    $users = \App\Models\User::with('kelas')->get(); 
    return view('akun.index', compact('users'));
}


    public function create()
    {
        $kelas = Kelas::all(); // Ambil semua data kelas
        return view('akun.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string|min:6|confirmed',
            'kelas_id'  => 'required|exists:kelas,id',
        ]);

        // Simpan data ke tabel users
        User::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'password'  => Hash::make($validated['password']),
            'role'      => 'pengajar', // Role default
            'kelas_id'  => $validated['kelas_id']
        ]);

        // Redirect kembali ke form dengan pesan sukses
        return redirect()->route('akun.index')->with('success', 'Akun pengajar berhasil ditambahkan.');
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    $kelas = Kelas::all();
    return view('akun.edit', compact('user', 'kelas'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email,' . $id,
        'kelas_id' => 'nullable|exists:kelas,id',
        'password' => 'nullable|string|min:6|confirmed',
    ]);

    $user = User::findOrFail($id);
    $data = [
        'name'     => $request->name,
        'email'    => $request->email,
        'kelas_id' => $request->kelas_id,
    ];

    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    $user->update($data);

    return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui.');
}


public function destroy($id)
{
    $user = User::findOrFail($id);

    // Hindari menghapus admin utama (opsional)
    if ($user->role === 'admin') {
        return redirect()->route('akun.index')->with('error', 'Akun admin tidak boleh dihapus.');
    }

    $user->delete();

    return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus.');
}

}
