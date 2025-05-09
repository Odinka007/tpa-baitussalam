<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kelasData = ['PAUD', 'A1', 'A2', 'A3'];

        // Periksa dan tambahkan kelas hanya jika belum ada
        foreach ($kelasData as $namaKelas) {
            Kelas::firstOrCreate([
                'nama_kelas' => $namaKelas,
            ]);
        }
    }
}
