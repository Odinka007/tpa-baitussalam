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
        // Buat data mata pelajaran untuk masing-masing kelas dengan nama yang berbeda
        $mataPelajaran = [
            'PAUD' => [
                'Bacaan Iqro Jilid 1', 
                'Menulis', 
                'Praktek Wudhu', 
                'Praktek Sholat Wajib', 
                'Asmaul Husna 1-10', 
                'Hafalan Surat Pendek', 
                'Doa-Doa', 
                'Materi Tambahan'
            ],
            'A1' => [
                'Bacaan Iqro Jilid 2', 
                'Menulis',  
                'Praktek Wudhu', 
                'Praktek Sholat Wajib', 
                'Asmaul Husna 1-20', 
                'Hafalan Surat Pendek', 
                'Doa-Doa', 
                'Materi Tambahan'
            ],
            'A2' => [
                'Bacaan Iqro Jilid 3', 
                'Menulis Pegon', 
                'Praktek Wudhu', 
                'Praktek Sholat Wajib', 
                'Asmaul Husna 1-30', 
                'Hafalan Surat Pendek', 
                'Doa-Doa', 
                'Materi Tambahan'
            ],
            'A3' => [
                'Bacaan Iqro Jilid 4', 
                'Menulis Pegon', 
                'Praktek Wudhu', 
                'Praktek Sholat Wajib', 
                'Asmaul Husna 1-30', 
                'Hafalan Surat Pendek', 
                'Doa-Doa', 
                'Materi Tambahan'
            ]
        ];

        foreach ($mataPelajaran as $kelasName => $mataPelajaranList) {
            // Ambil kelas berdasarkan nama kelas
            $kelas = Kelas::where('nama_kelas', $kelasName)->first();

            // Pastikan kelas ditemukan sebelum melanjutkan
            if ($kelas) {
                // Ambil mata pelajaran dan hubungkan ke kelas
                foreach ($mataPelajaranList as $nama) {
                    // Cek apakah mata pelajaran sudah ada, jika tidak buat baru
                    $mataPelajaran = MataPelajaran::firstOrCreate(['nama_matapelajaran' => $nama,
                    'kelas_id' => $kelas->id,]);
                }
            }
        }
    }
}
