<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatapengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datapengajar')->insert([
            [
                'nama_pengajar' => 'Ahmad Fauzi',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1985-07-12',
                'pendidikan_umum' => 'S1 Pendidikan',
                'pendidikan_diniyah' => 'Pesantren Gontor',
                'penataran' => 'Metode Iqro',
                'alamat' => 'Jl. Merdeka No. 10, Surabaya',
                'pekerjaan' => 'Guru',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pengajar' => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Yogyakarta',
                'tanggal_lahir' => '1990-03-25',
                'pendidikan_umum' => 'SMA',
                'pendidikan_diniyah' => 'Madrasah Aliyah',
                'penataran' => 'Metode Tilawati',
                'alamat' => 'Jl. Malioboro No. 5, Yogyakarta',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
