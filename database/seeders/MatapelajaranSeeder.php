<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matapelajaran;
use App\Models\Kelas;

class MatapelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat data mata pelajaran
        $mataPelajaran = [
            'PAUD' => ['Bacaan Al-Quran', 'Menulis', 'Praktek Wudhu'],
            'A1' => ['Bacaan Al-Quran', 'Praktek Sholat Wajib', 'Hafalan Surat Pendek'],
            'A2' => ['Asmaul Husna', 'Menulis', 'Hafalan Surat Pendek'],
            'A3' => ['Bacaan Al-Quran', 'Praktek Sholat Wajib', 'Materi Tambahan']
        ];

        foreach ($mataPelajaran as $kelasName => $mataPelajaranList) {
            // Ambil kelas
            $kelas = Kelas::where('nama_kelas', $kelasName)->first();

            // Ambil mata pelajaran dan hubungkan ke kelas
            foreach ($mataPelajaranList as $nama) {
                $mataPelajaran = MataPelajaran::firstOrCreate(['nama_matapelajaran' => $nama]);
                $kelas->mataPelajarans()->attach($mataPelajaran);
            }
        }
    }
}

