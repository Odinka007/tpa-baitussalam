<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;
use App\Models\Datasantri;
use App\Models\Matapelajaran;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua santri
        $santris = Datasantri::all();

        // Ambil semua mata pelajaran
        $mataPelajarans = Matapelajaran::all();

        foreach ($santris as $santri) {
            foreach ($mataPelajarans as $mataPelajaran) {
                Nilai::create([
                    'santri_id' => $santri->id,
                    'matapelajaran_id' => $mataPelajaran->id,
                    'nilai' => ['A', 'B+', 'B', 'C'][array_rand(['A', 'B+', 'B', 'C'])], // Nilai acak
                ]);
            }
        }
    }
}
