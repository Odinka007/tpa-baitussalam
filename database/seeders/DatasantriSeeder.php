<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Datasantri;
use Illuminate\Support\Str;

class DatasantriSeeder extends Seeder
{
    public function run(): void
    {
        $jumlah = 10;

        for ($i = 1; $i <= $jumlah; $i++) {
            // Generate nomor induk santri
            $lastSantri = Datasantri::orderBy('nomor_induk_santri', 'desc')->first();
            if ($lastSantri) {
                $lastNumber = (int) substr($lastSantri->nomor_induk_santri, 3);
                $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newNumber = '001';
            }
            $nis = 'NIS' . $newNumber;

            Datasantri::create([
                'nomor_induk_santri' => $nis,
                'nama_santri' => 'Kiki ' . $i,
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Kota A',
                'tanggal_lahir' => now()->subYears(8)->addDays($i),
                'nama_orang_tua' => 'Surya',
                'kelas_id' => 2,
                'alamat' => 'Jl. Contoh No. ' . $i,
                'bakat_prestasi' => 'Mengaji Cepat',
            ]);
        }
    }
}
