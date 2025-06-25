<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapengajar extends Model
{
    use HasFactory;

    // Tambahkan ini:
    protected $table = 'datapengajar';

    protected $fillable = [
    'nomor_induk_pengajar',
    'nama_pengajar',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'pendidikan_umum',
    'pendidikan_diniyah',
    'penataran',
    'alamat',
    'pekerjaan',
];

}
