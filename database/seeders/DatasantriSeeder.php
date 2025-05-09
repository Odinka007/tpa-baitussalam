<?php

namespace Database\Seeders;

use App\Models\Datasantri;
use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatasantriSeeder extends Seeder
{

    public function run()
    {
        // Buat data kelas jika belum ada
        $kelas = [
            'PAUD',
            'A1',
            'A2',
            'A3',
        ];

        foreach ($kelas as $nama_kelas) {
            \App\Models\Kelas::firstOrCreate(['nama_kelas' => $nama_kelas]);
        }

        // Ambil semua kelas
        $allKelas = Kelas::all();

        // Buat data dummy santri
        $namaSantri = ['Ahmad', 'Budi', 'Citra', 'Dewi', 'Eka', 'Fauzi', 'Gina', 'Hana', 'Iqbal', 'Joko', 'Kiki', 'Lina', 'Maya', 'Nina', 'Omar', 'Putra', 'Qori', 'Rani', 'Siti', 'Tika', 'Umar', 'Vina', 'Wira', 'Xena', 'Yuni', 'Zaki'];
        $namaOrangTua = ['Abdullah', 'Samsudin', 'Darma', 'Surya', 'Rina', 'Yati', 'Hendrik', 'Nuraini'];

        for ($i = 1; $i <= 50; $i++) {
            Datasantri::create([
                'nama_santri' => $namaSantri[array_rand($namaSantri)] . ' ' . $i,  // Membuat nama lebih unik
                'jenis_kelamin' => rand(0, 1) ? 'Laki-Laki' : 'Perempuan',
                'tempat_lahir' => 'Kota ' . chr(rand(65, 90)),
                'tanggal_lahir' => now()->subYears(rand(5, 10))->subDays(rand(1, 365)),
                'nama_orang_tua' => $namaOrangTua[array_rand($namaOrangTua)],
                'kelas_id' => $allKelas->random()->id,
                'alamat' => 'Jl. Contoh No. ' . rand(1, 100),
                'bakat_prestasi' => rand(0, 1) ? 'Mengaji Cepat' : null,
            ]);
        }
    }
}
