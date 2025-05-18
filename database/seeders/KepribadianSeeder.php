<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kepribadian;
use App\Models\Datasantri;

class KepribadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua santri
        $datasantris = Datasantri::all();

        foreach ($datasantris as $santri) {
            // Cek apakah data kepribadian sudah ada
            if (!$santri->kepribadian) {
                Kepribadian::create([
                    'santri_id' => $santri->id,
                    'sikap' => $this->randomNilai(),
                    'kerajinan' => $this->randomNilai(),
                    'purgita' => $this->randomNilai(),
                ]);
            }
        }
    }

    private function randomNilai(): string
    {
        $nilai = ['Sangat Baik', 'Baik', 'Kurang'];
        return $nilai[array_rand($nilai)];
    }
}

